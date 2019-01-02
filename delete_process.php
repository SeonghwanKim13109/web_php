<?php
  $var = $_POST['confirm'];
  $var2 = $_POST['id'];
  // echo $var;
  // echo $var2;
  if(isset($var)){
    if($var=='yes'){
      unlink('data/'.$_POST['id']);
      header('Location: /index.php');
    }
    elseif ($var=='no') {
      // code...
      header('Location: /index.php?id='.$_POST['id']);
    }
  }
?>
