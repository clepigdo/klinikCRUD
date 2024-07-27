<?php
session_start();
include "../koneksi.php";
require_once('../vendor/template/header.php');


$no_rm = $_GET['no_rm'];

$sql = mysqli_query($koneksi, "SELECT * FROM administrasi");
                
$data = $sql->fetch_assoc();
?>
<div>
    <h3>Edit Administrasi</h3>
</div>
<form method="POST">
    <div class="form-group">
        <label>Nama Pasien</label>
        <input type="text" class="form-control" name="nama_pasien" value="<?php echo $data['nama_pasien']; ?>">
    </div>
    <div class="form-group">
        <label>alamat</label>
        <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>">
    </div>
    <div class="form-group">
        <label>jenis kelamin</label>
        <<input type="text" class="form-control" name="jk" value="<?php echo $data['jk']; ?>">
    </div>
    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="text" class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>">
    </div>
    <div class="form-group">
        <label>id dokter</label>
        <input type="text" class="form-control" name="id_dokter" value="<?php echo $data['id_dokter']; ?>">
    </div>
    <div class="form-group">
        <label>id departemen</label>
        <input type="text" class="form-control" name="id_departemen" value="<?php echo $data['id_departemen']; ?>">
    </div>
    <div class="form-group">
        <label>diagnosa</label>
        <input type="text" class="form-control" name="diagnosa" value="<?php echo $data['diagnosa']; ?>">
    </div>
    <div class="form-group">
        <label>Nomor Ruang</label>
        <input type="text" class="form-control" name="no_ruang" value="<?php echo $data['no_ruang']; ?>">
    </div>

    <div>
        <button type="submit" name="simpan">Simpan</button>
        <a href="administrasi.php">Kembali</a>
    </div>
</form>

<?php
if (isset($_POST['simpan'])) {
    $nama_pasien = $_POST['nama_pasien'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $id_dokter = $_POST['id_dokter'];
    $id_departemen = $_POST['id_departemen'];
    $diagnosa = $_POST['diagnosa'];
    $no_ruang = $_POST['no_ruang'];

    $sql = mysqli_query($koneksi, "UPDATE administrasi SET nama_pasien='$nama_pasien', alamat='$alamat', jk='$jk', tgl_lahir='$tgl_lahir', id_dokter='$id_dokter', id_departemen='$id_departemen', diagnosa='$diagnosa', no_ruang='$no_ruang' WHERE no_rm='$no_rm'");

    if ($sql) {
?>
        <script>
            alert('Data Berhasil Di Ubah')
            window.location.href = 'administrasi.php';
        </script>
<?php
    }
}
?>
