<?php
function print_list(){
  $list = scandir('data');
  $i = 0;
  while($i <count($list)){
    $single = htmlspecialchars($list[$i]);
    if($single !='.' && $single != '..'){
        echo '<li><a href = "index.php?id='.$single.'">'.($i-1).'. '.$single.'</a></li>';
      }
      $i++;
    }
}

function print_title(){
   if(isset($_GET['id'])){
     echo strip_tags($_GET['id'],'<p><a><img>');
   } else {
     echo "Welcome";
   }
 }

 function print_content(){
   if(isset($_GET['id'])){
     echo htmlspecialchars(file_get_contents("data/".$_GET['id']));
   } else {
     echo "Hello, PHP";
   }
 }
 ?>
