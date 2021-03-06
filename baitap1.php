<?php 
$mang_a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$mang_a2 = array("a"=>"red","b"=>"green","c"=>"blue");

echo "Gia tri trung nhau cua 2 mang la :";
echo "<br>";

foreach ($mang_a1 as $key => $value) {
foreach ($mang_a2 as $key2 => $value2) {
	if ($value==$value2) {
	echo "[" . $key ."=>". $value ."]";
}
}
}



//Cau B
echo "<br>";
echo "Chuyen key thanh chu in hoa";
echo "<br>";
$arrayName = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");


foreach ($arrayName as $key3 => $value3) {
	echo "[". (strtoupper($key3)) ."=>". $value3 ."]";
}
   

   echo "<br>";

   echo "Kieu Moi";
   echo "<br>";
   print_r(array_change_key_case($arrayName, CASE_UPPER));


?>
<br>
<br>
<br>

   
    <?php
        function ham_chuyen_doi_kieu ($input, $ucase)  
		{  
		 

		  $narray = array();  
		  if (!is_array($input))  
		  {  
		    return $narray;  
		  }  

		  foreach ($input as $key => $value)  

		  {  
		    if (is_array($value))  
		      {  
		        $narray[$key] = ham_chuyen_doi_kieu($value, $ucase);  
		        continue;  
		      }  
		      else
		      {
		    	$narray[$key] = ($ucase == CASE_UPPER ? strtoupper($value) : strtolower($value)); 
		      } 
		  }  
		  return $narray;  
		}  


		$mang_ban_dau = array('a' => 'Blue', 'b' => 'Green', 'c' => 'Red');  
		echo 'Mảng ban đầu: <br>';  
		print_r($mang_ban_dau);  

		echo '<br>Các giá trị ở dạng chữ thường.<br>';  
		$mang_dang_chu_thuong = ham_chuyen_doi_kieu($mang_ban_dau,CASE_LOWER);  
		print_r($mang_dang_chu_thuong);  

		echo '<br>Các giá trị ở dạng chữ hoa.<br>';  
		$mang_dang_chu_hoa = ham_chuyen_doi_kieu($mang_ban_dau,CASE_UPPER);  
		print_r($mang_dang_chu_hoa);
    ?>
