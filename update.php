<!DOCTYPE html>
<html>
 <head>
   <link rel="stylesheet" href="link.css">
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
    <a class ="button" href="create.php">create</a>
    <?php if(isset($_GET['id'])) {?>
      <a class="button" href="update.php?id=<?=$_GET['id']?>">update</a>
      <a class="button" href="confirm.php?id=<?=$_GET['id']?>">delete</a>
      <!--
      <a href="update.php?id=<?php echo $_GET['id']?>">update</a>
      와 동일한 문장이다
      -->
    <?php } ?>

    <!-- 수정이 필요한 부분
   <h2>
   <?php
   print_title();
   ?>
   </h2>
   <?php
    print_content();
   ?>
 -->
  <form action="update_process.php" method="post">
    <!-- 보여지지 않으면서 정보를 수정해야할때는 hidden tag를 사용한다-->
    <input type ="hidden" name="old_title" value="<?=$_GET['id']?>">
    <p><input type="text" name="title" placeholder="title" value="<?php print_title(); ?>"></p>
    <p><textarea name="description" rows="8" cols="80"><?php print_content(); ?></textarea></p>
    <p> <input type="submit"value="submit"> </p>
  </form>
 </body>
</html>
