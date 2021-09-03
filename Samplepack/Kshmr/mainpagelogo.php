<?php

session_start();

?>

<!DOCTYPE html>
<html>
<title>PayMent</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

button {
    font-size: 24px;
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
    background-color: #0000;
    border: 1px solid #d8d8d8;
    border-radius: 100px;
    white-space: nowrap;
        }

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}		
		
</style>


<body>

<body>

<h2>Payment</h2>

<div class="card">
  <img src="kshmrimage.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Sound of KSHMR</b></h4>
	<h4><b>Price:-10$</b></h4>

	      <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="business" value="musicalgurupayment@business.example.com">
        
        <input type="hidden" name="item_name_1" value="Sound of Kshmr">
        <input type="hidden" name="amount_1" value="10">
        <input type="hidden" name="quantity_1" value="1">
<button class="button" value="PayPal">Buy Now </button> 
        </form>
 	
  </div>
</div>



</body>
</html>