<?php 
session_start();
if(isset($_SESSION['user'])) { 
    
}else{
    
    // exit("<meta http-equiv='refresh' content='0; url= index.php?page=1'>");
     echo '<script src="js/href.js"></script>';
     exit;
}
?>


<?php   
if(isset($_POST['YESTER'])){  
           
    $data1 = '';
    $data2 = '';


    $sql = "SELECT * FROM `datasets` WHERE `date`=  DATE_ADD(CURRENT_DATE(), INTERVAL -1 DAY)";
    $result = mysqli_query($mysqli, $sql);

    while ($row = mysqli_fetch_array($result)) {

        $date = $date . '"'. $row['date'].'",';
        $data1 = $data1 . '"'. $row['data1'].'",';
        $data2 = $data2 . '"'. $row['data2'] .'",';
        $date2 = $row['date'];
    }

    $data1 = trim($data1,",");
    $data2 = trim($data2,",");

    }
    else if(isset($_POST['srch1'])){

     $dates = $_POST['dataof1'];
     $Name = $_POST['dataof1'];

    $data1 = '';
    $data2 = '';


    $sql = "SELECT * FROM `datasets` WHERE `date`=  '$Name'";
    $result = mysqli_query($mysqli, $sql);

    while ($row = mysqli_fetch_array($result)) {

        $date = $date . '"'. $row['date'].'",';
        $data1 = $data1 . '"'. $row['data1'].'",';
        $data2 = $data2 . '"'. $row['data2'] .'",';
        $date2 = $row['date'];
    }

    $data1 = trim($data1,",");
    $data2 = trim($data2,",");

    }
    else{ 
    


    $data1 = '';
    $data2 = '';


    $sql = "SELECT * FROM `datasets` WHERE `date`= CURRENT_DATE() ";
    $result = mysqli_query($mysqli, $sql);

    while ($row = mysqli_fetch_array($result)) {

        $date = $date . '"'. $row['date'].'",';
        $data1 = $data1 . '"'. $row['data1'].'",';
        $data2 = $data2 . '"'. $row['data2'] .'",';
        $date2 = $row['date'];
    }

    $data1 = trim($data1,",");
    $data2 = trim($data2,",");}

?>

<script src="./js/Chart.js"></script>

<div class="container"> 
<div class = "randomDate">
    <form class = "randomDate1"  action="php/rand123.php " method="post">

        <input class = "butnOK" type="submit" value="Сгенерировать данные Сегодня" name="OK">
        <input class = "butnOK"  type="submit" value="Сгенерировать данные Вчера" name="OKEY">
        
        

        <input class = "butnOK"  type="submit" value="Сгенерировать данные на выбранное число" name="srch">
                <input class = "TextOK"  type="text" name="dataof" placeholder="Введите дату">

    </form>
    <form class = "randomDate2"  method="POST">
        <input class = "butnOK"  type="submit" value="Вывести данные сегодня" name="TODAY">
        <input class = "butnOK"  type="submit" value="Вывести данные вчера" name="YESTER">


        <input class = "butnOK"  type="submit" value="Вывести данные на выбранное число" name="srch1">
                <input class = "TextOK"  type="text" name="dataof1" placeholder="Введите дату">
</form>

<form class = "randomDate1"  action="php/rand123.php " method="post">

<input class = "butnOK"  type="submit" value="Очистить график" name="CLEAR">
 </form>
 

</div>
<a href="index.php?page=math">Вывести значения.</a>

        <h2>График скорости и количество машин <?php echo $date2; ?> </h2>       
            <canvas id="chart"></canvas>


<div
  class='hidden3'

  data-lat='[<?php echo $data1; ?>]'
  data-lng='[<?php echo $data2; ?>]'
></div>


        </div>
        <script src="js/jquery-3.5.0.min.js"></script>
        <script src="./js/graf.js"></script>
        
 

