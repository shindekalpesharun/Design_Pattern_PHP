<?php

interface Shape{
    public function draw();
}

class Postion{}

class Rectangle implements Shape{
    private $position;

    public function __construct($pos)
    {
        $this->position = $pos;
    }

    public function draw()
    {
        echo "Drawing a rectangle";
    }
}

class Circle implements Shape{
    private $position;

    public function __constract($pos)
    {
        $this->position = $pos;
    }

    public function draw()
    {
        echo "Drawing a Cirlce";
    }
}

class ShapeFactory  {
    public function create($type)
    {
        switch ($type) {
            case 'Rectangle':
                return new Rectangle(new Postion());
                break;
            
            case 'Circle':
                return new Circle(new Postion());
                break;

            default:
                return null;
                break;
        }
    }
}

$factory = new ShapeFactory();
$rect = $factory->create("Rectangle");
echo $rect->draw();
$rect = $factory->create("Circle");
echo $rect->draw();


?>