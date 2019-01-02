<?php
  require('view/up.php');
  require('view/buttons.php'); 
?>

  <form action="update_process.php" method="post">
    <!-- 보여지지 않으면서 정보를 수정해야할때는 hidden tag를 사용한다-->
    <input type ="hidden" name="old_title" value="<?=$_GET['id']?>">
    <p><input type="text" name="title" placeholder="title" value="<?php print_title(); ?>"></p>
    <p><textarea name="description" rows="8" cols="80"><?php print_content(); ?></textarea></p>
    <p> <input type="submit"value="submit"> </p>
  </form>
<?php require('view/bottom.php'); ?>
