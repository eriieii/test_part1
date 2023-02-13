<?php

abstract class ship {
   private $name;
   private $type;
   private $year;
   private $material;
   private $length;
   
   
   public function __construct($name, $type, $year, $material, $length) {
    $this->name = $name;
    $this->type = $type;
    $this->year = $year;
    $this->material = $material;
    $this->length = $length;
   }

   public function getName() {
    return $this->name;
   }

   public function getType() {
    return $this->type;
   }

   public function getYear() {
    return $this->year;
   }

   public function getMaterial() {
    return $this->material;
   }

   public function getLength() {
    return $this->length;
   }

   abstract public function detailInfo();
}

class MotorBoats extends ship {
    private $speed;

    public function __construct($name, $year, $material, $length, $speed) {
        parent::__construct($name, "Motor Boats", $year, $material, $length);
        $this->speed = $speed;
    }

    public function detailInfo() {
        echo "Name   : " . $this->getName() . "<br/>";
        echo "Type   : " . $this->getType() . "<br/>";
        echo "Year   : " . $this->getYear() . "<br/>";
        echo "Material   : " . $this->getMaterial() . "<br/>";
        echo "Length : " . $this->getLength() . " Meters <br/>";
        echo "Speed  : " . $this->speed . " HorsePower<br/>";
    }    
}

class SailBoats extends ship {
    private $sailArea;

    public function __construct($name, $year, $material, $length, $sailArea) {
        parent::__construct($name, "Sailboats", $year, $material, $length);
        $this->sailArea = $sailArea;
    }

    public function detailInfo() {
        echo "Name   : " . $this->getName() . "<br/>";
        echo "Type   : " . $this->getType() . "<br/>";
        echo "Year   : " . $this->getYear() . "<br/>";
        echo "Material   : " . $this->getMaterial() . "<br/>";
        echo "Length : " . $this->getLength() . " Feet <br/>";
        echo "Sail Area  : " . $this->sailArea . " Square Feet<br/>";
    }    
}

class yachts extends ship {
    private $capacity;

    public function __construct($name, $year, $material, $length, $capacity) {
        parent::__construct($name, "Yachts", $year, $material, $length);
        $this->capacity = $capacity;
    }

    public function detailInfo() {
        echo "Name   : " . $this->getName() . "<br/>";
        echo "Type   : " . $this->getType() . "<br/>";
        echo "Year   : " . $this->getYear() . "<br/>";
        echo "Material   : " . $this->getMaterial() . "<br/>";
        echo "Length : " . $this->getLength() . " Meters <br/>";
        echo "Capacity  : " . $this->capacity . " People<br/>";
    }    
}

$ships = array(
                new MotorBoats("Frauscher 858 Fantom Air", 2010, "Fiberglass", 867, 350),
                new SailBoats("2000 Hunter 310", 2000, "Fiberglass", 30.83, 200),
                new yachts("CINQUANTA 50", 2014, "Fiberglass", 50, 8)
            );

foreach ($ships as $ship) {
    echo "<br>";
    $ship->detailInfo();
}