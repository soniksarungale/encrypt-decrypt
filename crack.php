<?php
ini_set('memory_limit', '256M');
ini_set('max_execution_time', 0);
$corr=0;
$numm=0;
if(isset($_POST["eny2"]) && isset($_POST["type"])){
$corr=1;
$numm=1;
$entext = $_POST["eny2"];
$type = $_POST["type"];

if($type=="disatt"){
$fileread = file('passlist/big_pass_list.txt',FILE_IGNORE_NEW_LINES);
foreach($fileread as $word){
	$enword=md5($word);
	if($entext==$enword){
		echo "Found : ".$word;
		echo "<script>$('.loading').fadeOut();</script>";		
		$corr++;
		$numm--;
		break;
	}
//	echo $word." , ";
}
}
else if($type=="numatt" && isset($_POST["range"])){
$range=$_POST["range"];
$j=0;
$k=0;
$sn=0;
$corr--;
if($range=="1000000"){
$sn=0;
$i=0;
$k=1000000;
}
else if($range=="2000000"){
$sn=1000000;
$i=1000000;
$k=2000000;
}
else if($range=="3000000"){
$sn=2000000;
$i=2000000;
$k=3000000;
}
else if($range=="4000000"){
$sn=3000000;
$i=3000000;
$k=4000000;
}
else if($range=="5000000"){
$sn=4000000;
$i=4000000;
$k=5000000;
}
else if($range=="6000000"){
$sn=5000000;
$i=5000000;
$k=6000000;
}
else if($range=="7000000"){
$sn=6000000;
$i=6000000;
$k=7000000;
}
else if($range=="8000000"){
$sn=7000000;
$i=7000000;
$k=8000000;
}
else if($range=="9000000"){
$sn=8000000;
$i=8000000;
$k=9000000;
}
else if($range=="10000000"){
$sn=9000000;
$i=9000000;
$k=10000000;
}
else if($range=="100000000"){
$sn=10000000;
$i=10000000;
$k=100000000;
}
else{
$i=0;
$k=100000000;
}
for($i;$i<=$k;$i++){
	$j=md5($i);
	//	echo "Trying text = ".$i."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$j."<br>";
	if($j==$entext){
		echo "Found : ".$i;
		echo "<script>$('.loading').fadeOut();</script>";
		$numm++;		
		break;
	}
}
}
else if($type=="cpatt"){
$fileread = file('passlist/common_pass.txt',FILE_IGNORE_NEW_LINES);
foreach($fileread as $word){
	$enword=md5($word);
	if($entext==$enword){
		echo "Found : ".$word;
		echo "<script>$('.loading').fadeOut();</script>";
		$corr++;
		$numm--;
		break;
	}
}
}
}
else{
header('Location: index.php');
}
if($corr==1){
echo "Text Deosn't Found, Try Different attack";
echo "<script>$('.loading').fadeOut();</script>";
}
else if($numm==1){
echo "Number Deosn't Exist Between ".$sn." - ".$k.", Try Different Range";
echo "<script>$('.loading').fadeOut();</script>";
}
?>