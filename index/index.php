<?php
    session_start();
	include '../koneksi.php';
    require_once ('../vendor/template/header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APOTIK IGBOB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+XmXnLq3B/cMz+5SfRWaGtfw8h8Fp0" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4">Selamat Datang di Halaman Utama</h1>
            <p class="lead"></p>
            <hr class="my-4">
			<h3>Apotek Igbob </h3>
			<p>Berangkat Semangat Pulang Sekarat</p>
            <a class="btn btn-primary btn-md" href="../administrasi/administrasi.php" role="button">Administrasi</a><br><br>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-HcJkx3j2L9WRLW9XTXrVqf01K0KVx3MlKk5WV+o/dXa49turUPbEmbiRDzLXalC" crossorigin="anonymous"></script>
</body>
</html>

   <?php
					
					
	require_once('../vendor/template/footer.php');
	?>