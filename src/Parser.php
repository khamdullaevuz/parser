<?php

namespace KhamdullaevUz\Parser;

class Scraper
{
	public function getContent($url){
		$options = [
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_FOLLOWLOCATION => TRUE,
            CURLOPT_AUTOREFERER => TRUE,
            CURLOPT_CONNECTTIMEOUT => 120,
            CURLOPT_TIMEOUT => 120,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_USERAGENT => "Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1a2pre) Gecko/2008073000 Shredder/3.0a2pre ThunderBrowse/3.2.1.8",
            CURLOPT_URL => $url,
        ];
         
        $ch = curl_init();
        curl_setopt_array($ch, $options);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
	}

	public function cutContent($data, $start, $end){
		$data = stristr($data, $start);
        $data = substr($data, strlen($start));
        $stop = stripos($data, $end);
        $data = substr($data, 0, $stop);
        return $data;
	}

	public function jsonContent($data=[]){
		return json_encode($data);
	}

	public function exp($value)
	{
		$data = explode("\n", $value);
        array_unshift($data, " ");
        return $data;
	}
}