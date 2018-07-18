<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Xthaffers Admin</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		
	   
		<link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
		<script src="js/jquery-3.3.1.min.js"></script>
        <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        
	

		
	
	</head>
	
	<body>
	<div class="container">
	<h1>Ajax crud</h1><br />
	<div class="table-responsive">
	
	<table id="user_data" class="table table-striped">
	  <thead>
<tr style="color: #008000; background: #fff">
<th width="10%">Image</th>
<th width="35%">Firstname</th>
<th width="35%">Last name</th>
<th width="10%">Edit</th>
<th width="10%">Delete</th>

</tr>
</thead>
	</table>
	
	</div>
	</div>
	</body>
	</html>
	
		<script>
		$(document).ready(function() {
		//add data
		$('#add_button').click(function(){
			$('#user_form')[0].reset();
			$('.modal-title').text("Add user");
			$('#action').val("Add");
			$('#operation').val("Add");
			$('#user_uploaded_image').html('');
		});
		//end

		
    var datatable = $('#user_data').DataTable( {
        "processing":   true,
        "serverSide": true,
        "order":[],
		"ajax":
    } );
	//end
	
} );
		</script>