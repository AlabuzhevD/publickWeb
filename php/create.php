<?php 
            $host = 'localhost';
    $user = 'id12527450_admin';
    $pass = 'ORWma&Ky%!W8viOv';
    $db = 'id12527450_auth';

$conntoDB = mysqli_connect($servername, $username, $password, $database);
$sqlCrT1 = "CREATE TABLE `datasets` (
  `ID` int(11) NOT NULL,
  `date` date NOT NULL,
  `data1` int(255) NOT NULL,
  `data2` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
if ($conntoDB->query($sqlCrT1) === TRUE)
{
}
$conntoDB->query("INSERT INTO `datasets` ( `date`, `data1`, `data2`) VALUES
('$date', $speed, $car);
");
$sqlCrT1 = "ALTER TABLE `datasets`
  ADD PRIMARY KEY (`ID`);";
if ($conntoDB->query($sqlCrT1) === TRUE)
{
}
$conntoDB->query("ALTER TABLE `datasets`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;");
?>

