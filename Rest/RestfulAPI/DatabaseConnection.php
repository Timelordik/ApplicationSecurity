<?php

require_once(__DIR__.'Database.class.php');
require_once(__DIR__.'DatabaseException.class.php');

	try
    {
        $veritabaniNesnesi= Database::getInstance();

    }
    catch (DBException $e)
    {
        echo $e -> hataGoruntule();
        exit(1);
    }

    $veritabaniBaglantisi=$veritabaniNesnesi->getDatabaseConnection();


