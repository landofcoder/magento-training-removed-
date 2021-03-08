
<?php
   class DemoCurl {



 public function getTitle($url) {

    $page = file_get_contents($url);
    $title = preg_match('/<title[^>]*>(.*?)<\/title>/ims', $page, $match) ? $match[1] : null;
    return $title;
}

echo 'Title: ' . getTitle('https://dantri.com.vn/xa-hoi/hai-duong-lap-doi-xu-ly-khan-cap-ho-tro-kinh-mon-dap-dich-20210306101921769.htm');

echo "<br><br><br>";


 public function getDescription($url) {
    $tags = get_meta_tags($url);
    return @($tags['description'] ? $tags['description'] : "NULL");
}

echo 'Description: ' . getDescription('https://dantri.com.vn/xa-hoi/hai-duong-lap-doi-xu-ly-khan-cap-ho-tro-kinh-mon-dap-dich-20210306101921769.htm');

echo "<br><br><br>";

public function getContend($url) {
  $cont = get_meta_tags($url);
  $title = preg_match('/<Container[^>]*>(.*?)<\/Container>/ims', $page, $match) ? $match[1] : null;
  return @($tags['contend'] ? $tags['contend'] : "NULL");
}

echo 'Contend: ' . getContend('https://dantri.com.vn/xa-hoi/hai-duong-lap-doi-xu-ly-khan-cap-ho-tro-kinh-mon-dap-dich-20210306101921769.htm');

echo "<br><br><br>";

}


public function getCurl($url)
	{
		$apiKey = $this->_token;
		try{
			$googleApiUrl="https://dantri.com.vn/xa-hoi/hai-duong-lap-doi-xu-ly-khan-cap-ho-tro-kinh-mon-dap-dich-20210306101921769.htm" 
      .$url ."&lang=en&units=metrc&APPID=" 
      .$apiKey;
​
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_VERBOSE, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$response = curl_exec($ch);
​
			curl_close($ch);
			return json_decode($response);
			
		} catch(\Exception $ce)
		{
			return null;
		}

    ;
?>


