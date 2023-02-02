<?php
include '../model/Connection.php';

$query = $bd->query("SELECT * from quote");
$appointments = $query->fetchAll(PDO::FETCH_OBJ);

?>