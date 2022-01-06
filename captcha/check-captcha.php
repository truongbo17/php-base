<?php 
session_start();
$data = json_decode(file_get_contents('php://input'), true);
if(!empty($data['captcha'])){
	$captchaSession = $_SESSION['captcha'];
	$captcha = $data['captcha'];

	if($captcha == $captchaSession){
		$data = 'Success';
	}else{
		$data = 'Fail';
	}
}else{
	$data = 'Please fill to captcha';
}

/* Send success to fetch API */
die(json_encode([
  'value' => 1,
  'error' => null,
  'data' => $data, // or ?array of data ($response) you wish to send back to JS
]));