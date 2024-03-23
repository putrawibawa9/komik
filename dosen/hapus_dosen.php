<?php

require_once 'Dosen.php';

$dosen = new Dosen;
$kode_dosen = $_GET['kode_dosen'];

if ($dosen->deleteDosen($kode_dosen)){
    echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'index.php';
      </script>";
}else{
  echo "  <script>
            alert('data gagal dihapus');
            document.location.href = 'index.php';
            </script>";
}


?>