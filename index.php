<?php
$post=0;
$found="";
if(isset($_POST["eny"])){
$post=1;
$ortext=$_POST["eny"];
$enytext=md5($ortext);
}
?>
<html>
<head>
	<title>Eyncryption and Decryption</title>
	<meta name="description" content="Encryptdecrypt is a online encrypter and decrypter. which can be use to encrypt data or decrypt data." />
	<link rel="icon" type="image/png" href="icon.png">
	<link rel="stylesheet" href="css/css1.css">
</head>
<body onload="cheackatt();">
<center><h1>Encryption and Decrypetion</h1>
<div class="opt">
<div class="box eybox active">Encrypt</div
><div class="box dybox">Dcrypt</div>
</div>
<br>
<div class="eyndisplay">
<h2>MD5 Encrypter</h2>
<br>
<form action="index.php" method="POST">
<input class="text" type="text" name="eny" placeholder="Enter text to Encrypt..."></input
><input class="submit" type="submit" name="submit" value="Go" required></input>
</form>
</div>
<div class="deydisplay">
<h2>MD5 Decrypter</h2>
<br><div class="doutput"></div>
<form id="dform" name="decryptform" method="POST" action="crack.php">
<input class="text" type="text" name="eny2" placeholder="Enter your MD5 hash..." required></input
><input class="submit" type="submit" id="dformsub" name="submit" value="Go" required></input><br>
<label>Attack Type : </label>
<select name="type" id="atttype" onchange="cheackatt();" required>
<option value="disatt" selected>Disnory attack</option>
<option value="numatt">Number attack</option>
<option value="cpatt">Common Password attack</option>
</select><br><br>
<div class="numrange"><label>Number Range : </label>
<select name="range" id="range" required>
<option value="1000000" selected>0 - 1000000</option>
<option value="2000000">1000000 - 2000000</option>
<option value="3000000">2000000 - 3000000</option>
<option value="4000000">3000000 - 4000000</option>
<option value="5000000">4000000 - 5000000</option>
<option value="6000000">5000000 - 6000000</option>
<option value="7000000">6000000 - 7000000</option>
<option value="8000000">7000000 - 8000000</option>
<option value="9000000">8000000 - 9000000</option>
<option value="10000000">9000000 - 10000000</option>
<option value="100000000">10000000 - 100000000</option>
<option value="all">All</option>
</select>
</div>
</form>
</div>
<br><br>
<div class="table">
<?php
if($post==1){
?>
<table>
<tr>
<th>Original Text</th>
<th>Eyncrypted Text</th>
</tr>
<tr>
<td><?php echo $ortext?></td>
<td><input type="text" id="copy" value="<?php echo $enytext?>"/><button onclick="copyToClipboard(document.getElementById('copy'))" value="copy" type="button" name="button">Copy</button></td>
</tr>
</table>
<?php
}
?>
</div>
</center><br /><br /><br /><br /><br />
<div id="copied">
	Copied
</div>
<div class="footer">
<div class="inline copyrights">© 2017 encryptdecrypt.cf</div>
<div class="inline credit">Designed & Developed by <a class="creditlink" href="http://soniksarungale.cf/">Sonik Sarungale</a></div>
</div>
<div class="loading"><img src="img/loader.gif" class="loader"></div></div>
<script src="js/jquery.js"></script>
<script src="js/js1.js"></script>

</body>
</html>
