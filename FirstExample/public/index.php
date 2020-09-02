<?php

require __DIR__.'/../vendor/autoload.php';


define('XLS_FILENAME', 'excel/my_first_excel_symfony.xlsx');

$spreadsheet = new \Framework\Component\Xsl\Spreadsheet();

$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello world!');
$sheet->setTitle('My First Worksheet');

/* Create a office (XLSX Format) */
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xls($spreadsheet);

/* File Path */
$excelFilePath = __DIR__.'/'. XLS_FILENAME;

$writer->save($excelFilePath);

/* exit('File <b>'. $excelFilePath . '</b> generated successfully!'); */

?>

<p>
    <a href="<?= XLS_FILENAME ?>" download>Скачать файл</a>
</p>