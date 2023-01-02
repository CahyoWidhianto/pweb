<?php

include __DIR__.'/../config/Koneksi.php';

class mahasiswa
{
    public $nim_mahasiswa;
    public $nama_mahasiswa;
    public $tgl_lahir_mahasiswa;
    public $jenis_kelamin_mahasiswa;
    public $no_induk_dosen;

    public static function getALL()
    {
        $query = "select * from mahasiswa ";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }

    public static function getALLJoindosen()
    {
        $query = "select  m.*, d.nama_dosen , d.gelar_dosen from mahasiswa m join dosen d on m.no_induk_dosen = d.no_induk_dosen";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }

    public static function getByPrimaryKey($nim_mahasiswa)
    {
        $query = "select * from mahasiswa where nim_mahasiswa = '$nim_mahasiswa' ";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }

    public static function getByNoIndukDosen($no_induk_dosen)
    {
        $query = "select * from mahasiswa where no_induk_dosen = '$no_induk_dosen'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }

    public function Insert()
    {
        $query = "insert into mahasiswa(nim_mahasiswa, nama_mahasiswa, tgl_lahir_mahasiswa, jenis_kelamin_mahasiswa, no_induk_dosen)  "
            . "value ("
            . "'$this->nim_mahasiswa',"
            . "'$this->nama_mahasiswa',"
            . "'$this->jenis_kelamin_mahasiswa',"
            . "'$this->tgl_lahir_mahasiswa',"
            . "'$this->no_induk_dosen')";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    public function  Update()
    {
        $query = "update mahasiswa set "
            . "nama_mahasiswa = ' $this->nama_mahasiswa',"
            . "tgl_lahir_mahasiswa = '$this->tgl_lahir_mahasiswa',"
            . "jenis_kelamin_mahasiswa = '$this->jenis_kelamin_mahasiswa',"
            . "no_induk_dosen ='$this->no_induk_dosen',"
            . "where nim_mahasiswa = '$this->nim_mahasiswa'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    public function delete()
    {
        $query = "delete from mahasiswa where nim_mahasiswa = '$this->nim_mahasiswa'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }

}