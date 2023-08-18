<?php 
class Animal {
    public function makeSound() {
        return "Some generic sound of Animals";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "<h3>Woof woof</h3>";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "<h3>Meow Meow</h3>";
    }
}

class Cow extends Animal {
    public function makeSound() {
        return "<h3>hamba hamba</h3>";
    }
}


$animals = [
    new Dog(),
    new Cat(),
    new Cow()
];

foreach ($animals as $animal) {
    echo get_class($animal) . ": " . $animal->makeSound();
}

?>