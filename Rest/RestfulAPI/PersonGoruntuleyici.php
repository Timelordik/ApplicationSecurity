<?php

namespace authentification;

require_once (__DIR__ . '\Person.php');


abstract class PersonGoruntuleyici
{
    public $persons = array();     // Çocuk sınıfların doğrudan erişebilmesi  için	protected


    public function setPerson(Person $person)
    {
        $this -> persons[] = $person;
    }

    abstract public function getPersons(); // soyut fonksiyonların gerçekleme kısmı bulunmaz
    abstract public function getPerson($person);
}