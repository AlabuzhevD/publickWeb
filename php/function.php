<?php 

function get_start($link){

	$sql = "SELECT `ID`,`date`,`time`,`speed`,`place` FROM `date`";
	
	$result = mysqli_query($link, $sql);

	$start = mysqli_fetch_all($result, MYSQLI_ASSOC);


return $start;
}


