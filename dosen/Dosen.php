<?php
require_once "connect.php";
class Dosen extends Connect{
    
    public function readDosen(){
        $conn = $this->getConnection();
        $query = "SELECT * FROM tb_dosen";  
        $result = $conn->query($query);
        $dosen = $result->fetchAll();
        return $dosen;
        }

        public function viewEachDosen($kode_dosen){
            $conn = $this->getConnection();
            $query = "SELECT * FROM tb_dosen WHERE kode_dosen= $kode_dosen";
            $result = $conn->query($query);
            $kategori = $result->fetch();
            return $kategori;
        }


    public function addDosen($data){
        $conn = $this->getConnection();
        $nama_dosen = $data['nama_dosen'];
        $jabatan_fungsional = $data['jabatan_fungsional'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $alamat = $data['alamat'];
        $no_telp = $data['no_telp'];
        $tanggal_lahir = $data['tanggal_lahir'];
    


        $query = "INSERT INTO tb_dosen VALUES 
        ('',?,?,?,?,?,?)";
    
        $stmt = $conn->prepare($query);
    
        $stmt->bindParam(1,$nama_dosen);
        $stmt->bindParam(2,$jabatan_fungsional);
        $stmt->bindParam(3,$jenis_kelamin);
        $stmt->bindParam(4,$alamat);
        $stmt->bindParam(5,$no_telp);
        $stmt->bindParam(6,$tanggal_lahir);
        $stmt->execute();
        return true;
    }


    public function editDosen($data){
        $conn = $this->getConnection();
        $kode_dosen = $data['kode_dosen'];
        $nama_dosen = $data['nama_dosen'];
        $jabatan_fungsional = $data['jabatan_fungsional'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $alamat = $data['alamat'];
        $no_telp = $data['no_telp'];
        $tanggal_lahir = $data['tanggal_lahir'];

        $query = "UPDATE tb_dosen SET
        nama_dosen = ?,
        jabatan_fungsional = ?,
        jenis_kelamin = ?,
        alamat = ?,
        no_telp = ?,
        tanggal_lahir = ?
        WHERE kode_dosen = ?
        ";
             $stmt = $conn->prepare($query);
             $stmt->bindParam(1,$nama_dosen);
             $stmt->bindParam(2,$jabatan_fungsional);
             $stmt->bindParam(3,$jenis_kelamin);
             $stmt->bindParam(4,$alamat);
             $stmt->bindParam(5,$no_telp);
             $stmt->bindParam(6,$tanggal_lahir);
             $stmt->bindParam(7,$kode_dosen);
                $stmt->execute();
                return true;
    }




    public function deleteDosen($kode_dosen){
        $conn = $this->getConnection();
        $query = "DELETE FROM tb_dosen WHERE kode_dosen = $kode_dosen";
        $result = $conn->exec($query);
        return $result;
}



}
?>