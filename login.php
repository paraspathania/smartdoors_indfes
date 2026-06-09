 <?php
session_start();
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="lo\gstyle.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
	<style>

	.logsection{
	    background-color:#d9d9d9;
	margin-top: 10px;
	margin-bottom:10px;
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
		.formarea{
			margin-left:25%;
			margin-top:10%;
			border-radius:10px;
			height:70%;
			width:50%;
			background-color:lightskyblue;
		}
		.formarea h4 {
    text-align: center;
    margin-top: 25px;
    padding-top: 50px;
    font-size: 24px;
}
input#user {
    border: none;
    width: 75%;
    height: 40px;
    margin-left: 10%;
    margin-top: 10%;
    border-radius: 7px;
	padding-left:20px;
}
input#check
{
    border: none;
    width: 75%;
    height: 40px;
    margin-left: 10%;
    margin-top: 6%;
    border-radius: 7px;
	padding-left:20px;
}
button#logbut{
	border-radius:3px;
	background-color:orange;
	color:black;
	border:none;
    padding: 6px 20px;
	margin-top:20px;
}
button#logbut:hover {
	border-radius:3px;
	background-color:blue;
	color:white;
	border:none;
    padding: 6px 20px;
	margin-top:20px;
}
  
	    *{
	        padding:0;
	        margin:0;
	    }
	    
	    .myhead{
	        width:100%;
	        height:50px;
	        background:#f6f6f7;
	        position:fixed;
	        padding-top:10px;
	    }
	    .brand{
	        margin:auto;
	    }
	    .myhead .brand a{
	        padding-left:28%;
	        font-family:ubuntu;
	        text-decoration:none;
	        font-size:22px;
	        font-weight:bold;
	        font-style:italic;
	        margin-top:10px;
	        color:#0000ff;
	    }
	    .myhead p{
	        padding-left:35%;
	        font-family:ubuntu;
	        text-decoration:none;
	        font-style:italic;
	        font-size:14px;
	        min-width:4%;
	    }
	     a#actionbut{
	         float:right;
	         padding:0 0 0 0;
	         font-family:none;
	         font-size:14px;
	         font-style:none;
	         margin-right:25px;
	         text-decoration:none;
	    }
	     a#actionbut:hover{
	        color:red;
	    }
	  .actions{
	      margin-top:30px;
	      position:fixed;
	      background:transparent;
	      width:100%;
	      height:18px;
	  }  
	  .menudrop{
	      margin-top:60px;
	      position:fixed;
	      width:100%;
	      background:#E8E8E8;
	      color:white;
	      height:35px;
	  }
	  .dropbtn {
  color: black;
  padding: 14px;
  font-size: 14px;
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
 font-size:14px;
 font-weight:bold;
}
.dropdown {
  position: relative;
  display: inline-block;
  
}
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
.menub{
	margin-left:30px;
	background-color:#E8E8E8;
}
.blue2px{
    background-color:blue;
    width:100%;
    height:1px;
}	
.consultflex{
    width:100%;
    height:240px;
    background-color:#E8E8E8;
    margin-top:10px;
}
.contentbox{
   margin-top:10px;
   height:auto;
   width:100%;
   background-color:yellow;
}
.newmain {
    margin-top:15px;
    background: #d9d9d9;
    height: 100%;
    width: 100%;
    padding-bottom: 30px;
}
.arow {
    height:1620px;
    width: 100%;
	padding-top:0;
}
.optionoval {
    height: 350px;
    background: blue;
    width: 350px;
    border-radius: 250px;
	margin-left:65px;
}
li.divolval {
    /* position: absolute; */
    width: 33%;
    float: left;
    margin-top: 40px;
}
.space3pxwhite {
    height: 30px;
    background: ALICEBLUE;
}
.cat {
    border: 1px solid #7F8B8F;
    float: left;
    margin: -1px 0 0 -1px;
    padding: 30px 30px 40px;
    width: 33.3332%;
    background: #5e17eb;
    color: white;
    font-weight: 700;
}
.main {
    height: 1650px;
    background-color: #d9d9d9;
}
.newfoot{
    padding-top:25px;
    margin-top:5px;
    width:100%;
    height:250px;
    background-color:#E8E8E8;
    padding-bottom:25px;
}
.listdiv{
    margin-top:10px;
    height:250px;
    width:100%;
    background-color:#E8E8E8;
}
.lists{
    width:15%;
    height:250px;
    margin-top:2.5px;
    background-color:#E8E8E8;
    float:left;
    margin-left:1%;
}
.infodiv{
    width:30%;
    height:250px;
    margin-top:2.5px;
    background-color:#E8E8E8;
    float:left;
    margin-left:1%;
   
}
.listdiv ul li{
    margin-left:20px;
    margin-top:17px;
}
.listdiv p{
    margin-left:20px;
    margin-top:17px;
}
.listdiv h4{
    margin-left:22px;
    margin-top:17px;
}
.listdiv ul li a{color:blue;
text-decoration:none;
}
.listdiv ul li a:hover{
    color:black;
transition:10;
}
.bottomline{
    padding-top:10px;
    padding-bottom:10px;
    width:100%;
    background-color:#E8E8E8;
}
.blueline23px{
    background-color:blue;
    height:1px;
    width:100%;
}
.dropline{
    background-color:blue;
    height:1px;
    width:100%;
    margin-top:95px;
}
.optionlist{
    width:50%;
    height:100%;
    background:yellow;
    float:left;
}
	    @media screen and (max-width: 399px){
	        .myhead #actionbut{
	            display:none;
	        }
	        .myhead .brand a{
	            padding-left:20%;
	        }
	        .actions{
	            display:none;
	        }
	        .myhead p{
	            font-size:14px;
	            padding-left:36%;
	        }
	        .menudrop{display:none;
	        }
	        .menub{
	            display:none;
	        }
	        .consultflex{
	            display:none;
	        }
	        .newmain{
	            margin-top:50px;
	            height:1000px;
	            width:100%;
	            background:#d9d9d9;
	        }
	        .arow{
	            width:100%;
	            padding-left:2.5%;
	            padding-top:5%;
	            padding-bottom:0%;
	            height:auto;
	        }
	        .optionoval {
    height: 150px;
    background: blue;
    width: 150px;
    border-radius: 250px;
    float:left;
    margin-left:3px;
}
li.divolval{
    margin-left:20px;
    float: left;
    margin-top: 15px;
    width:160px;
}
img#sour, #soura{
    height:150px;
    width:150px;
}
	        
	        .newfoot{
	            width:100%;
	            height:420px;
	        }
	        .lists{
	            width:50%;
	            margin-left:0;
	        }
	        .infodiv{
	            width:100%;
	            
	        }
	        .dropline{display:none;
	        }
	        .logsection #left{
	            display:none;
	        }
	        .logsection #right{
	            margin-top:40px;
	            width:100%;
	        }
	        .formarea{
	            margin-left:10%;
	            margin-right:10%;
	            width:80%;
	        }
	         .logsection #right img{
	            display:none;
	        }
	    }
	    	    @media screen and (min-width: 425px){
	        .myhead #actionbut{
	            display:none;
	        }
	        .myhead .brand a{
	            padding-left:20%;
	        }
	        .actions{
	            display:none;
	        }
	        .myhead p{
	            font-size:14px;
	            padding-left:36%;
	        }
	        .menudrop{display:none;
	        }
	        .menub{
	            display:none;
	        }
	        .consultflex{
	            display:none;
	        }
	        .newmain{
	            margin-top:50px;
	            height:1000px;
	            width:100%;
	            background:#d9d9d9;
	        }
	        .arow{
	            width:100%;
	            padding-left:2.5%;
	            padding-top:5%;
	            padding-bottom:0%;
	            height:auto;
	        }
	        .optionoval {
    height: 150px;
    background: blue;
    width: 150px;
    border-radius: 250px;
    float:left;
    margin-left:3px;
}
li.divolval{
    margin-left:20px;
    float: left;
    margin-top: 15px;
    width:160px;
}
img#sour, #soura{
    height:150px;
    width:150px;
}
	        
	        .newfoot{
	            width:100%;
	            height:420px;
	        }
	        .lists{
	            width:50%;
	            margin-left:0;
	        }
	        .infodiv{
	            width:100%;
	            
	        }
	        .dropline{display:none;
	        }
	    .logsection #left{
	            display:none;
	        }
	        .logsection #right{
	            margin-top:40px;
	            width:100%;
	        }
	        .logsection #right img{
	            display:none;
	        }
	        .formarea{
	            margin-left:10%;
	            margin-right:10%;
	            width:80%;
	        }
	    	    }
  @media screen and (min-width: 768px){
	       
	        .myhead .brand a{
	            padding-left:20%;
	        }
	        .actions{
	        }
	        .myhead p{
	            font-size:14px;
	            padding-left:36%;
	        }
	        .menudrop{
	            display:none;
	        }
	        .menub{
	            margin-left:0;
	            display:none;
	        }
	        
	        .consultflex{
	            display:none;
	        }
	        .newmain{
	            margin-top:50px;
	            height:1000px;
	            width:100%;
	            background:#d9d9d9;
	        }
	        .arow{
	            width:100%;
	            padding-top:5%;
	            padding-bottom:0%;
	            height:auto;
	        }
	        .optionoval {
    height: 150px;
    background: blue;
    width: 150px;
    border-radius: 250px;
    float:left;
}
li.divolval{
    float: left;
    margin-top: 15px;
    width:160px;
}
img#sour, #soura{
    height:150px;
    width:150px;
}
	        
	        .newfoot{
	            width:100%;
	            height:520px;
	        }
	        .lists{
	            width:40%;
	            margin-left:10%;
	        }
	        .infodiv{
	            width:100%;
	            margin-left:0;
	            
	        }
	        .dropline{display:none;
	        }
	          .logsection #left{
	              
	            display:initial;
	              margin-top:40px;
	              width:40%;
	        }
	        .logsection #right{
	            margin-top:40px;
	            width:60%;
	        }
	        .formarea{
	            margin-left:10%;
	            margin-right:10%;
	            width:80%;
	        }
	        .logsection{
	            margin-top:30px;
	        }
	    }
	    	.logsection #left img{
	    	    display:initial;
	    	    width:100%;
	    	    height:50%;
	    	    margin-left:2%;
	    	    margin-top:30%;
	}
	  
	    	    @media screen and (min-width: 1024px){
	       
	        .myhead .brand a{
	            padding-left:28%;
	        }
	        .actions{
	            display:initial;
	        }
	        .myhead p{
	            font-size:14px;
	            padding-left:36%;
	        }
	          .menudrop{
	             display:initial; 
	          }
	          .menub
	          {
	              margin-left:25px;
	              display:initial;
	          }
	        }
	        .newfoot{
	            width:100%;
	            height:300px;
	        }
	        .lists{
	            width:15%;
	            margin-left:1%;
	        }
	        .infodiv{
	            width:36%;
	            
	        }
	        .dropline{display:none;
	        }
	        
	          .logsection #left{
	              margin-top:40px;
	              width:50%;
	        }
	        .logsection #right{
	            margin-top:40px;
	            width:50%;
	        }
	        .formarea{
	            margin-left:30%;
	            margin-right:20%;
	            width:40%;
	        }
	        .logsection{
	            margin-top:30px;
	        }
	         	.logsection #left img{
	    	    width:90%;
	    	    height:90%;
	    	    margin-left:5%;
	    	    margin-top:3%;
	}
	    }
	      @media screen and (min-width: 1440px){
	         .myhead .brand a{
	             padding-left:35%;
	         }
	         .myhead p{
	             padding-left:43%;
	             
	             
	         }
	          .menudrop{
	             display:initial; 
	          }
	          .menub
	          {
	              margin-left:60px;
	              display:initial;
	          }
	         .logsection #right{
	            margin-top:40px;
	            width:50%;
	            height:100%;
	        }
	         .logsection #left{
	            margin-top:40px;
	            width:50%;
	            height:100%;
	        }
	        .formarea{
	            margin-top:10px;
	            margin-left:32%;
	            margin-right:20%;
	            width:48%;
	        }
	        .logsection{
	            margin-top:100px;
	            height:650px;
	        }
	         	.logsection #left img{
	    	    width:75%;
	    	    height:70%;
	    	    margin-left:19%;
	}
	      }
	      	      @media screen and (min-width: 1920px){
	         .myhead .brand a{
	             padding-left:35%;
	         }
	         .myhead p{
	             padding-left:43%;
	             
	         }
	          .menudrop{
	             display:initial; 
	          }
	          .menub
	          {
	              margin-left:60px;
	              display:initial;
	          }
	         .logsection #right{
	            margin-top:40px;
	            width:50%;
	            height:100%;
	        }
	         .logsection #left{
	            margin-top:40px;
	            width:50%;
	            height:100%;
	        }
	        .formarea{
	            margin-left:30%;
	            margin-right:25%;
	            width:50%;
	        }
	        .logsection{
	            margin-top:100px;
	            height:800px;
	        }
	         	.logsection #left img{
	    	    width:100%;
	    	    height:90%;
	    	    margin-left:2%;
	}
	      }
	   
	</style>
	</head>
