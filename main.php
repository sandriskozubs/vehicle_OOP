<?php 

    class Vehicle {

        public $name;
        public $year;
        public $mileage; 

        public function __construct($name, $year, $mileage)
        {
            $this->name = $name;
            $this->year = $year;
            $this->mileage = $mileage;
        }

        public function info () {
            echo "Your vehicles name is <b><i>" . $this->name . "</b></i><br>";
            echo "It was made in <b><i>" . $this->year . "</b></i><br>";
            echo "Its mileage is <b><i>" . $this->mileage . "</b></i><br>";
        }

    }

    $obj = new Vehicle("Audi A4", 2004, 244789);

    $obj->info();