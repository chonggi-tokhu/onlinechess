--TEST--
Bug #40236 (php -a function allocation eats memory)
--SKIPIF--
<?php
if (extension_loaded("readline")) die("skip Test doesn't support readline");
?>
--FILE--
<?php
$php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
$cmd = "$php -n -d memory_limit=4M -a \"".__DIR__."\"/bug40236.inc";
echo `$cmd`;
?>
--EXPECT--
Interactive shell (-a) requires the readline extension.
