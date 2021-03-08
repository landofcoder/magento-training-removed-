<?php

include_once("createCURL.php");



$null = new createCURL();  
echo $null->getHeader("https://vnexpress.net/tuong-lop-cuu-nan-tren-nhung-cung-duong-deo-doc-4243437.html");
echo "<br>";
echo $null->getTitle("https://vnexpress.net/tuong-lop-cuu-nan-tren-nhung-cung-duong-deo-doc-4243437.html");
echo "<br>";
echo $null->getDescription("https://vnexpress.net/tuong-lop-cuu-nan-tren-nhung-cung-duong-deo-doc-4243437.html");
echo "<br>";
echo "<br>";
include_once('formCURL.php');
//header("location: formweather.php");

?>