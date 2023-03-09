<?php

include "../php/db_conn.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$sql = "SELECT* FROM carinfo WHERE id=$id";
$car = $conn->query($sql)->fetch();
if(copy("images/".$car['img_name'],"../images/".$car['img_name'])&&copy("images/".$car['img_name2'],"../images/".$car['img_name2'])){
    $sql = "UPDATE carinfo SET status='1' WHERE id=$id";
    if($conn->query($sql)==true){
    
    
        $em = "Uğurlu Əməliyyat";
        header("Location: carinfo.php?success=$em");
        exit;
    
    }
}
else{
    $em = "Uğursuz Əməliyyat";
    header("Location: carinfo.php?error=$em");
    exit;
}






