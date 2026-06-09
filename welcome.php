<?php
session_start();
if(!isset($_SESSION['email']))
{
    echo "<script>window.location.assign('login.php?msg=Please Login!!')</script>";
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
	<link rel="stylesheet" type="text/css" href="myinex.css">
	<style>	    *{
	padding:0;
	margin:0;
	box-sizing:border-box;
}
.topbar{
	width:100%;
	height:70px;
	background-color:#d9d9d9;
	position:fixed;
	top:0;	
}
.topbar h3{
	position:fixed;
	padding-top:10px;
	text-align:center;
	font-family:ubuntu;
	font-size:26px;
	padding-left:37%;
	
}
.topbarbottom{
    position:fixed;
    background-color:blue;
    height:3px;
    width:100%;
}
p#top{
	
	position:fixed;
	padding-left: 48%;
	padding-top:36px;
    padding-bottom: 10px;
    font-style: italic;
    font-size: 18px;

}
	.mobilenav {
    margin-top: 12px;
    height: 40px;
    background-color: #d9d9d9;}
	.box{
	margin-top:7px;
	margin-left:10px;
	font-size:25px;
   }
   i.bx.bx-cart-download {
    font-size: 22px;
     font-weight:bold;
}
i.bx.bx-cart-download {
    font-size: 22px;
     font-weight:bold;
}
i.bx.bxs-downvote {
    font-size: 22px;
     font-weight:bold;
}
i.bx.bxs-help-circle {
    font-size: 22px;
    font-weight:bold;
}
i.bx.bx-log-in{
	font-size:22px;
	font-weight:bold;
}.bx-home:before {
    font-size: 22px;
    content: "\eb12";
    margin-left: 10px;
    margin-top: 25px;
    font-weight:bold;
}
.mobilenav li a{
	text-decoration:none;
}
.dropbtn {
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  background-color: #E8E8E8;
  border: white;
  border-radius: 4px;
  display: inline-block;
  font: inherit;
  line-height: 1.5em;
  padding: 0.5em 3.5em 0.5em 1em;
  margin: auto;      
   -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
    background-image:
    linear-gradient(135deg, transparent 50%, blue 50%),
    linear-gradient(45deg, blue 50%, transparent 50%),
    linear-gradient(to left, #E8E8E8, #E8E8E8);
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
margin-right:0px;
 
}


.dropdown {
  position: relative;
  display: inline-block;
  
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #E8E8E8;
  min-width: 220px;
  box-shadow: 0px 0px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin:auto;
  margin-left:0;
}

.dropdown-content a {
  color: black;
  padding:8px; 18px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #0968FF; color:white;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
 -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
    background-image:
    linear-gradient(45deg, transparent 50%, blue 50%),
    linear-gradient(135deg, blue 50%, transparent 50%),
    linear-gradient(to right, #E8E8E8, #E8E8E8);
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
}

.dropdown-content ul li{
	margin-left:0;
	width:100%;
	margin:0;}
.dropdown-content ul{
	padding-inline-start:0;
}

.menubar{
	position:fixed;
	padding:0;
	margin:0;
	height:45px;
	background-color:#E8E8E8;
	width:100%;
	margin-bottom:10px;
}
.menub{
	position:fixed;
	margin-left:30px;
	background-color:#E8E8E8;
}
.menubar li {
    float: right;
    margin-right: 25px;
    margin-top: 10px;
    font-size: 15px;
}
.menubar li a{
    text-decoration:none;
}
.menubar li .bx{
   font-size:21px;
}
#optiondiv li {
	padding-top:25px;
	line-height:1;
    font-size: 16px;
    margin-left: 50;
}
#optiondiv li a{
	text-decoration:none;
	color:blue;
}
#optiondiv li a:hover{
	text-decoration:none;
	color:black;
}
.bottomn{
	height:40px;
	background-color:#d9d9d9;
	padding-top:10px;
}
.bottomn h5{font-size:14px;}
.foot{
	height:300px;
	background-color:#d9d9d9;
	width:100%;
}
 #optiondiv{
    float: left;
    margin-left: 15px;
    margin-top: 15px;
    height: 270px;
    width: 15%;
    background-color: #d9d9d9;
}
 #optiondivb{
    float: left;
    margin-left: 15px;
    margin-top: 15px;
    height: 270px;
    width: 33%;
    background-color: #d9d9d9;
}
optiondiv h3 {
    font-size: 22px;
    margin-top: 10px;
}
p#title {
    margin-top: 10px;
    margin-left: 10px;
    font-weight: bold;
    font-size: 20px;
}
p#infonew {
    margin-top: -15px;
    margin-left: 146px;
}
p{
	margin-left:22px;
}
.bluelinea{
	background-color:blue;
	height:2px;
width:100%;
margin-top:1px;
margin-bottom:1px;}

