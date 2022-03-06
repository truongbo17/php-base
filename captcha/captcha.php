<?php 
session_start();
$path = 'images/captcha.jpeg';

//Set the Content Type
header('Content-type: image/jpeg');

// Create Image From Existing File
$jpg_image = imagecreatefromjpeg($path);

// Allocate A Color For The Text
$colorArr = [
	imagecolorallocate($jpg_image, 0, 0, 255),
	imagecolorallocate($jpg_image, 153, 51, 255),
	imagecolorallocate($jpg_image, 51, 102, 255),
	imagecolorallocate($jpg_image, 30, 58, 255),
];
$keyColor1 = array_rand($colorArr, 1);
$keyColor2 = array_rand($colorArr, 1);
$keyColor3 = array_rand($colorArr, 1);
$keyColor4 = array_rand($colorArr, 1);

// Set Path to Font File
$fontArr = [
	'fonts/Comfortaa-VariableFont_wght.ttf',
	'fonts/DaysOne-Regular.ttf',
	'fonts/GoblinOne-Regular.ttf',
	'fonts/Pattaya-Regular.ttf'
];

$keyFont1 = array_rand($fontArr, 1);
$keyFont2 = array_rand($fontArr, 1);
$keyFont3 = array_rand($fontArr, 1);
$keyFont4 = array_rand($fontArr, 1);

//Angle
$angleArr = [
	10, 15, 20, 50
];
$angleKey1 = array_rand($angleArr);
$angleKey2 = array_rand($angleArr);
$angleKey3 = array_rand($angleArr);
$angleKey4 = array_rand($angleArr);

//size
$sizeArr = [
	30, 35, 25, 40
];
$sizeKey1 = array_rand($sizeArr);
$sizeKey2 = array_rand($sizeArr);
$sizeKey3 = array_rand($sizeArr);
$sizeKey4 = array_rand($sizeArr);

// Set Text to Be Printed On Image
$captcha = uniqid();
$captcha = substr($captcha, -4);
$captcha = strtoupper($captcha);

$_SESSION['captcha'] = $captcha;

// Print Text On Image
imagettftext($jpg_image, $sizeArr[$sizeKey1], $angleArr[$angleKey1], 50, 50, $colorArr[$keyColor2], $fontArr[$keyFont3], $captcha[0]);
imagettftext($jpg_image, $sizeArr[$sizeKey3], $angleArr[$angleKey3], 90, 50, $colorArr[$keyColor4], $fontArr[$keyFont2], $captcha[1]);
imagettftext($jpg_image, $sizeArr[$sizeKey4], $angleArr[$angleKey4], 120, 50, $colorArr[$keyColor1], $fontArr[$keyFont4], $captcha[2]);
imagettftext($jpg_image, $sizeArr[$sizeKey2], $angleArr[$angleKey2], 160, 50, $colorArr[$keyColor3], $fontArr[$keyFont1], $captcha[3]);

// Send Image to Browser
imagejpeg($jpg_image);

// Clear Memory
imagedestroy($jpg_image);