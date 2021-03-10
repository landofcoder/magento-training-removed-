<?php

include_once('baitap2.php');

$_POST['abc'];
$_POST['xyz'];

$weather = new WeatherGeteWay('e02d4ea0641cfc5f9d2571c06832228e');

$data = $weather->getWeatherBylocal($_POST['abc'] , $_POST['xyz'] );

include_once('formweather.php');
//header("location: formweather.php");

?>