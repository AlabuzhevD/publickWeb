<?php 

$connect = mysqli_connect('localhost', 'localhost', 'localhost','localhost');

if(!$connect){
die('EROR CONNECT to DB');
}