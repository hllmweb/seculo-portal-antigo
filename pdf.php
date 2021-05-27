<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// use Mpdf\Mpdf;

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
// $mpdf = new Mpdf();
// $mpdf = new mPDF();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();
