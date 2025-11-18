<?php
session_start();
if(!isset($_SESSION['email']))
{
    echo "<script>window.location.assign('login.php?msg=Please Login!!')</script>";
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
	<script src="mystyle.js"></script>
	<style>
	*{
		padding:0;
		margin:0;
	}
	.content {
    height: 600px;
    width: 100%;
    background-color: #d9d9d9;
}
div#sele {
    height: 100%;
    width: 15%;
	float:left;
    background-color: blue;
}
div#displays {
    float: left;
    width: 75%;
	margin-left:5%;
	margin-right:5%;
	margin-top:5%;
	margin-bottom:5%;
    height: 80%;
	overflow:scroll;
	overflow-x:hidden;
}
button#sectes {
    width: 100%;
    height: 50px;
    margin-top: 10px;
}
table {
    width: 100%;
    margin-top: 10px;
    border-style: none;
}
tr {
	height:40px;
	text-align:center;
    line-height: 1.5;
    color: navy;
}
th {
    color: black;
}
		</style>
	</head>
<body>
<div class="content">
<div id="sele">
<button id="Sectes" onclick="myFunctionf()">My Submissions</button><br>
<button id="Sectes" onclick="myFunction()">Pending Validation</button><br>
<button id="Sectes" onclick="myFunctionb()">Under Processing</button><br>
<button id="Sectes" onclick="myFunctionc()">Under Objection</button><br>
<button id="Sectes" onclick="myFunctiond()">Approved</button><br>
<button id="Sectes" onclick="myFunctione()">Rejected</button><br></div>

<div id="displays">

<table id="submission" style="display:none;">
<tr>
    <th>ARN Number</th>
    <th>Application Type</th>
    <th>Application date</th>
    <th>Applicant Name</th>
    <th>Application Status</th>
    <th>Payment Status</th>
    <th>Applicant Phone</th>
    <th>Applicant Email</th>
