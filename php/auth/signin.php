<?php 
session_start();
require_once 'connect.php';

if ($_SESSION['user']) {
    header('Location: index.php');
}
$login = $_POST['login'];
$password = md5($_POST['password']);


$chek_user = mysqli_query($connect, "SELECT * FROM `login` WHERE `usermane` = '$login' and `password` = '$password'");

	if( mysqli_num_rows($chek_user) > 0){

		$user = mysqli_fetch_assoc($chek_user);

		$_SESSION['user'] = [
			"id" => $user['id']			

		];

		header('Location: ../../index.php');

	}else{
		$_SESSION['message'] = 'Ошибка данных';
  	header('Location: ../../index.php?page=1');

	}

	?>

