<?php
require_once 'db.php';


$sql = "SELECT autok.id, autok.nev, markak.nev AS marka, evjarat FROM autok INNER JOIN markak ON autok.marka_id = markak.id ORDER BY autok.nev ASC;";
$stmt = $db->query($sql);
echo json_encode($stmt->fetchAll());

?>