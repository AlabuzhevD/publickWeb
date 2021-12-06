
<?php 


session_start();
if ($_SESSION['user']) {
    header('Location: ../../index.php');
}


?>


<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="utf-8">
  <title>Радары скорости</title>
  
   <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
   <link rel="stylesheet" type="text/css" href="./css/main.css">

  <style>
 


  </style>
 </head>
 <body>
<div class = "frm">
  <form class = "formlog" action="signup.php" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите логин">
    <label>Пароль</label>
    <input type="password" name="password1" placeholder="Введите пароль">
    <input type="password" name="password2" placeholder="Повторите пароль">
    <button type = "submit">Зарегистрироваться</button>
    <p>
      У вас уже есть аккаунта? - <a href = "../../index.php"> Авторизируйтесь</a>
    </p>
    <a href = "../../index.php"> Вернуться на главную страницу</a>

    <?php
    if($_SESSION['message']){
      echo '<p class = "msg">'.$_SESSION['message'].'</p>';
    }  
       unset( $_SESSION['message']);?>


  </form>
</div>
 </body>


</html>