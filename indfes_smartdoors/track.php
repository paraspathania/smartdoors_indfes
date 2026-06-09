<?php
session_start();
if(!isset($_SESSION['email']))
{
    echo "<script>window.location.assign('login.php?msg=Please Login!!')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<style>
.navbar #nav_a{
	float:left;
	background-color:#E8E8E8;
	height:80px;
	width:20%;
}
.navbar #nav_a img{
	margin-top:10px;
	margin-left:25px;
}
.navbar #nav_b{
	float:left;
	background-color:#E8E8E8;
	height:80px;
	width:60%;
}
.navbar #nav_c{
	background-color:#E8E8E8;
	float:left;
	height:80px;
	width:20%;
}
.navbar{
height:80px;
width:100%;
background-color:;
}


	*{
		margin:0;
		box-sizing:border-box;
	}
	.topbar{
		width:100%;
		background-color:yellow;
		height:30px;
	}
	.topbar_below{
		width:100%;
		background-color:green;
		height:70px;
	}
	.header{
		background-color:red;
		width:100%;
		height:90px;
	}
	.page-section{
		display:block;
		position:relative;
		padding:50px 0;
		background-repeat:no-repeat;
		background-position:center center;
		background-attachement:fixed;
		webkit-background-size:cover;
		background-size:cover;
	}
	.container{
		padding-right:15px;
		padding-left:15px;
		margin-right:auto;
		margin-left:auto;
	}
	.row{
		margin-left:15px;
	margin-right:15px;}
       .row-cont{
	   padding:30px 0 0;}
	   
	.cat{
		border:1px solid #7F8B8F;
		float:left;
		margin:-1px 0 0 -1px;
		padding:30px 30px 40px;
	width:33.3332%;
	background-color:#EDF4FF}
	
	.ul{
		margin-top:0;
		margin-bottom:10px;
		display:block;
		list-style-type:none;
		margin-block-start:1em;
		margin-block-end:1em;
		margin-inline-start:0px;
		margin-inline-end:0px;
		padding-inline-start:40px;
	}
	li{
		margin:0 0 22px;
	text-align:centre;}
	
	h1, h2, h3, h4, h5, h6 {
		line-height:1.5;
		margin:0 0 20px;
		font-family:;
		font-weight:650;
		font-size:20px;}
	
	.header{
		padding-right:20px;
		padding-left:20px;
		margin-right:0;
	margin-left:0;}
		
		.navbar{
			position:relative;
			height:70px;
			line-height:70px;
		}
		.navbar .brand{
			margin-bottom:auto;
			float:left;
			height:30px;
			width:220px;
		}
		.brand h1{
			margin:0 40px 20px;
			line-height:65px;
			margin:0;
		font-size:24px;
		background-color:transparent;}
		a{
			text-decoration:none;
			color:blue;
		}
		.main-nav{
			float:right;
		}
		.out-enabled{
			margin:0;
			padding:0;
			list-style-type:none;
		}
		.navbar>ul li:first-child{
		margin-left:0;}
		
		.navbar ul li{
			display:inline-block;
		position:relative;}
		.main-nav a{
		     margin-right: 15px;
			font-weight: 600;
			color:yellow;
			font-style:none;
			font-size:14px;
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
margin-right:20px;
}

.dropdown-content ul li{
	margin-left:0;
	width:100%;
	margin:0;}
.dropdown-content ul{
	padding-inline-start:0;
}

.menubar{
	padding:0;
	margin:0;
	height:45px;
	background-color:#E8E8E8;
	width:100%;
}
.menub{
	margin-left:30px;
	background-color:#E8E8E8;
}

.mynav{
height:80px;
width:100%;
background-color:yellow;
}
.mynav h2{
	font-style:italic;
	font-family:ubuntu;
	color:red;
}
	@media (min-width: 992px)
		{
			.container{
			width:970px;}
			.mySlides img{
			width:970px;}
			.grid1{
				height:250px;
			}
		}
		
		
		@media (min-width: 768px)
		{
			.container{
				width:750px;
			}
			.mySlides img{
			width:768px;}
			.grid1{
				height:250px;
			}
		}
		@media (min-width: 992px)
		{
			.container{
				width:970px;
			}
		}
		@media (min-width: 1200px)
		{
			.container{
				width:1170px;
			}
			.header{
				width:100%;
			}
		}
		@media (max-width: 1200px)
		{
			.cat{
				width:100%;
			}
		}
		@media (max-width: 991px)
		{
			.page-section{
		background-attachement:inherit;}
		}
	.mynav .mynav1{
		float:left;
		width:50%;
		height:80px;
		background-color:#F6F7F7;
	}
	grid1{
		background-color:#F6F7F7;
		height:250px;
	}
		.mynav .mynav1 h1{
			float:right;
			margin-right:5px;
			font-style:italic;
			margin-top:10px;
			font-family:ubuntu;
			font-size:24px;
	}
			.mynav .mynav1 h1{
			float:right;
			margin-right:5px;
			font-style:italic;
			margin-top:10px;
			font-family:ubuntu;
			font-size:24px;
	}
			.mynav .mynav1 p{
			float:right;
			font-style:italic;
			margin-top:20px;
			font-family:ubuntu;
			font-size:14px;
			margin-right:-210px;
	}
	.mynav .mynav2{
		float:left;
		width:50%;
		height:80px;
		background-color:#F6F7F7;
		float:right:
	}
		.mynav .mynav2 h6{
		float:right;
		color:yellow;
		margin-top:20px;
		margin-right:15px;
	}
		.mynav .mynav2 h6 a{
		color:blue;
		margin-right:25px;
		font-size:14px;
	}
			.mynav .mynav2 h6 a:hover{
		color:red;
	}
	.rowde{
		height:1px;
		width:100%;
		background-color:blue;
	}
	.rowde2{
		margin-top:1500px;
		background-color:red;
		position:absolute;
		width:100%;
		height:1px;
	}
	.main{
		height:1650px;
		background-color:#F6F7F7;
	}
	.newfoot{
		background-color:#E8E8E8;
		height:300px;
		width:100%;
	}
	.newfoot #newfoots{
		position:absolute;
		margin-top:50px;
		height:250px;
		width:100%;
	}
	.fcols{
		margin-top:25px;
		margin-left:30px;
		width:150px;
		height:200px;
	float:left;}
	
	.fcols .li{
	margin-top:10px;}
	
		.fcolshr{
		margin-top:25px;
		margin-left:25px;
		width:1px;
		height:200px;
	float:left;}
	.fcolshrs{
		margin-top:25px;
		margin-left:25px;
		width:500px;
		height:200px;
	float:left;}
		.fcolshrs h5{
		}
		#fhead{
			float:left;
			margin-left:45px;
    width: 30%;
	height:60px;
		}
		#fheadb{
			float:left;
			margin-left:-10px;
			height: 60px;
		}
		.bottomline{
			height:30px;
			background-color:#E8E8E8;
		}
		.bottomline p{
			position:absolute;
			margin-top:3px;
			color:red;
			font-size:18px;
		}
		.blue1px{
			background-color:blue;
			width:100%;
		height:1px;}
		
		.logsection{
	margin-top: 2px;
    width: 100%;
    height: 582px;
			
		}
		.logsection #right{
			height:580px;
			width:50%;
			background-color: #d9d9d9;
			float:right;
		}
		.logsection #left{
			    height: 580px;
				width: 50%;
				background-color: #d9d9d9;
				float: left;
		}
		.logsection #right .logarea{
			color: navy;
			background-color: lightskyblue;
			height: 300px;
			width: 350px;
			margin: auto;
			margin-top: 100px;
			border-radius: 10px;
		}
		.logsection #right .logarea .fields{
			position:absolute;
			margin-left:60px;
			margin-top:100px;
			height:150px;
		}
		.logsection #right .logarea .fields input{
			width:250px;
			height:50px;
			background-color: lightcyan;
			border-width:none;
			margin-top:10px;
			border-radius:10px;
			font-size:14px;
			border-style:none;
			padding-left: 15px;
		}
		.log_button button{
	position:absolute;
	padding:16px 35px;
    border-radius: 6px;
    border-style: none;
    margin-top: 190px;
    margin-left: 110px;
	font-size:18px;
	font-weight:700;
	background-color:orange;
}
	
	.logarea p{
		    margin-left: 95px;
    position: absolute;
    margin-top: 50px;
    text-align: center;
    font-weight: 900;
    font-size: 28px;}
			
			.logsection #left .leftinfo{
			    height: 500px;
    background-color: purple;
    width: 600px;
    margin: auto;
    margin-top: 40px;
	}
	.logsection #left .leftinfo .mca{
		    margin-left: 210px;
    height: 200px;
    width: 200px;
    background: beige;
    border-radius: 300px;
}
	.logsection #left .leftinfo .edistrict{
		margin-left: 330px;
    margin-top: -80px;
    height: 200px;
    width: 200px;
    background: beige;
    border-radius: 300px;
	}
	.logsection #left .leftinfo .individual{
    margin-left: 230px;
    margin-top: -50px;
    height: 200px;
    width: 200px;
    background: beige;
    border-radius: 300px;
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
<div class="mynav">
<div class="mynav1"><a href="#"><h1>Indfes Smartdoors</h1></a><br><p>You Think We Prepare</p>
</div><div class="mynav2">
<h6>

