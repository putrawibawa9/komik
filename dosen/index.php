<?php
require_once 'Dosen.php'; 
require_once 'header.php'; 


$hasil = new Dosen;
$dosen = $hasil->readDosen();
?>


  
    
    <div class="container">
      <div class="row">
        <div class="col-12 p-3 bg-white">
          <h3>Dosen</h3>
          <a href="tambah_dosen.php" class="btn btn-primary  mb-3">Add</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center">Kode Dosen</th>
                    <th class="text-center">Nama Dosen</th>
                    <th class="text-center">Jabatan Fungsional</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">No. Telepon</th>
                    <th class="text-center">Tanggal Lahir</th>
                    <th class="text-center">Actions</th>
                  </tr>
            </thead>
            <tbody>
              <?php foreach($dosen as $row):?>
                <tr>
                  <td class="text-center" ><?=$row['kode_dosen']?></td>
                  <td ><?=$row['nama_dosen']?></td>
                  <td ><?=$row['jabatan_fungsional']?></td>
                  <td ><?=$row['jenis_kelamin']?></td>
                  <td ><?=$row['alamat']?></td>
                  <td ><?=$row['no_telp']?></td>
                  <td ><?=$row['tanggal_lahir']?></td>
                   <td>
                    <a  href="edit_dosen.php?kode_dosen=<?=$row['kode_dosen'];?>" class="btn btn-primary btn-sm ">Edit</a>
                    <a href="hapus_dosen.php?kode_dosen=<?=$row['kode_dosen'];?>" class="btn btn-secondary btn-sm " onclick="return confirm('yakin?');">Delete</a>
                   </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
        </table>
        <div>
          
          </div>
    </div>
  </div>
</div>



<?php require_once 'footer.php';?>

<?php require_once 'footer.php';?>
<script type="text/javascript">
  $('.nav-link').removeClass('active');
  $('.menu-binatang').addClass('active');
</script>
 
