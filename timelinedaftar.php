<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html>
<head>
</head>

                            <!-- BAGIAN SIDEBAR -->
        <?php
          include('template/sidebar.php');
        ?>
                            <!-- BAGIAN SIDEBAR -->


                                <!-- CONTENT -->
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Tambah Data Anggota</h3>
                </div>
            </div>
            <div class="container-fluid">
      <form action="proses.php" method="post">
                        
                        <div class="form-group">
                          <label>Nama</label>
                            <input type="text" name="nama" class="form-control" >
                        </div>
                        
                        <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" id="" class="form-control"></textarea>
                        </div>
                       
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                           <select class="form-control text-center" name="jenis_kelamin">
                              <option>-- Jenis kelamin --</option>
                              <option>Laki-Laki</option>
                              <option>Perempuan</option>
                           </select>
                         </div>  
                       
                          <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control" name="agama">
                              <option>-- Agama --</option>
                              <option>Islam</option>
                              <option>Kristen</option>
                              <option>katolik</option>
                              <option>hindu</option>
                              <option>Buddha</option>
                              <option>Atheis</option>
                              <option>Tidak berotak</option>
                            </select>
                          </div>

                        <div class="form-group">
                          <label>Sekolah</label>
                            <input type="text" name="sekolah" class="form-control">
                        </div>
                        <button type="reset" class="btn btn-secondary" >Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>

        </div>
                                <!-- CONTENT -->



                            <!-- BAGIAN FOOTER -->                               
            <?php
              include('template/kakineh.php');
            ?>
                            <!-- BAGIAN FOOTER -->


</body>
</html>