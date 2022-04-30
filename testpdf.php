<?php 
require('pdf/vendor/autoload.php');

$css = file_get_contents('../css/pdf.css');

require"template/invoice.php";

$msg = $html; 

$mpdf=new \Mpdf\Mpdf();
$mpdf->Bookmark('Start of the document');

$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($msg,2);
$file='media/'.date("dmy-h-i-s").'.pdf';
$mpdf->output($file,'I');

?>