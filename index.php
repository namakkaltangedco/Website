<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>TANGEDCO NEDC</title>
	<link rel="stylesheet" href="../nedc/css/menu.css"  type="text/css" />
</head>
<body>
<?php
include("../nedc/menu.html");
//this part of code is used for  hit counter i.e total number of visitors
$count = ("pagehit.txt");
$hits = file($count);
$hits[0] ++;
$fp = fopen($count , "w");
fputs($fp , "$hits[0]");
fclose($fp);
?>
<div id="container" style="width:1300px">
<div id="body" style="height:400px;width:1000px;float:left;">
<br>
<center><marquee scrollamount="1" behavior="alternate"><h5>NEDC Web Portal Welcomes You</h5></marquee></br>
<p style="font-align:center;font-family:Tamil vijaya; src:url('../nedc/font/vijaya.ttf'),font-weight:bold;">
</p>
</center>
</div id="body" >

<div id="body gap" style="height:400px;width:20px;float:left;">
</div>

<!--Event Parts ( To Add content in event edit ../nedc/event.php file ) -->
<div id="event" style="	background-color:#ffffff;border-radius:8px;box-shadow: 5px  5px 10px 5px #888888;overflow: hidden; position: relative; height:280px;width:250px;float:left;">
<?php include("../nedc/event.html")?>
</div id="event">
<!-- Dummy Div To Seperate Body from other Div-->
<div id="event gap" style="height:20px;width:250px;float:left;">
</div id="event gap">

<div id="tought" style="background-color:#ffffff;border-radius:8px;box-shadow: 5px 10px 10px 5px #888888;overflow: hidden; position: relative; height:110px;width:250px;float:left;">
<?php include("../nedc/tought.html");?>
</div id="tought">
</body>

</html>
