<?php
session_start();
if(
    isset($_POST['marka'])
    &&isset($_POST['model'])
    &&isset($_POST['yanacaq'])
    &&isset($_POST['oturucu'])
    &&isset($_POST['bannovu'])
    &&isset($_POST['suretqutusu'])
    &&isset($_POST['yurus'])
    &&isset($_POST['buraxilisili'])
    &&isset($_POST['reng'])
    &&isset($_POST['muherrikinhecmi'])
    &&isset($_POST['qiymet'])
    &&isset($_POST['muherrikingucu'])
    &&isset($_POST['elavemelumat'])
)
{
    if(empty($_POST['marka'])){
        header("Location: ../addannounc.php?error=Marka doldurulmalıdır");
        exit;
    }
    if(empty($_POST['model'])){
        header("Location: ../addannounc.php?error=Model doldurulmalıdır");
        exit;
    }
    if(empty($_POST['yanacaq'])){
        header("Location: ../addannounc.php?error=Yanacaq növü doldurulmalıdır");
        exit;
    }
    if(empty($_POST['oturucu'])){
        header("Location: ../addannounc.php?error=Ötürücü doldurulmalıdır");
        exit;
    }
    if(empty($_POST['bannovu'])){
        header("Location: ../addannounc.php?error=Ban növü doldurulmalıdır");
        exit;
    }
    if(empty($_POST['suretqutusu'])){
        header("Location: ../addannounc.php?error= Sürətlər qutusu doldurulmalıdır");
        exit;
    }
    if(empty($_POST['yurus'])){
        header("Location: ../addannounc.php?error=Yürüş doldurulmalıdır");
        exit;
    }
    if(empty($_POST['buraxilisili'])){
        header("Location: ../addannounc.php?error=Buraxılış ili doldurulmalıdır");
        exit;
    }
    if(empty($_POST['reng'])){
        header("Location: ../addannounc.php?error=Rəng doldurulmalıdır");
        exit;
    }
    if(empty($_POST['muherrikinhecmi'])){
        header("Location: ../addannounc.php?error=Mühərrikin Həzmi doldurulmalıdır doldurulmalıdır");
        exit;
    }
    if(empty($_POST['qiymet'])){
        header("Location: ../addannounc.php?error=Qiymət doldurulmalıdır doldurulmalıdır");
        exit;
    }
    if(empty($_POST['muherrikingucu'])){
        header("Location: ../addannounc.php?error=Mühərrikin gücü doldurulmalıdır doldurulmalıdır");
        exit;
    }

    include "../php/db_conn.php";
    $email = $_SESSION["useremail"];
    $marka = $_POST['marka'];
    $model =  $_POST['model'];
    $yanacaq = $_POST['yanacaq'];
    $oturucu = $_POST['oturucu'];
    $bannovu = $_POST['bannovu'];
    $suretqutusu = $_POST['suretqutusu'];
    $yurus = $_POST['yurus'];
    $buraxilisili = $_POST['buraxilisili'];
    $reng = $_POST['reng'];
    $muherrikinhecmi = $_POST['muherrikinhecmi'];
    $qiymet = $_POST['qiymet'];
    $muherrikingucu = $_POST['muherrikingucu'];
    $image_name = $_FILES["uploaded_image"]["name"];
    $temp_image_name = $_FILES["uploaded_image"]["tmp_name"];
    $folder = "../adminpanel/images/".$image_name;
    if(!empty($_POST['elavemelumat'])){
        $elavemelumat = $_POST['elavemelumat'];
    }
    else{
        $elavemelumat = "";
    }
    
    $sql = "INSERT INTO carinfo(email,marka,model,bannovu,yurus,reng,qiymet,yanacaq,
    oturucu,suretqutusu,buraxilisili,muherrikinhecmi,muherrikingucu,elavemelumat,img_name) 
    	        VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email,$marka,$model,$bannovu,$yurus,$reng,$qiymet,$yanacaq,
    $oturucu,$suretqutusu,$buraxilisili,$muherrikinhecmi,$muherrikingucu,$elavemelumat,$image_name]);
    if(move_uploaded_file($temp_image_name,$folder)){
        header("Location: ../addannounc.php?success=Ugurlu emeliyyat");
        exit;
    }
    else{
        header("Location: ../addannounc.php?error=Şəkil yüklənmədi");
        exit;
    }


    
}
else{
    

    header("Location: ../addannounc.php?error=Xəta");
	exit;
}



?>