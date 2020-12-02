<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['submit']))
{    
    $id_mhs = $_POST['id_mhs'];
    $lokal=$_POST['lokal'];
    $latin=$_POST['latin'];
	$iucn=$_POST['iucn'];
	$cites=$_POST['cites'];    
    
    
        $result = mysqli_query($connect, "UPDATE tmhs SET lokal='$lokal',latin='$latin',iucn='$iucn',cites='$cites' WHERE id_mhs='$id_mhs'");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    
}
?>
<?php
//error_reporting(0);
//getting id from url
$id_mhs = $_GET['id_mhs'];
 
//selecting data associated with this particular id
$result = mysqli_query($connect, "SELECT * FROM tmhs WHERE id_mhs='$id_mhs'");
 
while($row = mysqli_fetch_array($result))
{
    $lokal = $row['lokal'];
    $latin = $row['latin'];
	$iucn = $row['iucn'];
	$cites = $row['cites'];
}
?>
<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container" style="width: 800px; margin-top: 100px;">
		<div class="row">
    <h3>Edit Data</h3>
			<div class="col-sm-6"> 
	
	<form action="" method="post" name="form1">
		<div class="form-group">
				
				<input type="hidden" name="id_mhs" class="form-control" value="<?php echo $id_mhs;?>">
			
		</div>
		<div class="form-group">
				<label>Nama Lokal</label>
				<input type="text" name="lokal" class="form-control" value="<?php echo $lokal;?>">
			
		</div>
			   <div class="form-group">
				<label>Nama Latin</label>
				<input type="text" name="latin" class="form-control" value=" <?php echo $latin;?>">
			</div>
			 <div class="form-group">
				<label>IUCN</label>
				<input type="text" name="iucn" class="form-control" value="<?php echo $iucn;?>">
			  </div>
				<div class="form-group">
				<label>CITES</label>
				<input type="text" name="cites" class="form-control" value="<?php echo $cites;?>">
			  </div>
				<div class="form-group">
				
				<input type="submit" name="submit" value="update" class="btn btn-primary btn-block" name="update">
			
		
	</form>

</div>
</div>
</div>
</body>
</html>

