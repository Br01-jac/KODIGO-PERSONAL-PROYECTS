<?php
include '../model/Connection.php';

$id = $_POST["id"];
$name = $_POST["inputName"];
$age = $_POST["inputAge"];
$email = $_POST["inputEmail"];
$department = $_POST["inputDepartment"];
$municipality = $_POST["inputMunicipality"];
$address = $_POST["inputAddress"];
$typeQuote = $_POST["inputMedicalArea"];
$cellphone = $_POST["inputCellphone"];

$query = $bd->prepare("UPDATE quote SET name_pacient = ?, email = ?, age = ? , department = ?, municipality =?, pacient_address = ?, type_quote=?, cellphone=? WHERE id = ?");
$result = $query->execute([$name,$email,$age,$department,$municipality,$address,$typeQuote,$cellphone,$id]);


if ($result){
    header("Location: ../templates/appointments.php");
}else{
    header("Location: ../adversements/error.php");
}
?>