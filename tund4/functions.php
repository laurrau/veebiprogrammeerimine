<?php
	require("../../../config.php");
	$database = "if18_lauri_ra_1";
	//echo $serverHost;
	
	function saveamsg($msg){
	  $notice = "";
	  //loome andmebaasi ühenduse
	  $mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"] );
	  //valmistan ette andmebaasikäsu
	  $stmt = $mysqli->prepare("INSERT INTO vpamsg (message) VALUES(?)");
	  echo $mysqli->error;
	  //asendan ettevalmistatud käsus küsimärgi(d) päris andmetega
	  //esimesena kirja amdmetüübid, siis andmed ise
	  //s - string; i - integer; d - decimal
	  $stmt->bind_param("s", $msg);
	  //täidame ettevalmistatud käsu
	  if ($stmt->execute()){
		$notice = 'Sõnum: "' .$msg .'" on edukalt salvestatud!';
	  } else {
		$notice = "Sõnumise salvestamisel tekkis tõrge: " .$stmt->error;  
		  
	  }
	  $stmt->close();
	  $mysqli->close();
	  return $notice;
	}	
	function readallmessages(){
			$notice ="";
			$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"] );
			$stmt = $mysqli->prepare("SELECT message FROM vpamsg");
			echo $mysqli->error;
			$stmt->bind_result($msg);
			$stmt->execute();
			while($stmt->fetch()){
					$notice .= "<p>" .$msg ."</p> \n";
			}	
			$stmt->close();
			$mysqli->close();
			return $notice;
			
	}
	//teksti sisendi kontrollimine
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>