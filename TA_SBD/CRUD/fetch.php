<?php
   include("config.php");
    if(isset($_POST["Submit"]))
    {
    	//post all value
    	extract($_POST);
    	$query = "INSERT INTO `tmhs` (`id_mhs`, `lokal`, `latin`, `iucn`, `cites`) VALUES (NULL, '".$lokal."', '".$latin."', '".$iucn."', '".$cites."');";

    	mysqli_query($connect,$query);
    	header("location:index.php");
    }


?>


<html>
<head>
	<title>CRUD V1.</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
	<div class="container" style="width: 800px; margin-top: 100px;">
		<div class="row">
			<div class="col-sm-6"> 
	  <a href="fetch.php?=data-list" class="btn btn-info">List</a><br>
	<form action="" method="post" name="form1">
		<div class="form-group">
				<label>Nama Lokal</label>
				<input type="text" name="lokal" class="form-control" placeholder="Enter a local name...">
			
		</div>
			   <div class="form-group">
				<label>Nama Latin</label>
				<input type="text" name="latin" class="form-control" placeholder="Enter a latina name..">
			</div>
			 <div class="form-group">
				<label>IUCN</label>
				<input type="text" name="iucn" class="form-control" placeholder="Enter IUCN....">
			  </div>
			  <div class="form-group">
				<label>CITES</label>
				<input type="text" name="cites" class="form-control" placeholder="Enter CITES....">
			  </div>
				<div class="form-group">
				<input type="submit" name="Submit" value="Add" class="btn btn-primary btn-block">
	</form>

</div>
</div>
</div>
</body>
</html>

