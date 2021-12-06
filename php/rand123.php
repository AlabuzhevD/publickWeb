 <?php session_start();?>
 <?php 
  $servername = 'localhost';
  $username = 'id12527450_admin';
  $password = 'ORWma&Ky%!W8viOv';
  $database = 'id12527450_auth';

$conntoDB = mysqli_connect($servername, $username, $password, $database);
 
 ?>
 <?php 

 if(isset($_POST['OK'])){

 
$date = date('Y-m-d');
$time = date('G');

$result1 = mysqli_query($conntoDB, "SELECT * FROM `datasets` WHERE `date`= CURRENT_DATE()");
$row_cnt = mysqli_num_rows($result1);




if($row_cnt < $time){



for ($i = $row_cnt; $i <$time ; $i++) {
	if($i < 7){
		$speed=rand(60,120);
		$car = rand(100,300);
	} else if($i > 7 and $i < 12){
		$speed=rand(20,40);
		$car = rand(1500,3000);
	} else if($i > 12 and $i < 18){
		$speed=rand(60,80);
		$car = rand(500,1500);
	}
	else if($i > 18 and $i < 20){
		$speed=rand(30,50);
		$car = rand(1000,2500);
	}else if($i > 20 and $i < 24){
		$speed=rand(60,80);
		$car = rand(400,1000);
	}

$query1 ="INSERT INTO `datasets` (`ID`, `date`, `data1`, `data2`) VALUES (NULL, '$date', $speed, $car)";
$result = mysqli_query($conntoDB, $query1);
}

}

$conntoDB->close();
  
  exit("<meta http-equiv='refresh' content='0; url= /../index.php?page=121'>");

}
if(isset($_POST['OKEY'])){




$date = date("Y-m-d", time()-(60*60*24));
$result1 = mysqli_query($conntoDB, "SELECT * FROM `datasets` WHERE `date`=  DATE_ADD(CURRENT_DATE(), INTERVAL -1 DAY)");
$row_cnt = mysqli_num_rows($result1);



if($row_cnt < 24){
for ($i = 1; $i <= 24; $i++) {
	if($i < 7){
		$speed=rand(60,120);
		$car = rand(100,300);
	} else if($i > 7 and $i < 12){
		$speed=rand(20,40);
		$car = rand(1500,3000);
	} else if($i > 12 and $i < 18){
		$speed=rand(60,80);
		$car = rand(500,1500);
	}
	else if($i > 18 and $i < 20){
		$speed=rand(30,50);
		$car = rand(1000,2500);
	}else if($i > 20 and $i < 24){
		$speed=rand(60,80);
		$car = rand(400,1000);
	}
$query ="INSERT INTO `datasets` (`ID`, `date`, `data1`, `data2`) VALUES (NULL, '$date', $speed, $car)";
$result = mysqli_query($conntoDB, $query);
}
}


$conntoDB->close();

  exit("<meta http-equiv='refresh' content='0; url= /../index.php?page=121'>");

         }  



if(isset($_POST['CLEAR'])){

 
if (!$conntoDB) {
die("Не удалось соединится с базой данных: " . $conntoDB->error);
}
$sqlDelDB = "drop TABLE datasets";
if ($conntoDB->query($sqlDelDB) === TRUE)
{
}
else
{
echo "Ошибка " . $conntoDB->error;
}





$sqlCrT1 = "CREATE TABLE `datasets` (
  `ID` int(11) NOT NULL,
  `date` date NOT NULL,
  `data1` int(255) NOT NULL,
  `data2` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
if ($conntoDB->query($sqlCrT1) === TRUE)
{
}

$sqlCrT1 = "ALTER TABLE `datasets`
  ADD PRIMARY KEY (`ID`);";
if ($conntoDB->query($sqlCrT1) === TRUE)
{
}
$conntoDB->query("ALTER TABLE `datasets` CHANGE `ID` `ID` INT(11) NOT NULL AUTO_INCREMENT");
  exit("<meta http-equiv='refresh' content='0; url= /../index.php?page=121'>");
}




if(isset($_POST['srch'])){


$date = $_POST['dataof'];
$Name = $_POST['dataof'];
$result1 = mysqli_query($conntoDB, "SELECT * FROM `datasets` WHERE `date`= '$Name'");
$row_cnt = mysqli_num_rows($result1);



if($row_cnt < 24){



for ($i = 1; $i <=24-$row_cnt ; $i++) {
	if($i < 7){
		$speed=rand(60,120);
		$car = rand(100,300);
	} else if($i > 7 and $i < 12){
		$speed=rand(20,40);
		$car = rand(1500,3000);
	} else if($i > 12 and $i < 18){
		$speed=rand(60,80);
		$car = rand(500,1500);
	}
	else if($i > 18 and $i < 20){
		$speed=rand(30,50);
		$car = rand(1000,2500);
	}else if($i > 20 and $i < 24){
		$speed=rand(60,80);
		$car = rand(400,1000);
	}
$query1 ="INSERT INTO `datasets` (`ID`, `date`, `data1`, `data2`) VALUES (NULL, '$date', $speed, $car)";
$result = mysqli_query($conntoDB, $query1);
}

}
$conntoDB->close();

  exit("<meta http-equiv='refresh' content='0; url= /../index.php?page=121'>");

         }  


?>

