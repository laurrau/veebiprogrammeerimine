<?php
//Lisan teise php faili
  require("fuctions.php"); 
  $firstName = "Tundmatu";
  $lastName = "Kodanik";
  $fullName = "";
  $Month = date("n");
  //var_dump ($Month);
  //Püüan POST andmed kinni
  //var_dump ($_POST);
  if (isset($_POST["firstName"])){
	  $firstName = test_input($_POST["firstName"]);
	}
  if (isset($_POST["lastName"])){
	  $lastName = test_input($_POST["lastName"]);
	}

 //väga mõttetu funktsioon
	function stupidfunction(){
	$GLOBALS["fullName"] = $GLOBALS["firstName"] . " " .$GLOBALS["lastName"];
	}
 stupidfunction();
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
	</h1>
	<p>See leht on valminud <a href="https://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames ning ei oma mingisugust mõtestatud või muul moel väärtusliku sisu.
	</p>
	<p>Leht 1: <a href="photo.php">Photo</a>.</p>
	<p>Leht 2: <a href="photo2.php">Photo2</a>.</p>
	<p>Leht 3: <a href="page.php">Page</a>.</p>
	<hr>
	
	<form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>Eesnimi: </label>
		<input type="text" name="firstName">
		<label>Perekonnanimi: </label>
		<input type="text" name="lastName">
		<label>Sünnikuu: </label>
		<select name="birthMonth">
			<option value="1"<?php if ($Month == 1) echo "selected"?>>jaanuar</option>
			<option value="2"<?php if ($Month == 2) echo "selected"?>>veebruar</option>
			<option value="3"<?php if ($Month == 3) echo "selected"?>>märts</option>
			<option value="4"<?php if ($Month == 4) echo "selected"?>>aprill</option>
			<option value="5"<?php if ($Month == 5) echo "selected"?>>mai</option>
			<option value="6"<?php if ($Month == 6) echo "selected"?>>juuni</option>
			<option value="7"<?php if ($Month == 7) echo "selected"?>>juuli</option>
			<option value="8"<?php if ($Month == 8) echo "selected"?>>august</option>
			<option value="9"<?php if ($Month == 9) echo "selected"?>>september</option>
			<option value="10"<?php if ($Month == 10) echo "selected"?>>oktoober</option>
			<option value="11"<?php if ($Month == 11) echo "selected"?>>november</option>
			<option value="12"<?php if ($Month == 12) echo "selected"?>>detsember</option>
		</select>
		<label>Sünniaasta: </label>
		<input type="number" min="1914" max="2000" value="1999" name="birthYear">
		<input type="submit" name="submitUserData" value="Saada andmed">
	</form>
	<hr>
	<?php
		if (isset($_POST["birthYear"])){
			echo "<h2>" .$fullName ."</h2>";
			echo "<p>Olete elanud järgnevatel aastatel: </p> \n";
			echo "<ul> \n";
				for ($i = $_POST["birthYear"]; $i <= date("Y"); $i ++){
					echo "<li>" .$i ."</li> \n";
				}
			echo "</ul> \n";
		}
		
	?>
</body>
</html>
