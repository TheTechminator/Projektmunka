<?php
require_once 'db.php';

$sql = "SELECT evjarat FROM autok GROUP BY evjarat;";
$stmt = $db->query($sql);
echo json_encode($stmt->fetchAll());

?>