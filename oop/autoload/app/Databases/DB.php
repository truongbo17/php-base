<?php 
namespace App\Databases;
use PDO;

class DB{
	protected static $instance;

	public static function getInstance()
	{
		//$instance đại điện cho lớp kết nối database,nếu trống thì khởi tạo đối tượng database còn không thì giữ nguyên vì static lưu lại giá trị không cần phải new DB nhiều lần
		if(empty(self::$instance)){
			self::$instance = new PDO('mysql:host=localhost;dbname=mvc', 'root', ''); //chỉ được new duy  nhất 1 lần
		}

		return self::$instance;
	}
}