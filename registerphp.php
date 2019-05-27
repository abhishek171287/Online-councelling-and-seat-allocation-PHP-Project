<?php

/*require 'C:/xampp/htdocs/myjeca/PHPMailer-master/src/PHPMailer';
$mail=new PHPMailer();
$mail ->IsSmtp();
$mail ->SMTPDebug=1;
$mail ->SMTPAuth=true;

$mail ->SMTPSecure='ssl';

$mail ->Port=465;*/



$con = mysqli_connect('localhost','root','');
if(!$con)	
{
	echo 'Not connected to server';
}	

if(!mysqli_select_db($con,'jeca'))	
{
	echo 'Database not selected';
}




		$rollno= $_POST['rollno'];
		$candidatename= $_POST['candidatename'];
		$fathername=$_POST['fathername'];
		$mothername=$_POST['mothername'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		$locality=$_POST['locality'];
		$city=$_POST['city'];
		$state=$_POST['state']; 
		$district=$_POST['district']; 
		$pincode=$_POST['pincode'];
		$email=$_POST['email']; 
		$mobile=$_POST['mobile'];
		/*$photoname=$_FILES["photo"]["name"];
		$signname=$_FILES["sign"]["name"];*/
		

		   
	/*if(isset($_FILES['photo1']))
		{
		$photoname=$_FILES['photo1'];
		}
   if(isset($_FILES['sign1']))
   {
		$signname=$_FILES['sign1'];

	}*/


		$bank=$_POST['bank'];
		$chalan=$_POST['chalan'];
		$payername=$_POST['payername'];
		$rank=$_POST['rank'];
		$institute=$_POST['institute'];
		$aadhar=$_POST['aadhar'];
		
		

		//$sql ="INSERT INTO councellingstudents(rollno,candidatename,fathername,mothername,dob,rank,institute,gender,aadhar,address,locality,city,state,district,pincode,email,mobile,photo,sign,bank,chalan,payername) VALUES ('$rollno','$candidatename','$fathername','$mothername','$dob','$rank','$institute','$gender','$aadhar','$address','$locality','$city','$state','$district','$pincode','$email','$mobile','$photoname','$signname','$bank','$chalan','$payername') ";


		$sql ="INSERT INTO councellingstudents(rollno,candidatename,fathername,mothername,dob,rank,institute,gender,aadhar,address,locality,city,state,district,pincode,email,mobile,bank,chalan,payername) VALUES ('$rollno','$candidatename','$fathername','$mothername','$dob','$rank','$institute','$gender','$aadhar','$address','$locality','$city','$state','$district','$pincode','$email','$mobile','$bank','$chalan','$payername') ";
		$sql2="UPDATE participatingcollege SET seats=seats - 1 where collegename='$institute' and seats > 0";
		
		if(!mysqli_query($con,$sql))
		{
			echo 'Not Inserted';
			echo '<br>';
		}

		else
		{
			echo 'Registered';
			echo '<br>';
		}
		if(!mysqli_query($con,$sql2))
		{
			echo 'Not Inserted.Because you have not filled all the details of the registration form.';
			echo '<br>';
		}

		else
		{
			echo 'SEAT OCCUPIED';
			echo '<br>';
		}


$sql1="SELECT * FROM councellingstudents WHERE rollno=$rollno";
$data=mysqli_query($con,$sql1);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
echo 'Application ID:'.$result['applicationid'].'<br>';
echo 'Roll Number: '.$_POST['rollno'].'<br>';
echo 'Candidate Name: '.$_POST['candidatename'].'<br>';
echo 'JECA Rank:'.$_POST['rank'].'<br>';
echo 'Aadhar Number:'.$_POST['aadhar'].'<br>';
echo 'Institute Selected:'.$_POST['institute'].'<br>';
echo 'E-Mail: '.$_POST['email'].'<br>';
echo 'Mobile No.: '.$_POST['mobile'].'<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo 'You have to get your MCA admission done in your selected college within 26th July 2019.You have to take all your 10th,12th and graduation documents,domicile form and aadhar card(matching to the submitted number) with your photograph on it';
echo '<br>';
echo '<br>';

echo 'All the information provided by the students cannot be updated and change of institute for MCA seat allotment cannot be done.Any inconsistency in information provided by student will lead to disbarment and release of his/her alloted MCA seat.';



?>