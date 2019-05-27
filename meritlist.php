<?php
include('session.php');
	$con=mysqli_connect('localhost','root','');
	if(!$con)
	{
		echo 'Not connected to server';
	}

	if(!mysqli_select_db($con,'jeca'))
	{
		echo 'Database not selected';
	}  
	if(isset($_POST['Submit']))
	{
	
		$rollno= $_POST ['rollno'];
		$name= $_POST['name'];
		$dob= $_POST['dob'];
		$gender=$_POST['gender'];
		$cat=$_POST['cat'];
		$pc=$_POST['pc'];
		$gmr=$_POST['gmr'];
		$scrank=$_POST['scrank'];
		$strank=$_POST['strank'];
		$pcrank=$_POST['pcrank'];
		

		$sql ="INSERT INTO meritlist(rollno,name,dob,gender,cat,pc,gmr,scrank,strank,pcrank) VALUES ('$rollno','$name','$dob','$gender','$cat','$pc','$gmr','$scrank','$strank','$pcrank') ";

		if(!mysqli_query($con,$sql))
		{
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('student is  added');";
		echo "</script>";
		}

		else
		{
		
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('student is added');";
		echo "</script>";
		}

	}
	

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Student Rank</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">
<style>
	@keyframes ticker {
    0% { transform: translate3d(0, 0, 0); }
    100% { transform: translate3d(-100%, 0, 0); }
  }
  .tcontainer{
    width: 100%;
    overflow: hidden;
  }
  .ticker-wrap {
    width: 100%;
    padding-left: 100%; 
    background-color: #eee;
  }
  .ticker-move {
    display: inline-block;
    white-space: nowrap;
    padding-right: 100%;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    animation-name: ticker;
    animation-duration: 10s;
  }
  .ticker-move:hover{
    animation-play-state: paused;
  }
  .ticker-item{
    display: inline-block;
    padding: 0 2rem;
  }


</style>
<script>
function disable()
	{
	var x=document.getElementById("cat").value;
	if(x=="sc")
		{
			document.getElementById("scrank").disabled = false;
			document.getElementById("strank").disabled = true;
			

		}
	else if(x=="st")
		{
			document.getElementById("strank").disabled = false;
			document.getElementById("scrank").disabled = true;
			

		}
		else
		{
			document.getElementById("scrank").disabled = true;
			document.getElementById("strank").disabled = true;

		}
	
	}
	function disable1()
	{
	var a=document.getElementById("pc").value;
	if(a=="yes")
		{
			document.getElementById("pcrank").disabled = false;

		}
	
		else
		{
			document.getElementById("pcrank").disabled = true;
			

		}
	
	}

</script>
<script>
	function validate1()
	{
	var gmr=document.forms["myform"]["gmr"].value;
	var scrank=document.forms["myform"]["scrank"].value;
	var strank=document.forms["myform"]["strank"].value;
	var pcrank=document.forms["myform"]["pcrank"].value;

        var name=document.getElementById("name").value;
	                var correct=/^[A-Za-z ]+$/;
	                var number=/^[0-9]+$/;
	var max1=Math.max(gmr,scrank);
	var max2=Math.max(gmr,strank);
	var max3=Math.max(gmr,pcrank);
	
	if(gmr<=0) 
	{
		alert("General rank should  not be 0 or less")
		return false;
	}

	else if(scrank<0) 
	{
		alert("Scrank  should not be 0 or less")
		return false;
	}
	else if(strank<0) 
	{
		alert("STrank  should not be 0 or less")
		return false;
	}
else if(pcrank<0) 
	{
		alert("PCRANK should not be 0 or less")
		return false;
	}

	 else if (max1==scrank ) 
	 {
    alert("GENERAL RANK SHOULD BE GREATER THAN SCRANK");
    return false;
	}
	else if (max2==strank ) 
	 {
    alert("GENERAL RANK SHOULD BE GREATER THAN STRANK");
    return false;
	}
	else if (max3==pcrank ) 
	 {
    alert("GENERAL RANK SHOULD BE GREATER THAN PCRANK");
    return false;
	}
	else if(name.match(correct))
	{
		return true;
	}

    else
     {
        alert(" Name Can only have characters.It can't be empty");
            return false;
     }

}
</script> 



