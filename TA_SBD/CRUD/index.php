<html>
<head>
	<title>CRUD V1.</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>

<body>
	<div class="container" style="width: 870px; margin-top: 100px;">
    <td><a href="fetch.php?=add-record" class="btn btn-info">Add Data</a></td>
		<h3 align="center">List Hewan Di Lindungi</h3>
		<div class="row">
             <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lokal</th>
                <th>Nama Latin</th>
                <th>IUCN</th>
                <th>CITES</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        	<?php
        	      include("config.php");
                  $query ="SELECT * FROM tmhs";
                  $sql = mysqli_query($connect,$query);
                  while($row = mysqli_fetch_array($sql))
                  {

        	?>
            <tr>
                <td><?php echo $row["id_mhs"];?></td>
                <td><?php echo $row["lokal"];?></td>
                <td><?php echo $row["latin"];?></td>
                <td><?php echo $row["iucn"];?></td>
                <td><?php echo $row["cites"];?></td>
                <td><a href="edit.php?id_mhs=<?php echo $row['id_mhs']; ?>" class="btn btn-info">EDIT</a></td>
                <td><a href="delete.php?id_mhs=<?php echo $row['id_mhs'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')">DELETE</a></td>
            </tr>
            <?php } ?>
            
        </tbody>
        
    </table>
    <center><marquee><h5>Tugas Akhir Praktikum Sistem Basis Data 2020 | Copyright @ndrksX_</h5></marquee></center>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>