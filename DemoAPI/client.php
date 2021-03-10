<?php

include_once('baitap2.php');

echo $_POST['abc'];
echo $_POST['xyz'];

$weather = new WeatherGeteWay('e02d4ea0641cfc5f9d2571c06832228e');

$data = $weather->getWeatherBylocal($_POST['abc'] , $_POST['xyz'] );

include_once('formweather.php');
//header("location: formweather.php");

?>