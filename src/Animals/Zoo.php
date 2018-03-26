<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 26/03/18
 * Time: 11:17
 */

namespace Animals;


class Zoo
{
    /**
     * @var array
     */
    private $animals;

    /**
     * @return array
     */
    public function getAnimals(): array
    {
        return $this->animals;
    }

    /**
     * @param array $animals
     * @return Zoo
     */
    public function setAnimals(array $animals): Zoo
    {
        foreach ($animals as $animal) {
            if (!$animal instanceof Animal) {
                throw new \LogicException('Type non autorisé');
            }
        }
        $this->animals = $animals;
        return $this;
    }

    public function addAnimal(Animal $animal)
    {
        $this->animals[] = $animal;
    }
}