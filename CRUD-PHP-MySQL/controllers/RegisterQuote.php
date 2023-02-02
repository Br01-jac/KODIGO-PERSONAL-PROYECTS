<?php

$name = $_POST["inputName"];
$age = $_POST["inputAge"];
$email = $_POST["inputEmail"];
$department = $_POST["inputDepartment"];
$municipality = $_POST["inputMunicipality"];
$address = $_POST["inputAddress"];
$typeQuote = $_POST["inputMedicalArea"];
$cellphone = $_POST["inputCellphone"];

require '../model/Connection.php';
$query = $bd->prepare("INSERT INTO quote(name_pacient,email,age,department,municipality,pacient_address,type_quote,cellphone) VALUES(?,?,?,?,?,?,?,?);");
$result = $query->execute([$name,$email,$age,$department,$municipality,$address,$typeQuote,$cellphone]);

if ($result){
    header("Location: ../advertisements/correct.php");
   
}else{
    header("Location: ../adversements/error.php");
}
?>