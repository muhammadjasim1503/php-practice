<?php
class Car{
    public function drives(){
        echo "It Drives<br>";
    }
}

class Model extends Car{
    var $model;
    public function __construct($model){
        $this->model = $model;
    }
    public function getModel(){
        echo $this->model."<br>";
    }
}

class Make extends Model{
    var $make;
    public function __construct($make, $model){
        Model::__construct($model); // passed model to class Model constructor
        $this->make = $make;
    }

    public function getMake(){
        echo $this->make."<br>";
    }
}

$car = new Make("Ford", "Mustang");

$car->drives();
$car->getMake();
$car->getModel();