<?php
if(isset($_POST['email'])&&
isset($_POST['fullname'])&&
isset($_POST['city'])&&
isset($_POST['number'])&&
isset($_POST['password']))
{
    include "../php/db_conn.php";

    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $city = $_POST['city'];
    $number = $_POST['number'];
    $pass =  $_POST['password'];


    if (empty($fullname)) {
    	$em = "Ad soyad doldurulmalıdır!!!";
    	header("Location: ../register.php?error=$em");
	    exit;
    }

    else if(empty($email)){
    	$em = "Email doldurulmalıdır!!!";
    	header("Location: ../register.php?error=$em");
	    exit;
    }

    else if (empty($pass)){
    	$em = "Şifrə doldurulmalıdır!!!";
    	hheader("Location: ../register.php?error=$em");
	    exit;    
    }

    else if (empty($city)){
    $em = "Şəhər adı doldurulmalıdır!!!";
    header("Location: ../register.php?error=$em");
    exit;    
    }

    else if (empty($number)){
    $em = "Nömrə doldurulmalıdır!!!";
    header("Location: ../register.php?error=$em");
    exit;}

    if (filter_var($email,FILTER_VALIDATE_EMAIL)===false){
        $em = "Email düzgün deyil!!!";
        header("Location: ../register.php?error=$em");
        exit; 
    }
    $sql = "Select * From userinfo Where email = ?";
    $stmt = $conn->prepare($sql);    
    $stmt->execute([$email]);
    if($stmt->rowCount() != 0){
        $em = "Bu email artıq qeydiyyatdan keçib";
        header("Location: ../register.php?error=$em");
	    exit;    
    }
    $sql = "Select * From userinfo Where number = ?";
    $stmt = $conn->prepare($sql);    
    $stmt->execute([$number]);
    if($stmt->rowCount() != 0){
        $em = "Bu nömrə artıq qeydiyyatdan keçib" + $sql;
        header("Location: ../register.php?error=$em");
	    exit;    
    }    

    // hashing the password
    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO userinfo(fullname,email,number,city,password) 
    	        VALUES(?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$fullname,$email,$number,$city,$pass]);

    header("Location: ../register.php?success=Hesabınız qeydiyyatdan keçdi");
	exit;
    

}
else {
	header("Location: ../login.php?error=error");
	exit;
}
?>