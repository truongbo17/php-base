<?php 
// require_once 'autoload.php';
require_once '../vendor/autoload.php';
require_once __DIR__ . '/../config/Constant.php';

use App\Http\Controllers\HomeController;
use App\Product;
use App\DemoStatic\DemoStatic;
use App\Mail\Mail;

$mail = new Mail;
// var_dump($mail);die;
$product = new Product;
$home = new HomeController($product, $mail);

echo $home->index();

echo '<br>';

//scope variable : phạm vi truy cập của biến

$variableGLobal = 10;

function test()
{
	// global $variableGLobal;
	// echo $variableGLobal;
	$variableFunction = 15; 
	// return $variableFunction;

	$GLOBALS['c'] = 'biến trong function truy cập ra bên ngoài global';
}

// test();

// echo $GLOBALS['c'];

// echo $variableGLobal;



/*Static*/
function test1(){
	static $count = 0;
	return $count++;
}

// echo test1();
// echo test1();
// echo test1();
// echo test1();


// echo DemoStatic::$name;
echo '<br>';
// echo DemoStatic::getJob();

// $demoStatic1 = new DemoStatic();
// echo $demoStatic1->count;
// echo $demoStatic1->getCountStatic();
// echo '<br>';

// $demoStatic2 = new DemoStatic();
// echo $demoStatic2->count;
// echo $demoStatic2->getCountStatic();
// echo '<br>';

// $demoStatic3 = new DemoStatic();
// echo $demoStatic3->count;
// echo $demoStatic3->getCountStatic();
// echo '<br>';

	








