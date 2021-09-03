<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Musical Guru</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1">
<style>
body {margin:0;}

.container {
 
  text-align: center;
  color: white;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New";
  font-weight: bold;
  color: #F26D33;
  font-size: 35px;
  transform: translate(-50%, -50%);
}

.top-left {
  position: absolute;
  top: 750px;
  left: 16px;
  font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New";
  font-weight: bold;
  color: white;
  font-size: 35px;
}

.bottom-left {
  position: absolute;
   top: 1100px;
  left: 16px;
  font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New";
  font-weight: bold;
  color: white;
  font-size: 15px;
  margin-left: 200px;
}

.top-right {
  position: absolute;
top: 1500px;
    right: 50px;
    font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New";
  font-weight: bold;
  color: black;
  font-size: 35px;
  margin-left: 200px;
  margin-right: 200px;
}

.navbar { 
  font-family:Courier New;
  font-weight: 400;
  overflow: hidden;
  position: fixed;
  top: 0;
  width: 1349px;
  height:56px;
  background-color: #131313;   /*background: color(main)*/
}

.navbar a {
  float: left;
  display: block;
  color: #f5f5f5;   /*Font color without Mouse*/
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 16px;
}


.navbar a:hover {
  background: #131313; /*background: color(main)*/
  color: #fed136; /*Text color on Mouse*/
}

.main {
  padding: 0px;
  margin-top: 20px;
  height: 1500px; 
}
button {
    font-size: 16px;
    display: inline-flex;
    text-align: center;
    vertical-align: middle;
    font-family:Courier New;
    font-weight: bold;
    line-height: 1.15;
    margin: 5px;
    padding: 12px 30px;
    cursor: pointer;
    color: #131313;
    background-color: #fff;
    border: 1px solid #d8d8d8;
    border-radius: 100px;
    white-space: nowrap;
    margin-left: 750px;
        }

button {
    font-size: 16px;
    display: inline-flex;
    text-align: center;
    vertical-align: middle;
    font-family:Courier New;
    font-weight: bold;
    line-height: 1.15;
    margin: 5px;
    padding: 12px 30px;
    cursor: pointer;
    color: #131313;
    background-color: #fff;
    border: 1px solid #d8d8d8;
    border-radius: 100px;
    white-space: nowrap;
        }

.footer {
    position: static; 
   left: 0;
   bottom: 0;
   width: 1349px;
   background-color: black;
   color: white;
   text-align: center;
   margin-top: 400px;
   padding-top: 160px;
}

</style>
</head>
<body>
<header>
<div class="navbar">
  <a href="mainpage.php">Home</a>
  <a href="pluginmainpage.php">Plugins</a>
  <a href="samplepack.php">Sample Pack</a>
  <a href="tutorial.php">Tutorials</a>
  <a href="help.php">Contact</a>
  <a href="logout.php"><button class="button" style="margin-left: 1200px; margin-top: -75px;">Logout</button></a>
</header>

</div>
<div class="main">

<div class="container">

<img src="Intro1.jpg" alt="Image" width="1349" height="600"></img>
  <div class="centered">
  	Welcome 
	
<?php 
error_reporting(0);
$var = $_SESSION['username'];
  if(is_null($var)) {
    header('location:login.php');
  }
  else {
    echo $_SESSION['username'];
  }
	
	?>
  	<br>

  </div>
<img src="3rdimage.jpg" alt="Image" width="1349" height="600"></img>
  <div class="top-left">Find You Favorite 
  	<br>Plugin
  <br>
  <a href="pluginmainpage.php"><button class="button" style="margin-right: 50px; margin-top: 20px;">Plugin</button></a>
  </div>  
<div class="bottom-left">
<h1>Don't Play What's There,Play With What's Not There<h1> <h4 style="font-weight: 10px">- Miles Davis<h4>
</div>
</div>
<img src="intro4.jpg" alt="Image" width="1349" height="600"></img>
<div class="top-right">Get Best Sample Pack<br>From Best Producers
  	<br>
  </div>

</div>
</div>
</div>
<div class="footer">
  <h1 style="font-family: Liberation Mono,Courier New;  margin-top: -145px;">CheckOut Best Mixing Plugin</h1>
<a href="plugin\Fabfilter\fabfilter.php"><h1 style="font-family: Liberation Mono,Courier New;  margin-top: -5px;">FabFilter Plugin</h1></a>
</div>
</body>
</html>