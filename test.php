<?php

class AnExampleClass
{
    public $an_example_property = 'example';
}

$the_instance = new AnExampleClass();

$the_array = array('the_property_name'=>'an_example_property');

echo "Expected:  " . ($the_instance->an_example_property) . "\n";
echo "Actual:    " . ($the_instance->$the_array['the_property_name']) . "\n";
