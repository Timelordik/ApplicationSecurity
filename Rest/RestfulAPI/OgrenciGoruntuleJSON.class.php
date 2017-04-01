<?php

namespace authentification;

require_once (__DIR__.'\Ogrenci.class.php');
require_once (__DIR__ . '\PersonGoruntuleyici.php');


class OgrenciGoruntuleJSON extends PersonGoruntuleyici
{
    public function getPersons()
    {

        foreach ($this->users as $user)
        {
            $str[]= array('user_id' => $user->getuser_id(),'user_name' => $user->getuser_name(), 'user_email' => $user->getuser_email(),'joining_date' => $user->getjoining_date());
            return json_encode($str);
            //print_r($urun);
            print json_encode($str);
        }

    }

    public function getPerson($ogr)
    {
        $arr = array('user_id' => $ogr->getuser_id(),'user_name' => $ogr->getuser_name(), 'user_email' => $ogr->getuser_email(), 'joining_date' => $ogr->getjoining_date());
        return json_encode($arr);


    }

}