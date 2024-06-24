<?php
include_once 'koneksi.php';
$user_deleted = isset($_GET['mastermhs'])?$_GET['mastermhs']:'';

$query = "DELETE FROM tblmhs WHERE nim='$user_deleted'";
$result = mysqli_query($conn,$query);
if ($result) {
    $pesan = "Delete data berhasil";
} else {
    $pesan = "Delete user gagal. periksa kembali data yang diinputkan.";
}
echo "<script>
alert('$pesan');
document.location='dashboard.php?page=mastermhs';
</script>";
