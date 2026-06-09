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
	<Style>
	 	    *{
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
    background-color: lightgreen;}
	.box{
	margin-top:7px;
	margin-left:10px;
	font-size:25px;
   }
   i.bx.bx-cart-download {
    font-size: 22px;
}
i.bx.bx-cart-download {
    font-size: 22px;
}
i.bx.bxs-downvote {
    font-size: 22px;
}
i.bx.bxs-help-circle {
    font-size: 22px;
}
i.bx.bx-log-in{
	font-size:22px;
}.bx-home:before {
    font-size: 22px;
    content: "\eb12";
    margin-left: 10px;
    margin-top: 25px;
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
margin-right:20px;
 
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
.loginarea{
	margin-top:57px;
	height:500px;
	width:100%;
	background-color:#d9d9d9;
}
.logarea_right{
	float:left;
	width:48%;
	height:100%;
	margin-left:2%;
	background-color:#d9d9d9;
}
.logarea_left{
	float:left;
	width:48%;
	height:100%;
	background-color:#d9d9d9;
}
#formarea{
	margin:auto;
	margin-top:3%;
	border-radius:10px;
	height:90%;
	width:50%;
	background-color:lightskyblue;}
#formarea h3{
	font-size:26px;
	padding-top:40px;
}
input#forms {
    border: none;
    width: 70%;
    height: 50px;
    border-radius: 5px;
    margin-top: 25px;
    margin-left: 15%;
    padding-left: 15px;
}
#formarea button {
    width: 90px;
    height: 40px;
    border: none;
    border-radius: 5px;
    background-color: orange;
    margin-top: 30px;
}
#formarea button:hover {
    background-color: blue;
	color:white;  
}
#formarea a {
    margin-left: 15px;
    margin-top: 10px;
    text-decoration: none;
}
@media screen and (min-width: 320px) {
	.topbar{height:60px;}
	.topbar h3{font-size:20px;padding-left:25%;}
	.topbarbottom{position:fixed; top:60px;}
	 p#top{font-size: 14px;padding-left: 45%;padding-top:35px;}
	.contentarea{background-color:#d9d9d9; height:980px;}
	.flexbanner{background-color:#d9d9d9; height:auto; margin-top:3px;}
	.flexbannerb{background-color:#d9d9d9; height:auto; margin-top:15px;}
	.menustatic{display:none;}
	img.mySlides{height:80px;}
	img#sour{border-radius:250px; height:120px; width:120px;}
    li#option {width: 50%;float: left;padding-left: 22px;padding-top: 3%;}
	#optiondiv{width:40%; height:250px; margin-left:0;}
	#optiondivb{width:80%; height:250px;}
	.foot{height:1150px;}
	.menubar{display:none;}
	.logarea_left{display:none;}
	.loginarea{height:550px; margin-top:107px;}
	.logarea_right{width:97%; height:500px;}
	#formarea{width:98%;}
	p#title { font-size: 16px; margin-left: 13px;}
	.mobilenav { background-color: #e8e8e8; position: fixed; top: 51px;width: 100%;}
	.mobilenav li {display: inline-block;font-size: 10px;padding-left:0%;margin-top: 10px;}
	#optiondiv li{line-height:1; margin-top:-15px;}
}

@media screen and (min-width: 390px) {
	.topbarbottom{position:fixed; top:60px;}
		img#sour{border-radius:250px; height:120px; width:120px;}
    li#option {width: 33%;float: left;padding-left: 5px;padding-top: 3%;}	
	#optiondiv{width:45%; height:300px;}
	#optiondivb{width:90%; height:250px;}
	.mobilenavi {}
	.foot{height:900px;}
	.logarea_left{display:none;}
	.logarea_right{width:97%; height:550px;}
	.loginarea{height:350px;margin-top:107px; height:600px;}
	#formarea{width:90%;}
	.mobilenav{background-color: #e8e8e8; position: fixed; top: 51px;width: 100%;}
	.mobilenav ul {  margin-left: 25px;}
    #optiondiv li{line-height:1; margin-top:-15px;}
    .blueline{margin-top:60px;}
}
@media screen and (min-width: 425px) {
    
	.loginarea{height:350px;margin-top:107px; height:600px;}
	.contentarea{height:650px;}
		img#sour{border-radius:250px; height:120px; width:120px;}
    li#option {width: 33%;float: left;padding-left: 16px;padding-top: 3%;}	
	#optiondiv{width:45%; height:250px;}
	#optiondivb{width:90%; height:200px;}
	.mobilenavi {height:40px; width:100%; background-color:lightgreen;}
	.foot{height:900px;}
	.logarea_left{display:none;}
	.logarea_right{width:97%; height:550px;}
	.loginarea{margin-top:107px; height:600px;}
	#formarea{width:90%;}
	.mobilenav{background-color: #e8e8e8; position: fixed; top: 51px;width: 100%;}
	.mobilenav ul {  margin-left: 1px;}
	.mobilenav li {display: inline-block; font-size: 14px;  margin-left: 10px;}
	 #optiondiv li{line-height:1; margin-top:-15px;}
}
@media screen and (min-width: 768px) {
	.topbar{height:60px;}
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
	.loginarea{height:400px;margin-top:107px;}
	#formarea{width:90%;}
	 img{height:80%;width:100%;}
	 #optiondiv li{line-height:1; margin-top:-15px;}
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

@media screen and (min-width: 1248px) {
    .topbar{height:60px; width:100%;}
    .topbar h3{font-size: 22px; padding-left: 35%; background-color: #d9d9d9;}
     p#top{background-color:transparent; padding-left:45%;}
    .topbarbottom {position: fixed;background-color: blue;height: 3px;width: 100%;top: 60;display:initial;}
    .menubar{ position: fixed; display: initial; top: 63px;}
    .menub { height: 45px;  margin: 0;display: initial; position: fixed; background-color:#e8e8e8; padding: 0;width: 95%; float:left;}
    .dropbtn { margin-left: 0; display:initial;}
    .menuc {  position: fixed;width: 15%;height: 45px;background-color: #e8e8e8; float: right;right: 0;}
    .menuc ul li{background-color:#e8e8e8;}
    .menuc li a {text-decoration: none;background-color: #e8e8e8;}
    .menuc li a:hover {color: red;}
    i{background-color:#e8e8e8;}
    #formarea{width:50%;}
    .loginarea{margin-top:110;}
    .foot ul { margin-top: 20px;
    #optiondivb{font-size:20px;}
	p#title{font-size:18px;}
	.bottomn{margin-top:2px; font-size:18px;}
    }
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
	img.mySlides{height:250px;}
	img#sour{border-radius:250px; height:300px; width:300px;}
	.logarea_left{display:initial;}
	.logarea_right{width:50%;}
	.loginarea{height:500px;margin-top:112;}
	#formarea{width:50%;}
	img{height:100%;width:100%;}
	 .mobilenav {display:none;}
	 .foot{height:330px;}
	#optiondiv li {font-size:20px; line-height:1.3;}
	#optiondivb {font-size:18px;}
	p#title {font-size:22px;}
	
	.bottomn h5{font-size:18px;}
  }


@media screen and (min-width: 1920px) {
   .topbar{height:100px; width:100%;}
    .topbar h3{font-size: 36px; padding-left: 35%; background-color: #d9d9d9;}
     p#top {  font-size: 24px; background-color: transparent; padding-left: 45%; margin-top: 16;}
    .topbarbottom {position: fixed;background-color: blue;height: 3px;width: 100%;top: 100;display:initial;}
    .menubar{ position: fixed; display: initial; top: 100px; height:60px}
    .menub { height: 60px;  margin: 0;display: initial; position: fixed; background-color:#e8e8e8; padding: 0;width: 85%; float:left;}
    .dropbtn { margin-left: 0; display:initial; padding-top: 15px; padding-bottom: 15px;padding-left: 60px;padding-right: 60px; font-size:20px}
    .menuc {  position: fixed;width: 15%;height: 60px;background-color: #e8e8e8; float: right; right: 0;}
    .menuc ul li{background-color:#e8e8e8;padding-top: 15px; padding-bottom: 15px;margin-top:0;}
    .menuc li a {text-decoration: none;background-color: #e8e8e8; font-size:20px;}
    .menuc li a:hover {color: red;}
     i{background-color:#e8e8e8;}
     .foot{height:380px;	}
	#optiondiv {height:350px;}
	#optiondiv li {font-size:20px; line-height:1.5;}
	#optiondivb {font-size:20px;}
	p#title {font-size:22px;}
	.bottomn{margin-top:2px; font-size:18px;}
  
	.logarea_left{display:initial;}
	.logarea_right{width:50%;}
	.loginarea{height:700px;margin-top:166px;}
	#formarea{width:50%;}
	#formarea a {font-size:20px; margin-top:5px;}
	input#forms{margin-top:45px;}
	img{height:100%;width:100%;}	
	 .mobilenav {display:none;}
  }
  @media screen and (min-width: 2560px) {
    .topbar{height:100px; width:100%;}
    .topbar h3{font-size: 40px; padding-left: 35%; background-color: #d9d9d9;}
     p#top {  font-size: 28px; background-color: transparent; padding-left: 45%; margin-top: 16;}
    .topbarbottom {position: fixed;background-color: blue;height: 3px;width: 100%;top: 100;display:initial;}
    .menubar{ position: fixed; display: initial; top: 103px; height:85px}
    .menub { height: 80px;  margin: 0;display: initial; position: fixed; background-color:#e8e8e8; padding: 0;width: 95%; float:left;}
    .dropbtn { margin-left: 0; display:initial; padding-top: 20px; padding-bottom: 20px;padding-left: 100px;padding-right: 92px; font-size:30px}
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
	#optiondiv {height:350px; margin-left:35px;}
	#optiondiv h3{font-size:33px;}
	#optiondiv li {font-size:30px; line-height:1.5; margin-left:50px;}
	#optiondivb {font-size:30px;}
	p#title {font-size:35px;}
	.bottomn{margin-top:2px; font-size:28px;padding:25px; height:100px;}
	.bottomn h5{padding:0px;font-size:28px;}
	 img.mySlides{height:250px;}
	 img#sour{border-radius:250px; height:350px; width:350px;}
	 .mobilenav {display:none;}
	 #formarea{width:40%;}
	 .loginarea{height:700px;margin-top:192px;}
	 
  }
  .msg_item
	{
		text-align:center;
		background-color:red;
		font-size:20px;
		color:black;
	}
	</Style>
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
<li><a href="login.php"><i class='bx bx-log-in' style='color:#6d07e7'  ></i></a>Login</li></ul>
</div><!-- Mobile Nav Ends Here!-->

<div class="menubar">
<div class="menub"><!-- Drop Down Menu starts!-->
<!-- DROP DOWN LISTS!-->
<div class="dropdown classic">
  <button class="dropbtn">Individual</button>
  <div class="dropdown-content">
   <ul type="none">
   <li><a href="login.php">Domicile Certificate</a></li>
   <li><a href="login.php">Income Certificate</a></li>
   <li><a href="login.php">Caste Certificate</a></li>
   <li><a href="login.php">Widow/Old Age Pension</a></li>
   <li><a href="login.php">Physically Handicapped Certificate</a></li>
	<li><a href="login.php">Regular/Ujjwala L.P.G. Connection</a></li>
	<li><a href="login.php">Domestic Electricity Connection</a></li>
	<li><a href="login.php">Pan Card Application/Updation</a></li>
	<li><a href="login.php">Voter ID Application/Updation</a></li>
  </div>
</div>

<div class="dropdown classic">
  <button class="dropbtn">Industry</button>
  <div class="dropdown-content">
   <ul type="none">
  <li><a href="login.php">GST Registration</a></li>
  <li><a href="login.php">GST Return Filing</a></li>
  <li><a href="login.php">FSSAI Registration</a></li>
  <li><a href="login.php">MSME Registration</a></li>
  <li><a href="login.php">Startup India Registration</a></li>
  <li><a href="login.php">Partnership Deep</a></li>
  <li><a href="login.php">Commercial Electricity Connection</a></li>
  <li><a href="login.php">Commercial Rent/Lease Agreement</a></li>
  <li><a href="login.php">Notarized Consent Letter for conducting Business Activity</a></li>
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">IT Services</button>
  <div class="dropdown-content">
   <ul type="none">
   <li><a href="login.php">Website Development</a></li>
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">Legal</button>
  <div class="dropdown-content">
  <ul type="none">
 <li><a href="login.php">Notary</a></li>
 <li><a href="login.php">Affidavit</a></li>
  <li><a href="login.php">Agreement</a></li>
 <li><a href="login.php">Legal Notice</a></li>
 <li><a href="login.php">Residential Rent Agreement</a></li>
 <li><a href="login.php">Tenant Police Verification</a></li>
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">Student</button>
  <div class="dropdown-content">
   <ul type="none">
   <li><a href="login.php">Education Gap Certificate</a></li>
   <li><a href="login.php">Single Girl Child Affidavit</a></li>
   <li><a href="login.php">Single Mother Child Affidavit</a></li>
   <li><a href="login.php">Proof of Date of Birth Affidavit</a></li>
   <li><a href="login.php">Proof of Income Affidavit</a></li>
   <li><a href="login.php">Proof of Address Affidavit</a></li>
    <li><a href="login.php">Economically Weaker Section Certificate</a></li>
</ul>
  </div>
</div>
</div>
<div class="menuc"><ul type="none">
<li><a href="login.php"><i class='bx bx-log-out' style='color:#6d07e7'  ></i>Logout</a></li>
<li><a href="index.php"><i class='bx bxs-home' style='color:#6d07e7'  ></i>Home</a></li>
</ul></div>
</div>
</div><!-- Drop Down Menu Ends!-->


<div class="loginarea">
<div class="logarea_left">
<img src="forgot.svg">
</div>
<div class="logarea_right">
<div id="formarea">
<div class="msg_item"><?php 
    if(isset($_GET['msg']))
    {
      echo $_GET['msg'];
    } 
 ?> </div>
<center><h3>Reset Password</h3></center>
<form method="post">
<input id="forms" type="password"  name="old_password" placeholder="Old Password"><br>
<input id="forms" type="password" name="new_password" placeholder="New Password"><br>
<center><button type="submit"  name="reset_btn">Reset</button></center>
</form><br><br>

</div>
</div>
</div>


<div class="bluelinea"></div>

<!-- Footer Starts from here!-->
<div class="foot">
<div id="optiondiv">
<center><h3>About<h3></center>
<ul type="none">
<li><a href="login.php">About Us</a></li>
<li><a href="login.php">Our Services</a></li>
<li><a href="login.php">Our Branches</a></li>
<li><a href="login.php">Careers</a></li>
<li><a href="login.php">News</a></li>

</ul></div>
<div id="optiondiv"><center><h3>Our Policy<h3></center>
<ul type="none">
<li><a href="login.php">Refund Policy</a></li>
<li><a href="login.php">Privacy Policy</a></li>
<li><a href="login.php">Terms & Conditions</a></li>
<li><a href="login.php">Payment Policy</a></li>
<li><a href="login.php">More</a></li></div>
<div id="optiondiv"><center><h3>Social<h3></center>
<ul type="none">
<li><a href="login.php">Youtube</a></li>
<li><a href="login.php">Instagram</a></li>
<li><a href="login.php">Linkedln</a></li>
<li><a href="login.php">Twitter</a></li>
<li><a href="login.php">Whatsapp</a></li>
</ul>
</div>
<div id="optiondiv"><center><h3>More<h3></center>
<ul type="none">
<li><a href="login.php">Query</a></li>
<li><a href="login.php">Complaint</a></li>
<li><a href="login.php">Feedback</a></li>
<li><a href="login.php">Ticket</a></li>
<li><a href="login.php">Track Status</a></li>
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

<!-- Php code for reset password -->
<?php
if(isset($_POST['reset_btn']))
{ 
  $old_password=md5($_POST['old_password']);
  $new_password=md5($_POST['new_password']);
  $email=$_SESSION['email'];
  include_once('config.php');
  $query="SELECT * from user_register WHERE `password`='old_password' and email='$email' ";
  $result=mysqli_query($db,$query);
  $data=mysqli_fetch_array($result);
  if($old_password!=$data['password'])
  {
	echo "<script>window.location.assign('reset.php?msg=Please Enter valid Old password.')</script>";
  }
  mysqli_close($db);
  include('config.php');
  $query1="UPDATE user_register set `password`='$new_password' where `password`='$old_password' ";
  $result1=mysqli_query($db,$query1);
  if($result1>0)
  {
    
	echo "<script>window.location.assign('reset.php?msg=$status')</script>";
  }
  else
  {
	echo "<script>window.location.assign('reset.php?msg=Try again!!')</script>";
  }
  mysqli_close($db);
}
?>