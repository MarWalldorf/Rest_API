<?php

namespace App\People;

class Person
{

    public static function setFullName($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    } // end setFullName();

    public function getFullName()
    {
        return $this->name.' '.$this->surname;
    } // end getFullName();

}
