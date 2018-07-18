<?php
   
     $host = "localhost";
    $username = "victor";
    $password = "blaze";
    $database = "ajaxcrud";
    
    $con = mysqli_connect($host, $username, $password, $database);
    if(mysqli_connect_errno()){
       echo "database connection failed" . mysqli_error($data);
    }
	
	//fetch data
	    
echo "<table cellpadding=5 cellspacing=5><tr><th>id</th><th>fullname</th><th>email</th><th>phone</th></tr>";		
$sql = "SELECT * FROM staff";

if($data = mysqli_query($con, $sql)){
	while($row = mysqli_fetch_assoc($data)){
	echo "<tr><td>$row[id]</td><td>$row[fullname]</td>
	<td>$row[email]</td><td>$row[phone]</td>
	</tr>";		
	
	}
}else{
	echo "sorry no record found";
}
		
		
	

?>