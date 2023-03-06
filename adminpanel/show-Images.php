<?php
include "../php/db_conn.php";
if( isset($_GET['index'])){
    $id = $_GET['index'];
}
$sql = "SELECT * FROM carinfo WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);
$car = $stmt->fetch();
$imgname =  $car['img_name'];
echo "<img src='images/$imgname' >"; 
    


?>