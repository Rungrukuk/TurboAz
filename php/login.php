<?php 
session_start();
if(isset($_POST['email']) && 
   isset($_POST['password'])){

    include "../php/db_conn.php";

    $email = $_POST['email'];
    $pass = $_POST['password'];

    
    if(empty($email)){
    	$em = "Email doldurulmalıdır";
    	header("Location: ../login.php?error=$em");
	    exit;
    }else if(empty($pass)){
    	$em = "Şifrə doldurulmalıdır";
    	header("Location: ../login.php?error=$em");
	    exit;
    }else {

    	$sql = "SELECT * FROM userinfo WHERE email = ?";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$email]);

      if($stmt->rowCount() == 1){
          $user = $stmt->fetch();
          $emailsql =  $user['email'];
          $password =  $user['password'];
          $fullname =  $user['fullname'];
          $id =  $user['id'];
          if($emailsql === $email){
             if(password_verify($pass, $password)){
                 $_SESSION["useremail"] = $email;
                 header("Location: ../addannounc.php");
                 exit;
             }else {
               $em = "Şifrə yanlışdır";
               header("Location: ../login.php?error=$em");
               exit;
            }

          }else {
            $em = "Email yanlışdır";
            header("Location: ../login.php?error=$em");
            exit;
         }

      }else {
         $em = "Email vəya şifrə yanlışdır";
         header("Location: ../login.php?error=$em&");
         exit;
      }
    }


}else {
	header("Location: ../login.php?error=Xəta");
	exit;
}