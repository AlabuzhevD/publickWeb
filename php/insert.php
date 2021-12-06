<?php 
 if(isset($_POST['insert'])){

    $servername = 'localhost';
    $username = 'id12527450_admin';
    $password = 'ORWma&Ky%!W8viOv';
    $database = 'id12527450_auth';

    $conntoDB = mysqli_connect($servername, $username, $password, $database);
    
    $newsName=$_POST['name'];
    $usertext=$_POST['usertext'];
    $caps=$_POST['capc'];
    $rand=$_POST['rand'];

    $date = date('Y-m-d');
    if($rand== $caps and $newsName != "" and $usertext != ""){
    $query1 ="INSERT INTO `News` (`ID`, `Name`, `Text`, `Time`) VALUES (NULL, '$newsName','$usertext', '$date')";
    $result = mysqli_query($conntoDB, $query1);

    $conntoDB->close();
}
    exit("<meta http-equiv='refresh' content='0; url= /../index.php?page=insert'>");

 }
    
    
    ?>