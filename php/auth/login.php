<?php 
session_start();
if(isset($_SESSION['user'])) { 
     exit("<meta http-equiv='refresh' content='0; url= index.php'>");
}else{
    
    
}
?>




    <div class = "frm">
  <form class = "formlog" action="php/auth/singin.php " method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type = "submit">Вход</button>
    <p>
      Логин: root Пароль: root
    </p>
    <p>
      У вас нет аккаунта? - <a href = "php/auth/registr.php"> Зарегистрируйтесь</a>
    </p>
    <p>
    <a href = "index.php"> Вернуться на главную страницу</a>
    </p>

    <?php
    
    if($_SESSION['message']){
      echo '<p class = "msg">'.$_SESSION['message'].'</p>';
    }  
    unset( $_SESSION['message']);
       ?>
  </form>
</div>


