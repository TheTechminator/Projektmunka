<?php
require_once 'db.php';


$sql = "SELECT id, nev FROM markak ORDER BY nev ASC;";
$stmt = $db->query($sql);
echo json_encode($stmt->fetchAll());

?>