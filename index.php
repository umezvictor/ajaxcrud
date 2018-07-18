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
	$.ajax({
		url: "process.php",
		data: "",
		dataType: "text",
		success: function(strDate){
			$('#show').text(strDate)
		}
	});
});
</script>
   </head>
	
	
	<body>
	<h1>My ajax crud app is working perfectly</h1>
	
	<div id="show">
	
	</div>
	
	<!-- update form for flights Modal -->

	

	</body>
	
</html>