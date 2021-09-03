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

.navbar { 
  font-family:Courier New;
  font-weight: 400;
  overflow: hidden;
  position: fixed;
  top: 0;
  width: 1349px;
  height:56px;
  background-color: #131313;   /*background: color(main)*/
  margin-left: -8px;
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

.buttonx {
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


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
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
<div class="container">

<h2 style="text-align:center">Product Card</h2>

<div class="card" style="margin-right: 950px; ">
  <img src="Samplepack\Kshmr\soundk.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Sound of Kshmr</h1>
  <p class="price">Free</p>
  <p>All sounds are royalty free<br>
  Attribution 3.0 Unported<br> (CC BY 3.0)
  
  </p>
 <a href="Samplepack\Kshmr\kshmrsample.html"> <p><button>Lern More</button></p></a>
</div>

<br>
<div class="container">
<div class="card" style="    margin-left: 450px;
    margin-top:   -610px; ">
  <img src="Samplepack\lazer\lazer.png" alt="Denim Jeans" style="width:100%">
  <h1>Mazor laser</h1>
  <p class="price">Free</p>
  <p>All sounds are royalty free<br>
  Attribution 3.0 Unported<br> (CC BY 3.0)
  
  </p>
  <a href="plugin\Ozone\ozone.php"><p><button>Lern More</button></p></a>
</div>

<br>

<div class="card" style="    margin-left: 900px;
    margin-top:   -610px; ">
  <img src="Samplepack\hiphop\hiphop.png" alt="Denim Jeans" style="width:100%">
  <h1>Hip-Hop</h1>
  <p class="price">Free</p>
  <p>All sounds are royalty free<br>
  Attribution 3.0 Unported<br> (CC BY 3.0)
  
  </p>
  <p><button>Lern More</button></p>
</div>

<br>


<div class="card" style="margin-right: 950px; ">
  <img src="Samplepack\waedm\waedm.png" alt="Denim Jeans" style="width:100%">
  <h1>WA EDM</h1>
  <p class="price">Free</p>
  <p>All sounds are royalty free<br>
  Attribution 3.0 Unported<br> (CC BY 3.0)
  
  </p>
 <a href=""> <p><button>Lern More</button></p></a>
</div>

<br>
<div class="container">
<div class="card" style=" margin-left: 450px;
    margin-top:   -610px;">
  <img src="Samplepack\wamelody\wamelody.png" alt="Denim Jeans" style="width:100%">
  <h1>WA Melody</h1>
  <p class="price">Free</p>
  <p>All sounds are royalty free<br>
  Attribution 3.0 Unported<br> (CC BY 3.0)
  
  </p>
  <p><button>Lern More</button></p>
</div>

<br>

<div class="card" style="    margin-left: 900px;
    margin-top:   -610px; ">
  <img src="Samplepack\lofi\lofi.png" alt="Denim Jeans" style="width:100%">
  <h1>LOFI</h1>
  <p class="price">Free</p>
  <p>All sounds are royalty free<br>
  Attribution 3.0 Unported<br> (CC BY 3.0)
  
  </p>
  <p><button>Lern More</button></p>
</div>

</div>
</body>
</html>
