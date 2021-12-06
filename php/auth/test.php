<?php 
session_start();
if (!$_SESSION['user']) {
    header('Location: ../../index.php?page=1');
}


?>