<?php

 $data = "a1 2 3 ababababa";

$partern = "/\d/";

if (preg_match_all($partern, $data , $match)) {
	var_dump($match);
	echo "Ok";
}else{
	echo "No";
}

?>

