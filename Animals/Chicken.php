<?php

class Chicken extends Animal implements Edible
{
public function makeSound()
{
    // TODO: Implement makeSound() method.
    return "Chicken:cluck-cluck";
}
public function howtoEat()
{
    // TODO: Implement howtoEat() method.
    return "could be fried";
}
}