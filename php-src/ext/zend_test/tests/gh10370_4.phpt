--TEST--
GH-10370: File corruption in _php_stream_copy_to_stream_ex when using copy_file_range - unlimited copy using stream_copy_to_stream
--EXTENSIONS--
zend_test
--SKIPIF--
<?php
if (PHP_OS != 'Linux') {
    die('skip For Linux only');
}
?>
--INI--
zend_test.limit_copy_file_range=4096
--FILE--
<?php
/* Note: the value 4096 is chosen so that the mmap in _php_stream_copy_to_stream_ex() will mmap
 *       at an offset of a multiple of 4096, which is the standard page size in most Linux systems. */

$input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
$output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_004_out.tar', 'w');

var_dump(stream_copy_to_stream($input, $output));

fclose($input);
fclose($output);

var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar'));
var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_004_out.tar'));
?>
--EXPECT--
int(11776)
string(40) "edcad8cd6c276f5e318c826ad77a5604d6a6e93d"
string(40) "edcad8cd6c276f5e318c826ad77a5604d6a6e93d"
--CLEAN--
<?php
@unlink(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_004_out.tar');
?>
