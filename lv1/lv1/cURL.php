<?php

require('simple_html_dom.php');
require('class_DiplomskiRadovi.php');

$data = array();
$dom = new simple_html_dom();
$dom2 = new simple_html_dom();

for ($i = 2; $i <= 6; $i++) {
	$ch = curl_init("http://stup.ferit.hr/zavrsni-radovi/page/".$i);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	$html = curl_exec($ch);
	curl_close($ch);	
	$dom->load($html);
	foreach ($dom->find('img[height="202"]') as $key => $img){
	preg_match("([^\/]+$)",$img->src, $matches);
	$data['oib'][] = substr($matches[0], 0, -4);
	
	}
	
	foreach ($dom->find('h2 a') as $key => $a){
	
	$data['link'][] = $a->href;
	$data['title'][] = $a->innertext;			
		
	}	    
}

foreach ($data['link'] as $link){
	
		
	$ch2 = curl_init($link);
	curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch2, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
	$html2 = curl_exec($ch2);
	curl_close($ch2);	
	$dom2->load($html2);
	foreach ($dom2->find('div.post-content') as $div){
		$data['text'][] = $div->plaintext;
	}		
}

$objects = array();

for($i = 0; $i<=29; $i++){
	$objects[$i] = new DiplomskiRadovi($data['title'][$i], $data['text'][$i], $data['link'][$i], $data['oib'][$i] );	
}


?>

