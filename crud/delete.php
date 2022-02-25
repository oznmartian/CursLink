<?php
include_once("connect.php");


$idutilizator = $_GET['idutilizator'];

$sql = "DELETE  FROM `utilizatori` WHERE id =".$idutilizator;
$result = mysqli_query($con, $sql);
mysqli_close($con);
header("Location: rezultate.php");

?>