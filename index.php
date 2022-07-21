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
$books = array($physics,$maths, $chemistry);

$physics->setTitle("Physics for high school");
$maths->setTitle("Algebra");
$chemistry->setTitle("Al chemyat");

$physics->setPrice(102);
$maths->setPrice(23);
$chemistry->setPrice(40);

// $physics->getTitle();
// $physics->getPrice();

// $maths->getTitle();
// $maths->getPrice();

// $chemistry->getTitle();
// $chemistry->getPrice();
foreach($books as $book){
    $book->getTitle();
    $book->getPrice();
}

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

    /* Overriding super class functions */
    function getPrice(){
        echo $this->price."<br>";
        return $this->price;
    }
    function getTitle(){
        echo $this->title."<br>";
        return $this->title;
    }
}

$assassinBook = new GamingBooks("Ezio Series", 1000);
$assassinBook->setPublisher("Auditore");

$title = $assassinBook->getTitle();
$assassinBook->getPrice();
$assassinBook->getPublisher();

/* Interface */

echo "<br>";
interface animal{
    function makeSound();
}

/* Classes that implement Interface */

class Cat implements Animal{
    function makeSound(){
        echo "Meow<br>";
    }
}

Class Dog implements Animal{
    function makeSound(){
        echo "Barks<br>";
    }
}

$cat = new Cat();
$dog = new Dog();

$animals = array($cat, $dog);
foreach($animals as $animal){
    $animal->makeSound();
}

/* Abstract Class */
echo "<br>";
abstract class Player{
    abstract function action();
    function foo(){
        echo "foo<br>";
    }
}

class GunPlayer extends Player{
    function action(){
        echo "Gun Shot<br>";
    }
}

class SwordPlayer extends Player{
    function action (){
        echo "Sword kill<br>";
    }
}

$gunPlayer = new GunPlayer;
$swordPlayer = new SwordPlayer;

$players = array($gunPlayer, $swordPlayer);
foreach($players as $player){
    $player->action();
    $player->foo();
}

/* Static Keyword */
echo "<br>";

class Foo{
    public static $myStatic = "foo";

    public function staticValue(){
        return self::$myStatic;
    }
}

echo Foo::$myStatic . "<br>";
$foo = new Foo;
echo $foo->staticValue() . "<br>";

/* Final keyword */
echo "<br>";

class BaseClass {
    public function test(){
        echo "BaseClass::test() called <br>";
    }

    final public function moreTesting(){
        echo "BaseClass::moreTesting() called <br>";
    }
}

class ChildClass extends BaseClass{
    // public function moreTesting(){
    //     echo "ChildClass::moreTesting() called <br>";
    // }
}

// the above will give error if executed because the final keyword prevenets the method to be overriden

/* Calling Parent contructor */

class Name{
    var $firstName;
    var $lastName;

    function __construct($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    function toString(){
        return ($this->lastName . "," . $this->firstName . "<br>");
    }
}

class NameSub1 extends Name{
    var $middleInitial;
    function __construct($firstName, $middleInitial, $lastName){
        Name::__construct($firstName, $lastName);
        $this->middleInitial = $middleInitial;
    }

    function toString(){
        return (Name::toString(). " " . $this->middleInitial . '<br>');
    }
}

$name = new Name("Muhammad", "Jasim");
$nameSub1 = new NameSub1("Muhammad", "Jasim", "Khan");
echo $name->toString()."<br>";
echo $nameSub1->toString();

?>