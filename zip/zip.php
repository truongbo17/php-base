<?php 
if(class_exists('ZipArchive')){
	//ZipArchive enable

	$zipName = 'file_nen.zip'; //tên file nén

	//khởi tạo obbject từ class Zip
	$zip = new ZipArchive();

	//tạo file nén
	$response = $zip->open($zipName, ZipArchive::CREATE);
	if($response){

		//tạo folder trong file nén
		$zip->addEmptyDir('ket_qua');

		//thêm folder nuex trong folder ket qua
		$zip->addEmptyDir('ket_qua/folder');

		//add file vào file nén
		$check = $zip->addFile('test1.php', 'ket_qua/test1_new.php');
		$check = $zip->addFile('test1.txt', 'ket_qua/test1_new.txt');

		if ($check) {
			echo 'Success';
		}else{
			die('Fail');
		}
	}else{
		echo 'Create zip is fail';
	}

	//đóng file
	$zip->close();
}else {
	die('Zip disable');
}