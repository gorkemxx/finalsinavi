<?php
 
try {
    
    $db_ad='final';
    $db_kullanici='root';
    $db_sifre='';
    $db = new PDO('mysql:host=localhost;dbname='.$db_ad, $db_kullanici, $db_sifre);
} 
catch (PDOException $e)
{
    print "Ba�ant� Hatas�!: " . $e->getMessage() . "<br/>";
    die();
}
 
?>