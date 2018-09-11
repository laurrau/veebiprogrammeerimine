<?php
  //echo "See on minu esimene php!"; //rumal teade
  $firstName = "Lauri";
  $lastName = "Raus";
  $dateToday = date("d.m.Y");
  $hourNow = date("G");
  $partOfDay = "";
if ($hourNow < 8) {
	  $partOfDay = "Varajane hommik";
  }
if ($hourNow >= 8 and $hourNow < 16) {
	  $partOfDay = "koolipäev";
  }
if ($hourNow > 16) {
	  $partOfDay = "loodetavasti vaba aeg";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
	<?php
	echo $firstName;
	echo " ";
	echo $lastName;
	?>
	</title>
</head>
<body>
<h1>
	<?php
		echo $firstName ." " .$lastName;
		?>
 TLÜ</h1>
	<p> Tere hommikust.Ava <a href="http://www.tlu.ee">TLÜ</a> veebileht</p>
	<p>See veebileht on testimise eesmärgil</p>
	<?php
		echo "<p>Tänane kuupäev on: " .$dateToday .".</p> \n";
		echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") .", käes oli " .$partOfDay .".</p> \n";
		
	?>
		<img src="../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_2.jpg" alt=">TLÜ Terra õppehoone">
	<p>Minu sõber teeb ka <a href="../../~krispol/" target="_blank">veebi</a></p>

</body>
</html>
