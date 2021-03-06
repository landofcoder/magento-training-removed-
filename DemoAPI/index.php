<?php
$currentTime = date('m/d/Y h:i:s a', time());
?>
<html>
<head>
<title>Forecast Weather using OpenWeatherMap with PHP</title>
</head>
<style type="text/css">
    .report-container
    {
        margin-left: 500px;
    }
</style>
<body>
​
    <div class="report-container">
        <form method="post" action="show.php" >
            Kinh Do <input type="text" name="Kinh Do" required >
             Vi Do  <input type="text" name="Vi Do" required ><br><br>

             <input type="submit" name="weather" value="Weather" style="height: 20 px;">
​
        <?php
        if (isset($data)) {
            ?>
            <h2><?php echo $data->name; ?> Weather Status</h2>
            <div class="time">
                <div><?php echo $currentTime; ?></div>
                <div><?php echo $currentTime; ?></div>
                <div><?php echo ucwords($data->weather[0]->description); ?></div>
            </div>
            <div class="weather-forecast">
                <img
                    src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                    class="weather-icon" /> <?php echo $data->main->temp_max; ?>°C</span>
                    class="min-temperature"><?php echo $data->main->temp_min; ?>°C</span>
            </div>
            <div class="time">
                <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
                <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
            </div>
            <?php
        }
        ?>
        </form>
    </div>
</body>
</html>


<!-- 105.883331
21.116671 -->
