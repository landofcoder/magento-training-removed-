<?php
​
include_once('TestAPI.php');
​
echo $_POST['Kinh Do'];
echo $_POST['Vi Do'];
​
$weather = new WeatherAPI('9f446c29c6a2ef6dd7f9843927f4ef6b');
​
$data = $weather->getWeatherBylocal($_POST['Kinh Do'] , $_POST['Vi Do'] );
​
// include_once('index.php');
​
?>