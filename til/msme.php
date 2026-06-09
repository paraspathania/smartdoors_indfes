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

div#mcaform {
    width: 100%;
    background-color: lightskyblue;
    height: 100%;
    background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 0%, rgba(0,255,252,1) 0%, rgba(0,212,255,1) 96%, rgba(0,212,255,1) 97%);
}
#mcaform table{
    padding:60px;
    width:100%;
}
#mcaform input {
    border-radius: 10px;
    border: none;
    height: 60px;
    width: 80%;
    margin-left: 25px;
    padding-left:20px;
}
#mcaform tr{
    height:80px;
}
select#mcareg {
    padding-left: 10%;
    height: 60px;
    border: none;
    width: 80%;
    margin-left:20;
    border-radius:10px;
}
select#state {
    padding-left: 10%;
    height: 60px;
    border: none;
    width: 80%;
    margin-left:20;
    border-radius:10px;
}
select#country {
    padding-left: 10%;
    height: 60px;
    border: none;
    width: 80%;
    margin-left:20;
    border-radius:10px;
}
button#submit {
    margin-left: 20%;
    height: 60px;
    border: none;
    width: 50%;
    background-color: orange;
    color: navy;
}
.formbanner {
    margin-top: 20px;
    width: 100%;
    height: 150px;
}
.formbanner img{height:100%; width:100%;}
@media screen and (min-width: 320px)
{
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
	div#mcaform {display:none;}
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
}
@media screen and (min-width: 768px) {
	.topbar{height:60px; width:100%;}
    .topbar h3{font-size: 22px; padding-left: 35%; background-color: #d9d9d9;}
     p#top{background-color:transparent; padding-left:45%;}
    .topbarbottom {position: fixed;background-color: blue;height: 3px;width: 100%;top: 60;display:initial;}
    .menubar{display:none;}
    .flexbanner {margin-top:3px;}
	.contentarea{height:800px; margin-top:5px;}
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
	 div#mcaform {display:initial}
	 .formbanner{margin-top:0; padding-top:0;}
	 .formbanner img{height:60%;}
}
@media screen and (min-width: 1024px) 
{
     div#mcaform {display:initial}
	 .formbanner{margin-top:0; padding-top:0;}
	 .formbanner img{height:100%;}
	 .contentarea{height:750px;}
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
	.contentarea{height:800px; margin-top:111px; }
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
	 div#mcaform {display:initial}
	 .formbanner{margin-top:0; padding-top:0;}
	 .formbanner img{height:100%;}
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
	.contentarea{height:1000px; margin-top:111px; padding-left:25px; padding-right:25px; padding-top:25px; padding-bottom:25px;}
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
	.contentarea{height:800px; margin-top:111px;}
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
	.contentarea{height:1000px; margin-top:169px;}
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
	 #mcaform input {height:80px;}
	 #mcaform select {height:80px;}
	 #mcaform tr {height:100px;}
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
	.contentarea{height:900px; margin-top:193px; padding-left:200px;}
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
	 	 #mcaform input {height:80px;}
	 #mcaform select {height:80px;}
	 #mcaform tr {height:100px;}
  }
  .msg_item
	{
		text-align:center;
		background-color:red;
		font-size:20px;
		color:black;
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
<li><a href="login.php"><i class='bx bx-log-in' style='color:#6d07e7'  ></i></a>Login</li></ul>
</div><!-- Mobile Nav Ends Here!-->

<div class="menubar">
<div class="menub"><!-- Drop Down Menu starts!-->
<!-- DROP DOWN LISTS!-->
<div class="dropdown classic">
  <button class="dropbtn">Start Business</button>
  <div class="dropdown-content">
   <ul type="none">
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
   <li><a href="goi.php">Electricity Connection</a></li>
   <li><a href="goi.php">LPG Connection</a></li>
   <li><a href="pension.php">Widow Pension</a></li>
   <li><a href="pension.php">Old Age Pension</a></li>
   <li><a href="pension.php">Physically Handicapped<br>Pension</a></li>
   <li><a href="pension.php">Residential Rent agreement</a></li>
   
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">Individual</button>
  <div class="dropdown-content">
   <ul type="none">
   <li><a href="inidividual.php">Aadhar update (E-kyc)</a></li>
   <li><a href="individual.php">Pan Card(E-kyc)</a></li>
   <li><a href="individual.php">Driving License(E-kyc)</a></li>
   <li><a href="individual.php">Passport Services(E-Kyc)</a></li>
   <li><a href="individual.php">Voter ID</a></li>
   <li><a href="individual.php">CPGRMS Greviance Registration</a></li>
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


<div class="contentarea">
<div id="mcaform">
    <div class="formbanner"><img src="msme.svg" width="100%" height="100%"></div>
    <div class="msg_item"><?php 
    if(isset($_GET['msg']))
    {
      echo $_GET['msg'];
    } 

    ?> </div>
    <table>
      <form method="post">
    <tr>
    <td><input type="text" name="name"  placeholder="Full Name"></td>
    <td><input type="text" name="f/h_name"  placeholder="Father's Name"></td>
    <td><input type="text" name="gender"  placeholder="Gender"></td>
    </tr>
    
    <tr>
    <td><input type="email" name="email"  placeholder="Email"></td>
    <td><input type="number" name="phone"  placeholder="Phone"></td>
    <td><input type="text" name="occupation"  placeholder="Occupation"></td>
    </tr>
    
    <tr>
    <td><input type="text" name="b_name"  placeholder="Proposed Business Name"></td>
    <td><input type="text" name="b_types"  placeholder="Proposed Business Type"></td>
    <td><input type="date" name="b_date"  placeholder="Incorporation Date"></td>
     
    
    </tr>

    
     <tr>
    <td><select name="msme" id="mcareg"><option >Select</option>
     <option value="trademark">Trademark Registration Filing</option>
     <option value="copyright">Copyright Registration Filing</option>
     <option value="patent">Patent Registration FIling</option>
     <option value="iso">ISO Certificate Registration FIling</option>
     <option value="gst">GST Registration Filing</option>
     <option value="fssai">FSSAI License Filing</option>
     <option value="startupreg">Startup India Registration</option>
     <option value="udyam">MSME/Udyam Certificate Registration</option> 
     </select></td>
      <td> <select name="state" id="state">
    <option>State</option>
<option value=”Andaman and Nicobar Islands”>Andaman and Nicobar Islands</option>
<option value=”Andhra Pradesh”>Andhra Pradesh</option>
<option value=”Arunachal Pradesh”>Arunachal Pradesh</option>
<option value=”Assam”>Assam</option>
<option value=”Bihar”>Bihar</option>
<option value=”Chandigarh”>Chandigarh</option>
<option value=”Chhattisgarh”>Chhattisgarh</option>
<option value=”Dadra and Nagar Haveli”>Dadra and Nagar Haveli</option>
<option value=”Daman and Diu”>Daman and Diu</option>
<option value=”Delhi”>Delhi</option>
<option value=”Goa”>Goa</option>
<option value=”Gujarat”>Gujarat</option>
<option value=”Haryana”>Haryana</option>
<option value=”Himachal Pradesh”>Himachal Pradesh</option>
<option value=”Jammu and Kashmir”>Jammu and Kashmir</option>
<option value=”Jharkhand”>Jharkhand</option>
<option value=”Karnataka”>Karnataka</option>
<option value=”Kerala”>Kerala</option>
<option value=”Lakshadweep”>Lakshadweep</option>
<option value=”Madhya Pradesh”>Madhya Pradesh</option>
<option value=”Maharashtra”>Maharashtra</option>
<option value=”Manipur”>Manipur</option>
<option value=”Meghalaya”>Meghalaya</option>
<option value=”Mizoram”>Mizoram</option>
<option value=”Nagaland”>Nagaland</option>
<option value=”Orissa”>Orissa</option>
<option value=”Pondicherry”>Pondicherry</option>
<option value=”Punjab”>Punjab</option>
<option value=”Rajasthan”>Rajasthan</option>
<option value=”Sikkim”>Sikkim</option>
<option value=”Tamil Nadu”>Tamil Nadu</option>
<option value=”Tripura”>Tripura</option>
<option value=”Uttaranchal”>Uttaranchal</option>
<option value=”Uttar Pradesh”>Uttar Pradesh</option>
<option value=”West Bengal”>West Bengal</option></select>
    </td>
  <td>
        <select id="country" name="country">
        <option default ="India"value=”India”>India</option></select>
    </td></tr>
    <tr><td></td><td></td><td><button id="submit" name="app_user_btn" >Submit</button></td></tr>
    </form>
</table></div>

</div>

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

<!-- php code -->
<?php
if(isset($_POST['app_user_btn']))
{
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $f_h_name=$_POST['f/h_name'];
    $mobile=$_POST['phone'];
    $service=$_POST['msme'];
  $occ=$_POST['occupation'];
  $b_name=$_POST['b_name'];
  $b_type=$_POST['b_types'];
	$state=$_POST['state'];
	$date=$_POST['b_date'];
  $country=$_POST['country'];
  $email=$_POST['email'];
	
	include_once('config.php');
  
  $query="INSERT INTO `user_form_msme`(msme_name,msme_father,msme_gender,msme_email,msme_phone,msme_occupation,msme_b_name,msme_b_date,msme_service,msme_state,msme_country,msme_b_type) VALUES('$name','$f_h_name','$gender','$email','$mobile','$occ','$b_name','$date','$service','$state','$country','$b_type')";
  
  $result=mysqli_query($db,$query);  
  if($result>0)
  {
	echo "<script>window.location.assign('msme.php?msg=Your request is successfully submitted')</script>";
  }
  else
  {
	echo "<script>window.location.assign('msme.php?msg=Try again!!')</script>";
  }
  mysqli_close($db);
}
?>