<?php

session_start();

?>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-center w3-animate-top">
<img src="plogo.png"></img>
</div>
<?php
if($num == 1){
    $_SESSION['username'] = " ";
	header('location:loginerror.php');
}else{	
	header('location:mainpage.php');
	
} ?>

</body>
</html>