--TEST--
Bug #48476 (cloning extended DateTime class without calling parent::__constr crashed PHP)
--FILE--
<?php
class MyDateTime extends DateTime {
    public function __construct() { }
}
class MyDateTimeZone extends DateTimeZone {
    public function __construct() { }
}

$o = new MyDateTime;
try {
    var_dump($o->format("d"));
} catch (Error $e) {
    echo $e::class, ': ', $e->getMessage(), "\n";
}
$x = clone $o;

try {
    var_dump($x->format("d"));
} catch (Error $e) {
    echo $e::class, ': ', $e->getMessage(), "\n";
}

clone $o;

try {
    var_dump(timezone_location_get(clone new MyDateTimezone));
} catch (Error $e) {
    echo $e::class, ': ', $e->getMessage(), "\n";
}
?>
--EXPECT--
DateObjectError: Object of type MyDateTime (inheriting DateTime) has not been correctly initialized by calling parent::__construct() in its constructor
DateObjectError: Object of type MyDateTime (inheriting DateTime) has not been correctly initialized by calling parent::__construct() in its constructor
DateObjectError: Object of type MyDateTimeZone (inheriting DateTimeZone) has not been correctly initialized by calling parent::__construct() in its constructor
