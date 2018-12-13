<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Conditional Statement</h1>
    <h2>if</h2>
    <?php
      $count = 0;
      echo '<strong>1</strong><br>';
      $count++;
      echo '2<br>';
      $count++;
      if($count == 3){
        echo '3<br>';
      }else{
        echo var_dump($count)."<br>";
      }
      echo '4<br>';
      echo '5<br>';
     ?>
  </body>
</html>
