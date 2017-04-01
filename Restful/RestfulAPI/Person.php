<?php

namespace \authentification;

abstract class Kisi
{

    public $user_id;
    public $user_name;
    public $user_email;
    public $joining_date;



    public function getuser_id()
    {
        return $this->user_id;
    }

    public function setAdi($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getuser_name()
    {
        return $this->user_name;
    }

    public function setuser_name($user_name)
    {
        $this->user_name = $user_name;
    }

    public function getuser_email()
    {
        return $this->user_email;
    }

    public function setuser_email($user_email)
    {
        $this->user_email = $user_email;
    }

    public function getjoining_date()
    {
        return $this->joining_date;
    }

    public function setjoining_date($joining_date)
    {
        $this->joining_date = $joining_date;
    }

    /*  function __construct($adi, $soyadi)
      {
          $this->setAdi($adi);
          $this->setSoyadi($soyadi);
      }*/

    public function __set($prop, $val) {
        $this->$prop = $val;
    }
    public function __get($prop) {
        return $this->$prop;
    }

}