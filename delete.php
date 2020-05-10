<?php
include "koneksi.php";
$id = $_POST['id'];
$query = mysqli_query($koneksi, "delete from tb_23 where id='$id'");
if ($query) {
    ?><script language="javascript">
        document.location.href = "timelinelihat.php";
    </script>
<?php
} else {
    echo "gagal hapus data";
}
?>