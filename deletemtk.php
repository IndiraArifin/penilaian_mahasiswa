<?php
include_once 'koneksi.php';
$user_delete = isset($_GET['mastermtk'])?$_GET['mastermtk']:'';

$query = "DELETE FROM tblmatkul WHERE kd_mtk='$user_delete'";
$result = mysqli_query($conn,$query);
if ($result) {
    $pesan = "Delete data berhasil";
} else {
    $pesan = "Delete user gagal. periksa kembali data yang diinputkan.";
}
echo "<script>
alert('$pesan');
document.location='dashboard.php?page=mastermtk';
</script>";
