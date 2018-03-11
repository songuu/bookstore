<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
include "conn/conn.php";
require_once "phpexceler/PHPExcel.php";
require_once 'phpexceler/PHPExcel/Shared/Date.php';
$filePath = "upfiles/book/book.xls";
$PHPExcel = new PHPExcel();
$PHPReader = new PHPExcel_Reader_Excel2007();
if (!$PHPReader -> canRead($filePath)) {
	$PHPReader = new PHPExcel_Reader_Excel5();
	if (!$PHPReader -> canRead($filePath)) {
		echo 'no Excel';
		return;
	}
}
$PHPExcel = $PHPReader -> load($filePath);
$currentSheet = $PHPExcel -> getSheet(0);
$allColumn = $currentSheet -> getHighestColumn();
$allRow = $currentSheet -> getHighestRow();
$headtitle=array(); 
for ($currentRow = 4; $currentRow <= $allRow; $currentRow++) {
	$strs=array(0); 
	for ($currentColumn = 'A'; $currentColumn <= $allColumn; $currentColumn++) {
		$strs[$currentColumn] = $currentSheet -> getCellByColumnAndRow(ord($currentColumn) - 65,$currentRow) -> getValue();
		if ($currentColumn == 'G' or $currentColumn == 'I') {
			$strs[$currentColumn] = PHPExcel_Shared_Date::ExcelToPHP($strs[$currentColumn]);
		} else {
			echo $strs[$currentColumn] . "\t";
		}
	}
		$arr=array(
		'id' => "$strs[A]", 
		'name' => "$strs[B]", 
		'pulisher' => "$strs[C]",
		'writer' =>"$strs[D]",
		'style' => "$strs[E]",
		'type' => "$strs[F]",
		'pulish_time' => "$strs[G]",
		'remark' => "$strs[H]",
		'issuedate' => "$strs[I]",
		'whether' => "$strs[J]");
		$insert_key_array = array();
		$insert_value_array = array();
		foreach($arr as $key => $val){
			$insert_key_array[] = $key;
			$insert_value_array[] = "'".$val."'";
		}
		$insert_key = implode(',',$insert_key_array);
		$insert_value = implode(',',$insert_value_array);
		$sql_insert = "INSERT INTO comment_book ($insert_key) values ($insert_value)";		
		$m_rst=$conn->query($sql_insert);
		if(!$m_rst){
			echo "ok";
		}
		else{
			echo "no";
		}
	echo "</br>";
}
echo "\n";
/*for ($currentRow = 4; $currentRow <= $allRow; $currentRow++) {
	$id = $currentSheet->getCell("A" . $currentRow)->getValue();
	$name =$currentSheet->getCell("B" . $currentRow)->getValue();
	$pulisher = $currentSheet->getCell("C" . $currentRow)->getValue();
	$writer = $currentSheet->getCell("D" . $currentRow)->getValue();
	$style = $currentSheet->getCell("E" . $currentRow)->getValue();
	$type = $currentSheet->getCell("F" . $currentRow)->getValue();
	$pulish_time = $currentSheet->getCell("G" . $currentRow)->getValue();
	$remark = $currentSheet->getCell("H" . $currentRow)->getValue();
	$issuedate = $currentSheet->getCell("I" . $currentRow)->getValue();
	$whether = $currentSheet->getCell("J" . $currentRow)->getValue();
}
$arr=array('id' => $id, 'name' => $name, 'pulisher' => $pulisher,'writer' =>$writer,'style' => $style,'type' => $type,'pulish_time' => $pulish_time,'remark' => $remark,'issuedate' => $issuedate,'whether' => $whether);
$m_sqlstr = "insert into comment_book values('"".$id."','".$name."','".$pulisher."','".$writer."','".$style."','".$type."','".$pulish_time."','".$remark."','".$issuedate."','".$whether."')";
$m_rst = $conn->execute($m_sqlstr);
if(!$m_rst->EOF){
	echo "ok";
}*/
/*for ($currentRow = 4; $currentRow <= $allRow; $currentRow++) {
	for ($currentColumn = 'A'; $currentColumn <= $allColumn; $currentColumn++) {
		$val = $currentSheet -> getCellByColumnAndRow(ord($currentColumn) - 65, $currentRow) -> getValue();
		if ($currentColumn == 'G' or $currentColumn == 'I') {
			$p_value = PHPExcel_Shared_Date::ExcelToPHP($val);
			echo $p_value . "\t";
		} else {
			echo iconv('utf-8', 'gb2312', $val) . "\t";
		}
	}
	echo "</br>";
}
echo "\n";*/
?>