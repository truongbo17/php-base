<?php 
//Khi bạn khởi tạo hoặc gọi đến tên class nào đó, hàm callback trong spl_autoload_register sẽ được gọi để nạp file chứa class đó vào
spl_autoload_register(function($class){
	$class = str_replace('App', 'app', $class);

	$file = str_replace('\\', '/', __DIR__ . DIRECTORY_SEPARATOR . $class . '.php');
	
	if(file_exists($file)){
		include ($file);
	}
});