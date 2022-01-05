<?php
require_once 'db.php';

if( isset( $_GET['nev'] ) && isset( $_GET['marka'] ) && isset( $_GET['evjarat'] ) ) {
    $sql = "INSERT INTO autok (nev, evjarat, marka_id) VALUES ('{$_GET['nev']}','{$_GET['evjarat']}','{$_GET['marka']}');";
    $stmt = $db->exec( $sql );
    echo $stmt ? "Sikeres törlés" : "Sikertelen törlés";
}

?>