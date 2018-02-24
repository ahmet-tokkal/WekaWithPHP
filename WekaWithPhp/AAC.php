<?php
$resultArray=array();

function AAC($str){
// result array info için $resultarray[$i]["inf"] kullanılır.
// result array değerler için $resultarray[$i]["val"] kullanılır.
$result="";
$resultArray["inf"][0]='A';
$resultArray["inf"][1]='R';
$resultArray["inf"][2]='N';
$resultArray["inf"][3]='D';
$resultArray["inf"][4]='C';
$resultArray["inf"][5]='E';
$resultArray["inf"][6]='Q';
$resultArray["inf"][7]='G';
$resultArray["inf"][8]='H';
$resultArray["inf"][9]='I';
$resultArray["inf"][10]='L';
$resultArray["inf"][11]='K';
$resultArray["inf"][12]='M';
$resultArray["inf"][13]='F';
$resultArray["inf"][14]='P';
$resultArray["inf"][15]='S';
$resultArray["inf"][16]='T';
$resultArray["inf"][17]='W';
$resultArray["inf"][18]='Y';
$resultArray["inf"][19]='V';

for ($i=0; $i <20 ; $i++) { 
  $resultArray["val"][$i]=0;
}

    $len=strlen($str);
foreach (count_chars($str, 1) as $bayt => $kaç) {

        for ($j=0; $j <20 ; $j++) { 
          if($resultArray["inf"][$j]==chr($bayt)){
            $resultArray["val"][$j]=number_format(($kaç/$len),5);
          }
        }                         
   }

   for ($i=0; $i <count($resultArray["val"]) ; $i++) { 
    $resultArray["val"][$i]=number_format($resultArray["val"][$i],5);
    $result .= $resultArray["val"][$i] . ',';
  }
  return $result;
}

 ?>