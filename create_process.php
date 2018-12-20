<?php
file_put_contents(
  'data/'.$_POST['title'],$_POST['description']);
//redirection을 이용하여 새로 생성된 페이지로 이동하기
header('Location: /index.php?id='.$_POST['title']);
?>
