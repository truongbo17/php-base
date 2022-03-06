<?php 
// require_once 'autoload.php';
require_once '../vendor/autoload.php';
require_once __DIR__ . '/../config/Constant.php';

use App\Http\Controllers\HomeController;
use App\Product;
use App\Mail\Slack;

$slack = new Slack();
$product = new Product();
$home = new HomeController($product, $slack);
echo $home->login();