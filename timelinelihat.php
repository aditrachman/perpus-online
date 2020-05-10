<?php require_once("auth.php"); ?>
<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "select * from tb_23");
$jml = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html>
<head>
</head>



                            <!-- BAGIAN SIDEBAR -->
        <?php
          include('template/sidebar.php');
        ?>
                            <!-- BAGIAN SIDEBAR -->



                                                         <!-- INI BATAS LIHAT-->
         <br>
           <div class="container table-responsive">
        <table class="table table bordered text-dark">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis kelamin</th>
                <th>Agama</th>
                <th>Sekolah</th>
                <th>aksi</th>
            </tr>

            <?php
            $c = 0;
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['jenis_kelamin']; ?></td>
                    <td><?= $row['agama']; ?></td>
                    <td><?= $row['sekolah']; ?></td>
                    <td>
                        <div class="">
                            <button data-toggle="tooltip" title="Edit <?= $row['nama']; ?>" data-id="<?= $row['id'] ?>" data-nama="<?= $row['nama']; ?>" data-alamat="<?= $row['alamat']; ?>" data-jenis_kelamin="<?= $row['jenis_kelamin']; ?>" data-agama="<?= $row['agama']; ?>" data-sekolah="<?= $row['sekolah']; ?>" class="editData btn btn-sm btn-warning">Edit</button>
                            <button data-toggle="tooltip" title="Hapus <?= $row['nama']; ?>" data-id="<?= $row['id'] ?>" data-nama="<?= $row['nama']; ?>" class="hapusData btn btn-sm btn-danger">Hapus</button>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table><br>
    </div>

                             <!-- Modal edit-->

    <div class="modal fade" id="edit-biodata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Biodata</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="simpan.php" method="post">
                        <input type="hidden" id="idedit" name="id">
                        <p>Nama Siswa</p>
                        <div class="form-group">
                            <input type="text" id="namaedit" name="nama" class="form-control" >
                        </div>
                        <p>Alamat</p>
                        <div class="form-group">
                        <textarea class="form-control" id="alamatedit" name="alamat"></textarea>
                        </div>
                        
                        <p>Jenis Kelamin</p>
                        <div class="form-group">
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelaminedit" >
                            <option>-- Jenis kelamin --</option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                        </div>
                        
                        <p>Agama</p>
                        <div class="form-group">
                            <input type="text" id="agamaedit" name="agama" class="form-control" >
                        </div>
                        <p>Asal Sekolah</p>
                        <div class="form-group">
                            <input type="text" id="sekolahedit" name="sekolah" class="form-control">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
                             <!-- Modal edit-->


    <!-- Modal -->
    <div class="modal fade" id="hapus-biodata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Biodata</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="isinya"></p>
                </div>
                <div class="modal-footer">
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" id="idhapus">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.tambahBiodata').click(function() {
            $('#tambah-biodata').modal('show');
        });

        $('.editData').click(function() {
            $('#idedit').val($(this).data('id'));
            $('#namaedit').val($(this).data('nama'));
            $('#alamatedit').val($(this).data('alamat'));
            $('#jenis_kelaminedit').val($(this).data('jenis_kelamin'));
            $('#agamaedit').val($(this).data('agama'));
            $('#sekolahedit').val($(this).data('sekolah'));
            $('#edit-biodata').modal('show');
        });

        $('.hapusData').click(function() {
            $('#idhapus').val($(this).data('id'));
            var nama = ($(this).data('nama'));
            $('#isinya').html('Apakah anda ingin menghapus <strong class="text-danger">' + nama + '</strong> ?');
            $('#hapus-biodata').modal('show');
        });
    </script>


                            <!-- INI BATAS LIHAT-->




                            <!-- BAGIAN FOOTER -->                               
             <?php
              include('template/kakineh.php');
            ?>
                            <!-- BAGIAN FOOTER -->



</body>
</html>