</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left">Monday - Friday, 10am to 5pm </p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">Call us now 033 2367 1198</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="" width="150" height="60" />
                </a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="adminhome.php">Home</a></li>

				<li class="dropdown">
				  <a href="participatingcolleges.php" class="dropdown-toggle" data-toggle="dropdown">INSTITUTES<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="participatingcolleges.php">Add Participating Institutes</a></li>
					<li><a href="updateordeletecolleges.php">Update Or Delete Participating Institutes</a></li>					
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="addcounsellingcities.php" class="dropdown-toggle" data-toggle="dropdown">MERIT LIST<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="meritlist.php">Add Student To Merit List</a></li>
					<li><a href="updateordeletemeritlist.php">Update Or Delete Student From Merit List</a></li>
					
				  </ul>
				</li>
				<li><a href="councellingstudents.php">Counselling students</a></li>

				<li><a href="logout.php">Logout</a></li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	
	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					
					<div >
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> ADD STUDENTS TO MERIT LIST </h3>
									</div>
									<div class="panel-body">
									<form name="myform" action="" method="post" role="form" class="lead" onsubmit="return validate1()">
										<div class="row">
											<div >
												<div class="form-group">
													<table style="margin:1em auto;">
														<tr>
													<td><label>ENTER ROLL NUMBER:</label></td>
													<td><input type="number" name="rollno" id="rollno" min=90000000 class="form-control input-md" required="" onblur="checkRollStatus()" >																						<b class="form-text text-danger" id="rollnoError"></b>
</td></tr>

													<tr><td><label>NAME:</label></td>
													<td><input type="text" name="name" id="name" required=""></td></tr>
													<tr><td><label>DOB:</label></td>
													<td><input type="date" name="dob" id="dob" max="1999-12-31" min="1979-01-01" required=""></td></tr>
													<tr><td><label>Gender:</label></td>   
													<td><input type="radio"  name="gender" value="male" required=""> Male </td>
  											<td><input type="radio"  name="gender" value="female"> Female</td></tr>
  										<tr><td><label>Category:</label></td>
  											<td><select id="cat" name="cat" required="" onclick="disable()">
													<option value="" hidden>--Select--</option>	
  													<option value="general">General</option>
													  <option value="sc">SC</option>
													  <option value="st">ST</option>
													</select></td></tr>	
										<tr><td><label>PC:</label></td>
											<td><select  id="pc" name="pc" required="" onclick="disable1()">
													<option value="" hidden>--Select--</option>	
  													<option value="yes">YES</option>
													  <option value="no">NO</option>
													</select></td></tr>		

													<tr><td><label>GMR:</label></td>
										  			<td><input type="number" name="gmr"   required="" id="gmr"> </td></tr>
			
													<tr><td><label>SCRANK</label>:</td>
										  			<td><input type="number" id="scrank" name="scrank" value="0"> </td></tr>
										  			
										  			<tr><td><label>STRANK</label>:</td>
										  			<td><input type="number" name="strank"  id="strank" value="0"  > </td></tr>
										  			<tr><td><label>PCRANK</label>:</td>
										  			<td><input type="number" name="pcrank" id="pcrank" value="0"> </td></tr>	
										  		</table>
												</div>	
											</div>
										</div>
										<input type="submit" value="Submit" name="Submit" class="btn btn-skin btn-block btn-lg" onclick="validate1()" >
										
										
									
									</form>
								</div>
							</div>				
						
						</div>
						</div>
					</div>					
				</div>	

    	
    </section>


    
	
	
	<footer>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>About WBJECA</h5>
						<p>
						Joint Entrance Examination for admissions to Master of Computer Applications (JECA), is conducted by West Bengal Joint Entrance Examination Board (WBJEEB).The exam is a gateway for admissions to MCA courses offered by colleges in the state of West Bengal.This year, WBJECA 2019 is scheduled for July 13, 2019.
						</p>
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>WBJEEB</h5>
						<p>
						The West Bengal Joint Entrance Examinations Board is the state government administered authority for overseeing admission to engineering and other degree colleges in West Bengal, India.
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Friday, 10am to 5pm
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> 033 2367 1198

							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> help@wbjeeb.com
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Our location</h5>
						<p>AQ 13/1, AQ Block, Sector V, Salt Lake City, Kolkata, West Bengal 700091</p>		
						
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow us</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a></li>
								<li class="social-google"><a href="https://aboutme.google.com/u/0/?referer=gplus"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright 2019 - WBJEEB. All rights reserved.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
					
					</div>
                    <!-- 
                    -->
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>

</div>



?>	
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>
<script type="text/javascript">
function checkRollStatus()
{
    //alert("came");
var rollno=$("#rollno").val();
$.ajax({
    type:'post',
        url:'checkroll1.php',//data: $("#form-data").serialize(),
        data:'rollno='+rollno,
					success:function(html)
					{
						$('#rollnoError').html(html);

					}
        
 });
}

</script>

</body>

</html>
