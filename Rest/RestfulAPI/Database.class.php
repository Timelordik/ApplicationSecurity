<?php
//echo "ClassVeritabaniMysqli" ;




class Database //implements VeritabaniArayuz
{

    public $databaseConnection;

    public static $instance;

    public function getDatabaseConnection()
    {
        return $this ->databaseConnection;
    }

    public function __construct()
    {
        $dsn = 'mysql:dbname=database;host=127.0.0.1';
        $user = 'root';
        $password = '';

        try
        {
            $this->databaseConnection = new PDO("$dsn ; $user; $password");
           // $this->databaseConnection = new PDO("pgsql:dbname=OgrenciBilgiSistemi;   host=localhost;   user=LectureUser;   password=LecturePassword");

        } catch ( PDOException $e ){
           // echo "deneme";
            print $e->getMessage();
        }
    }

    public static function getInstance(){

        if( !(self::$instance instanceof self) ){

            self::$instance = new self();

        }
        return self::$instance;
    }
    public function __destruct()
    {

       $this->databaseConnection=null;

    }

}
