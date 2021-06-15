<?php
include_once 'Edible.php';
include_once 'Animal.php';
class Chicken extends Animal implements Edible
{
public function makeSound(): string
{
 return "Chicken: cluck-cluck";
}
public function howToEat(): string
{
 return 'could be fried';
}
}