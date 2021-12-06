<?php
session_start();
if(!isset($_SESSION['user'])) { 
     echo '<script src="js/href.js"></script>';
     exit;
}

?>

<h1>Секретная страница</h1>
<h2>Создание базы с данными</h2>
<p>CREATE TABLE `datasets` (</p>
<p>  `ID` int(11) NOT NULL,</p>
<p>  `date` date NOT NULL,</p>
<p>    `data2` varchar(255) NOT NULL</p>
<p>`data1` varchar(255) NOT NULL,</p>
<p>) ENGINE=InnoDB DEFAULT CHARSET=utf8;</p>
<p>ALTER TABLE `datasets`  </p>
<p>ADD PRIMARY KEY (`ID`);</p>
<p>  ALTER TABLE `datasets`</p>
<p>MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;</p>
<p>COMMIT;</p>
