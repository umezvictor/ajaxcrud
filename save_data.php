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
	$('#insert').click(function(event){
		event.preventDefault();
		$.ajax({
		url: "insert.php",
		method: "post",
		data: $('#insert_form').serialize(),
		dataType: "text",
		success: function(strMessage){
			$('#message').text(strMessage);
		}
	});
	});
	
});
</script>
   </head>
	
	
	<body>
	<h1>save data with ajax</h1>
	
	
	<!-- update form for flights Modal -->
<div class="container"> 
<div class="row">
	
	<div class="col-md-6">
<p id="message"></p>	
<form  method="post"  id="insert_form" role="form">
 
<div class="input-group">
<input type="text" id="fullname" name="fullname" class="form-control" placeholder="fullname" required >                                        
</div>

<div class="input-group">
<input type="text" id="email" name="email" class="form-control" placeholder="email" required>                                        
</div>

<div class="input-group">
<input type="text" id="phone" name="phone" class="form-control" placeholder="phone" required>                                        
</div>




   <input type="submit" name="insert" id="insert" value="save"/>
   <a href="fetch_data.php" class="btn btn-success">load data</a>
</form>
 </div>
 </div>
 </div>
	

	</body>
	
</html>