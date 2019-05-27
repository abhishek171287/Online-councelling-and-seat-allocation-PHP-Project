 
<!DOCTYPE html >
<html lang="en">

<head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <script type="text/javascript">
         function generateCaptcha()
         {
             var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
             var i;
             for (i=0;i<4;i++){
               var a = alpha[Math.floor(Math.random() * alpha.length)];
               var b = alpha[Math.floor(Math.random() * alpha.length)];
               var c = alpha[Math.floor(Math.random() * alpha.length)];
               var d = alpha[Math.floor(Math.random() * alpha.length)];
              }
            var code = a + '' + b + '' + '' + c + '' + d;
            document.getElementById("mainCaptcha").value = code
          }
          
         
</script>  
    

    <title>Registration</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">

<style type="text/css">
	#second,#third,#result
	{
		display: none;
	}

	#td1
	{
		border-radius: 25px;
  background: #73AD21;
  padding: 20px; 
  width: 200px;
  height: 150px; 
	}
</style>
</head>

<body class="bg-dark" id="page-top" data-spy="scroll" data-target=".navbar-custom" onload="generateCaptcha();">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<table>
						<tr>
						<td>	
					<div class="col-sm-10 col-md-10">
					
						<img class=" img-left" src="img/logo.png"  style="width:120px;height:100px;"</img>

					</div>
				</td>
				<td>
							<p class="bold text-center"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 	West Bengal Joint Entrance Examination Board</p>
												<p class=" text-center">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 	Online Application for WBJECA councelling-2019</p>

				</td>
				</tr>
				<tr>
					<td  style="background: black" align="center" >
						<h5><a  href="home.php" style="color:red  " >Home</a></h5>
			
					
					</td>
				</tr>
				</table>


				</div>
			</div>
		</div>
   


            
    </nav>
	
			<div class="container">
						>

				<div class="row justify-content-center">
					<div class="col-md-6 bg-light p-4 rounded mt-5 ">

								<h5 class="text-center text-light bg-danger mb-3 p-6 rounded lead" id="result1">FILL CAREFULLY!!INFORMATION SUBMITTED ONCE CANNOT BE ALTERED.</h5>
						<h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">HELLO WORLD!</h5>
						<div class="progress-bar bg-danger mb-2 p-2 rounded " role="progressbar" style="width: 20%;" id="progressBar">
							<b class="lead" id="progressText">  Step - 1</b>
						</div>
						<form action="registerphp.php"  method="post" id="form-data" onload="generateCaptcha()" enctype ="multipart/form-data" >
							<div id="first" >
								<h4 class="text-center bg-primary p-1 rounded text-light ">Personal Information</h4>
								<div class="form-group">
									<label for="rollno">Roll Number</label>
									<input type="text" name="rollno" class="form-control" placeholder="JECA Roll Number" id="rollno" onblur="checkRollStatus()">
									<b class="form-text text-danger" id="rollnoError"></b>

								</div>
								<div class="form-group">
									<label for="candidatename">Candidate's Name</label>
									<input type="text" name="candidatename" class="form-control" placeholder="Full Name" id="candidatename" onblur="checknameStatus()" >
									<b class="form-text text-danger" id="candidatenameError"></b>

								</div>	
								<div class="form-group">
									<label for="fathername">Father's Name</label>
									<input type="text" name="fathername" class="form-control" placeholder="Full Name" id="fathername">
									<b class="form-text text-danger" id="fathernameError"></b>
								</div>	
								<div class="form-group">
									<label for="mothername">Mother's Name</label>
									<input type="text" name="mothername" class="form-control" placeholder="Full Name" id="mothername">
									<b class="form-text text-danger" id="mothernameError"></b>
								</div>	
								<div class="form-group">
									<label for="dob">Date Of Birth</label>
									<input type="date" name="dob" max="1999-12-31" min="1979-01-01" class="form-control" placeholder="Date Of Birth" id="dob">

									<b class="form-text text-success" id="dobSucces">Student should be born before 2000-01-01.Input in MM-DD-YYYY format</b>
									<b class="form-text text-danger" id="dobError"></b>
								</div>
								<div class="form-group">
									<label for="gender">Gender</label>
									<select name="gender" class="form-control"  id="gender">
									<option   value=""  hidden>--------------------------------Select-------------------------------------</option>
  									<option value="male">Male</option>
  									<option value="female">Female</option>
									</select>
									<b class="form-text text-danger" id="genderError"></b>
								</div>
								<div class="form-group">
									<label for="aadhar">Aadhar Number</label>
									<input type="text" name="aadhar" class="form-control" placeholder="aadhar" id="aadhar" onblur="checkaadharStatus()">
									<b class="form-text text-danger" id="aadharError" ></b>
								</div>
								<h4 class="text-center bg-primary p-1 rounded text-light ">INSTITUTE SELECTION</h4>

								<div class="form-group">
									<label for="rank">RANK</label>
									<select name="rank"  class="form-control" id="rank">
									<option value=""  hidden >ENTER NAME 1st</option>
									</select>
									<b class="form-text text-danger" id="rankError"></b>
								</div>

								<div class="form-group">
									<label for="institute">Institute</label>
									<select name="institute"  class="form-control" id="institute">
									<option value=""  hidden >CHECK RANK 1st</option>
									</select>
									<b class="form-text text-danger" id="instituteError"></b>
								</div>	
								

								<h4 class="text-center bg-primary p-1 rounded text-light ">Contact Details</h4>
								<div class="form-group">
									<label for="address">Address</label>
									<input type="text" name="address" class="form-control" placeholder="Address" id="address">
									<b class="form-text text-danger" id="addressError"></b>
								</div>	
								<div class="form-group">
									<label for="locality">Locality(Optional)</label>
									<input type="text" name="locality" class="form-control" placeholder="Locality" id="locality">
									<b class="form-text text-danger" id="localityError"></b>
								</div>
								<div class="form-group">
									<label for="city">City/Town/Village</label>
									<input type="text" name="city" class="form-control" placeholder="city/town/village" id="city">
									<b class="form-text text-danger" id="cityError"></b>
								</div>	

								<div class="form-group">
									<label for="state">State</label>
									<?php
										include('dbconfig.php');
										$query=$db->query("SELECT * FROM state ");
										$rowcount=$query->num_rows;
									?>
									<select name="state" class="form-control" id="state">
										<option value="" hidden  >Select state</option>
									<?php
										if($rowcount >0)
										{
											while($row=$query->fetch_assoc())
											{
												echo '<option value="'.$row['stateid'].'">'.$row['state'].'</option>';
											}
										}	
										else
										{
												echo '<option value="">State Is Not available</option> ';
										}
										
									?>
									</select>
									<b class="form-text text-danger" id="stateError"></b>
								</div>	
								<div class="form-group">
									<label for="district">District</label>
									
									<select name="district"  class="form-control" id="district">
									<option value=""  hidden >Select state first</option>
									</select>
									<b class="form-text text-danger" id="districtError"></b>
								</div>

								<div class="form-group">
									<label for="pincode">Pin Code</label>
									<input type="text" name="pincode" class="form-control" placeholder="Pin Code" id="pincode">
									<b class="form-text text-danger" id="pincodeError"></b>
								</div>	

								<div class="form-group">
									<label for="email">E-mail</label>
									<input type="text" name="email" class="form-control" placeholder="E-mail" id="email" onblur="checkmailStatus()">
									<b class="form-text text-danger" id="emailError"></b>
								</div>		
								<div class="form-group">
									<label for="mobile">Mobile No.</label>
									<input type="text" name="mobile" class="form-control" placeholder="Mobile No." id="mobile" onblur="checkphoneStatus()">
									<b class="form-text text-danger" id="mobileError" ></b>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-danger" id="next-1" >Next</a>
								</div>
							</div>
							<div id="second">
								<h4 class="text-center bg-primary p-1 rounded text-light ">Upload Scanned Files</h4>
								<div class="form-group">
								<table class="table table-stripped table-hover table-bordered">
									<tr class=" text-center">
				 					<th class=" text-center" >Type Of File</th>
				 					<th class=" text-center" >Upload</th>
				 						<th class=" text-center" >Preview</th>
				 					<th class=" text-center" >Message</th>

				 					</tr>
				  		
								<tr class="text-center">

									<td ><label for="photo1">Photo</label></td>
									<td><input type="file" name="photo1" class="form-control" id="photo" accept="image/*" onchange="previewImage(event)" ></td>
									<td><img src="" width="100px" height="150px" name="photodisplay"  accept="image/*" id="photodisplay"></td>
									<td><b class="form-text text-danger" id="photoError"></b></td>


								</tr>
								<tr class="text-center">		
									<td ><label for="sign1">Signature</label></td>
									<td><input type="file" name="sign1" class="form-control"  id="sign" onchange="previewImage1(event)" ></td>
									<td><img src="" width="100px" height="150px" name="signdisplay" id="signdisplay"></td>
									<td><b class="form-text text-danger" id="signError"></b></td>
									
								</tr>	
								</table>
								</div>		
								<div class="form-group">
									<a href="#" class="btn btn-danger" id="prev-2">Previous</a>
									<a href="#" class="btn btn-danger" id="next-2">Next</a>
								</div>	
							</div>
							<div id="third">
								<h4 class="text-center bg-primary p-1 rounded text-light ">Payment Details</h4>
								<div class="form-group">
								<h2 class="text-center bg-primary p-1 rounded text-danger ">Amount :Rs 500</h2>
									<h2 class="text-center bg-primary p-1 rounded text-danger ">Chalan in favour of WBJEE JECA Councelling</h2>
								
									<label for="bank">Bank Name</label>
									<select name="bank" class="form-control"  id="bank">
									<option   value=""  hidden>--------------------------------Select-------------------------------------</option>
									<option value="Allahabad Bank">Allahabad Bank</option>
									<option value="Andhra Bank">Andhra Bank</option>
									<option value="Bank of Baroda">Bank of Baroda</option>
									<option value="Bank of Maharashtra">Bank of Maharashtra</option>
									<option value="Canara Bank">Canara Bank</option>
									<option value="Central Bank of India">Central Bank of India</option>
									<option value="Corporation Bank">Corporation Bank</option>
									<option value="Dena Bank">Dena Bank</option>
									<option value="Indian Bank">Indian Bank</option>
									<option value="Indian Overseas Bank">Indian Overseas Bank</option>
									<option value="Oriental Bank of Commerce">Oriental Bank of Commerce</option>
									<option value="Punjab and Sind Bank">Punjab and Sind Bank</option>
									<option value="Punjab National Bank">Punjab National Bank</option>
									<option value="State Bank of India">State Bank of India</option>
									<option value="Syndicate Bank">Syndicate Bank</option>
									<option value="UCO Bank">UCO Bank</option>
									<option value="Union Bank of India">Union Bank of India</option>
									<option value="United Bank of India">United Bank of India</option>
									<option value="Vijaya Bank">Vijaya Bank</option>
									<option value="Axis Bank">Axis Bank</option>
									<option value="Bandhan Bank">Bandhan Bank</option>
									<option value="HDFC Bank">HDFC Bank</option>
									<option value="ICICI Bank">ICICI Bank</option>
									<option value="YES Bank">YES Bank</option>
									<option value="IDBI Bank">IDBI Bank</option>
								</select>
									<b class="form-text text-danger" id="bankError"></b>
								</div>
								<div class="form-group">
									<label for="chalan">Chalan Number</label>
									<input type="text" name="chalan" class="form-control" placeholder="Chalan Number" id="chalan" onblur="checkchalanstatus()">
									<b class="form-text text-danger" id="chalanError" ></b>
								</div>	
								<div class="form-group" >
									<label for="payername">Name of Payer</label>
									<input type="text" name="payername" class="form-control" placeholder="Name of Payer" id="payername">
									<b class="form-text text-danger" id="payernameError"></b>
								</div>
								<div class="form-group" >
								<label for="mainCaptcha">Captcha</label>
								<input type="text" id="mainCaptcha" readonly="readonly" onload="generateCaptcha();"/>
                  				<input type="button" id="refresh" value="Refresh"  onclick="generateCaptcha();"/>
                  				</div>
                  				<div class="form-group" >
                  				<label for="txtInput">Input Captcha</label>
                  				<input type="text" id="txtInput" onchange ="CheckValidCaptcha();">
                  				<b class="form-text text-danger" id="captcheError"></b>
             				 	</div>
								<div class="form-group">
									<a href="#" class="btn btn-danger" id="prev-3">Previous</a>
									<input type="submit" name="submitform" value="submit" id="submit" class="btn btn-success"> </div>			
							</div>
						</form>
					</div>
				</div>		
			</div>
		</div>
	</div>		
