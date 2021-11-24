<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 03 - Properties */

// in a class we have properties and methods. This methods act like functions and allow classes to develop tasks and functionalities.


class Laptop
{   // properties
    public $brand;
    public $cpu;
    public $ram;
    public $storage;


    // method that returns class properties in a string.
    public function showSpecs()
    {
        return $this->brand . " includes a " . $this->cpu . " CPU and " . $this->storage . "GB of internal memory";
    }

    public function getCpuModel()
    {
        return $this->cpu;
    }
}

$lenovoGaming = new Laptop();
$lenovoGaming->brand = "Lenovo Ideapad Gaming";
$lenovoGaming->cpu = "AMD Ryzen 5 5600h";
$lenovoGaming->storage = "480";

echo $lenovoGaming->showSpecs();

echo "<br/>";

echo $lenovoGaming->getCpuModel();
