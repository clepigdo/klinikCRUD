<?php
$no_rm = $_GET['no_rm'];
include "../koneksi.php";
$sql = mysqli_query($koneksi,"DELETE FROM administrasi WHERE no_rm='$no_rm'");
if ($sql) {
    ?>
        <script>
            alert('Data Berhasil Di Hapus')
            window.location.href = 'administrasi.php';
        </script>
        <?php
}
?>