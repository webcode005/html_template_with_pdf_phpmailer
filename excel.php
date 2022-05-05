<?php 
 header("Content-Type: application/vnd.ms-excel; name='excel'");
 header("Content-type: application/octet-stream");
 header("Content-Disposition: attachment; filename=export_log.xls");
 header("Pragma: no-cache");
 header("Expires: 0");

 
$name= "Basant";
$address = "Lalita Park";
$email="testemail@gmail.com";
$programming_languages = "PHP";
$experience ="4 Years";
$mobile ="8764665455";
$city = "Laxmi Nagar";
$state = "Delhi";
$pincode = "110092";

$additional_information = "Testing";

 $msg = '
  <h3 align="center">Programmer Details</h3>
  <table border="1" width="100%" cellpadding="5" cellspacing="5">
   <tr>
    <td width="30%">Name</td>
    <td width="70%">'.$name.'</td>
   </tr>
   <tr>
    <td width="30%">Address</td>
    <td width="70%">'.$address.'</td>
   </tr>
   <tr>
    <td width="30%">Email Address</td>
    <td width="70%">'.$email.'</td>
   </tr>
   <tr>
    <td width="30%">Progamming Language Knowledge</td>
    <td width="70%">'.$programming_languages.'</td>
   </tr>
   <tr>
    <td width="30%">Experience Year</td>
    <td width="70%">'.$experience.'</td>
   </tr>
   <tr>
    <td width="30%">Phone Number</td>
    <td width="70%">'.$mobile.'</td>
   </tr>
   <tr>
    <td width="30%">Additional Information</td>
    <td width="70%">'.$additional_information.'</td>
   </tr>
  </table>
 ';

 echo  $msg;

 ?>