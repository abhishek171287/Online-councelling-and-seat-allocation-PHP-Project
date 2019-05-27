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
	
		$collegename= $_POST ['collegename'];
		$orank=$_POST ['orank'];
		$crank=$_POST ['crank'];
		$website=$_POST ['website'];

		$sql ="INSERT INTO participatingcollege (collegename,openingrank,closingrank,website) VALUES ('$collegename','$orank','$crank','$website') ";
		$sql1="SELECT * FROM participatingcollege WHERE collegename='$collegename' "; 
		$result = mysqli_query($db,$sql1);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
            $count = mysqli_num_rows($result);

	$sql2="SELECT * FROM participatingcollege WHERE collegename='$collegename' "; 
		$result1 = mysqli_query($db,$sql2);
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
      
            $count1 = mysqli_num_rows($result1);

      if($count >0) 
      {
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('Institute  Already exists');";
		echo "</script>";
      }
       if($count1 >0) 
      {
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('Website  Already exists');";
		echo "</script>";
      }

		else if(!mysqli_query($con,$sql))
		{
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('Institute is not added');";
		echo "</script>";
		}

		else
		{
		
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('Institute is added');";
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

    <title>ADD PARTICIPATING INSTITUTES</title>
	
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
	function validate()
	{
	var x=document.forms["myform"]["orank"].value;
	var y=document.forms["myform"]["crank"].value;
        var college=document.getElementById("college").value;
	                var correct=/^[A-Za-z ]+$/;
	                var number=/^[0-9]+$/;
	var max=Math.max(x,y);
	if(x<=0) 
	{
		alert("Opening rank should  not be 0 or less")
		return false;
	}

	else if(y<=0) 
	{
		alert("Closing rank should not be 0 or less")
		return false;
	}


	 else if (max==x ) 
	 {
    alert("OPENING RANK SHOULD BE SMALLER THAN CLOSING RANK");
    return false;
	}
	else if(college.match(correct))
	{
		return true;
	}

    else
     {
        alert("College Name Can only have characters");
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
					<p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
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
				  <a href="addcounsellingcities.php" class="dropdown-toggle" data-toggle="dropdown">INSTITUTES<b class="caret"></b></a>
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
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> ADD PARTICIPATING COLLEGE </h3>
									</div>
									<div class="panel-body">
									<form name="myform" action="" method="post" role="form" class="lead"  onsubmit="return validate()">
										<div class="row">
											<div >
												<div class="form-group">
													<label>ENTER COLLEGE NAME</label>
													<input type="text" name="collegename" id="college" class="form-control input-md" required=""><br>
													<label>Opening Rank(number only):</label> <input type="number" name="orank" id="orank" required>	
													<label>Closing Rank(number only):</label> <input type="number" name="crank" id="crank" required>	<br>
													<label>Website:(https://www.xy.z)</label> <input type="url" name="website" class="form-control input-md" required="" ><br>		
												</div>
												
												
											</div>
										</div>

										
										
										<input type="submit" value="Submit" name="Submit" class="btn btn-skin btn-block btn-lg" onclick="validate()">
										
										
									
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


</body>

</html>
