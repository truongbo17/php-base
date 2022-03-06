<?php 
/*
	Anonymous function
	IIFE
	Closure
	Callbacl
*/

/*Anonymous Function : là hàm ẩn danh không có tên */

//định nghĩa hàm ẩn danh
function(){
	echo 'Anonymous function';
};

//gọi hàm ẩn danh
$param2 = 'JS';
call_user_func(function($param1,$param2){
	echo 'Anonymous function' . $param1 . $param2;
}, 'PHP', $param2);

echo '<br>';

/*IIFE : Gọi hàm ngay khi khởi tạo*/
$param1 = 'Javascript';
(function($param1){
	echo 'IIFE function' . $param1;
})($param1);

echo '<br>';

/*Closure : */

$functionColosure = function($param1){
	echo 'Closure Function' . $param1;
};

$param1 = 'CSS';

// var_dump($functionColosure);
$functionColosure($param1); //cách 1 gọi hàm
call_user_func($functionColosure, $param1); //cách gọi 2 

echo '<br>';

/*Callback : hàm gọi hàm*/
function setTimeout($callback, $time){
	echo call_user_func($callback);
}

setTimeout(function(){
	return 'Callback function';
}, 1000);