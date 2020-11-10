<?php

$id = $_POST['id'];

$db = mysqli_connect("localhost", "root", "mysql", "gospital") or die("Не могу подключиться");
$result = mysqli_query($db, "DELETE FROM `bagamaev` WHERE `id`=$id");

if ($result != "") {
    header('Location:bagamaev.php');
} else {
    echo "Запись не удалена";
}
