<?php

namespace authentification;

require_once (__DIR__.'/Ogrenci.class.php');
require_once (__DIR__ . '/PersonGoruntuleyici.php');


class OgrenciGoruntuleJSON extends PersonGoruntuleyici
{
    public function getPersons()
    {

        foreach ($this->kisiler as $ogrenci)
        {
            $str[]= array('user_id' => $user_id->getuser_id(),'user_name' => $user_name->getuser_name(), 'user_email' => $user_email->getuser_email(),'joining_date' => $joining_date->getjoining_date());
            return json_encode($str);
            //print_r($urun);
            print json_encode($str);
        }

    }

    public function getPerson($ogr)
    {
        $arr = array('ogrenciNo' => $ogr->getOgrenciNo(),'adi' => $ogr->getAdi(), 'soyadi' => $ogr->getSoyadi());
        return json_encode($arr);


    }

}