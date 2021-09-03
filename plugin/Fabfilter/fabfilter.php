<!DOCTYPE html>
<html lang="en">
<head>
  <title>FabFilter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  h1{
    font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New";
  }

  .link{
    font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New";
  color: black;
  font-size: 25px;
  align-items: center;
  text-decoration: none;
  }
.plugin{
  box-shadow: 0 5px 15px 0 rgba(0,0,0,0.5);
}
.award{
    position: absolute;
  font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New";
  color: black;
  font-size: 15px;
}


.rate {
  border: 1px solid #cccccc;
  float: left;
  height: 46px;
  padding: 0 10px;
}

.rate:not(:checked) > input {
  position: absolute;
  top: -9999px;
}

.rate:not(:checked) > label {
  float: right;
  width: 1em;
  overflow: hidden;
  white-space: nowrap;
  cursor: pointer;
  font-size: 30px;
  color: #ccc;
}

.rate:not(:checked) > label:before { content: '★ '; }

.rate > input:checked ~ label { color: #ffc700; }

.rate:not(:checked) > label:hover, .rate:not(:checked) > label:hover ~ label { color: #deb217; }

.rate > input:checked + label:hover, .rate > input:checked + label:hover ~ label, .rate > input:checked ~ label:hover, .rate > input:checked ~ label:hover ~ label, .rate > label:hover ~ input:checked ~ label { color: #c59b08; } 

button {
    font-size: 16px;
    display: inline-flex;
    text-align: center;
    vertical-align: middle;
    font-family:Courier New;
    font-weight: bold;
    line-height: 1.15;
    margin: 5px;
    padding: 15px 225px;
    cursor: pointer;
    color: #131313;
    color: #fff;
    background-color: #428bca;
    border-color: #357ebd;
    border: 1px solid #d8d8d8;
    border-radius: 100px;
    white-space: nowrap;
        }

textarea {
  width: 100%; 
  padding: 15px 15px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  resize: none;
  margin-bottom: -20px;
  margin-top: 20px;
}

  </style>

</head>
<body>
<div class="container-fluid">
<h1 style="text-align: center; font-size: 30px;">All FabFilter plug-ins in one download</h1>
  <div class="row row-no-gutters">
    <div class="col-sm-6">
     <center><img src="fabfilter.png" class="imagem"alt="FabFilter" style="object-position: center;"></img></center>
    </div>
    <div class="col-sm-6">

      <h1 style="text-align: center; font-size: 40px;">Download </h1>
      <br>
      <br>
      <center><a href="https://download.fabfilter.com/fftotalbundle.dmg" class="link"> Download For Mac </a></center>
      <h1 style="text-align: center; font-size: 15px;">64-bit plug-ins in all formats (139.32 MB)</h1>
      <br>
      <br>
      <center><a href="https://download.fabfilter.com/fftotalbundlex64.exe" class="link"> Download For Window </a></center>
      <h1 style="text-align: center; font-size: 15px;">64-bit plug-ins in all formats (53.10 MB)</h1>
      <br>
      <br>
      <center><a href="https://download.fabfilter.com/fftotalbundle.exe" class="link"> Download For Window </a></center>
      <h1 style="text-align: center; font-size: 15px;">32-bit plug-ins in all formats (50.76 MB)</h1>
      <br>
      <br>
      <h1 style="text-align: center; font-size: 40px;">Download For Free</h1>
      <h1 style="text-align: center; font-size: 15px;">All downloads are free, fully functional 30-day trial versions. After the evaluation period.</h1>

    </div>
  </div>
  <h1 style="text-align: center; font-size: 40px;">In Bundle</h1>
  <br>
  <br>
    <h1 style="text-align: left; font-size: 32px;">Top Plug-in</h1>
  <div class="col-sm-6">
    <img src="PRO\Q3.jpg" class="plugin" alt="FabFilter Q3" title="FabFilter Q3" style="height: 215px;
    width: 375px;">
  <h1 style=" font-size: 20px;">High-quality equalizer plug-in <br>
            3.14 — Jun 11, 2020</h1>

  </div>
  <div class="col-sm-6">
    <img src="PRO\C2.jpg" class="plugin" alt="FabFilter C2" title="FabFilter C2" style="height: 215px;
    width: 375px;">
    <h1 style=" font-size: 20px;">High-quality Compressor plug-in <br>
            2.10 — Jun 11, 2020</h1>
  </div>
  <br>
  <br>
    <h1 style="text-align: left; font-size: 32px;">Gate and Limiter</h1>
  <div class="col-sm-6">
    <img src="PRO\L2.jpg" class="plugin" alt="FabFilter L2" title="FabFilter L2" style="height: 215px;
    width: 375px;">
  <h1 style=" font-size: 20px;">Flexible gate/expander plug-in<br>
            1.24 — Jun 11, 2020</h1>

  </div>
  <div class="col-sm-6">
    <img src="PRO\G.jpg" class="plugin" alt="FabFilter G" title="FabFilter G" style="height: 215px;
    width: 375px;">
    <h1 style=" font-size: 20px;">True Peak Limiter plug-in<br>
            2.05 — Jun 11, 2020</h1>
  </div>
  <br>
  <br>
  <h1 style="text-align: left; font-size: 32px;">Filter and MB Compressor</h1>
  <div class="col-sm-6">
    <img src="PRO\Micro.jpg" class="plugin" alt="FabFilter Micro" title="FabFilter Micro" style="height: 215px;
    width: 375px;">

  <h1 style=" font-size: 20px;">Mini Filter plug-in<br>
            1.21 — Jun 11, 2020</h1>

  </div>
 
  <div class="col-sm-6">
    <img src="PRO\MB.jpg" class="plugin" alt="FabFilter MB" title="FabFilter MB" style="height: 215px;
    width: 375px;">
    <h1 style=" font-size: 20px;">Professional multiband compressor and expander plug-in<br>
            1.21 — Jun 11, 2020</h1>
  </div>

<div class="col-sm-12">
<div class="award">
<h1 style="font-size: 40px; text-align: center;">FabFilter's  Achivements</h1>

<h1 style="font-size: 16px;"> FabFilter is proud to announce that FabFilter Pro-Q 3 — released last year to widespread critical acclaim as a major update to its long-established equalizer plug-in — has won an Engineering Emmy® Award from The Television Academy, an award that honours individuals, companies, or organisations for engineering developments that considerably improve existing methods or innovations that materially affect the transmission, recording, or reception of television. </h1>
<br>
<h1 style="font-size: 40px; text-align: center;">System requirements</h1>

 <h1 style="font-size: 16px; text-align: center;">Windows 10, 8, 7, Vista, or XP, and a VST 2/3 host or Pro Tools <br> Mac OS X 10.8 or higher with Intel processor <br> an Audio Units host, VST 2/3 host, or Pro Tools <br>Both 64-bit and 32-bit hosts are supported.
</h1>
</div>
</div>

<div class="col-sm-12">
<center><a href="star/index.php"><button  class="button2">Rate This Product</button></center></a>
</div>
</div>
</div>

  
</body>
</html>


