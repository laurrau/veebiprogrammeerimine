<?php
  //echo "See on minu esimene php!"; //rumal teade
  $firstName = "Lauri";
  $lastName = "Raus";
  $dateToday = date("d.m.Y");
  $weekdayToday = date("N");
  $weekdayNameET = ["esmaspäev", "teisipäev", "kolmapäev", "neljapäev", "reede", "laupäev", "pühapäev"];
  //echo $weekdayNameET;
  //var_dump ($weekdayNameET);
  //echo $weekdayNameET[1];
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
  //juhusliku pildi valimine
  $picURL = "http://www.cs.tlu.ee/~rinde/media/fotod/TLU_600x400/tlu_";
  $picEXT = ".jpg";
  $picNUM = mt_rand(2,43);
  //echo $picNUM;
  $picFILE = $picURL .$picNUM .$picEXT;
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
	
	<p>Teised lehed: <a href="photo.php">photo.php</a>.</p>
	<?php
		//echo "<p>Tänane kuupäev on: " .$dateToday .".</p> \n";
		echo "<p>Täna on: " .$weekdayNameET[$weekdayToday - 1] . ", " .$dateToday .".</p> \n";
		echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") .", käes oli " .$partOfDay .".</p> \n";
		
	?>
		<img src="<?php echo $picFILE; ?>" alt="TLÜ Terra õppehoone">
	<p>Minu sõber teeb ka <a href="../../../../~krispol/" target="_blank">veebi</a></p>

</body>
</html>
