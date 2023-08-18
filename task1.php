<?php 
echo "<p>Interviewer Information</p>
     Name: Md Arif Uddin<br>
     Email: arifuddin3659@gmail.com<br>
     Phobe: 01518916473<br>";
class Shape 
{
    
    
}

class Circle extends Shape {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

class Square extends Rectangle {
    public function __construct($side) {
        parent::__construct($side, $side);
    }
}

$circle = new Circle(10);
$rectangle = new Rectangle(7, 8);
$square = new Square(4);

echo "<h1>All Result</h1>";

echo "Circle Area:  "          . $circle->calculateArea() ."<br>";
echo "Rectangle Area:  "       . $rectangle->calculateArea() ."<br>";
echo "Square Area: <br>"       . $square->calculateArea();


?>