<?php 
require_once 'PHPExcel.php';

$data = [
	['Nguyen Quang Truong', 12, 'Thai Binh'],
	['Nguyen Quang Nam', 132, 'Ha Nam'],
	['Nguyen Quang Trung 32', 22, 'Thai Binh1'],
	['Nguyen Quang Truong 43', 32, 'Thai Binh2'],
	['Nguyen Quang Truong 45', 42, 'Thai Binh3'],
	['Nguyen Quang Truong 3', 52, 'Thai Binh4'],
	['Nguyen Quang Truong 1', 62, 'Thai Binh5']
];

$excel = new PHPExcel();

$excel->setActiveSheetIndex(0);

$excel->getActiveSheet()->setTitle('Tét php excel');

$excel->getActiveSheet()->setCellValue('A1', 'Tên');
$excel->getActiveSheet()->setCellValue('B1', 'Tuổi');
$excel->getActiveSheet()->setCellValue('C1', 'Quê quán');

$numRow = 2;  //bắt đầu ghi từ dòng 2 để tránh ghi đề tiêu đề

//nếu mảng có key thì $row phải đưa key vào
foreach ($data as $row) {
	$excel->getActiveSheet()->setCellValue('A' . $numRow, $row[0]);
	$excel->getActiveSheet()->setCellValue('B1' . $numRow, $row[1]);
	$excel->getActiveSheet()->setCellValue('C1' . $numRow, $row[2]);	

	$numRow++;
}


//tải xuống thay vì lưu file vào hệ thống
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="'.time().'data.xlsx"');

PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('php://output');