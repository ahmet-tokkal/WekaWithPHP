<?php require_once("http://localhost:8080/JavaBridge/java/Java.inc");
echo "Başladı<br/>";
$world = new java("WekaWithPhp");
echo "Dosya açıldı <br/>";
echo $world->GetStatistics(
	"C:\Users\Skywolf\Desktop\Çalışmalar\JavaProjeler\WekaInPHP\\iris.arff",
	"C:\Users\Skywolf\Desktop\Çalışmalar\JavaProjeler\WekaInPHP\\iris-test.arff",0);
echo "<br/>";
echo $world->GetStatistics(
	"C:\Users\Skywolf\Desktop\Çalışmalar\JavaProjeler\WekaInPHP\\iris.arff",
	"C:\Users\Skywolf\Desktop\Çalışmalar\JavaProjeler\WekaInPHP\\iris-test.arff",1);
echo "<br/>fnk çalıştı<br/>";
 
?>