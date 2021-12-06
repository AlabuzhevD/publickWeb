<?php
include 'php/onlynews.php';
?>

<h1>Оставьте свой комментарий:</h1>
<form action = "/php/insert.php" method="post">
<div class = "messageNew">
<input class = "newsName"  type="text" name="name" placeholder="Введите ваше имя">
<p><textarea name="usertext" id = "newsText"></textarea></p>
<p>Код:<input id = "rand"  readonly type="text" name="rand" value=<?php echo rand(10000, 100000);?>> </p>
<p><input class = 'newsName'  type='text' name='capc' placeholder='Введите код'>
<input id = 'butnNews' type='submit' value='Отправить' name='insert'></p>

</div>
</form>
<div class = "messageNewLast">

    <?php 
    
    while ($row = mysqli_fetch_array($result)) {

       echo "<hr><p> Пользователь: ".$row['Name']."</p><p> Написал:  ".$row['Text']."</p><p> Дата: ".$row['Time']."</p><hr>";

    }
    
    ?>

</div>