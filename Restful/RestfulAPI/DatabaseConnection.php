<?php

require_once('\authentification\Restful\RestfulAPI\Database.class.php');
require_once('\authentification\Restful\RestfulAPI\DatabaseException.class.php');

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


