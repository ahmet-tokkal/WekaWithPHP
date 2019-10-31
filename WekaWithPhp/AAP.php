<?php
$resultArray=array();

function AAP($str) {
  $result="";
  $homepage = file_get_contents('FArray.txt');
  $FArray = explode("\n",$homepage);

  for($i = 0 ; $i < count($FArray); $i++){
    $FArray[$i] = rtrim($FArray[$i], "\r");
  }

  $counter = 0;
  $index = 0;

  $AA = array("A","R","N","D","C","E","Q","G","H","I","L","K","M","F","P","S","T","W","Y","V");

  for($a = 0; $a < 20; $a++) {
    for($b = 0; $b < 20; $b++) {
      $resultArray["inf"][$index++] = "".$AA[$b].$AA[$a]."";
    }
  }

  for($i = 0; $i < 400; $i++) {
      for($j = 0; $j < strlen($str) - 1; $j++) {
        $tempDC = substr($str, $j, 2);

        if(strcmp($tempDC, $resultArray["inf"][$i]) == 0) {
          $counter++;
        }
      }
        $resultArray["val"][$i] = $counter;
        $counter = 0;
    }

    for($x = 0; $x < 400; $x++) {
      $resultArray["val"][$x] = number_format($FArray[$x] * $resultArray["val"][$x],5);
      if($resultArray["val"][$x] == -0 || is_nan($resultArray["val"][$x])) {
        $resultArray["val"][$x] = 0;
      }
    }

    for ($i=0; $i <count($resultArray["val"]) ; $i++) { 
      $resultArray["val"][$i]=number_format($resultArray["val"][$i],5);
      $result .= $resultArray["val"][$i] . ',';
    }

    return $result;
  }
?>
