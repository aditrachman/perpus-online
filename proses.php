<?php
include "koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah'];
$query = mysqli_query($koneksi, "INSERT INTO tb_23(nama, alamat, jenis_kelamin, agama, sekolah) value ('$nama','$alamat','$jenis_kelamin','$agama','$sekolah')");
if ($query) {
	?><script language="javascript">
	document.location.href = "timeline.php";
</script>
<?php
} else {
	echo "gagal input data";
}
?>