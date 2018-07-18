<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>ajax crud</title>
		 <link rel="stylesheet" href="css/bootstrap.min.css"> 
		 <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	//insert data into database
	$('#load').click(function(event){
		event.preventDefault();
		$.ajax({
		url: "fetch.php",
		dataType: "html",
		success: function(Result){
		$('#result').html(Result);
		}
	});
	});
	
});
</script>
   </head>
	
	
	<body>
	<h1>fetch data with ajax</h1>
	<div id="result">
	
	</div>
	<form  method="post"  id="insert_form" role="form">
 <input type="submit" name="load" id="load" value="load"/>
 <a href="save_data.php" class="btn btn-success">insert new data</a>
</form>
	
	


	</body>
	
</html>