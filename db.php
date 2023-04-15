<?php
function getConnection(){
    try {
        $dbname = "websiteDB";
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "root";

        $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass, array(PDO::ATTR_PERSISTENT => false));
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->exec("set names utf8");
        return $dbh;
    } catch (Exception $e) {
        echo $e;
    }
}