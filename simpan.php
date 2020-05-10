<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah'];

$query = mysqli_query($koneksi, "update tb_23 set nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah='$sekolah' where id='$id'");
if ($query) {
    ?><script language="javascript">
	document.location.href = "timelinelihat.php";
</script>
<?php
} else {
    echo "Gagal update data";
    echo mysqli_error($koneksi);
}
?>