<?php   

include 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;


if($_FILES["Excelpath"]["name"] != '')
{
 $allowed_extension = array('xls', 'xlsx');
 $file_array = explode(".", $_FILES['Excelpath']['name']);
 $file_extension = end($file_array);
 if(in_array($file_extension, $allowed_extension))
 {
  $reader = IOFactory::createReader('Xlsx');
  $spreadsheet = $reader->load($_FILES['Excelpath']['tmp_name']);

  $sheet = $spreadsheet-> getActiveSheet();
  $cellA = $sheet-> getCell('A1')->getValue();
  
  echo($cellA);
  


 }
 else
 {
    header("Location: http://localhost/PalletSearch/index.php"); 
 }
}
else
{
    header("Location: http://localhost/PalletSearch/index.php"); 
}



