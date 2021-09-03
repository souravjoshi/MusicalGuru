<html>
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
div {
  background-color: #f7f7f7;
  width: 300px;
  height: 170px;
  padding:140px 50px;
  margin: 50px;
  margin-right: 80px;
  margin-left: 450px;
  border: 1px solid #dedede;
  border-radius: 6px;

}

h1 {
	font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New";
	font-weight: bold;
	font-size: 32px;
	color:black;
    margin-left: 600px;

}

input{
	display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #555;
    vertical-align: middle;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 4px;
    line-height: 15px;
    margin-top: 5px;
} 

.button {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New";
    font-weight: normal;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: 4px;
    color: #fff;
    background-color: #428bca;
    border-color: #357ebd;
    padding: 10px 123px;
    font-size: 18px;
    line-height: 1.33;
    border-radius: 6px;
    margin-top: 20px;
}

a{
    font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New";
    font-size: 16px;
    text-decoration: none;
 }

img{
    margin-top: -100px; padding-right: 50px;  margin-left: 50px; margin-bottom: 10px;
}

textarea {
  width: 100%; 
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  resize: none;
  margin-bottom: -20px;
}


@media (min-width: 601px){
 div {
  margin: 50px;
  margin-right: 80px;
  margin-left: 450px;
}
h1{
    margin-left: 550px;
}
}

@media (max-width: 601px){
 div {
    margin:15px;
    height: 160px;
}
h1{
    margin-left: 125px;
    margin-bottom: 50px;
}
}

</style>
<body>
<h1>Contact us</h1>
<div>
<img src="plogo.png" alt="Music Sampler" width="203" height="111">
<br>
<input type="text" title="Enter Your Name Here" placeholder="Name">
<input type="text" title="Enter Valid Email Address" placeholder="Email">
<br>
<form>
  <textarea placeholder="Enter Message Here..." title="Enter your message in brief"></textarea>
</form>
<button class="button">Submit</button>
<br>
<br>
</div>
</head>
</body>
</html>