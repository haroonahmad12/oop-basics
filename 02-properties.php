<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 02 - Properties */

// classes have properties that contain information about that object defined by the class
class Laptop
{   // properties
    public $brand;
    public $cpu;
    public $ram;
    public $storage;
}

$newLaptop = new Laptop();

// in OOP and PHP we use the arrow operator ( -> ) for accessing properties
// we can assign those public properties in our class with this syntax

$newLaptop->brand = "Apple";
$newLaptop->cpu = "M1 Max";
$newLaptop->ram = "16gb";
$newLaptop->storage = "1tb";

echo "<br>";

// we can also access properties value by the arrow operator
echo $newLaptop->cpu;

// what happens if we assign a non existing value or a wrong value?
$newLaptop->ramMemory = 1;
$newLaptop->internMemory = 8;

echo "<pre>";
var_dump($newLaptop);
echo "</pre>";

// it adds these new properties to the object. 
echo "<br>";

//-----------------------------------------------------
// arrow operator is unique in objects and must not be
// confused with double arrow operator used in arrays
//-----------------------------------------------------

// this is an example using an array and double arrow operators
$mobileArray = [
    'name' => 'Xiaomi Mi10',
    'chipset' => 'Snapdragon',
    'internalMemory' => 64
];
echo $mobileArray['chipset'];