</tr>
<?php
       $status="Pending for Validation";
       include_once('config.php');
       $tables = [ "user_form_district", "user_form_legal","user_form_pension","user_form_msme","user_form_mca","user_form_agri","user_form_accounting","user_form_individual","user_form_roc","user_form_student"];
     
         $found = false;
         $email1=$_SESSION['email'];
     
         foreach ($tables as $table)
        {
            if($table=="user_form_district")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and form_email='$email1 ' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['service']."</td>";
                    echo "<td>".$data['form_date']."</td>";
                    echo "<td>".$data['form_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['form_mobile']."</td>";
                    echo "<td>".$data['form_email']."</td>";
                    echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }

            if($table=="user_form_pension")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and pension_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['pension_service']."</td>";
                    echo "<td>".$data['pension_date']."</td>";
                    echo "<td>".$data['pension_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['pension_phone']."</td>";
                    echo "<td>".$data['pension_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_legal")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and legal_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['legal_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['legal_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['legal_phone']."</td>";
                    echo "<td>".$data['legal_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            } 
            if($table=="user_form_msme")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and msme_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['msme_service']."</td>";
                    echo "<td>".$data['msme_b_date']."</td>";
                    echo "<td>".$data['msme_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['msme_phone']."</td>";
                    echo "<td>".$data['msme_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_mca")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status'  and mca_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['mca_service']."</td>";
                    echo "<td>".$data['mca_date']."</td>";
                    echo "<td>".$data['mca_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['mca_phone']."</td>";
                    echo "<td>".$data['mca_email']."</td>";

                  
                echo "</tr>";
                 }
             }
            }
            if($table=="user_form_agri")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and agri_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['agri_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['agri_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['agri_phone']."</td>";
                    echo "<td>".$data['agri_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_accounting")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and account_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['account_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['account_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['account_phone']."</td>";
                    echo "<td>".$data['account_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_individual")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and  email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['individual_service']."</td>";
                    echo "<td>".$data['individaual_date']."</td>";
                    echo "<td>".$data['individual_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['individual_phone']."</td>";
                    echo "<td>".$data['email']."</td>";
                    
                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_roc")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and  roc_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['roc_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['roc_company']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['roc_phone']."</td>";
                    echo "<td>".$data['roc_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_student")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status'and  email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['student_service']."</td>";
                    echo "<td>".$data['student_date']."</td>";
                    echo "<td>".$data['student_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['student_phone']."</td>";
                    echo "<td>".$data['email']."</td>";
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
        }
     
         if (!$found) {
            echo "";
         }
      
    ?>
</table>

<table id="validation" style="display:none;" border="2px">
<tr>
    <th>ARN Number</th>
    <th>Application Type</th>
    <th>Application date</th>
    <th>Applicant Name</th>
    <th>Application Status</th>
    <th>Payment Status</th>
    <th>Applicant Phone</th>
    <th>Applicant Email</th>
</tr>
<?php
       $status="Pending for Validation";
       include_once('config.php');
       $tables = [ "user_form_district", "user_form_legal","user_form_pension","user_form_msme","user_form_mca","user_form_agri","user_form_accounting","user_form_individual","user_form_roc","user_form_student"];
     
         $found = false;
         $email1=$_SESSION['email'];
     
         foreach ($tables as $table)
        {
            if($table=="user_form_district")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and form_email='$email1 ' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['service']."</td>";
                    echo "<td>".$data['form_date']."</td>";
                    echo "<td>".$data['form_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['form_mobile']."</td>";
                    echo "<td>".$data['form_email']."</td>";
                    echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }

            if($table=="user_form_pension")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and pension_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['pension_service']."</td>";
                    echo "<td>".$data['pension_date']."</td>";
                    echo "<td>".$data['pension_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['pension_phone']."</td>";
                    echo "<td>".$data['pension_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_legal")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and legal_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['legal_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['legal_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['legal_phone']."</td>";
                    echo "<td>".$data['legal_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            } 
            if($table=="user_form_msme")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and msme_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['msme_service']."</td>";
                    echo "<td>".$data['msme_b_date']."</td>";
                    echo "<td>".$data['msme_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['msme_phone']."</td>";
                    echo "<td>".$data['msme_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_mca")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status'  and mca_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['mca_service']."</td>";
                    echo "<td>".$data['mca_date']."</td>";
                    echo "<td>".$data['mca_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['mca_phone']."</td>";
                    echo "<td>".$data['mca_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_agri")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and agri_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['agri_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['agri_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['agri_phone']."</td>";
                    echo "<td>".$data['agri_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_accounting")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and account_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['account_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['account_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['account_phone']."</td>";
                    echo "<td>".$data['account_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_individual")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and  email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['individual_service']."</td>";
                    echo "<td>".$data['individaual_date']."</td>";
                    echo "<td>".$data['individual_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['individual_phone']."</td>";
                    echo "<td>".$data['email']."</td>";
                    
                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_roc")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and  roc_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['roc_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['roc_company']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['roc_phone']."</td>";
                    echo "<td>".$data['roc_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_student")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status'and  email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['student_service']."</td>";
                    echo "<td>".$data['student_date']."</td>";
                    echo "<td>".$data['student_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['student_phone']."</td>";
                    echo "<td>".$data['email']."</td>";
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
        }
     
         if (!$found) {
            echo "";
         }
         
    ?>
</table>

<table id="processing" style="display:none;">
<tr>
    <th>ARN Number</th>
    <th>Application Type</th>
    <th>Application date</th>
    <th>Applicant Name</th>
    <th>Application Status</th>
    <th>Payment Status</th>
    <th>Applicant Phone</th>
    <th>Applicant Email</th>
</tr>
<?php
       $status="processing";
       include_once('config.php');
       $tables = [ "user_form_district", "user_form_legal","user_form_pension","user_form_msme","user_form_mca","user_form_agri","user_form_accounting","user_form_individual","user_form_roc","user_form_student"];
     
         $found = false;
         $email1=$_SESSION['email'];
     
         foreach ($tables as $table)
        {
            if($table=="user_form_district")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and form_email='$email1 ' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['service']."</td>";
                    echo "<td>".$data['form_date']."</td>";
                    echo "<td>".$data['form_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['form_mobile']."</td>";
                    echo "<td>".$data['form_email']."</td>";
                    echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }

            if($table=="user_form_pension")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and pension_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['pension_service']."</td>";
                    echo "<td>".$data['pension_date']."</td>";
                    echo "<td>".$data['pension_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['pension_phone']."</td>";
                    echo "<td>".$data['pension_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_legal")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and legal_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['legal_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['legal_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['legal_phone']."</td>";
                    echo "<td>".$data['legal_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            } 
            if($table=="user_form_msme")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and msme_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['msme_service']."</td>";
                    echo "<td>".$data['msme_b_date']."</td>";
                    echo "<td>".$data['msme_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['msme_phone']."</td>";
                    echo "<td>".$data['msme_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_mca")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status'  and mca_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['mca_service']."</td>";
                    echo "<td>".$data['mca_date']."</td>";
                    echo "<td>".$data['mca_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['mca_phone']."</td>";
                    echo "<td>".$data['mca_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_agri")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and agri_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['agri_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['agri_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['agri_phone']."</td>";
                    echo "<td>".$data['agri_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_accounting")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and account_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['account_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['account_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['account_phone']."</td>";
                    echo "<td>".$data['account_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_individual")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and  email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['individual_service']."</td>";
                    echo "<td>".$data['individaual_date']."</td>";
                    echo "<td>".$data['individual_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['individual_phone']."</td>";
                    echo "<td>".$data['email']."</td>";
                    
                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_roc")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and  roc_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['roc_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['roc_company']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['roc_phone']."</td>";
                    echo "<td>".$data['roc_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_student")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status'and  email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['student_service']."</td>";
                    echo "<td>".$data['student_date']."</td>";
                    echo "<td>".$data['student_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['student_phone']."</td>";
                    echo "<td>".$data['email']."</td>";
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
        }
     
         if (!$found) {
            echo "";
         }
         
    ?>
</table>

<table id="objection" style="display:none;">
<tr>
    <th>ARN Number</th>
    <th>Application Type</th>
    <th>Application date</th>
    <th>Applicant Name</th>
    <th>Application Status</th>
    <th>Payment Status</th
    ><th>Applicant Phone</th>
    <th>Applicant Email</th>
</tr>
<?php
       $status="Objection";
       include_once('config.php');
       $tables = [ "user_form_district", "user_form_legal","user_form_pension","user_form_msme","user_form_mca","user_form_agri","user_form_accounting","user_form_individual","user_form_roc","user_form_student"];
     
         $found = false;
         $email1=$_SESSION['email'];
     
         foreach ($tables as $table)
        {
            if($table=="user_form_district")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and form_email='$email1 ' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['service']."</td>";
                    echo "<td>".$data['form_date']."</td>";
                    echo "<td>".$data['form_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['form_mobile']."</td>";
                    echo "<td>".$data['form_email']."</td>";
                    echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }

            if($table=="user_form_pension")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and pension_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['pension_service']."</td>";
                    echo "<td>".$data['pension_date']."</td>";
                    echo "<td>".$data['pension_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['pension_phone']."</td>";
                    echo "<td>".$data['pension_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_legal")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and legal_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['legal_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['legal_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['legal_phone']."</td>";
                    echo "<td>".$data['legal_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            } 
            if($table=="user_form_msme")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and msme_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['msme_service']."</td>";
                    echo "<td>".$data['msme_b_date']."</td>";
                    echo "<td>".$data['msme_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['msme_phone']."</td>";
                    echo "<td>".$data['msme_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_mca")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status'  and mca_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['mca_service']."</td>";
                    echo "<td>".$data['mca_date']."</td>";
                    echo "<td>".$data['mca_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['mca_phone']."</td>";
                    echo "<td>".$data['mca_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_agri")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and agri_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['agri_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['agri_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['agri_phone']."</td>";
                    echo "<td>".$data['agri_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_accounting")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and account_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['account_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['account_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['account_phone']."</td>";
                    echo "<td>".$data['account_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_individual")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and  email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['individual_service']."</td>";
                    echo "<td>".$data['individaual_date']."</td>";
                    echo "<td>".$data['individual_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['individual_phone']."</td>";
                    echo "<td>".$data['email']."</td>";
                    
                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_roc")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and  roc_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['roc_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['roc_company']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['roc_phone']."</td>";
                    echo "<td>".$data['roc_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_student")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status'and  email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['student_service']."</td>";
                    echo "<td>".$data['student_date']."</td>";
                    echo "<td>".$data['student_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['student_phone']."</td>";
                    echo "<td>".$data['email']."</td>";
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
        }
     
         if (!$found) {
            echo "";
         }
         
    ?>
</table>

<table id="approved" style="display:none;">
<tr>
    <th>ARN Number</th>
    <th>Application Type</th>
    <th>Application date</th>
    <th>Applicant Name</th>
    <th>Application Status</th>
    <th>Payment Status</th>
    <th>Applicant Phone</th>
    <th>Applicatnt Email</th>
</tr>
<?php
       $status="approved";
       include_once('config.php');
       $tables = [ "user_form_district", "user_form_legal","user_form_pension","user_form_msme","user_form_mca","user_form_agri","user_form_accounting","user_form_individual","user_form_roc","user_form_student"];
     
         $found = false;
         $email1=$_SESSION['email'];
     
         foreach ($tables as $table)
        {
            if($table=="user_form_district")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and form_email='$email1 ' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['service']."</td>";
                    echo "<td>".$data['form_date']."</td>";
                    echo "<td>".$data['form_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['form_mobile']."</td>";
                    echo "<td>".$data['form_email']."</td>";
                    echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }

            if($table=="user_form_pension")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and pension_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['pension_service']."</td>";
                    echo "<td>".$data['pension_date']."</td>";
                    echo "<td>".$data['pension_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['pension_phone']."</td>";
                    echo "<td>".$data['pension_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_legal")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and legal_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['legal_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['legal_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['legal_phone']."</td>";
                    echo "<td>".$data['legal_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            } 
            if($table=="user_form_msme")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and msme_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['msme_service']."</td>";
                    echo "<td>".$data['msme_b_date']."</td>";
                    echo "<td>".$data['msme_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['msme_phone']."</td>";
                    echo "<td>".$data['msme_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_mca")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status'  and mca_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['mca_service']."</td>";
                    echo "<td>".$data['mca_date']."</td>";
                    echo "<td>".$data['mca_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['mca_phone']."</td>";
                    echo "<td>".$data['mca_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_agri")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and agri_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['agri_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['agri_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['agri_phone']."</td>";
                    echo "<td>".$data['agri_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_accounting")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and account_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['account_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['account_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['account_phone']."</td>";
                    echo "<td>".$data['account_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_individual")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and  email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['individual_service']."</td>";
                    echo "<td>".$data['individaual_date']."</td>";
                    echo "<td>".$data['individual_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['individual_phone']."</td>";
                    echo "<td>".$data['email']."</td>";
                    
                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_roc")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and  roc_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['roc_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['roc_company']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['roc_phone']."</td>";
                    echo "<td>".$data['roc_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_student")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status'and  email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['student_service']."</td>";
                    echo "<td>".$data['student_date']."</td>";
                    echo "<td>".$data['student_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['student_phone']."</td>";
                    echo "<td>".$data['email']."</td>";
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
        }
     
         if (!$found) {
            echo "";
         }
         
    ?>
</table>

<table id="rejected"style="display:none;">
<tr>
    <th>ARN Number</th>
    <th>Application Type</th>
    <th>Application date</th>
    <th>Order Date</th>
    <th>Application Status</th>
    <th>Payment Status</th>
    <th>Applicant Phone</th>
    <th>Applicant</th>
</tr>
<?php
       $status="rejected";
       include_once('config.php');
       $tables = [ "user_form_district", "user_form_legal","user_form_pension","user_form_msme","user_form_mca","user_form_agri","user_form_accounting","user_form_individual","user_form_roc","user_form_student"];
     
         $found = false;
         $email1=$_SESSION['email'];
     
         foreach ($tables as $table)
        {
            if($table=="user_form_district")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and form_email='$email1 ' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['service']."</td>";
                    echo "<td>".$data['form_date']."</td>";
                    echo "<td>".$data['form_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['form_mobile']."</td>";
                    echo "<td>".$data['form_email']."</td>";
                    echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }

            if($table=="user_form_pension")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and pension_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['pension_service']."</td>";
                    echo "<td>".$data['pension_date']."</td>";
                    echo "<td>".$data['pension_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['pension_phone']."</td>";
                    echo "<td>".$data['pension_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_legal")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and legal_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['legal_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['legal_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['legal_phone']."</td>";
                    echo "<td>".$data['legal_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            } 
            if($table=="user_form_msme")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and msme_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['msme_service']."</td>";
                    echo "<td>".$data['msme_b_date']."</td>";
                    echo "<td>".$data['msme_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['msme_phone']."</td>";
                    echo "<td>".$data['msme_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_mca")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status'  and mca_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['mca_service']."</td>";
                    echo "<td>".$data['mca_date']."</td>";
                    echo "<td>".$data['mca_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['mca_phone']."</td>";
                    echo "<td>".$data['mca_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_agri")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and agri_email='$email1'";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['agri_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['agri_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['agri_phone']."</td>";
                    echo "<td>".$data['agri_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_accounting")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and account_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['account_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['account_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['account_phone']."</td>";
                    echo "<td>".$data['account_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_individual")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and  email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['individual_service']."</td>";
                    echo "<td>".$data['individaual_date']."</td>";
                    echo "<td>".$data['individual_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['individual_phone']."</td>";
                    echo "<td>".$data['email']."</td>";
                    
                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_roc")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status' and  roc_email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['roc_service']."</td>";
                    echo "<td></td>";
                    echo "<td>".$data['roc_company']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['roc_phone']."</td>";
                    echo "<td>".$data['roc_email']."</td>";

                  
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
            if($table=="user_form_student")
            {
             $sql = "SELECT * FROM $table WHERE  `status` = '$status'and  email='$email1' ";
             $result = mysqli_query($db, $sql);
     
             if (mysqli_num_rows($result) > 0) {
                 $found = true;
                 while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['student_service']."</td>";
                    echo "<td>".$data['student_date']."</td>";
                    echo "<td>".$data['student_name']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>Successfully accepted </td>";
                    echo "<td>".$data['student_phone']."</td>";
                    echo "<td>".$data['email']."</td>";
                echo "</tr>";
                 }
             }
             else
             {
                echo "";
             }
            }
        }
     
         if (!$found) {
             echo "";
         }
         mysqli_close($db);
    ?>
</table>

</div>
</body>
</html>