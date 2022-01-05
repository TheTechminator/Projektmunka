<?php
require_once 'db.php';

if( isset( $_GET['id'] ) && isset( $_GET['nev'] )) {
    $sql = "
        UPDATE autok 
        SET nev = '".$_GET['nev']."' WHERE id = '".$_GET['id']."';
    ";
    $stmt = $db->exec( $sql );

    echo $stmt ? "Sikeres módosítás" : "Sikertelen módosítás";
}

?>