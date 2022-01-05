<?php
require_once 'db.php';

if( isset( $_GET['marka'] ) ) {
    $sql = "INSERT INTO markak (nev) VALUES ('".$_GET['marka']."');";
    $stmt = $db->exec( $sql );
    echo $stmt ? "Sikeres törlés" : "Sikertelen törlés";
}

?>