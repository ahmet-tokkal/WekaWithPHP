<?php require_once("http://localhost:8080/JavaBridge/java/Java.inc");
echo "Başladı";
$world = new java("WekaWithPhp");
echo "Dosya açıldı";
echo $world->ReadModel("C:\Users\Skywolf\Desktop\Çalışmalar\JavaProjeler\WekaInPHP\\NaiveBayesIris.model",
"C:\Users\Skywolf\Desktop\Çalışmalar\JavaProjeler\WekaInPHP\\iris-test.arff",
"C:\Users\Skywolf\Desktop\labelled.arff");
echo "fnk çalıştı";
?>