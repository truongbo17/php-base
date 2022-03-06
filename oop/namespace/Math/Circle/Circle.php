<?php
namespace Math\Circle;

require_once __DIR__ . '/../Constant.php';
use Math\Constant;
use DateTime;

class Circle{
	public function getAreaCircle($radius){
		return Constant::PI * $radius * $radius;
	}

	public function getTimestamp()
	{
		$dateTime = new DateTime();
		return $dateTime->getTimestamp();
	}
}

// -> nếu không use namespace DateTime vào (DateTime là class global) thì nó sẽ hiểu là dùng DateTime của namespace Math\Circle vì chịu ảnh hưởng từ namespace
// class DateTime{
// 	public function getTimestamp()
// 	{
// 		return date('Y-m-d H:i:s');
// 	}
// }