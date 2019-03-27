<?php 
session_start();  
require_once('class.phpmailer.php'); 
   
$conn = mysqli_connect('localhost', 'world_hello', 'Mumbai@123', 'exitecotrading');
$name= $_POST['Name'];
$email= $_POST['eml'];
$phone= $_POST['Phone'];
$query12= $_POST['query'];
$query = "SELECT * FROM `ctfcontactus` WHERE email='$email'";
$results1 =$conn->query($query);
$row=mysqli_fetch_assoc($results1);
 if ($row["email"]==$email) 
 {
     echo'1'; 
 }
 else{
$main = "INSERT INTO `ctfcontactus`(`id`, `Name`, `email`, `phone`,`query`) VALUES ('','$name','$email','$phone','$query12')";
//echo $main;
$results =$conn->query($main);
echo'1'; 
 }

	
	$mail = new PHPMailer(true); // the true param means it will throw exceptions on     errors, which we need to catch
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host = 'mail.arfeenkhan.com';  // Specify main and backup server
	$mail->Port = '26';
	$mail->SMTPAuth = 'true';                               // Enable SMTP authentication
	$mail->Username = 'arfeenkhan@arfeenkhan.com';                            // SMTP username
	$mail->Password = 'rNX7zSKSCnev';                           // SMTP password
	$mail->SMTPSecure = 'SSL/TLS';

	try 
	{
		$mail->SetFrom('Arfeenkhan@arfeenkhan.com', 'Arfeen Khan');
	 
	 
	    $mail->AddAddress('anand@arfeenkhan.com','bhavesh');
	    //$mail->AddAddress('a@arfeenkhan.com','anand');  
                  
                  
		 $mail->Subject = 'CONTATC US FORM CTF';
		 $mail->Body = 'Name - '.$name.'<br>Email - '.$email.'<br>Phone - '.$phone.'<br>Query - '.$query12; 
                 $mail->IsHTML(true);
		 $mail->Send();
				// window.location.href = 'http://magicconversion.com/test/invoice_sample.php';
			} 
			catch (phpmailerException $e) 
			{
				echo $e->errorMessage(); //Pretty error messages from PHPMailer
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage(); //Boring error messages from anything else!
			}   

 
 