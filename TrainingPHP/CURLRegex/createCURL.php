<?php

class createCURL 
{
	
	
	public function getMainCurl()
	{
		try{
			$url="https://vnexpress.net/nu-chuyen-gia-bao-mat-chuyen-dong-vai-hacker-4244665.html";
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_VERBOSE, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$response = curl_exec($ch);
		    echo htmlspecialchars($response);
			curl_close($ch);
			
		} catch(\Exception $ce)
		{
			return null;
		}
	}

}

$connect = new createCURL();
echo $connect->getMainCurl();




	
?>