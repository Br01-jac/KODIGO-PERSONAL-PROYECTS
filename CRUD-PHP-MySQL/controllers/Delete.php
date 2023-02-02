<?php 

include "../model/Connection.php";

$idQuote = $_GET['id'];

$query = $bd->prepare("DELETE FROM quote where id=?");

$result = $query->execute([$idQuote]);


if ($result){
    header("Location: ../templates/appointments.php");
}else{
    header("Location: ../adversements/error.php");
}

?>