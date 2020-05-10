<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</html>

<?php
//fetch.php

$connect = mysqli_connect("localhost", "root", "", "perline");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM tb_23 
  WHERE nama LIKE '%".$search."%'
  OR alamat LIKE '%".$search."%' 
  OR jenis_kelamin LIKE '%".$search."%' 
  OR agama LIKE '%".$search."%' 
  OR sekolah LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM tb_23 ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered text-dark">
    <tr>
     <th>Nama</th>
     <th>Alamat</th>
     <th>Jenis kelamin</th>
     <th>Agama</th>
     <th>Asal sekolah</th>
     <th>Aksi</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["nama"].'</td>
    <td>'.$row["alamat"].'</td>
    <td>'.$row["jenis_kelamin"].'</td>
    <td>'.$row["agama"].'</td>
    <td>'.$row["sekolah"].'</td>
    <td> 

     <button data-toggle="tooltip" title="Edit '.$row["nama"].' " class="editData btn btn-sm btn-warning">Edit</button>


<button type="button" class="btn btn-danger btn-sm">HAPUS</button> 
</td>
 </tr>
  ';
 }
 echo $output;
}  
else
{
 echo 'Data Not Found';
}


?>
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