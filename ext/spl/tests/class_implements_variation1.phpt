--TEST--
SPL: Test class_implements() function : variation
--FILE--
<?php
echo "*** Testing class_implements() : variation ***\n";


// Define error handler
function test_error_handler($err_no, $err_msg, $filename, $linenum) {
    if (error_reporting() & $err_no) {
        // report non-silenced errors
        echo "Error: $err_no - $err_msg, $filename($linenum)\n";
    }
}
set_error_handler('test_error_handler');

// Initialise function arguments not being substituted (if any)
$autoload = true;

//resource
$res = fopen(__FILE__,'r');

//get an unset variable
$unset_var = 10;
unset ($unset_var);

// define some classes
class classWithToString
{
    public function __toString() {
        return "Class A object";
    }
}

class classWithoutToString
{
}

// heredoc string
$heredoc = <<<EOT
hello world
EOT;

// add arrays
$index_array = array (1, 2, 3);
$assoc_array = array ('one' => 1, 'two' => 2);

//array of values to iterate over
$inputs = array(

      // int data
      'int 0' => 0,
      'int 1' => 1,
      'int 12345' => 12345,
      'int -12345' => -2345,

      // float data
      'float 10.5' => 10.5,
      'float -10.5' => -10.5,
      'float 12.3456789000e10' => 12.3456789000e10,
      'float -12.3456789000e10' => -12.3456789000e10,
      'float .5' => .5,

      // array data
      'empty array' => array(),
      'int indexed array' => $index_array,
      'associative array' => $assoc_array,
      'nested arrays' => array('foo', $index_array, $assoc_array),

      // null data
      'uppercase NULL' => NULL,
      'lowercase null' => null,

      // boolean data
      'lowercase true' => true,
      'lowercase false' =>false,
      'uppercase TRUE' =>TRUE,
      'uppercase FALSE' =>FALSE,

      // empty data
      'empty string DQ' => "",
      'empty string SQ' => '',

      // object data
      'instance of classWithToString' => new classWithToString(),
      'instance of classWithoutToString' => new classWithoutToString(),

      // undefined data
      'undefined var' => @$undefined_var,

      // unset data
      'unset var' => @$unset_var,

      //resource
      'resource' => $res,
);

// loop through each element of the array for pattern

foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      try {
        var_dump( class_implements($value, $autoload) );
      } catch (\TypeError $e) {
          echo $e->getMessage() . \PHP_EOL;
      }
};

fclose($res);

?>
--EXPECTF--
*** Testing class_implements() : variation ***

--int 0--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, int given

--int 1--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, int given

--int 12345--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, int given

--int -12345--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, int given

--float 10.5--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, float given

--float -10.5--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, float given

--float 12.3456789000e10--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, float given

--float -12.3456789000e10--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, float given

--float .5--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, float given

--empty array--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, array given

--int indexed array--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, array given

--associative array--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, array given

--nested arrays--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, array given

--uppercase NULL--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, null given

--lowercase null--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, null given

--lowercase true--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, true given

--lowercase false--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, false given

--uppercase TRUE--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, true given

--uppercase FALSE--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, false given

--empty string DQ--
Error: 2 - class_implements(): Class  does not exist and could not be loaded, %s(%d)
bool(false)

--empty string SQ--
Error: 2 - class_implements(): Class  does not exist and could not be loaded, %s(%d)
bool(false)

--instance of classWithToString--
array(1) {
  ["Stringable"]=>
  string(10) "Stringable"
}

--instance of classWithoutToString--
array(0) {
}

--undefined var--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, null given

--unset var--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, null given

--resource--
class_implements(): Argument #1 ($object_or_class) must be of type object|string, resource given
