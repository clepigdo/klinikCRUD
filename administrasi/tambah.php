<?php
session_start();
include('../koneksi.php');
require_once('../vendor/template/header.php');
if($_POST){

    try {
        $sql = "INSERT INTO administrasi (no_rm,nama_pasien,alamat,jk,tgl_lahir, id_dokter,id_departemen,diagnosa,no_ruang) VALUES ('".$_POST['no_rm']."','".$_POST['nama_pasien']."','".$_POST['alamat']."','".$_POST['jk']."','".$_POST['tgl_lahir']."','".$_POST['id_dokter']."','".$_POST['id_departemen']."','".$_POST['diagnosa']."','".$_POST['no_ruang']."')";
       if(!$koneksi->query($sql)){
          echo $koneksi->error;
          die();
        }
    } catch (Exception $e) {
      echo $e;
      die();
    }
    echo "<script>
         alert('Data berhasil di simpan');
         window.location.href='administrasi.php';
         </script>";
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Tambah Administrasi</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="container">
			 <br/>
			 <h3>Tambah Administrasi</h3>
			 <br/>
             <div class="row">
                <div class="col-lg-6">
                     <form action="" method="POST">
             <div class="form-group">
                 <label>No RM</label>
                 <input type="text" value="" class="form-control" name="no_rm">
             </div>
             <div class="form-group">
                 <label>Nama Pasien</label>
                 <input type="text" value="" class="form-control" name="nama_pasien">
             </div>
             <div class="form-group">
                 <label>Alamat</label>
                 <input type="text" value="" class="form-control" name="alamat">
             </div>
             <div class="form-group">
                 <label>Jenis Kelamin</label>
                 <select class="form-control" name="jk">
                    <option value="">-----Jenis Kelamin-----</option>
                    <option value="L">Laki - Laki</option>
                    <option value="P">Perempuan</option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Tanggal Lahir</label>
                 <input type="date" value="" class="form-control" name="tgl_lahir">
             </div>
             <div class="form-group">
                 <label>ID Dokter</label>
                 <input type="text" value="" class="form-control" name="id_dokter">
             </div>
             <div class="form-group">
                 <label>ID Departemen</label>
                 <input type="text" value="" class="form-control" name="id_departemen">
             </div>
             <div class="form-group">
                 <label> Diagnosa</label>
                 <input type="text" value="" class="form-control" name="diagnosa">
             </div>
             <div class="form-group">
                 <label>Nomor Ruang</label>
                 <input type="text" value="" class="form-control" name="no_ruang">
             </div>
             <input type="submit" class="btn btn-primary btn-sm" name="create" value="Create">
             <a href="administrasi.php" class="btn btn-danger btn-sm">BACK</a>
         </form>
      </div>
</div>
		</div>
	</body>
</html>
<?php 
require_once('../vendor/template/footer.php');
?>
