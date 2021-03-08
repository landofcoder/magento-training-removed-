<?php

class createCURL 
{


	public function getHeader($url)
	{
	    $haui = file_get_contents($url);
	    $header = preg_match('/<header[^>]*>(.*?)<\/header>/ims', $haui, $match) ? $match[1] : null;
	    return $header;
	}
	public function getTitle($url) 
	{
	    $page = file_get_contents($url);
	    $title = preg_match('/<title[^>]*>(.*?)<\/title>/ims', $page, $match) ? $match[1] : null;
	    return $title;
	   
	   
	}
	public function getDescription($url) {
	    $tags = get_meta_tags($url);
	    return @($tags['description'] ? $tags['description'] : "NULL");
	   
	    	
	}
	// get web page meta description
	
	public function getContent($url){
		$cont = file_get_contents($url);
		$content = preg_match('/<section page-detail top-detail[^>]*>(.*?)<\/section page-detail top-detail>/ims', $cont , $match) ? $match[1] : null;
		return $content;	
		return $this->getCurl();
	}

}
	
?>