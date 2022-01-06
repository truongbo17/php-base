<?php 
// require_once 'autoload.php';
require_once '../vendor/autoload.php';
use App\Http\Controllers\HomeController;
use App\Product;

$product = new Product;
$home = new HomeController($product);
echo $home->index();