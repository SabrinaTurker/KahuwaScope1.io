<?php 
require_once __DIR__ . '/vendor/autoload.php';

//Grab variables from form
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];
$answer5 = $_POST['answer51'];
$answer6 = $_POST['answer6'];
$answer7 = $_POST['answer7'];
$answer8 = $_POST['answer8'];
$answer9 = $_POST['answer9'];
$answer10 = $_POST['answer10'];

//Create new PDF instance
$mpdf = new \Mpdf\Mpdf();

//Create our PDF
$data = " ";

$data .= "<div style='position: fixed; right: -15mm; top: -15mm; width: 40mm;'>
<img src='K-Logo.png'/>
</div>";

$ans1 = ltrim($answer1,"My products name is "); 
$data .= "<h1 style='padding-top: 8mm;'>Scope: $ans1 </h1>";

//Add data
$data .= "<h3>Purpose of final product</h3>";
$data .= $answer2 . "<br>";
$data .= $answer3 . "<br>";
$data .= "<h3>Composition</h3>";
$data .= $answer4 . "<br>";
$data .= "<h3>Derivation</h3>";
$data .= $answer5 . "<br>";
$data .= "<h3>Format & Presentation</h3>";
$data .= $answer6 . "<br>";
$data .= "<h3>Quality Criteria</h3>";
$data .= $answer7 . "<br>";
$data .= "<h3>Quality Tolerance</h3>";
$data .= $answer8 . "<br>";
$data .= $answer9 . "<br>";
$data .= "<h3>Quality Method</h3>";
$data .= $answer10 . "<br>";

//Write PDF
$mpdf->WriteHTML($data);


//Output to browser
$mpdf->Output("myscope.pdf", "D");

?>