<?php
include_once 'koneksi.php';
$delete_nilai = isset($_GET['entri'])?$_GET['entri']:'';
$deletenilai = isset($_GET['kd_matkul'])?$_GET['kd_matkul']:'';

$query = "DELETE FROM tblnilai WHERE nim='$delete_nilai' AND kd_mtk='$deletenilai'";
$result = mysqli_query($conn,$query);
if ($result) {
    $pesan = "Delete user berhasil";
} else {
    $pesan = "Delete user gagal. periksa kembali data yang diinputkan.";
}
echo "<script>
alert('$pesan');
document.location='dashboard.php?page=entri';
</script>";
