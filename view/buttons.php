<a class="button" href="create.php">create</a>
<?php if(isset($_GET['id'])) {?>
  <a class="button" href="update.php?id=<?=$_GET['id']?>">update</a>
  <a class="button" href="confirm.php?id=<?=$_GET['id']?>">delete</a>
  <!--
  <a href="update.php?id=<?php echo $_GET['id']?>">update</a>
  와 동일한 문장이다
  -->
<?php } ?>