</div>


	
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/moment.min.js"></script>


<script type="text/javascript">
	$(document).ready(function(){
		$("#next-1").click(function(e){

			e.preventDefault();
			            var letters = /^[A-Za-z ]+$/;
			      var addresss=/^[a-zA-Z0-9\s,'-/]*$/;
			      var pin=/^[1-9][0-9]{5}$/;
			      var mail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			      var mobile=/^[7-9][0-9]{9}$/;
			      var roll=/^[1-9][0-9]{7}$/;
			      var aadhar=/^\d{4}\s\d{4}\s\d{4}$/;


			      var candidatematch=letters.test($("#candidatename").val());
			      var fathermatch=letters.test($("#fathername").val());
			      var mothermatch=letters.test($("#mothername").val());
			      var addressmatch=addresss.test($("#address").val());
			      var localitymatch=addresss.test($("#locality").val());
			      var citymatch=letters.test($("#city").val());
			      var pincodematch=pin.test($("#pincode").val());
			      var emailmatch=mail.test($("#email").val());
			      var mobilematch=mobile.test($("#mobile").val());
			      var rollmatch=roll.test($("#rollno").val());
			      var aadharmatch=aadhar.test($("#aadhar").val());


			if ($("#rollno").val() == '')
			{
				$("#rollnoError").html('*Roll Number is required');
					return false;

			}
			
			else if(rollmatch==false)
			{
				$("#rollnoError").html('* Roll number should be 8 digit numeric only .');
				return false;
				
			}

			else if ($("#candidatename").val() == '')
			{
				$("#candidatenameError").html('*Candidate Name is required');
					return false;

			}
			else if($("#candidatename").val().length < 3)
			{

				$("#candidatenameError").html('* Candidate Name must be more than 2 characters.');
				return false;
			}

			else if(candidatematch==false)
			{
				$("#candidatenameError").html('* Only alphabets are  allowed .');
				return false;
				
			}
			else if ($("#fathername").val() == '')
			{
				$("#fathernameError").html('*Father Name is required');
					return false;

			}
		

			else if($("#fathername").val().length < 3)
			{

				$("#fathernameError").html('* Father Name must be more than 2 characters.');
				return false;
			}

			else if(fathermatch==false)
			{
				$("#fathernameError").html('* Only alphabets are  allowed .');
				return false;
			}	
			else if ($("#mothername").val() == '')
			{
				$("#mothernameError").html('*Mother Name is required');
					return false;

			}

			else if($("#mothername").val().length < 3)
			{

				$("#mothernameError").html('* Mother Name must be more than 2 characters.');
				return false;
			}

			else if(mothermatch==false)
			{
				$("#mothernameError").html('* Only alphabets are  allowed .');
				return false;
			}

			else if($("#dob").val()=='')	
			{
				$("#dobError").html('* Date Of Birth is required.');
				return false;
			}
			else if($("#gender").val()=='')	
			{
				$("#genderError").html('* Gender is required.');
				return false;
			}
			else if($("#address").val()=='')	
			{
				$("#addressError").html('* Address is required.');
				return false;
			}
			else if($("#address").val().length < 5)
			{

				$("#addressError").html('* Address is required.');
				return false;
			}

			else if(addressmatch==false)
			{
				$("#addressError").html('* Address cannot have special characters. ');
				return false;
			}

			else if(localitymatch==false)
			{
				$("#localityError").html('* Locality cannot have special characters. ');
				return false;
			}

			else if($("#city").val()=='')	
			{
				$("#cityError").html('* City is required.');
				return false;
			}
						else if($("#city").val().length < 3)
			{

				$("#cityError").html('* city is required.');
				return false;
			}


			else if(citymatch==false)
			{
				$("#cityError").html('* City can only have  alphabets. ');
				return false;
			}

			else if($("#state").val()=='')	
			{
				$("#stateError").html('* state is required.');
				return false;
			}
    
    		else if($("#district").val()=='')	
			{
				$("#districtError").html('* District is required.');
				return false;
			}

			else if($("#pincode").val()=='')	
			{
				$("#pincodeError").html('* Pincode is required.');
				return false;
			}
			
			else if(pincodematch==false)
			{
				$("#pincodeError").html('* Pin should be 6 character numeric number and should not start with 0. ');
				return false;
			}
			 
			 else if($("#email").val()=='')	
			{
				$("#emailError").html('* Email is required.');
				return false;
			}
			else if(emailmatch==false)
			{
				$("#emailError").html('* Email is invalid ');
				return false;
			}
			 else if($("#mobile").val()=='')	
			{
				$("#mobileError").html('* Mobile Number is required.');
				return false;
			}
			else if(mobilematch==false)
			{
				$("#mobileError").html('* Mobile  Number should be 10 digit numeric numeric and does starts with 7,8 or 9 only ');
				return false;
			}
			 else if($("#rank").val()=='')	
			{
				$("#rankError").html('* Rank Number is required.');
				return false;
			}
			 else if($("#institute").val()=='')	
			{
				$("#instituteError").html('* Institute is required.');
				return false;
			}

			else if($("#aadhar").val()=='')	
			{
				$("#aadharError").html('* Aadhar Number is required.');
				return false;
			}
			else if(aadharmatch==false)
			{
				$("#aadharError").html('* Your Aadhar Number should be 12 digit numeric with space after every 4 digit. ');
				return false;
			}
			

			else
			{
				$("#second").show();
				$("#first").hide();
				$("#progressBar").css("width","60%");
				$("#progressText").html(" Step - 2");
			}	
			
		});

		$("#next-2").click(function(e)
		{

			e.preventDefault();
			var photo=$("#photo").val();
			var photoextensions=/(\.jpg|\.jpeg|\.png|\.gif)$/i;
			var oFile = document.getElementById("photo").files[0];

			var oFile1 = document.getElementById("sign").files[0];
			if ($("#photo").val() == '')
			{
				$("#photoError").html('*Photo is required');
					return false;
			}
			else if ( !photoextensions.exec($("#photo").val())) 
			{
				$("#photoError").html('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
       			 $("#photo").val()= '';
       			 return false;
			}
			else if (oFile.size < 10000) // for 2 mb for bytes.
            {
                $("#photoError").html("Photo size must be greater than 10 KB!");
                return false;
            }

			else if (oFile.size > 2097152) // for 2 mb for bytes.
            {
                $("#photoError").html("Photo size must be under 2 MB!");
                return false;
            }
            else if ($("#sign").val() == '')
			{
				$("#signError").html('*Signature is required');
					return false;
			}
			else if ( !photoextensions.exec($("#sign").val())) 
			{
				$("#signError").html('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
       			 $("#sign").val()= '';
       			 return false;
			}
			else if (oFile1.size < 10000) // for 2 mb for bytes.
            {
                $("#signError").html("sign size must be greater than 10 KB!");
                return false;
            }

			else if (oFile1.size > 2097152) // for 2 mb for bytes.
            {
                $("#signError").html("Photo size must be under 2 MB!");
                return false;
            }

			else
			{
			$("#third").show();
			$("#second").hide();
			$("#progressBar").css("width","100%");
			$("#progressText").html("Step - 3");
			}
		});

		
			
		$("#prev-2").click(function()
		{
			$("#first").show();
			$("#second").hide();
			$("#progressBar").css("width","20%");
			$("#progressText").html("Step - 1");


		});
		$("#prev-3").click(function()
		{
			$("#second").show();
			$("#third").hide();
			
			$("#progressBar").css("width","60%");
			$("#progressText").html("Step - 2");
			


		});

		$("#submit").click(function(e)
		{
			e.preventDefault();
			$("#bankError").html('');
			$("#chalanError").html('');
			$("#payernameError").html('');
			$("#captcheError").html('');

						//$("#third").hide();
						//$("#progressBar").hide();


			 var chalanpattern=/^[A-Z][a-z][0-9]{5}$/;
			 var payer1 = /^[A-Za-z ]+$/;
			 var chalanmatch=chalanpattern.test($("#chalan").val());
			   var payermatch=payer1.test($("#payername").val());
			   var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
              var string2 = removeSpaces(document.getElementById('txtInput').value);

			 if($("#bank").val() == '')	
			{
				$("#bankError").html('* Bank is required.');
				return false;
			}
			else if($("#chalan").val() == '')	
			{
				$("#chalanError").html('* Chalan Number is required.');
				return false;
			}	
			else if(chalanmatch==false)
			{
				$("#chalanError").html('* Chalan should be of 7 alphanumeric characters begining with Capital alphabet at the first decimal place and small alphabet in the second decimal place .');
				return false;
			}
			
			else if($("#payername").val() == '')	
			{
				$("#payernameError").html('* Name Of Payer is required.');
				return false;
			}
			else if(payermatch==false)
			{
				$("#payernameError").html('* Payer name should be  alphabets only.');
				return false;
			}
			else if($("#txtInput").val() == '')	
			{
				$("#captcheError").html('* Captcha is required.');
				return false;
			}
			
             else if (string1 != string2)
              {
         document.getElementById('captcheError').innerHTML = "Please enter a valid captcha.";
         //alert("Form is validated Successfully");
                return false;
              }
             else
             {
             	alert('Form is submitted');
             	$.ajax({
             		url:'registerphp.php',
             		method:'post',
             		encrypt:'multipart/form-data',
             		data:$("#form-data").serialize(),

             		success:function(response)
             		{
             			$("#result").show();
             			$("#result").html(response);
             			$("#form-data")[0].reset();	
             			
             			$("#third").hide();
						$("#progressBar").hide();
             		}	
             	});
             }
			
		});


		$('#state').on('change',function()
		{
			var stateid=$(this).val();
			if(stateid)
			{
				$.ajax(
				{
					type:'POST',
					url:'ajaxData.php',
					data:'stateid='+stateid,

					success:function(html)
					{
						$('#district').html(html);
					}
				});

			}else 
			{
				$('#district').html('<option value="">SELECT STATE FIRST</option>');
			}
		});

		 function removeSpaces(string)
          {
            return string.split(' ').join('');
          }

		
	});
</script>

<script type="text/javascript">
function checkRollStatus()
{
    //alert("came");
var rollno=$("#rollno").val();
var name=$("#candidatename").val();
$.ajax({
    type:'post',
        url:'checkroll.php',//data: $("#form-data").serialize(),
        data:'rollno='+rollno,
					success:function(html)
					{
						$('#rollnoError').html(html);

					}
        
 });
}

</script>

<script type="text/javascript">

function previewImage(event)
{
	var reader=new FileReader();
	var  image=document.getElementById("photodisplay");
	reader.onload=function()
	{

		if(reader.readyState ==2)
		{
			image.src=reader.result;
		}
	}
	reader.readAsDataURL(event.target.files[0]);

       
 }

</script>
<script type="text/javascript">
function checkmailStatus()
{
    //alert("came");
var email=$("#email").val();
$.ajax({
    type:'post',
        url:'checkemail.php',//data: $("#form-data").serialize(),
        data:'email='+email,
					success:function(html)
					{
						$('#emailError').html(html);

					}
        
 });
}
</script>
<script type="text/javascript">
function checkphoneStatus()
{
    //alert("came");
var mobile=$("#mobile").val();
$.ajax({
    type:'post',
        url:'checkphone.php',//data: $("#form-data").serialize(),
        data:'mobile='+mobile,
					success:function(html)
					{
						$('#mobileError').html(html);

					}
        
 });
}
</script>
<script type="text/javascript">
function checkchalanstatus()
{
    //alert("came");
var chalan=$("#chalan").val();
$.ajax({
    type:'post',
        url:'checkchalan.php',//data: $("#form-data").serialize(),
        data:'chalan='+chalan,
					success:function(html)
					{
						$('#chalanError').html(html);

					}
        
 });
}
</script>
<script type="text/javascript">
function checkaadharStatus()
{
    //alert("came");
var aadhar=$("#aadhar").val();
$.ajax({
    type:'post',
        url:'checkaadhar.php',//data: $("#form-data").serialize(),
        data:'aadhar='+aadhar,
					success:function(html)
					{
						$('#aadharError').html(html);

					}
        
 });
}
</script>
<script type="text/javascript">

function previewImage1(event)
{
	var reader=new FileReader();

	reader.onload=function()
	{

		if(reader.readyState ==2)
		{
				var  image=document.getElementById("signdisplay");

			image.src=reader.result;
		}

	}
	reader.readAsDataURL(event.target.files[0]);
       
 }


</script>

<script type="text/javascript">
$('#rollno').on('change',function()
		{
			var rollno=$(this).val();
			if(rollno)
			{
				$.ajax(
				{
					type:'POST',
					url:'ajaxData1.php',
					data:'rollno='+rollno,

					success:function(html)
					{
						$('#rank').html(html);
					}
				});

			}else 
			{
				$('#rank').html('<option value="">ENTER NAME FIRST</option>');
			}
		});

</script>	

<script type="text/javascript">
$('#rank').on('change',function()
		{
			var rank=$(this).val();
			if(rank)
			{
				$.ajax(
				{
					type:'POST',
					url:'ajaxData2.php',
					data:'rank='+rank,

					success:function(html)
					{
						$('#institute').html(html);
					}
				});

			}else 
			{
				$('#institute').html('<option value="">CHECK RANK FIRST</option>');
			}
		});

</script>



<script type="text/javascript">
function checknameStatus()
{
    //alert("came");
	var rollno=$("#rollno").val();
	var name=$("#candidatename").val();
	$.ajax
	({
    	type:'post',
        url:'checkname.php',
        data: $("#form-data").serialize(),
        //data:'candidatename='+candidatename,
       
					success:function(html)
					{
						$('#candidatenameError').html(html);

					}
        
 	});
}

</script>	

</body>

</html>
