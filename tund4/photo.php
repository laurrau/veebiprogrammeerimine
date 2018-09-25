<?php
  $firstName = "Lauri";
  $lastName = "Raus";
  
  //Loeme kataloogi sisu
  $dirToRead ="../../pics/";
  $allFiles = scandir($dirToRead);
  //var_dump($allFiles);
  $picFiles = array_slice($allFiles, 2);
  //var_dump($picFiles);
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
	<p> uus leht <a href="page.php">PAGE</a> page</p>
	<p>Leht 1: <a href="photo.php">Photo</a>.</p>
	<p>Leht 2: <a href="photo2.php">Photo2</a>.</p>
	<p>Leht 3: <a href="page.php">Page</a>.</p>
	
	<?php
	  //<img src="pilt.jpg" alt="pilt">
	  
	  for($i = 0; $i < count ($picFiles); $i++){
	  echo '<img src="' .$dirToRead .$picFiles[$i] .'" alt="pilt">';
	  }
	?>
	
</body>
</html>
