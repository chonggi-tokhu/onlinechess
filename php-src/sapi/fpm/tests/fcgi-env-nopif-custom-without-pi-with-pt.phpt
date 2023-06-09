--TEST--
FPM: FastCGI env var no path info fix for custom setup without PATH_INFO and with PATH_TRANSLATED
--SKIPIF--
<?php include "skipif.inc"; ?>
--FILE--
<?php

require_once "tester.inc";

$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = dynamic
pm.max_children = 5
pm.start_servers = 1
pm.min_spare_servers = 1
pm.max_spare_servers = 3
php_admin_value[cgi.fix_pathinfo] = no
php_admin_value[cgi.discard_path] = no
EOT;

$code = <<<EOT
<?php
echo \$_SERVER["SCRIPT_NAME"] . "\n";
echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
echo \$_SERVER["PHP_SELF"];
EOT;

$tester = new FPM\Tester($cfg, $code);
[$sourceFilePath, $scriptName] = $tester->createSourceFileAndScriptName();
$tester->start();
$tester->expectLogStartNotices();
$tester
    ->request(
        headers: [
            'PATH_TRANSLATED' => $sourceFilePath,
        ],
        uri: $scriptName . '/pinfo',
        scriptFilename: $sourceFilePath . '/pinfo', // should be ignored as PATH_TRANSLATED is used
        scriptName: $scriptName,
    )
    ->expectBody([$scriptName, $sourceFilePath . '/pinfo', $scriptName]);
$tester->terminate();
$tester->close();

?>
Done
--EXPECT--
Done
--CLEAN--
<?php
require_once "tester.inc";
FPM\Tester::clean();
?>
