<?php

   $dbusername= 'root';
   $dbpass='';
   $dbname='mysql';

   // Database connection
   $uname =$_POST['nam1'];
   $emailid =$_POST['em1'];
   $subject =$_POST['sub1'];
   $message =$_POST['txt1'];


	$conn = new mysqli('localhost',$dbusername,$dbpass,$dbname);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO `contactus`(`name`, `email`, `subject`, `message`) VALUES (?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi",$uname , $emailid ,$subject,$message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
   // $con = mysqli_connect('127.0.0.1',$dbusername,$dbpass,$dbname) or DIE ("unable to connect to the database!");
   //
   // if(isset($_POST['submit']))
   // {
   //     $uname =$_POST['nam1'];
   //     $emailid =$_POST['em1'];
   //     $subject =$_POST['sub1'];
   //     $message =$_POST['txt1'];
   //
   //     $sql = "INSERT INTO `contactus`(`name`, `email`, `subject`, `message`) VALUES ([$uname],[$emailid],[$subject],[$message])"
   //     if($con->query($sql))
   //     {
   //       echo "<div class="alert alert-success">New record created successfully.</div>";
   //     }
   //     else {
   //       echo "<div class="alert alert-success">Thank you for contacting us. Someone will get back to you within 1 Business Day.</div>";
   //     }
   //      $con->close();
   // }
 ?>
