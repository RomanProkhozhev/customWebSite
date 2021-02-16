<?php
	//including files that we are using
	include_once 'config.php';
	include_once 'index.php';
	//definition of variables. Getting color codes to php variables by using POST method.
	$hColor = $_POST['headerColor'];
	$pColor = $_POST['parColor'];
	$bColor = $_POST['bColor'];
	//preparing and executing queries 
	$sql = "UPDATE `usercolors` SET `color_code`= '$hColor' WHERE `color_name` = 'header';";
	mysqli_query($conn, $sql);
	$sql = "UPDATE `usercolors` SET `color_code`= '$pColor' WHERE `color_name` = 'paragraph';";
	mysqli_query($conn, $sql); 
	$sql = "UPDATE `usercolors` SET `color_code`= '$bColor' WHERE `color_name` = 'background';";
	mysqli_query($conn, $sql); 
	//Script to go back to front page after sending info to DB.
	echo "<script>
             alert('Tallennetu!'); 
             window.history.go(-1);
     </script>";

?>