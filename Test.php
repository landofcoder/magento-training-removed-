<!DOCTYPE HTML>
<html>
<meta charset="UTF-8">
    <?php


    $mang_a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    print_r($mang_a1);
    echo '<br>';

    $mang_a2 = array("a" => "red", "b" => "green", "c" => "blue");
    print_r($mang_a2);
    echo '<br><br>';

  foreach ($mang_a1 as $key =>$value){
    foreach ($mang_a2 as $key2 =>$value2)

    if ($value == $value2){
        echo "[" .$key . "=>".$value."]";
    }
  }
  echo"<br>"



 ?>

 <?php
 echo '----------------------------------------------<br>';

 
 $age = ["Peter"=>"35","Ben"=>"37","Joe"=>"43"];
 foreach ($age as $key =>$value){
    echo "[". (strtoupper($key)). "=>".$value."]";
 }
 ?>

</html>