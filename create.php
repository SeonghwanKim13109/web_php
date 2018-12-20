<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>
     <?php
     include 'include.php';
      print_title();
     ?>
   </title>
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
    print_list();
    ?>
    <form action="create_process.php" method="post">
      <p><input type="text" name="title" placeholder="title"></p>
      <p><textarea name="description" rows="8" cols="80"></textarea></p>
      <p> <input type="submit"value="submit"> </p>
    </form>
 </body>
</html>
