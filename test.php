<?php

class AnExampleClass
{
    public $an_example_property = 'example';
}

$the_instance = new AnExampleClass();

$the_array = array('the_property_name'=>'an_example_property');

$expected = $the_instance->an_example_property;
$actual   = $the_instance->$the_array['the_property_name'];

echo "Expected:  " . escapeshellarg($expected) . "\n";
echo "Actual:    " . escapeshellarg($actual)   . "\n";

ini_set('assert.exception', true);
assert($actual == $expected);
