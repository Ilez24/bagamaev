<?php

$a = $_POST['otdelenie'];
$b = $_POST['fio'];
$c = $_POST['palata'];
$d = $_POST['vrach'];
$e = $_POST['diagnoz'];
$f = $_POST['dieta'];

$db = mysqli_connect("localhost", "root", "mysql", "gospital") or die("Не могу подключиться");
$result = mysqli_query($db, "INSERT INTO `bagamaev` (`otdelenie`, `fio`, `palata`, `vrach`, `diagnoz`, `dieta`)
VALUES ('$a','$b',$c,'$d','$e','$f')");
if ($result != "") {
    header('Location:bagamaev.php');
} else {
    echo "Запись НЕ добавлена";
}
