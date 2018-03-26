<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 26/03/18
 * Time: 10:35
 */

require '../src/Animals/Eat.php';
require '../src/Animals/Animal.php';
require '../src/Animals/Cat.php';
require '../src/Animals/Collar.php';
require '../src/Animals/Zoo.php';
require '../src/Animals/Dog.php';

$cat1 = new \Animals\Cat('Felix', 'Noir');
$cat2 = new \Animals\Cat('Garfield', 'roux');
$dog1 = new \Animals\Dog();

$zoo = new \Animals\Zoo();
$zoo->addAnimal($cat1);
$zoo->addAnimal($cat2);
$zoo->addAnimal($dog1);

foreach ($zoo->getAnimals() as $animal) {
    echo $animal->eat().'<br />';
}

die();
$cat1 = new \Animals\Cat('Felix', 'Noir');
$cat1->setFatigue(50);
$cat1->setImage('https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Felix_the_cat.svg/170px-Felix_the_cat.svg.png');

$collar = new \Animals\Collar(10, 'Rouge');

$cat2 = new \Animals\Cat('Garfield', 'roux', $collar);
$cat2->setFatigue(10);
$cat2->setImage('http://www.historiatv.com/sites/www.historiatv.com/files/800px-Garfield_the_Cat.svg_0_0.png');

echo $cat1;
echo $cat2;

echo '<h1>MARCHE</h1>';

// Faire marcher le chat jusqu'à épuisement
while (!$cat1->isTired()) {
    $cat1->walk();
}

while (!$cat2->isTired()) {
    $cat2->walk();
}

echo $cat1;
echo $cat2;

//echo '<h1>REPOS</h1>';
//
//$cat1->rest();
//$cat2->rest();
//
//echo $cat1;
//echo $cat2;

echo '<h1>REPAS</h1>';

$cat1->eat();
$cat2->eat();

echo $cat1;
echo $cat2;
