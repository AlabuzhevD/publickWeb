    <?php 
    
    
    $host = 'localhost';
    $user = 'id12527450_admin';
    $pass = 'ORWma&Ky%!W8viOv';
    $db = 'id12527450_auth';

    $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
    $sql = "SELECT * FROM `News`";
    $result = mysqli_query($mysqli, $sql);
    mysqli_close($mysqli);
    
    ?>