<body>
 <!--Brand Bar!-->
    <div class="myhead"><div class="brand"><a href="index.php">Indfes Smartdoors</a> <br><p>You Think We Prepare</p></div></div>
   <div class="actions">
   <a id="actionbut" href="index.php">Home</a></div></div>
    <!-- Brand Bar Ends!-->
    
    <!-- Drop Down Menu Starts!-->
    <div class="menudrop">
        <div class="menub">
<!-- DROP DOWN LISTS!-->
<div class="dropdown classic">
  <button class="dropbtn">Start Business</button>
  <div class="dropdown-content">
   <ul type="none">
   <li><a href="createnew.php">Private Limited Company</a></li>
   <li><a href="createnew.php">Public Limited Company</a></li>
   <li><a href="createnew.php">Limited Liability Partnership</a></li>
    <li><a href="createnew.php">One Person Company</a></li>
	<li><a href="createnew.php">Proprietorship</a></li>
	<li><a href="createnew.php">One Person Company</a></li>
	<li><a href="createnew.php">ISO Certification</a></li>
	<li><a href="createnew.php">Copyright Certification</a></li>
	<li><a href="createnew.php">GST Registration</a></li>
	<li><a href="createnew.php">MSME Registration</a></li>
	<li><a href="createnew.php">Trademark Registration</a></li>
	<li><a href="createnew.php">Startup India Registration</a></li>
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">ROC|Compliance</button>
  <div class="dropdown-content">
   <ul type="none">
  <li><a href="createnew.php">PVT LTD ROC | AMC</a></li>
  <li><a href="createnew.php">OPC ROC | AMC</a></li>
  <li><a href="createnew.ph">LLP ROC | AMC</a></li>
  <li><a href="createnew.php">Return Filing Pvt Ltd</a></li>
  <li><a href="createnew.php">Return Filing OPC</a></li>
  <li><a href="createnew.php">Return Filing LLP</a></li>
  <li><a href="createnew.php">GST Return Filing</a></li>
  <li><a href="createnew.php">Income Tax Return Filing</a></li>
  <li><a href="createnew.php">Statuory & Audit</a></li>
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">Student Services</button>
  <div class="dropdown-content">
   <ul type="none">
   <li><a href="createnew.php">GAP Certificate</a></li>
   <li><a href="createnew.php">Single Girl Child</a></li>
   <li><a href="createnew.php">Date of Birth Affidavit</a></li>
   <li><a href="createnew.php">Proof of Income Affidavit</a></li>
   <li><a href="createnew.php">Change of Name Affidavit</a></li>
   <li><a href="createnew.php">Proof of Address Affidavit</a></li>
   <li><a href="createnew.php">No Criminal Record Affidavit</a></li>
   <li><a href="createnew.php">Date of Birth Affidavit</a></li>
   <li><a href="createnew.php">Education Loan Affidavit</a></li>
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">E-District</button>
  <div class="dropdown-content">
  <ul type="none">
 <li><a href="createnew.php">Domicile Certificate</a></li>
 <li><a href="createnew.php">Income Certificate</a></li>
 <li><a href="createnew.php">Caste Certificate</a></li>
 <li><a href="createnew.php">Character certificate</a></li>
 <li><a href="createnew.php">EWS certificate</a></li>
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">Services</button>
  <div class="dropdown-content">
   <ul type="none">
   <li><a href="createnew.php">Electricity Connection</a></li>
   <li><a href="createnew.php">LPG Connection</a></li>
   <li><a href="createnew.php">Widow Pension</a></li>
   <li><a href="createnew.php">Old Age Pension</a></li>
   <li><a href="createnew.php">Kisan S Nidhi</a></li>
   <li><a href="createnew.php">Residential Rent agreement</a></li>
   
