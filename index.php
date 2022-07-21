<?php
// classes in php
class Books{
    /* Member Variables */
    var $price;
    var $title;

    /* Constructor function */
    function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
    }

    /* Member functions */
    function setPrice($price){
        $this->price = $price;
    }

    function getPrice(){
        echo $this->price."<br/>";
    }

    function setTitle($title){
        $this->title = $title;
    }

    function getTitle(){
        echo $this->title."<br>";
    }
}

$physics = new Books("ola",23);
$maths = new Books("tash",0);
$chemistry = new Books("chaimestery",234);

$physics->setTitle("Physics for high school");
$maths->setTitle("Algebra");
$chemistry->setTitle("Al chemyat");

$physics->setPrice(102);
$maths->setPrice(23);
$chemistry->setPrice(40);

$physics->getTitle();
$physics->getPrice();

$maths->getTitle();
$maths->getPrice();

$chemistry->getTitle();
$chemistry->getPrice();

$chemistry->title = "hello";
$chemistry->getTitle();

/* Gaming Books class extended from Books class */
echo "<br>";
class GamingBooks extends Books{
    var $publisher;
    function setPublisher($publisher){
        $this->publisher = $publisher;
    }

    function getPublisher(){
        echo $this->publisher."<br />";
    }
}

$assassinBook = new GamingBooks("Ezio Series", 1000);
$assassinBook->setPublisher("Auditore");

$assassinBook->getTitle();
$assassinBook->getPrice();
$assassinBook->getPublisher();
?>