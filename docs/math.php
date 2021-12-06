<?php
session_start();
if(isset($_SESSION['user'])) { 
     
}else{
    
     echo '<script src="js/href.js"></script>';
     exit;
    
}

?>




<?php

    $sql = "SELECT MAX(data1) as 'speedM', MIN(data1) as 'speedMi', AVG(data1) as 'speedAvg', AVG(data2) as 'carAVG' FROM `datasets` where `date`=  CURRENT_DATE()";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
    $speedM = $row['speedM'];
    $speedMi = $row['speedMi'];
    $speedAVG = round($row['speedAvg']);
    $carAVG = round($row['carAVG']);
     }

?>

<?php

    $sql = "SELECT MAX(data1) as 'speedC' FROM `datasets`";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
    $speedC = $row['speedC'];
}

?>

<?php

    $sql = "SELECT MIN(data1), date as 'speedD' FROM `datasets` ";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
    $speedD = $row['speedD'];
}

?>

<?php

    $sql = "SELECT MIN(data1) as 'speedMin', date as 'dateMin' FROM `datasets` ";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {
    $speedMinall = $row['speedMin'];
    $dateMin = $row['dateMin'];
}

?>

<h1>Значения</h1>
<p>Среднее значение скорости за сегодняшний день: <?php echo $speedAVG ?> км/ч </p>
<p>Среднее количество машин за сегодняшний день: <?php echo $carAVG ?> </p>
<p>Максимальная скорость за сегодня:  <?php echo $speedM ?> км/ч</p>
<p>Минимальная скорость за сегодня: <?php echo $speedMi ?> км/ч</p>
<p>Максимально зафиксированная скорость: <?php echo $speedC ?> км/ч </p>
<p>Дата максимально зафиксированной скорости: <?php echo $speedD ?></p>
<p>Минимально зафиксированная скорость: <?php echo $speedMinall ?> км/ч </p>
<p>Дата минимально зафиксированной скорости: <?php echo $dateMin ?></p>