</ul>
  </div>
</div>
<div class="dropdown classic">
  <button class="dropbtn">Individual</button>
  <div class="dropdown-content">
   <ul type="none">
   <li><a href="createnew.php">Aadhar update (E-kyc)</a></li>
   <li><a href="createnew.php">Pan Card(E-kyc)</a></li>
   <li><a href="createnew.php">Driving License(E-kyc)</a></li>
   <li><a href="createnew.php">Passport Services(E-Kyc)</a></li>
   <li><a href="createnew.php">Voter ID</a></li>
   <li><a href="createnew.php">CPGRMS Greviance Registration</a></li>
</ul>
  </div>
</div>
</div>
</div>
</div>
    </div>
    <div class="blue2px"></div>
    <div class="dropline"></div>
    <!-- Drop Down Menu Ends!-->
	
	<!-- Logsection starts!-->
	<div class="logsection">
	<div id="left">
	    <img src="loginhere.png" height="80%" width="80%">
	</div>
	<div id="right">
	<div class="formarea">
	<div class="msg_item"><?php 
	if(isset($_GET['msg']))
	{
		echo $_GET['msg'];
	} 

	?> </div>
	<h4>Login</h4>
	<form method="post">
	<input  type="email" id="user" name="email" placeholder="Email" required ></input><br>
	<input type="password" name="password" id="check" placeholder="Password" required></input>
	<center><button id="logbut" onclick="#" name="log_btn">Login</button></center>
	</form>
	</div></div>

     </div>
	<!--Logsection Ends!-->
	
	
	
	<!-- Footer Starts Here!-->
