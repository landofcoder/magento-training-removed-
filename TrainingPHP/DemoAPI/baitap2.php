<?php 

class WeatherGeteWay
{
	protected $_token;

	public function __construct(
		$token
	)
	{
		$this->_token = $token;
	}

	public function getJsonCode()
	{
		$str = file_get_contents('city.list.json');
		return json_decode($str,true);
		printf($str);
	}
	public function getWeatherBylocal($l_on , $l_at)
	{
		$local = [
			'lon' => $l_on,
			'lat' => $l_at,
		];
		$arrJson = $this->getJsonCode();
		$cityId = "";
		foreach ($arrJson as $key => $value) {
			if (array_diff($local,$value['coord'])) {
				$cityId = $value['id'];
				break;
			}
		}
		try{
			return $this->getWeatherByCityId($cityId);
		}catch (\Exception $ce){
			return null;
		};
	}
	public function getWeatherByCityName($cityName)
	{
		$arr = $this->getJsonCode();
		$cityId = "";
		foreach ($arr as $key => $value) {
			if(strcmp($cityName, $value['name']))
			{
				$cityID = $value['id'];
				break;
			}
		}
		try{
			return $this->getWeatherByCityId($cityId);
		}catch(\Exception $ce)
		{
			return null;
		};
	}
	public function getWeatherByCityId($cityId)
	{
		$apiKey = $this->_token;
		try{
			$googleApiUrl="http:/api.openweathermap.org/data/2.5/weather?id=" .$cityId ."&lang=en&units=metrc&APPID=" .$apiKey;

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_VERBOSE, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$response = curl_exec($ch);

			curl_close($ch);
			return json_decode($response);
			
		} catch(\Exception $ce)
		{
			return null;
		}
	}
}