<a href="index.php"><i class='bx bxs-home-smile' style='color:#2b27f9' ></i>Home</a><a href="logout.php"><i class='bx bx-log-in'></i>Logout</a></h6></div></div>
<!--Drop Down Menu!-->
<div class="menubar">
<div class="menub">
<!-- DROP DOWN LISTS!-->
<div class="dropdown classic">
  <button class="dropbtn">Start Business</button>
  <div class="dropdown-content">
   <ul type="none">
   <li><a href="#">Private Limited Company</a></li>
   <li><a href="#">Public Limited Company</a></li>
   <li><a href="#">Limited Liability Partnership</a></li>
    <li><a href="#">One Person Company</a></li>
	<li><a href="#">Proprietorship</a></li>
	<li><a href="#">One Person Company</a></li>
	<li><a href="#">ISO Certification</a></li>
	<li><a href="#">Copyright Certification</a></li>
	<li><a href="#">GST Registration</a></li>
	<li><a href="#">MSME Registration</a></li>
	<li><a href="#">Trademark Registration</a></li>
	<li><a href="#">Startup India Registration</a></li>
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">ROC|Compliance</button>
  <div class="dropdown-content">
   <ul type="none">
  <li><a href="#">PVT LTD ROC | AMC</a></li>
  <li><a href="#">OPC ROC | AMC</a></li>
  <li><a href="#">LLP ROC | AMC</a></li>
  <li><a href="#">Return Filing Pvt Ltd</a></li>
  <li><a href="#">Return Filing OPC</a></li>
  <li><a href="#">Return Filing LLP</a></li>
  <li><a href="#">GST Return Filing</a></li>
  <li><a href="#">Income Tax Return Filing</a></li>
  <li><a href="#">Statuory & Audit</a></li>
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">Student Services</button>
  <div class="dropdown-content">
   <ul type="none">
   <li><a href="#">GAP Certificate</a></li>
   <li><a href="#">Single Girl Child</a></li>
   <li><a href="#">Date of Birth Affidavit</a></li>
   <li><a href="#">Proof of Income Affidavit</a></li>
   <li><a href="#">Change of Name Affidavit</a></li>
   <li><a href="#">Proof of Address Affidavit</a></li>
   <li><a href="#">No Criminal Record Affidavit</a></li>
   <li><a href="#">Date of Birth Affidavit</a></li>
   <li><a href="#">Education Loan Affidavit</a></li>
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">E-District</button>
  <div class="dropdown-content">
  <ul type="none">
 <li><a href="#">Domicile Certificate</a></li>
 <li><a href="#">Income Certificate</a></li>
 <li><a href="#">Caste Certificate</a></li>
 <li><a href="#">Character certificate</a></li>
 <li><a href="#">EWS certificate</a></li>
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">Services</button>
  <div class="dropdown-content">
   <ul type="none">
   <li><a href="#">Electricity Connection</a></li>
   <li><a href="#">LPG Connection</a></li>
   <li><a href="#">Widow Pension</a></li>
   <li><a href="#">Old Age Pension</a></li>
   <li><a href="#">Kisan S Nidhi</a></li>
   <li><a href="#">Residential Rent agreement</a></li>
   
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">Individual</button>
  <div class="dropdown-content">
   <ul type="none">
   <li><a href="#">Aadhar update (E-kyc)</a></li>
   <li><a href="#">Pan Card(E-kyc)</a></li>
   <li><a href="#">Driving License(E-kyc)</a></li>
   <li><a href="#">Passport Services(E-Kyc)</a></li>
   <li><a href="#">Voter ID</a></li>
   <li><a href="#">CPGRMS Greviance Registration</a></li>
