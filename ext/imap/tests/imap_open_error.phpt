--TEST--
imap_open() ValueErrors
--CREDITS--
Paul Sohier
#phptestfest utrecht
--EXTENSIONS--
imap
--SKIPIF--
<?php
require_once(__DIR__.'/setup/skipif.inc');
if (getenv("SKIP_ASAN")) die("xleak leak sanitizer crashes");
?>
--FILE--
<?php

echo "Checking with incorrect parameters\n" ;
imap_open('', '', '');

try {
    imap_open('', '', '', -1);
} catch (\ValueError $e) {
    echo $e->getMessage() . \PHP_EOL;
}

try {
    imap_open('', '', '', 0, -1);
} catch (\ValueError $e) {
    echo $e->getMessage() . \PHP_EOL;
}

?>
--EXPECTF--
Checking with incorrect parameters

Warning: imap_open(): Couldn't open stream  in %s on line %d
imap_open(): Argument #4 ($flags) must be a bitmask of the OP_* constants, and CL_EXPUNGE
imap_open(): Argument #5 ($retries) must be greater than or equal to 0

Notice: PHP Request Shutdown: Can't open mailbox : no such mailbox (errflg=2) in Unknown on line 0
