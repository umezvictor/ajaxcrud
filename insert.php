<?php
   
     $host = "localhost";
    $username = "victor";
    $password = "blaze";
    $database = "ajaxcrud";
    
    $con = mysqli_connect($host, $username, $password, $database);
    if(mysqli_connect_errno()){
       echo "database connection failed" . mysqli_error();
    }
	
	//insert data
	    $fullname = $_POST["fullname"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		
		$sql = "INSERT INTO staff (fullname, email, phone) VALUES('$fullname', '$email', '$phone')";
		
		if(mysqli_query($con, $sql)){
			//this success and error message will be captured by ajaxcrud
			//in the success function
			echo "Record was successfully inserted";
		}else{
			echo "Please fill the form correctly";
		}
		
	

?>