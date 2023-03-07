<?php
include("includes/connect.php");

$cat = $_POST['cat'];
$cat_get = $_GET['cat'];
$act = $_POST['act'];
$act_get = $_GET['act'];
$id = $_POST['id'];
$id_get = $_GET['id'];


if ($cat == "admins" || $cat_get == "admins") {
	$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
	$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
	$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
	$role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `admins` (  `name` , `email` , `password` , `role` ) VALUES ( '" . $name . "' , '" . $email . "' , '" . md5($password) . "', '" . $role . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `admins` SET  `name` =  '" . $name . "' , `email` =  '" . $email . "' , `role` =  '" . $role . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act_get == "delete") {
		mysqli_query($link, "DELETE FROM `admins` WHERE id = '" . $id_get . "' ");
	}
	header("location:" . "admins.php");
}

if ($cat == "carinfo" || $cat_get == "carinfo") {
	$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
	$marka = addslashes(htmlentities($_POST["marka"], ENT_QUOTES));
	$model = addslashes(htmlentities($_POST["model"], ENT_QUOTES));
	$bannovu = addslashes(htmlentities($_POST["bannovu"], ENT_QUOTES));
	$yurus = addslashes(htmlentities($_POST["yurus"], ENT_QUOTES));
	$reng = addslashes(htmlentities($_POST["reng"], ENT_QUOTES));
	$qiymet = addslashes(htmlentities($_POST["qiymet"], ENT_QUOTES));
	$yanacaq = addslashes(htmlentities($_POST["yanacaq"], ENT_QUOTES));
	$oturucu = addslashes(htmlentities($_POST["oturucu"], ENT_QUOTES));
	$suretqutusu = addslashes(htmlentities($_POST["suretqutusu"], ENT_QUOTES));
	$buraxilisili = addslashes(htmlentities($_POST["buraxilisili"], ENT_QUOTES));
	$muherrikinhecmi = addslashes(htmlentities($_POST["muherrikinhecmi"], ENT_QUOTES));
	$muherrikingucu = addslashes(htmlentities($_POST["muherrikingucu"], ENT_QUOTES));
	$elavemelumat = addslashes(htmlentities($_POST["elavemelumat"], ENT_QUOTES));
	$img_name = addslashes(htmlentities($_POST["img_name"], ENT_QUOTES));
	$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
	$img_name2 = addslashes(htmlentities($_POST["img_name2"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `carinfo` (  `email` , `marka` , `model` , `bannovu` , `yurus` , `reng` , `qiymet` , `yanacaq` , `oturucu` , `suretqutusu` , `buraxilisili` , `muherrikinhecmi` , `muherrikingucu` , `elavemelumat` , `img_name` , `status` , `img_name2` ) VALUES ( '" . $email . "' , '" . $marka . "' , '" . $model . "' , '" . $bannovu . "' , '" . $yurus . "' , '" . $reng . "' , '" . $qiymet . "' , '" . $yanacaq . "' , '" . $oturucu . "' , '" . $suretqutusu . "' , '" . $buraxilisili . "' , '" . $muherrikinhecmi . "' , '" . $muherrikingucu . "' , '" . $elavemelumat . "' , '" . $img_name . "' , '" . $status . "' , '" . $img_name2 . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `carinfo` SET  `email` =  '" . $email . "' , `marka` =  '" . $marka . "' , `model` =  '" . $model . "' , `bannovu` =  '" . $bannovu . "' , `yurus` =  '" . $yurus . "' , `reng` =  '" . $reng . "' , `qiymet` =  '" . $qiymet . "' , `yanacaq` =  '" . $yanacaq . "' , `oturucu` =  '" . $oturucu . "' , `suretqutusu` =  '" . $suretqutusu . "' , `buraxilisili` =  '" . $buraxilisili . "' , `muherrikinhecmi` =  '" . $muherrikinhecmi . "' , `muherrikingucu` =  '" . $muherrikingucu . "' , `elavemelumat` =  '" . $elavemelumat . "' , `img_name` =  '" . $img_name . "' , `status` =  '" . $status . "' , `img_name2` =  '" . $img_name2 . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act_get == "delete") {
		mysqli_query($link, "DELETE FROM `carinfo` WHERE id = '" . $id_get . "' ");
	}
	header("location:" . "carinfo.php");
}

if ($cat == "userinfo" || $cat_get == "userinfo") {
	$fullname = addslashes(htmlentities($_POST["fullname"], ENT_QUOTES));
	$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
	$number = addslashes(htmlentities($_POST["number"], ENT_QUOTES));
	$city = addslashes(htmlentities($_POST["city"], ENT_QUOTES));
	$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `userinfo` (  `fullname` , `email` , `number` , `city` , `password` ) VALUES ( '" . $fullname . "' , '" . $email . "' , '" . $number . "' , '" . $city . "' , '" . md5($password) . "') ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `userinfo` SET  `fullname` =  '" . $fullname . "' , `email` =  '" . $email . "' , `number` =  '" . $number . "' , `city` =  '" . $city . "'  WHERE `id` = '" . $id . "' ");
		if ($_POST["password"] && $_POST["password"] != "") {
			mysqli_query($link, "UPDATE `userinfo` SET  `password` =  '" . md5($password) . "' WHERE `id` = '" . $id . "' ");
		}

	} elseif ($act_get == "delete") {
		mysqli_query($link, "DELETE FROM `userinfo` WHERE id = '" . $id_get . "' ");
	}
	header("location:" . "userinfo.php");
}
