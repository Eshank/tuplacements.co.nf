<!DOCTYPE html>
<!--
    Free Responsive Template by templatemo
    http://www.templatemo.com
-->
<html>
  <head>
    <title>Thapar Placements</title>
    <meta name="keywords" content="smoothy, responsive bootstrap, one page, green, white, free html5 template, templatemo" />
	<meta name="description" content="Smoothy is free HTML5 one-page template for multi-purpose that is based on responsive bootstrap framework." />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet">
   	<link rel="stylesheet" href="css/templatemo_misc.css">

    <link href="css/circle.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/JavaScript" src="js/slimbox2.js"></script>
    <style>


img.pics:hover
{
  -webkit-transform: scale(1.0,1.0);
    -moz-transform:scale(1.0,1.0);
    opacity: 1;
    -webkit-opacity: 1;
    -moz-opacity: 1;
}
</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/ddsmoothmenu.js"></script>

<!--/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

-->


<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_flicker", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>


  </head>
  <style>
td.xx{
font-family:'Century Gothic';
font-size:150%;
background:#2c3e50;
color:#e67e22;
text-align:center;
transition: width 2s, height 2s;
}
td.xx:hover{

font-family:'Century Gothic';
background:#f1c40f;
font-size:300%;
color:#e67e22;
width:1000px;
text-align:center;}
</style>
  <body>
    <header>
    <!-- start menu -->
    <div id="templatemo_home">
    	<div class="templatemo_top">
      <div class="container templatemo_container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div id="top-menu" >
            <nav class="mainMenu">
            
              <a href="./index.html"><h1>Thapar Placements</h1></a>
              </nav>
            </div>
          </div>
          <div class="col-sm-9 col-md-9 templatemo_col9" >
          	<div id="top-menu">
            <nav class="mainMenu">
             
              <ul class="nav">
                <li><a class="menu" href="./index.html">Home</a></li>
                <li><a class="menu" href="./index.html">About</a></li>
                <li><a class="menu" href="./index.html">Team</a></li>
                <!--<li><a class="menu" href="./login.php">Login</a></li>
                <li><a class="menu" href="./signup.php">Register</a></li>-->
              </ul>
            </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div style="margin-left:30px;margin-top:30px;padding-top:50px;font-weight:bold;padding-left:160px;">
<form action="#" name="myForm" method="post" onsubmit="return validateForm()">
<br><br><h2>REGISTER</h2><br>
<div style="margin:40px;">
Roll-Number <span style="color:red">*</span><br><br>
<input  type="text" name="rno" id="fnamebox" style="padding:2px;height:30px;width:250px;"/><br><br><br>
First Name<span style="color:red">*</span><br><br>
<input name = "fname" id="fnamebox1" type="text" style="padding:2px;height:30px;width:250px;"/><br><br><br>
Last Name <span style="color:red">*</span><br><br>
<input  type="text" name="lname" id="fnamebox" style="padding:2px;height:30px;width:250px;"/><br><br><br>
E-mailID<span style="color:red">*</span><br><br>
<input name = "uemail" id="fnamebox1" type="text" style="padding:2px;height:30px;width:250px;"/><br><br><br>
Password <span style="color:red">*</span><br><br>
<input  type="password" name="pswd" id="fnamebox" style="padding:2px;height:30px;width:250px;"/><br><br><br>
 Re-Password<span style="color:red">*</span><br><br>
<input name = "repswd" id="fnamebox1" type="password" style="padding:2px;height:30px;width:250px;"/><br><br><br>
<input type="submit" name="submit" value="Sign In" style="margin-left:40px; background-color:#2c3e50; color:#FFFFFF; height:30px; width:150px; border-radius:15px;" />
</div>

<?php
$conn = mysql_connect("fdb13.biz.nf", "1814924_tup", "tuplacements123") or die("error connecting");
mysql_select_db("1814924_tup")or die("database couldnot connect");
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
if(isset($_POST['submit']))
{
	$flag=0;
	$Rno=$_POST['rno'];
	$fname=$_POST['fname'];
    $lname=$_POST['lname'];
	$email=$_POST['uemail'];
    $pswd=$_POST['pswd'];
	$repswd=$_POST['repswd'];
	$choice="select Rollno from signup where Rollno='$Rno' ";
	$chk=mysql_query($choice);   
	while($row=mysql_fetch_array($chk))
	{
		echo "<font color='red'>ROLL-NUMBER ALREADY EXIST!!!!</font>";
		$flag=1;
	}
	if($flag==0)
	{
		$query="INSERT INTO `signup`(`Rollno`, `fname`, `lname`, `email-id`, `password`, `retype`) VALUES($Rno,'$fname','$lname','$email','$pswd','$repswd')";
		$tem=mysql_query($query) or die(mysql_error());
                if(isset($tem))
		{
			echo"REGISTERED SUCCESSFULLY";
		}
	}
}
?>