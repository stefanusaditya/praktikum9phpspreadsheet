<?php

// Menggunakan composer php spreadsheet
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// inisiasi variabel
$spreadsheet= new Spreadsheet();
$sheet= $spreadsheet->getActiveSheet();

// mencetak data ke excel
$sheet->setCellValue('A1','Hello World ! ');

// menyimpan file excel
$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');
?>