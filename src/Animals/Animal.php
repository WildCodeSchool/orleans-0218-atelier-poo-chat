<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 26/03/18
 * Time: 11:19
 */

namespace Animals;


abstract class Animal implements Eat
{


    /**
     * Le nom dui chat
     * @var String
     */
    protected $name;

    /**
     * @return String
     */
    public function getName(): String
    {
        return $this->name;
    }

    /**
     * @param String $name
     * @return Cat
     */
    public function setName(String $name): Cat
    {
        $this->name = $name;
        return $this;
    }

    public function eat()
    {
        return 'eat';
    }
}