</ul>
  </div>
</div>
</div>

</div>
</div>


<div class="logsection">
<div id="left">
<div class="leftinfo">
<img src="track.svg" width="600px" height="500px">
</div></div>
<div id="right">
<div class="logarea">
<div class="msg_item"><?php 
    if(isset($_GET['msg']))
    {
      echo $_GET['msg'];
    } 
 ?> </div>	
<p id="Loginh">Track Status</p>
<div class="fields">
<form method="post">
<input type="text" name="arn_no" id="username" placeholder="Application Number" required></input><br>
</div>
<div class="log_button">
<button id="submit" name="track_btn">Track</button>
</form></div>
</div></div>
</div>






<!-- Footer Section!-->
<div class="newfoot">

<div id="newfoots">
<div class="fcols"><h5><center>About</center></h5>
<ul type="none">
<li class="li"><a href="#">About Us</a></li>
<li class="li"><a href="#">Contact Us</a></li>
<li class="li"><a href="#">Press Release</a></li>
<li class="li"><a href="#">Careers</a></li>
</ul></div>
<div class="fcols"><h5><center>Social</center></h5>
<ul type="none">
<li><a href="#"><i></i>Instagram</a></li>
<li><a href="#"><i></i>Facebook</a></li>
<li><a href="#"><i></i>Twitter</a></li>
<li><a href="#"><i></i>Youtube</a></li>
</ul></div>
<div class="fcols"><h5><center>Policy</center></h5>
<ul type="none">
<li><a href="#"><i></i>Privacy Policy</a></li>
<li><a href="#"><i></i>Terms & Conditions</a></li>
<li><a href="#"><i></i>Refund Policy</a></li>
</ul></div>
<div class="fcols"><h5><center>Support | Help</center></h5>
<ul type="none">
<li><a href="application.php"><i></i>Application</a></li>
<li><a href="payments.php"><i></i>Payments</a></li>
<li><a href="refunds.php"><i></i>Refunds</a></li>
</ul></div>
<div class="fcols"><h5><center>More</center></h5>
<ul type="none">
<li id="fcol"><a href="raise.php"><i></i>Raise a Ticket</a></li>
<li id="fcol"><a href="track.php"><i></i>Track Status</a></li>
<li id="fcol"><a href="loads.php"><i></i>Downloads</a></li>
</ul>
</div>
<div class="fcolshr"></div>
<div class="fcolshrs"><p><b><center>INDFES INTERNET SERVICES (OPC) PRIVATE LIMITED</center></b></p>
<div id="fhead"><b>Registered Office :</b></div>
<div id="fheadb">140, First Floor, Village Udhranpur<br>Block Shahabad, Hardoi-241124<br>Uttar Pradesh India<br></div><br>
<div id="fhead"><b>Contact Us :</b></div>
<div id="fheadb">care@indfes.in<br>+91 8577897323</div></div>
</div></div>
<div class="blue1px"></div>
<div class="bottomline"><p id="bottomli"><center>All rights reserved by @indfes.com | 2023-24</center></p></div>

</body>
</html>

<!-- Php code -->
<?php
if(isset($_POST['track_btn']))
{ 
  $arn_no=$_POST['arn_no'];
  
  include_once('config.php');
  $tables = [ "user_form_district", "user_form_legal","user_form_pension","user_form_msme","user_form_mca","user_form_agri","user_form_accounting","user_form_individual","user_form_roc","user_form_student"];

    $found = false;


    foreach ($tables as $table) {
        $sql = "SELECT * FROM $table WHERE  id = '$arn_no'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {
            $found = true;
            
            while ($row = mysqli_fetch_assoc($result)) {
                
				$status=$row['status'];
                echo "<script>window.location.assign('track.php?msg=$status')</script>";
            }
            break; 
        }
    }

    if (!$found) {
		echo "<script>window.location.assign('track.php?msg=Invalid ARN NO.')</script>";
    }
	mysqli_close($db);
}



?>
