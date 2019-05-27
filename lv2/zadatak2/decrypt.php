<?php

session_start();

$key = md5('lv2 kljuc');	
$m = mcrypt_module_open('rijndael-256', '', 'cbc', '');	
$iv = base64_decode($_SESSION['iv']);
mcrypt_generic_init($m, $key, $iv);


$files = glob('upload/*.{jpg,png,pdf}', GLOB_BRACE);
foreach($files as $key => $file) {
	
		
	
	
	echo '<a href="download.php?file='.$file.'">Download '.$file.'</a><br>';
	
	
  
  
}

mcrypt_generic_deinit($m);
mcrypt_module_close($m);



?>