<div class="newfoot">
 
    <div class="listdiv">
           <div class="blueline23px"></div>
    <div class="lists">
        <h4>About</h4>
        <ul type="none">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Join Us</a></li>
            <li><a href="#">Press Release</a></li>
        </ul>
    </div>
    <div class="lists">
         <h4>Social</h4>
         <ul type="none">
            <li><a href="#">Youtube</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">LinkedIn</a></li>
        </ul>
    </div>
    <div class="lists">
         <h4>Policy</h4>
         <ul type="none">
            <li><a href="#">Refund Policy</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
        </ul>
    </div>
    <div class="lists">
    <h4>Support</h4>
        <ul type="none">
           <ul type="none">
            <li><a href="#">Raise a Ticket</a></li>
            <li><a href="#">Refund</a></li>
            <li><a href="#">Payment</a></li>
            <li><a href="#">Track Status</a></li>
            <li><a href="#">Downloads</a></li>
        </ul>
        </ul>
        </ul>
    </div>
    <div class="infodiv">
        <p><b>INDFES INTERNET SERVICES OPC Pvt. Ltd.</b><br>
        140, First Floor, Unnamed Road,<br>Shahabad, Hardoi-241124<br>
        Uttar Pradesh, India</p><br><br>
        <p>Phone:+ 91 8577897323<br>Email: care@insmart.online
        </p>
    </div>
    </div>
</div>










<div class="blueline23px"></div>
<div class="bottomline"><h5><center>All rights reserved by indfes@2023-24</center></h5></div>
</body>
</html>

<!-- Php code -->
<?php
if(isset($_POST['log_btn']))
{
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  include_once('config.php');
  $query="SELECT * FROM user_register where email='$email'and password='$password' ";
  $result=mysqli_query($db,$query);
  $data=mysqli_fetch_array($result);
  if(mysqli_num_rows($result)>0)
  {
    $_SESSION['email']=$email;
	$_SESSION['phone']=$data['mobile'];
	$_SESSION['customer']=$data['name'];
    echo "<script>window.location.assign('welcome.php')</script>";
  }
  else
  {
	echo "<script>window.location.assign('login.php?msg= Invalid email id or password')</script>";
  }
  mysqli_close($db);
}
?>
