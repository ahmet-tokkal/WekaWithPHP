<?php
require_once("http://localhost:8080/WekaWithPhp/java/Java.inc");
include_once 'AAC.php';
include_once 'AAP.php';
header('Content-Type: application/json');
$aResult = array();

if( !isset($_POST['functionname']) ) { $aResult['error'] = 'No function name!'; }

if( !isset($_POST['arguments']) ) { $aResult['error'] = 'No function arguments!'; }

if( !isset($aResult['error']) ) {

  switch($_POST['functionname']) {
    case 'yaz':
    if( !is_array($_POST['arguments']) || (count($_POST['arguments']) < 2) ) {
     $aResult['error'] = 'Error in arguments!';
   }
   else {
     $aResult['result'] = yaz(strval($_POST['arguments'][0]), strval($_POST['arguments'][1]),strval($_POST['arguments'][2]),strval($_POST['arguments'][3]));
   }
   break;

   default:
   $aResult['error'] = 'Not found function '.$_POST['functionname'].'!';
   break;
 }

}
echo json_encode($aResult);
function yaz($hpSequence,$ppSequence,$encoding,$model){
  $hpSequence = trim($hpSequence,'"');
  $ppSequence = trim($ppSequence,'"');
  $data="";
  switch ($encoding) {
    case "\"AAC\"":
      $hpAAC= AAC($hpSequence);
      $ppAAC= AAC($ppSequence);
      $data = $hpAAC.$ppAAC.'?';
      break;
    case "\"AAP\"":
      $hpAAC= AAP($hpSequence);
      $ppAAC= AAP($ppSequence);
      $data = $hpAAC.$ppAAC.'?';
      break;
    default:
      $data="0.0199,0.0846,0.0498,0.0199,0.0000,0.0149,0.0498,0.0896,0.0249,0.0348,0.0348,0.0249,0.0299,0.0149,0.1692,0.1493,0.0746,0.0000,0.0398,0.0697,0.0654,0.0451,0.0407,0.0581,0.0044,0.0669,0.0436,0.0741,0.0116,0.1163,0.1105,0.0567,0.0262,0.0538,0.0291,0.0436,0.0407,0.0044,0.0233,0.0898,?";
      break;
  }
  $dosya = fopen('test.arff', 'a+');//iris-test.arff
  fwrite($dosya, "\n");
  fwrite($dosya, $data);
  fclose($dosya);
  $model = trim($model,'"');
  $testPath=getcwd()."\\test.arff";//iris-test.arff
  $modelPath="";
  switch($model)
  {
    case "Naive Bayes":
      $modelPath = getcwd()."\\naivebayes.model";//NaiveBayesIris.model
      break;
    case "Bayes Net":
      $modelPath = getcwd()."\\bayesnet.model";
      break;
    case "Random Forest":
      $modelPath = getcwd()."\\randomForest.model";
      break;
  }
  $world = new java("WekaWithPhp");
  $result = (string)$world->ReadModel($modelPath,$testPath,"C:\Users\Skywolf\Desktop\labelled.arff"); 
  return $result;
}
?>