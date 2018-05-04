<?php 
	require_once('excel/Classes/PHPExcel.php');
	require_once('excel/Classes/PHPExcel/Reader/Excel2007.php');

	$nombreArchivo='1441.xlsx';

	$objReader = new PHPExcel_Reader_Excel2007();
	$objPHPExcel = $objReader->load($nombreArchivo);

	$objPHPExcel->setActiveSheetIndex(0);

	$row = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();

	echo "Rows: ".$row."<br/>";

	for ($i=2; $i <= $row; $i++) { 
		$paterno = $objPHPExcel->setActiveSheetIndex(0)->getCell('A'.$i);
		$materno = $objPHPExcel->setActiveSheetIndex(0)->getCell('B'.$i);
		$nombre = $objPHPExcel->setActiveSheetIndex(0)->getCell('C'.$i);
		$matricula = $objPHPExcel->setActiveSheetIndex(0)->getCell('D'.$i);
		echo "Nombre: ".$paterno." ".$materno." ".$nombre." Matricula:".$matricula."<br/>" ;
	}
 ?>