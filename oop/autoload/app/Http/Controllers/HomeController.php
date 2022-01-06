<?php 
namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\Traits\UploadImage;
use App\Traits\Logger;

class HomeController{
	use UploadImage, Logger;

	private $__product;

	//type hinting là array thì viết : array $product (lên doc PHP đọc)
	public function __construct(Product $product)
	{
		//type hinting: biến product truyền vào phải là instance của Product
		$this->__product = $product;
	}

	public function index()
	{
		// return $this->logger() .' --- '. $this->uploadImage();


		// $user = new User();
		// $users = $user->getListUser();

		$products = $this->__product->listProduct();

		return $products;
	}
}