.foot ul {
    margin-top: 20px;
}
.bx-log-out:before {
    font-weight: bold;
    content: "\eb4f";
    font-size: 24px;
}
@media screen and (min-width: 320px) {
	.topbar{height:60px;}
	.topbar h3{font-size:20px;padding-left:25%;}
	 p#top{font-size: 14px;padding-left: 45%;padding-top:35px;}
	.contentarea{background-color:#d9d9d9; height:980px;}
	.flexbanner{background-color:#d9d9d9; height:auto; margin-top:3px;}
	.flexbannerb{background-color:#d9d9d9; height:auto; margin-top:15px;}
	.menustatic{display:none;}
	img.mySlides{height:80px;}
	img#sour{border-radius:250px; height:120px; width:120px;}
    li#option {width: 50%;float: left;padding-left: 22px;padding-top: 3%;}
	#optiondiv{width:40%; height:250px;}
	#optiondivb{width:80%; height:250px;}
	.foot{height:1150px;}
	.menubar{display:none;}
	.logarea_left{display:none;}
	.loginarea{height:550px; margin-top:15px;}
	.logarea_right{width:97%; height:500px;}
	p#title { font-size: 16px; margin-left: 13px;}
	.mobilenav{margin-top:50px;}
	.mobilenav li {display: inline-block;font-size: 10px;padding-left:0%;margin-top: 10px;}
	.margitoparea{display:none;}
	.welcomeinfo{display:none;}
}

@media screen and (min-width: 390px) {
	.contentarea{height:600px;}
		img#sour{border-radius:250px; height:120px; width:120px;}
    li#option {width: 33%;float: left;padding-left: 5px;padding-top: 3%;}	
	#optiondiv{width:45%; height:300px;}
	#optiondivb{width:90%; height:250px;}
	.mobilenavi {height:40px; width:100%; background-color:lightgreen;}
	.foot{height:900px;}
	.logarea_left{display:none;}
	.logarea_right{width:97%; height:550px;}
	.loginarea{height:350px;margin-top:15px; height:600px;}
	#formarea{width:90%;}
	.mobilenav{margin-top:5px;}
    #optiondiv li{line-height:1; margin-top:-15px; margin-left:25px;}
    .blueline{margin-top:60px;}
    .margitoparea{display:none;}
    .welcomeinfo{display:none;}
}
@media screen and (min-width: 425px) {
	.contentarea{height:650px;}
		img#sour{border-radius:250px; height:120px; width:120px;}
    li#option {width: 33%;float: left;padding-left: 16px;padding-top: 3%;}	
	#optiondiv{width:45%; height:250px;}
	#optiondivb{width:90%; height:200px;}
	.mobilenavi {height:40px; width:100%; background-color:lightgreen;}
	.foot{height:900px;}
	.logarea_left{display:none;}
	.logarea_right{width:97%; height:550px;}
	.loginarea{height:350px;margin-top:15px; height:600px;}
	#formarea{width:90%;}
	.mobilenav{margin-top:55px;}
	.mobilenav li {display: inline-block; font-size: 14px;  margin-left: 10px;}
	 #optiondiv li{line-height:1; margin-top:-15px;}
	 .margitoparea{display:none;}
	 .welcomeinfo{display:none;}
}
@media screen and (min-width: 768px) {
	.topbar h3{font-size:22px;padding-left:35%;}
	 p#top{font-size: 16px;padding-left: 50%;padding-top:35px;}
	 .contentarea{background-color:#d9d9d9; height:1000px;}
	 .flexbanner{background-color:#d9d9d9; height:auto; margin-top:3px;}
	 img.mySlides{height:180px;}
	 img#sour{border-radius:250px; height:200px; width:200px;}
    li#option {width: 33%;float: left;padding-left: 3%;padding-top: 3%;}
	#optiondiv{width:23%; height:250px;}
	#optiondivb{width:90%;}
	.foot{height:600px;}
	.menubar{display:none;}
	.dropbtn {margin-left: 40;}
	.logarea_left{display:initial;}
	.logarea_right{width:50%; height:100%; background-color:lightskyblue;}
	.loginarea{height:400px;margin-top:95px;}
	#formarea{width:90%;}
	 img{height:80%;width:100%;}
	 #optiondiv li{line-height:1; margin-top:-15px;}
	 .margitoparea{display:none;}
	 .welcomeinfo{display:initial; right: 25;position: fixed; top: 40; color:navy;}
}
@media screen and (min-width: 768px) {
	.topbar{height:60px; width:100%;}
    .topbar h3{font-size: 22px; padding-left: 35%; background-color: #d9d9d9;}
     p#top{background-color:transparent; padding-left:45%;}
    .topbarbottom {position: fixed;background-color: blue;height: 3px;width: 100%;top: 60;display:initial;}
    .menubar{display:none;}
    .flexbanner {margin-top:3px;}
	.contentarea{height:1100px; margin-top:3px;}
	.bluelinea{}
	.foot{height:650px;	}
	 #optiondiv li{ line-height:1.3;}
	 #optiondivb{font-size:20px;}
     p#title {font-size:24px;}
	.bottomn{margin-top:2px;}
	 img.mySlides{height:180px;}
	 img#sour{border-radius:250px; height:200px; width:200px;}
    li#option {width: 32%;float: left;margin-left:1%;margin-top: 3%;}
	img{height:80%;width:100%;}
	 .margitoparea{display:none;}
	 .mobilenav li {margin-left:8%;}
}
@media screen and (min-width: 1024px) {
	.menubar{display:none;}
  li#option {width: 33%;float: left;padding-left: 3%;padding-top: 3%;}
	.foot{height:300px;}
	#optiondiv{width:15%; height:250px;}
	#optiondiv li{line-height:1; margin-top:-15px;}
	#optiondivb{width:30%; }
	.logarea_left{display:initial;}
	.logarea_right{width:50%; background-color:#d9d9d9;}
	.loginarea{height:500px;margin-top:107px; padding-top:50px;}
	#formarea{width:65%;}
	img{height:95%;width:100%;}
	.mobilenav li {margin-left:10%;}
  }
@media screen and (min-width: 1140px) 
{
    .topbar{height:60px; width:100%;}
    .topbar h3{font-size: 22px; padding-left: 35%; background-color: #d9d9d9;}
     p#top{background-color:transparent; padding-left:45%;}
    .topbarbottom {position: fixed;background-color: blue;height: 3px;width: 100%;top: 60;display:initial;}
    .menubar{ position: fixed; display: initial; top: 63px;}
    .menub { height: 45px;  margin: 0;display: initial; position: fixed; background-color:#e8e8e8; padding: 0;width: 85%; float:left;}
    .dropbtn { margin-left: 0; display:initial;}
    .menuc {  position: fixed;width: 15%;height: 45px;background-color: #e8e8e8; float: right;right: 0;}
    .menuc ul li{background-color:#e8e8e8;}
    .menuc li a {text-decoration: none;background-color: #e8e8e8;}
    .menuc li a:hover {color: red;}
    i{background-color:#e8e8e8;}
    .flexbanner {margin-top:112px;}
	.contentarea{height:1400px; margin-top:3px; padding:25px;}
	li#option {width: 32%;float: left;margin-left:1%;padding-left: 0%;padding-top: 0%;}
	.bluelinea{}
	.foot{height:280px;	}
	.bottomn{margin-top:2px;}
	 
	#optiondiv{width:15%; height:250px;}
	#optiondiv li{line-height:1; margin-top:-15px;}
	#optiondivb{width:30%; }
	.margitoparea{display:none;}
	.mobilenav{display:none;}
	.blueline{display:none;}
}

@media screen and (min-width: 1248px) {
    .topbar{height:60px; width:100%;}
    .topbar h3{font-size: 22px; padding-left: 35%; background-color: #d9d9d9;}
     p#top{background-color:transparent; padding-left:45%;}
    .topbarbottom {position: fixed;background-color: blue;height: 3px;width: 100%;top: 60;display:initial;}
    .menubar{ position: fixed; display: initial; top: 63px;}
    .menub { height: 45px;  margin: 0;display: initial; position: fixed; background-color:#e8e8e8; padding: 0;width: 85%; float:left;}
    .dropbtn { margin-left: 0; display:initial;}
    .menuc {  position: fixed;width: 15%;height: 45px;background-color: #e8e8e8; float: right;right: 0;}
    .menuc ul li{background-color:#e8e8e8;}
    .menuc li a {text-decoration: none;background-color: #e8e8e8;}
    .menuc li a:hover {color: red;}
    i{background-color:#e8e8e8;}
    .flexbanner {margin-top:112px;}
	.contentarea{height:1000px; margin-top:3px; padding-left:100px; padding-right:15px;}
	li#option {width: 20%;float: left;margin-left:2%;padding-left: 0;padding-top: 0;padding-right:0;padding-bottom:0;height:250px;}
	img#sour {height:98%; width:100%;}
	.bluelinea{}
	.foot{height:300px;	}
	#optiondiv li{font-size:15px; line-height:1;}
	#optiondivb{font-size:20px;}
	p#title{font-size:18px;}
	.bottomn{margin-top:2px; font-size:18px;}
    
}


@media screen and (min-width: 1420px) 
{
    .topbar{height:60px; width:100%;}
    .topbar h3{font-size: 22px; padding-left: 35%; background-color: #d9d9d9;}
     p#top{background-color:transparent; padding-left:45%;}
    .topbarbottom {position: fixed;background-color: blue;height: 3px;width: 100%;top: 60;display:initial;}
    .menubar{ position: fixed; display: initial; top: 63px;}
    .menub { height: 45px;  margin: 0;display: initial; position: fixed; background-color:#e8e8e8; padding: 0;width: 85%; float:left;}
    .dropbtn { margin-left: 0; display:initial;}
    .menuc {  position: fixed;width: 15%;height: 45px;background-color: #e8e8e8; float: right;right: 0;}
    .menuc ul li{background-color:#e8e8e8;}
    .menuc li a {text-decoration: none;background-color: #e8e8e8;}
    .menuc li a:hover {color: red;}
    i{background-color:#e8e8e8;}
    .flexbanner {margin-top:112px;}
	.contentarea{height:1100px; margin-top:3px;}
	.bluelinea{}
	.foot{height:280px;	}
	.bottomn{margin-top:2px;}
	li#option {width: 20%;float: left;margin-left:3%;padding-left: 0;padding-top: 0;padding-right:0;padding-bottom:0;height:280px;}
    
	.foot{height:330px;}
	#optiondiv li {font-size:20px; line-height:1.3;}
	#optiondivb {font-size:20px;}
	p#title {font-size:22px;}
  }


@media screen and (min-width: 1920px) {
    .topbar{height:100px; width:100%;}
    .topbar h3{font-size: 36px; padding-left: 35%; background-color: #d9d9d9;}
     p#top {  font-size: 24px; background-color: transparent; padding-left: 45%; margin-top: 16;}
    .topbarbottom {position: fixed;background-color: blue;height: 3px;width: 100%;top: 100;display:initial;}
    .menubar{ position: fixed; display: initial; top: 103px; height:60px}
    .menub { height: 60px;  margin: 0;display: initial; position: fixed; background-color:#e8e8e8; padding: 0;width: 85%; float:left;}
    .dropbtn { margin-left: 0; display:initial; padding-top: 15px; padding-bottom: 15px;padding-left: 60px;padding-right: 60px; font-size:20px}
    .menuc {  position: fixed;width: 15%;height: 60px;background-color: #e8e8e8; float: right; right: 0;}
    .menuc ul li{background-color:#e8e8e8;padding-top: 15px; padding-bottom: 15px;margin-top:0;}
    .menuc li a {text-decoration: none;background-color: #e8e8e8; font-size:20px;}
    .menuc li a:hover {color: red;}
     i{background-color:#e8e8e8;}
    .flexbanner {margin-top:167px;}
	.contentarea{height:1500px; margin-top:3px;}
     li#option {width: 25%; left;margin-left: 0;margin-top: 3%; height:unset;}
	.bluelinea{}
	.foot{height:380px;	}
	#optiondiv {height:350px;}
	#optiondiv li {font-size:20px; line-height:1.5;}
	#optiondivb {font-size:20px;}
	p#title {font-size:22px;}
	.bottomn{margin-top:2px; font-size:18px;}
	 img.mySlides{height:250px;}
	 img#sour{border-radius:250px; height:350px; width:350px;}
	 .mobilenav {display:none;}
  }
  @media screen and (min-width: 2560px) {
    .topbar{height:100px; width:100%;}
    .topbar h3{font-size: 40px; padding-left: 35%; background-color: #d9d9d9;}
     p#top {  font-size: 28px; background-color: transparent; padding-left: 45%; margin-top: 16;}
    .topbarbottom {position: fixed;background-color: blue;height: 3px;width: 100%;top: 100;display:initial;}
    .menubar{ position: fixed; display: initial; top: 103px; height:80px}
    .menub { height: 80px;  margin: 0;display: initial; position: fixed; background-color:#e8e8e8; padding: 0;width: 85%; float:left;}
    .dropbtn { margin-left: 0; display:initial; padding-top: 20px; padding-bottom: 20px;padding-left: 100px;padding-right: 100px; font-size:30px}
    .menuc {  position: fixed;width: 15%;height: 60px;background-color: #e8e8e8; float: right; right: 0;}
    .menuc ul li{background-color:#e8e8e8;padding-top: 15px; padding-bottom: 15px;margin-top:0;}
    .menuc li a {text-decoration: none;background-color: #e8e8e8; font-size:30px;}
    .menuc li a:hover {color: red;}
     i{background-color:#e8e8e8;}
    .flexbanner {margin-top:187px;}
	.contentarea{height:1500px; margin-top:3px; padding-left:200px;}
     li#option {width: 25%; left;margin-left: 0;margin-top: 3%; height:unset;}
	.bluelinea{}
	.foot{height:380px;	}
	#optiondiv {height:350px;}
	#optiondiv h3{font-size:33px;}
	#optiondiv li {font-size:30px; line-height:1.5;}
	#optiondivb {font-size:30px;}
	p#title {font-size:35px;}
	.bottomn{margin-top:2px; font-size:28px;padding:25px; height:100px;}
	.bottomn h5{padding:0px;font-size:28px;}
	 img.mySlides{height:250px;}
	 img#sour{border-radius:250px; height:350px; width:350px;}
	 .mobilenav {display:none;}
  }
</style>
	</head>
<body>
<div class="topbar"><!--TOP BAR FOR EVERY PAGE!-->
<center><h3>Indfes Smartdoors</h3></center>
<p id="top">You Think We Prepare</p>
</div><!--TOP BAR Ends!-->
<div class="blueline"></div>
<div class="menuarea"></div>
<div class="topbarbottom"></div>
<!--Drop Down Menu!-->

<div class="mobilenav"><!-- Mobile Nav Starts Here!-->
<ul type="none">
<li><a href="index.php"><i class='bx bx-home' style='color:#5c07fa'  ></i>Home</a></li>
<li><a href="login.php"><i class='bx bx-cart-download' style='color:#5c07fa' ></i>Application</a></li>
<li><a href="login.php"><i class='bx bxs-downvote' style='color:#5905f4' ></i>Download</a></li>
<li><a href="login.php"><i class='bx bxs-help-circle' style='color:#7405f7' ></i>Help</a></li>
<li><a href="logout.php"><i class='bx bx-log-out' style='color:#6d07e7' style="font-size:24px;" ></i>Logout</a></li></ul>
</div><!-- Mobile Nav Ends Here!-->

<div class="menubar">
<div class="menub"><!-- Drop Down Menu starts!-->
<!-- DROP DOWN LISTS!-->
<div class="dropdown classic">
  <button class="dropbtn">Start Business</button>
  <div class="dropdown-content">
   <ul type="none">
   <li><a href="mcaform.php">Private Limited Company</a></li>
   <li><a href="mcaform.php">Public Limited Company</a></li>
   <li><a href="mcaform.php">Limited Liability Partnership</a></li>
    <li><a href="mcaform.php">One Person Company</a></li>
	<li><a href="mcaform.php">Proprietorship</a></li>
	<li><a href="mcaform.php">One Person Company</a></li>
	<li><a href="mcaform.php">ISO Certification</a></li>
	<li><a href="mcaform.php">Copyright Certification</a></li>
	<li><a href="mcaform.php">GST Registration</a></li>
	<li><a href="mcaform.php">MSME Registration</a></li>
	<li><a href="mcaform.php">Trademark Registration</a></li>
	<li><a href="mcaform.php">Startup India Registration</a></li>
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">ROC|Compliance</button>
  <div class="dropdown-content">
   <ul type="none">
  <li><a href="roc.php">PVT LTD ROC | AMC</a></li>
  <li><a href="roc.php">OPC ROC | AMC</a></li>
  <li><a href="roc.php">LLP ROC | AMC</a></li>
  <li><a href="roc.php">Return Filing Pvt Ltd</a></li>
  <li><a href="roc.php">Return Filing OPC</a></li>
  <li><a href="roc.php">Return Filing LLP</a></li>
  <li><a href="roc.php">GST Return Filing</a></li>
  <li><a href="roc.php">Income Tax Return Filing</a></li>
  <li><a href="roc.php">Statuory & Audit</a></li>
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">Student Services</button>
  <div class="dropdown-content">
   <ul type="none">
   <li><a href="student.php">GAP Certificate</a></li>
   <li><a href="student.php">Single Girl Child</a></li>
   <li><a href="student.php">Date of Birth Affidavit</a></li>
   <li><a href="student.php">Proof of Income Affidavit</a></li>
   <li><a href="student.php">Change of Name Affidavit</a></li>
   <li><a href="student.php">Proof of Address Affidavit</a></li>
   <li><a href="student.php">No Criminal Record Affidavit</a></li>
   <li><a href="student.php">Date of Birth Affidavit</a></li>
   <li><a href="student.php">Education Loan Affidavit</a></li>
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">E-District</button>
  <div class="dropdown-content">
  <ul type="none">
 <li><a href="ersol.php">Domicile Certificate</a></li>
 <li><a href="ersol.php">Income Certificate</a></li>
 <li><a href="ersol.php">Caste Certificate</a></li>
 <li><a href="ersol.php">Character certificate</a></li>
 <li><a href="ersol.php">EWS certificate</a></li>
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">Services</button>
  <div class="dropdown-content">
   <ul type="none">
   <li><a href="more.php">Electricity Connection</a></li>
   <li><a href="more.php">LPG Connection</a></li>
   <li><a href="pension.php">Widow Pension</a></li>
   <li><a href="pension.php">Old Age Pension</a></li>
   <li><a href="pension.php">Physically Handicapped<br> Pension</a></li>
   <li><a href="more.php">Residential Rent agreement</a></li>
   
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">Individual</button>
  <div class="dropdown-content">
   <ul type="none">
   <li><a href="individual.php">Aadhar update (E-kyc)</a></li>
   <li><a href="lndividual.php">Pan Card(E-kyc)</a></li>
   <li><a href="individual.php">Driving License(E-kyc)</a></li>
   <li><a href="individual.php">Passport Services(E-Kyc)</a></li>
   <li><a href="individual.php">Voter ID</a></li>
   <li><a href="individual.php">CPGRMS Greviance Registration</a></li>
</ul>
  </div>
</div>
</div>
<div class="menuc"><ul type="none">
<li><a href="logout.php"><i class='bx bx-log-out' style='color:#6d07e7'  ></i>Logout</a></li>
<li><a href="index.php"><i class='bx bxs-home' style='color:#6d07e7'  ></i>Home</a></li>
</ul></div>
</div>
</div><!-- Drop Down Menu Ends!-->



<div class="flexbanner"><!--Flex Banner starts Here!-->
 <img class="mySlides" src="felxi.svg" height="250px" width="100%">
 <img class="mySlides" src="flexa.svg" height="250px" width="100%">
</div><!--Flex Banner Ends Here!-->
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000); 
}
</script>

<div class="welcomeinfo"><p id="username"><b>Welcome:</b><?php echo $_SESSION['customer']?></p></div>




<div class="contentarea">
<ul type="none">
<li id="option"><a href="mcaform.php"><img id="sour" src="mca.png" height="350px" width="350px"></a></li>
<li id="option"><a href="pension.php"><img id="sour" src="pension.png" height="350px" width="350px"></a></li>
<li id="option"><a href="msme.php"><img id="sour" src="msme.png" height="350px" width="350px"></a></li>
<li id="option"><a href="inidividual.php"><img id="sour" src="individual.png" height="350px" width="350px"></a></li>
<li id="option"><a href="student.php"><img id="sour" src="student.png" height="350px" width="350px"></a></li>
<li id="option"><a href="roc.php"><img id="sour" src="rocs.png" height="350px" width="350px"></a></li>
<li id="option"><a href="goi.php"><img id="sour" src="agro.png" height="350px" width="350px"></a></li>
<li id="option"><a href="legal.php"><img id="sour" src="agri.png" height="350px" width="350px"></a></li>
<li id="option"><a href="legal.php"><img id="sour" src="legal.png" height="350px" width="350px"></a></li>
<li id="option"><a href="accounting.php"><img id="sour" src="taxation.png" height="350px" width="350px"></a></li>
<li id="option"><a href="ersol.php"><img id="sour" src="edistrict.png" height="350px" width="350px"></a></li>
<li id="option"><a href="ticket.php"><img id="sour" src="comfed.png" height="350px" width="350px"></a></li>
</ul></div>

<div class="bluelinea"></div>

<!-- Footer Starts from here!-->
<div class="foot">
<div id="optiondiv">
<center><h3>About<h3></center>
<ul type="none">
<li><a href="about.php">About Us</a></li>
<li><a href="services.php">Our Services</a></li>
<li><a href="branches.php">Our Branches</a></li>
<li><a href="careers.php">Careers</a></li>
<li><a href="news.php">News</a></li>

</ul></div>
<div id="optiondiv"><center><h3>Our Policy<h3></center>
<ul type="none">
<li><a href="refund.php">Refund Policy</a></li>
<li><a href="privacy.php">Privacy Policy</a></li>
<li><a href="terms.php">Terms & Conditions</a></li>
<li><a href="payments.php">Payment Policy</a></li>
<li><a href="welcome.php">More</a></li></div>
<div id="optiondiv"><center><h3>Social<h3></center>
<ul type="none">
<li><a href="www.youtube.com">Youtube</a></li>
<li><a href="www.instagram.com">Instagram</a></li>
<li><a href="www.linkedLn.in">Linkedln</a></li>
<li><a href="www.twitter.com">Twitter</a></li>
<li><a href="www.whatsapp.com">Whatsapp</a></li>
</ul>
</div>
<div id="optiondiv"><center><h3>More<h3></center>
<ul type="none">
<li><a href="query.php">Query</a></li>
<li><a href="complaint.php">Complaint</a></li>
<li><a href="feedback.php">Feedback</a></li>
<li><a href="ticket.php">Ticket</a></li>
<li><a href="track.php">Track Status</a></li>
</ul>
</ul></div>
<div id="optiondivb">
<p id="title">Indfes Internet Services (OPC) Pvt. Ltd.</p><br>
<p id="ro">Registered office:</b>&nbsp;140, First Floor, Unnamed Road, Udhranpur,<br> Hardoi
<br>Uttar Pradesh-241124,<br> India<br><br>
<p><b>Email:</b> care@insmart.online</p>
<p><b>Phone:&nbsp;</b>+91 8577897323</p></div>
</div>

<div class="bottomn"><h5><center>All Rights reserved by @indfes.com 2023|2024.</center></h5></div>
</body>
</html>	

</body>
</html>