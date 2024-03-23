<?php 
    require_once 'header.php';
    require_once 'Dosen.php';
?>

<?php
$kode_dosen = $_GET['kode_dosen'];


$data = new Dosen;
$dosenIndividu = new Dosen;

$dosen = $dosenIndividu->viewEachDosen($kode_dosen);
// $result= $data->readTwoTablepart2($id_binatang);

if(isset($_POST['submit'])){

    $edit = new dosen;
    $result = $edit->editDosen($_POST);
    
    //check the progress
    if ($result){
        echo "
            <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo " <script>
        alert('data gagal diubah');
        document.location.href = 'index.php';
        </script>
    ";

    }

}

?>
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <h3>Edit Dosen</h3>


        <form method="post" enctype="multipart/form-data">

        <input type="hidden" name="kode_dosen" value="<?= $kode_dosen ?>;">


    
            <div class="mb-3">
                <label class="form-label"> Nama Dosen</label>
                <input type="text" name="nama_dosen" class="form-control" value="<?= $dosen['nama_dosen']?>">
            </div>

            <div class="mb-3">
        <select class="form-select" name="jabatan_fungsional" required>
            <option value="<?= $dosen['jabatan_fungsional'] ?>"><?= $dosen['jabatan_fungsional'] ?></option>
            <option value="asisten_ahli">Asisten Ahli</option>
                <option value="lektor">Lektor</option>
                <option value="lektor_kepala">Lektor Kepala</option>
                <option value="professor">Professor</option>
        </select>
    </div>
    
            <div class="mb-3">
        <select class="form-select" name="jenis_kelamin" required>
            <option value="<?= $dosen['jenis_kelamin'] ?>"><?= $dosen['jenis_kelamin'] ?></option>
            <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
        </select>
    </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?= $dosen['alamat']?>">
            </div>

            <div class="mb-3">
                <label class="form-label">No Telepon</label>
                <input type="text" name="no_telp" class="form-control" value="<?= $dosen['no_telp']?>">
            </div>

            <div class="mb-3">
                <label class="form-label"> Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" value="<?= $dosen['tanggal_lahir']?>">
            </div>
        

            <a href="index.php" class="btn btn-danger" >Back</a>
            <button type="submit" class="btn btn-primary" name="submit" >Save</button>
        </form>
    </div>
  </div>
</div>


<?php require_once 'footer.php';?>

<script type="text/javascript">
  $('.nav-link').removeClass('active');
  $('.menu-binatang').addClass('active');
</script>
