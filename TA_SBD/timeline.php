<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="180" src="img/yow.png" />
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>

                    <p><a href="CRUD/index.php" class="btn btn-success">CRUD</a></p>
                    <p><a href="logout.php" class="btn btn-success">logout</a></p>
                </div>
            </div>

            
        </div>


        <div class="col-md-8">

            <?php for($i=0; $i < 1; $i++){ ?>
            <div class="card mb-3">
                <div class="card-body">
                Selamat Datang Di Balai Konservasi Mantan Eh salah, Hewan Maksudnya. Semoga Sehat Selalu tetap jaga kesehatam jangan lupa makan guis, Jaga Hewan Jaga Lingkungan. untuk menu ada di sebelah kiri bawah foto slur
                </div>
            </div>
            <?php } ?>
            
        </div>
    
    </div>
</div>

</body>
</html>