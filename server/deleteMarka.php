<?php
require_once 'db.php';

if( isset( $_GET['id'] ) ) {
    $sql = "DELETE FROM markak WHERE id = ".$_GET['id'].";";
    $stmt = $db->exec( $sql );

    echo $stmt ? "Sikeres törlés" : "Sikertelen törlés";
}

?>