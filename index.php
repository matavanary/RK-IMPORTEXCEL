<!DOCTYPE html>
<?php 
	include 'db.php';
	


?>	
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Import Excel To MySQL Database Using PHP </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Import Excel File To MySql Database Using php">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />


	</head>
	<body>    

	<!-- Navbar
    ================================================== -->

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container"> 
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="">Import Excel To MySQL Database Using PHP</a>
				
			</div>
		</div>
	</div>

	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<legend>Import CSV/Excel file</legend>
						<div class="control-group">
							<div class="control-label">
								<label>CSV/Excel File:</label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
		

		<table id="myTable" class="table table-bordered">
			<thead>
				  	<tr>
				  		<th>ID</th>
				  		<th>1</th>
				  		<th>10</th>
				  		<th>20</th>
				  		<th>30</th>
				  		<th>40</th>
				  		<th>50</th>
				 		
				 
				  	</tr>	
				  </thead>
			<?php
				$SQLSELECT = "SELECT * FROM subject2 WHERE F1 = 4";
				$result_set =  sqlsrv_query($conn, $SQLSELECT);
				while($row = sqlsrv_fetch_array($result_set))
				{
				?>
			
					<tr>
						<td><?php echo $row['0']; ?></td>
						<td><?php echo $row['1']; ?></td>
						<td><?php echo $row['10']; ?></td>
						<td><?php echo $row['20']; ?></td>
						<td><?php echo $row['30']; ?></td>
						<td><?php echo $row['40']; ?></td>
						<td><?php echo $row['50']; ?></td>
					

					</tr>
				<?php
				}
			?>
		</table>
	</div>

	</div>

<script>
	$(document).ready(function () {
		$("#myTable").DataTable();
	});
</script>

	</body>
</html>