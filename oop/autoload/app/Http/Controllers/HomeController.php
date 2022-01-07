<?php 
namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\Traits\UploadImage;
use App\Traits\Logger;
use App\Databases\DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Interfaces\Notification;

class HomeController{
	use UploadImage, Logger;

	private $__product;

	//type hinting là array thì viết : array $product (lên doc PHP đọc)
	public function __construct(Product $product, Notification $mail)
	{
		//type hinting: biến product truyền vào phải là instance của Product
		$this->__product = $product;
		$this->mail = $mail;
	}

	public function index()
	{
		$dbConnect = DB::getInstance();
		$query = $dbConnect->prepare("SELECT * FROM user");
		$query->execute();
		$result = $query->fetchAll();

		// echo '<pre>';
		// var_dump($result);
		// echo '</pre>';
//------------------------------------------------------------------------
		// return $this->logger() .' --- '. $this->uploadImage();


		// $user = new User();
		// $users = $user->getListUser();

		// $products = $this->__product->listProduct();

		// return $products;

		// require_once (ROOT_PATH . 'resource/views/home.php');
//-------------------------------------------------------------------------

		echo $this->mail->send();
		echo 'Send Mail Success !';
	}

	public function login()
	{ 
		echo $this->mail->send();
		echo 'Send Mail Success in login !';
	}
}