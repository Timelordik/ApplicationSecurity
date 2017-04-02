<?php

namespace authentification;

require_once __DIR__.'\Person.php';

class Ogrenci extends Person
{
    public $user_id;

/*
    function __construct($ogrenciNo, $adi, $soyadi)
    {
        parent::__construct($adi,$soyadi);
        $this->setOgrenciNo($ogrenciNo);

    }*/

    public function getuser_id()
    {
        return $this->user_id;
    }

    public function setOgrenciNo($user_id)
    {
        $this->user_id = $user_id;
    }

    public function __set($prop, $val) {
        $this->$prop = $val;
    }
    public function __get($prop) {
        return $this->$prop;
    }


    public function yazdir($PersonGoruntule) {
        return $PersonGoruntule->getPerson($this);

    }


}