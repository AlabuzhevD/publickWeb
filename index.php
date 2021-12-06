<?php 
session_start();

?>


<?php
include 'php/allnews.php';
?>



<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="utf-8">
  <title>Радары скорости</title>
  <link rel="stylesheet" type="text/css" href="css/skillet.css">
   <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
   <link rel="stylesheet" type="text/css" href="./php/auth/css/main.css">





 </head>

 <body>
  <div id="header">    
    <p> КОРДОН </p>
<div id="menuds">  
   <div id="tabs32">
      <?php

if (isset($_GET['page'])) { $page=$_GET['page']; }

if (isset($page)) 
  {
   switch ($page)
    {case '1': include './menu/page7.php' ;break; 
    case 'complc': include './menu/page1.php' ;break; 
    case 'function': include './menu/page1.php' ;break; 
    case 'garant': include './menu/page1.php' ;break;
    case '121': include './menu/page5.php' ;break; 
    case 'math': include './menu/page5.php' ;break;
    case '2': include './menu/page2.php' ;break;  
    case '3': include './menu/page3.php' ;break; 
    case '5': include './menu/page3.php' ;break; 
    case '6': include './menu/page3.php' ;break; 
    case '7': include './menu/page3.php' ;break; 
    case '8': include './menu/page3.php' ;break; 
    case '9': include './menu/page3.php' ;break;
    case 'wr': include './menu/page3.php' ;break;
    case '4': include './menu/page4.php' ;break;  
    case '10': include './menu/page3.php' ;break; 
    case 'sc': include './menu/page6.php' ;break;
    default:  include './menu/pagetrue1.php'  ; break;
    }
  }
else
   include './menu/page1.php'   ;
?>
</div>
</div>


<div id="menumob">  
   <div id="tabs31">
    <input id="show" type="button" value="Открыть меню" >
    <div id = "mbshow">
  <?php

if (isset($_GET['page'])) { $page=$_GET['page']; }

if (isset($page)) 
  {
   switch ($page)
    {case '1': include './menu/page72.php' ;break; 
    case 'complc': include './menu/page12.php' ;break; 
    case 'function': include './menu/page12.php' ;break; 
    case 'garant': include './menu/page12.php' ;break;
    case '121': include './menu/page52.php' ;break; 
    case 'math': include './menu/page52.php' ;break;
    case '2': include './menu/page22.php' ;break;  
    case '3': include './menu/page32.php' ;break; 
    case '5': include './menu/page32.php' ;break; 
    case '6': include './menu/page32.php' ;break; 
    case '7': include './menu/page32.php' ;break; 
    case '8': include './menu/page32.php' ;break; 
    case '9': include './menu/page32.php' ;break;
    case 'wr': include './menu/page32.php' ;break;
    case '4': include './menu/page42.php' ;break;  
    case '10': include './menu/page52.php' ;break;  
    case 'sc': include './menu/page62.php' ;break;
    default:  include './menu/pagetrue2.php'  ; break;
    }
  }
else
   include './menu/page12.php'   ;
?>
</div>
</div>
</div>
  </div>
    <div id="sidebar">
    <a href="index.php?page=insert">Оставьте свой комментарий</a>
    <p>Последние сообщения пользователей:</p>
     
    <?php
        $row_cnt = mysqli_num_rows($result);
        $i = 1;
        $cnt = $row_cnt - $i;
        $j = 0;
    while ($row = mysqli_fetch_array($result)) {
        
        $j++;
        if($j <=$cnt){}else{

       echo "<hr><p> Пользователь: ".$row['Name']."</p><p> Написал:  ".$row['Text']."</p><p> Дата: ".$row['Time']."</p><hr>";}

    }
    
    
   


    ?>
    

  </div>

  <div id="content">


      <?php

if (isset($_GET['page'])) { $page=$_GET['page']; }

if (isset($page)) 
  {
   switch ($page)
    {
    case '1': include './php/auth/login.php' ;break;
    case 'complc': include './docs/complc.php' ;break; 
    case 'function': include './docs/function.php' ;break; 
    case 'garant': include './docs/garant.php' ;break; 
    case '121': include './docs/char.php' ;break;
    case 'wr': include './docs/wkradar.php' ;break;
    case '2': include './docs/news.php' ;break; 
    case '3': include './docs/document.php' ;break;
    case '4': include './docs/contact.php' ;break;
    case '5': include './docs/doc_har.php' ;break; 
    case '6': include './docs/oblast.php' ;break; 
    case '7': include './docs/osobenost.php' ;break;    
    case '8': include './docs/primec.php' ;break;   
    case '9': include './docs/gallery.php' ;break; 
    case '10': include './docs/deystvie.php' ;break;
    case 'insert': include './docs/newstwo.php' ;break;
    case 'math': include './docs/math.php' ;break;
    
    case 'sc': include './docs/secret.php' ;break;
    case 'auth': include './php/login.php' ;break;
    case 'register': include './php/registr.php' ;break;
     case 'logout': include './php/logout.php' ;break;

     default:  include './docs/error.php'  ; break;
     
    }
  }
else
   include './docs/open.php'   ;
?>




    
  </div>
  <div id="footer">&copy; Алабужев Денис <p>
	<a href="http://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Funchewed-energizer.000webhostapp.com%2Findex.php&profile=css3svg&usermedium=all&warning=1&vextwarning=">
		<img style="border:0;width:88px;height:31px"
			src="//jigsaw.w3.org/css-validator/images/vcss"
			alt="Правильный CSS!" />
	</a>
</p> </div>
   <script src="./js/menu.js"></script>
 </body>


</html>