<?php
$servername = "localhost";
$username = "localhost";
$password = "localhost";
$dbname = "localhost";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("failed: ".mysqli_connection_error());
}


$Stop = $_POST['Stop'];
if($Stop == "1"){
$data = $_POST['data'];
$datao = $_POST['datao'];
$datas = $_POST['datas'];
$name = $_POST['name'];
$sql = "INSERT INTO `dateinout` (`dateIn`, `dateOut`, `Date`, `Name`,`BLE`) VALUES ('$data', '$datao', '$datas', '$name','$name')";
}else{
$data = $_POST['data'];
$Name = $_POST['Name'];
$InWork = $_POST['InWork'];    
$sql = "INSERT INTO `process` ( `InWork`, `Date`, `Name`,`BLE` ) VALUES ('$InWork', '$data', '$Name', '$Name')";
    
    
}




if(mysqli_query($conn,$sql)){
    echo "success";
}else{
    echo "failed";}