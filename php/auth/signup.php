<?php
  session_start();
  require_once 'connect.php';




  $login = $_POST['login'];
  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];

  if($password1 == $password2){

  	$password1 = md5($password1);

  	mysqli_query($connect, "INSERT INTO `login` (`id`, `usermane`, `password`, `root`) VALUES (NULL, 
  		'$login', '$password1', NULL)");
  	$_SESSION['message'] = 'Регистрация прошла успешна';
  	header('Location: ../../index.php?page=1');



  }else{
  	$_SESSION['message'] = 'Пароли не совпадают';
  	header('Location: registr.php');
  }


?>
