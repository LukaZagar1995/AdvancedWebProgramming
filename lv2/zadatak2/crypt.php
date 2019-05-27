<?php

session_start(); 

if ( isset( $_POST['submit'] ) ) {
	
$key = md5('lv2 kljuc');
	
$uploaddir = 'upload/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);

$data = file_get_contents($_FILES['file']['tmp_name']);



$m = mcrypt_module_open('rijndael-256', '', 'cbc', '');

$iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($m), MCRYPT_DEV_RANDOM);

mcrypt_generic_init($m, $key, $iv);

$data = mcrypt_generic($m, $data);

mcrypt_generic_deinit($m);
mcrypt_module_close($m);

$data = base64_encode($data);

file_put_contents($uploadfile, $data);

$_SESSION['iv'] = base64_encode($iv);

}

?>