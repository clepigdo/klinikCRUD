<?php
session_start();


	include '../koneksi.php';
	require_once('../vendor/template/header.php');

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>APOTIK IGBOB</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				 <div class="col-lg-12">
					<br>
					<h1></h1>	
				 <br/>
				 <a href="tambah.php" class="btn btn-success btn-md"><span class="fa fa-plus"></span> Tambah</a>
				 <table class="table table-hover table-bordered" style="margin-top: 10px">
					<tr class="success">
						<th width="50px">No</th>
						<th>No rm</th>
						<th>Nama Pasien</th>
						<th>Alamat</th>
						<th>Jenis Kelamin</th>
						<th>Tanggal Lahir</th>
                        <th>ID Dokter</th>
                        <th>ID Departemen</th>
                        <th>Diagnosa</th>
                        <th>Nomor ruangan</th>
						<th style="text-align: center;">Actions</th>
					</tr>
					<?php
						$sql = "SELECT * FROM administrasi";
     					if($data=mysqli_query($koneksi,$sql)){
        				$a=1;
       					 while($oke=mysqli_fetch_object($data)){
     
					 ?>
					<tr>
						<td><?= $a ?></td>
            			<td><?= $oke->no_rm ?></td>
            			<td><?= $oke->nama_pasien ?></td>
                        <td><?= $oke->alamat ?></td>
                        <td><?= $oke->jk?></td>
                        <td><?= $oke->tgl_lahir ?></td>
                        <td><?= $oke->id_dokter ?></td>
                        <td><?= $oke->id_departemen ?></td>
                        <td><?= $oke->diagnosa ?></td>
						<td><?= $oke->no_ruang ?></td>
						<td style="text-align: center;">
                			<a onclick="return confirm('Apakah yakin data akan di hapus?')" href="hapus.php?no_rm=<?=$oke->no_rm ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span>Hapus</a>
                			<a href="edit.php?no_rm=<?= $oke->no_rm ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span>Edit</a>
                            
           				 </td>

					</tr>
					<?php
						$a++;
						}
					}
					?>
					</table>
					<?php
					
					
					require_once('../vendor/template/footer.php');
					?>