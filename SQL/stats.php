<h1>Bluetooth Low Energy</h1>
<?php  

include "include/include.php";
$sql = "SELECT `Name`,`BLE`,`Date`,COUNT(`dateIn`) AS \"InWork\"  FROM `dateinout` GROUP BY `Name`,`Date`,`BLE`";
$result = mysqli_query($connect, $sql);
?>

<table class="separate" border="1">
    <caption>Время подключения и отключения маяка</caption>
            <tr>
               <th>Имя</th>
               <th>Маяк</th>
               <th>Дата</th>
               <th>Количество</th>
            </tr> 

<?php 

while($res = mysqli_fetch_assoc($result))
{   
  echo '<tr>';
  echo '<td>';
  echo $res['Name'] ;
  echo '</td>';
  echo '<td>';
  echo $res['BLE'] ;
  echo '</td>';
  echo '<td>';
  echo $res['Date'] ;
  echo '</td>';
  echo '<td>';
  echo $res['InWork'];
  echo '</td>';
  echo '</tr>';


}

?>

</table>

<?php  

include "include/include.php";
$sql = "SELECT `Name`,`BLE`,`Date`, COUNT(`InWork`) AS \"InWork\" FROM `process` GROUP BY `Name`,`Date`,`BLE`";
$result = mysqli_query($connect, $sql);
?>


<table class="separate" border="1">
        <caption>В процессе</caption>
            <tr>
               <th>Имя</th>
               <th>Маяк</th>
               <th>Дата</th>
               <th>Активность</th>
            </tr> 

<?php 

while($res = mysqli_fetch_assoc($result))
{   
  echo '<tr>';
  echo '<td>';
  echo $res['Name'] ;
  echo '</td>';
  echo '<td>';
  echo $res['BLE'] ;
  echo '</td>';
  echo '<td>';
  echo $res['Date'] ;
  echo '</td>';
  echo '<td>';
  echo $res['InWork'];
  echo '</td>';
  echo '</tr>';


}

?>

</table>



<?php 
if(isset($_POST['srch1'])){


    $host = "localhost";
    $user = "id16269891_admin";
    $pass = "zDH)P9/TVLVpSKD%";
    $db = "id16269891_androiddb";
    $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
     $dates = $_POST['dataof1'];
     $Name = $_POST['dataof1'];

    $data1 = '';
    $data2 = '';


    $sql = "SELECT `Name`,`BLE`,`Date`,`dateIn`,`dateOut` FROM `dateinout` WHERE `Name`=  '$Name'";
    $result = mysqli_query($mysqli, $sql);

    

    $data1 = trim($data1,",");
    $data2 = trim($data2,",");

    }
?>


</form>
    <form class = "form1"  method="POST">
        <input id = "TextOK"  type="text" name="dataof1" placeholder="Введите имя">
        <input id = "butnOK"  type="submit" value="Вывести" name="srch1">
</form>

<table class="separate" border="1">
    <caption>Время подключения и отключения маяка</caption>
            <tr>
               <th>Имя</th>
               <th>Маяк</th>
               <th>Дата</th>
               <th>Приход</th>
               <th>Уход</th>
            </tr> 

<?php 

while($res = mysqli_fetch_assoc($result))
{   
  echo '<tr>';
  echo '<td>';
  echo $res['Name'] ;
  echo '</td>';
  echo '<td>';
  echo $res['BLE'] ;
  echo '</td>';
  echo '<td>';
  echo $res['Date'] ;
  echo '</td>';
  echo '<td>';
  echo $res['dateIn'];
  echo '</td>';
    echo '<td>';
  echo $res['dateOut'];
  echo '</td>';
  echo '</tr>';


}

?>

</table>




