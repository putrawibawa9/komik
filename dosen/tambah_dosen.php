<?php 
    require_once 'header.php';
    require_once 'Dosen.php';

if(isset($_POST['submit'])){
    $add = new Dosen;

    $result =$add->addDosen($_POST);
    
    //check the progress
    if ($result){
        echo "
            <script>
            alert('data berhasil ditambah');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo " <script>
        alert('data gagal ditambah');
        document.location.href = 'index.php';
        </script>
    ";

    }

}
?>
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <h3>Tambah Dosen</h3>


        <form method="post" enctype="multipart/form-data">

        <div class="mb-3">
                <label class="form-label"> Nama Dosen</label>
                <input type="text" name="nama_dosen" class="form-control">
            </div>
            
            <div class="mb-3">
        <select class="form-select" name="jabatan_fungsional" required>
        <option value="" disabled selected hidden>Pilih Jabatan</option>
                <option value="asisten_ahli">Asisten Ahli</option>
                <option value="lektor">Lektor</option>
                <option value="lektor_kepala">Lektor Kepala</option>
                <option value="professor">Professor</option>
        </select>
    </div>
            <div class="mb-3">
        <select class="form-select" name="jenis_kelamin" required>
        <option value="" disabled selected hidden>Pilih Jenis Kelamin</option>
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
        </select>
    </div>
    
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">No Telepon</label>
                <input type="text" name="no_telp" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label"> Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control">
            </div>
            
            <a href="index.php" class="btn btn-success" >Kembali</a>
            <button type="submit" class="btn btn-primary" name="submit" >Simpan</button>
        </form>
    </div>
  </div>
</div>


<?php require_once 'footer.php';?>


<script type="text/javascript">
  $('.nav-link').removeClass('active');
  $('.menu-binatang').addClass('active');
</script>