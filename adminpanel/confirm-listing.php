<?php

include "../php/db_conn.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
echo $id;
$sql = "UPDATE carinfo SET status='1' WHERE id=$id";

$conn->query($sql) === TRUE;

header("Location: carinfo.php");
