<?php
  $firstName = "Tundmatu";
  $lastName = "Kodanik";
  
  //püüan POST andmed kinni
  var_dump($_POST);
  if (isset($_POST["firstname"])){
	$firstName = $_POST["firstname"];
	  
  }

  {
	$lastName = $_POST["lastname"];
	  
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
	<hr>

  <form method="POST">
	<label>Eesnimi: </label>
	<input type="text" name="firstname">
	<label>Perekonnanimi: </label>
    <input type="text" name="lastname">
	<label>Sünniaasta: </label>
	<input type="number" min="1914" max="2000" value="1999" name="birthyear">
	<input type="submit" name="submitUserData" value="Saada andmed">
  </form>
  	<?php
		if (isset($_POST["birthyear"])){
			echo "<p>Olete elanud järgnevatel aastatel:</p> \n";
			echo "<ul> \n";
				for ($i = $_POST["birthyear"]; $i <= date("Y"); $i++) {
					echo "<li>" .$i ."</li> \n";
				}
			
			echo "</ul> \n";
		}
	?>
</body>
</html>
