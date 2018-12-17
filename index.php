<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title></title>
 </head>
 <body>
   <h1><a href="index.php">WEB</a></h1>
   <!-- list는 목차가 추가될 때마다 수동으로 바껴야 하는 부분 -->
   <!-- <ol>
     <li><a href="index.php?id=HTML">HTML</a></li>
     <li><a href="index.php?id=CSS">CSS</a></li>
     <li><a href="index.php?id=JavaScript">JavaScript</a></li>
     <li><a href="index.php?id=PHP">PHP</a></li>
   </ol> -->
   <!--
    data 디렉토리에 있는 파일의 목록을 가져온다
    파일의 목록의 각 개체 마다 li 와 a 태그를 이용하여 목록을 추가한다
    -->
    <?php
    $list = scandir('data');
    $i = 0;
    while($i <count($list)){
      if($list[$i] !='.' && $list[$i] != '..'){
          echo '<li><a href = "index.php?id='.$list[$i].'">'.$list[$i].'</a></li>';
        }
      $i++;
    }
    ?>
   <h2>
   <?php
     if(isset($_GET['id'])){
       echo $_GET['id'];
     } else {
       echo "Welcome";
     }
   ?>
   </h2>
   <?php
     if(isset($_GET['id'])){
       echo file_get_contents("data/".$_GET['id']);
     } else {
       echo "Hello, PHP";
     }
   ?>
 </body>
</html>
