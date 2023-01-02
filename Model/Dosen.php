<?php

include __DIR__.'/../Config/Koneksi.php';

class Dosen
{
    public $no_induk_dosen;
    public $nama_dosen;
    public $tgl_lahir_dosen;
    public $jenis_kelamin_dosen;
    public $gelar_dosen;
    public $pendidikan_terakhir_dosen;

    public static function getALL()
    {
        $query = "select * from dosen ";
        $kon= new Koneksi();
        return mysqli_query($kon->Koneksi,$query);
    }

    public static function getByPrimaryKey($noIndukDosen)
    {
        $query = "select * from dosen where no_induk_dosen = '$noIndukDosen' ";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }

    public function Insert()
    {
        $query = "insert into dosen(no_induk_dosen, nama_dosen, tgl_lahir_dosen,jenis_kelamin_dosen,gelar_dosen,pendidikan_terakhir_dosen)  "
            . "value ("
            . "'$this->no_induk_dosen',"
            . "'$this->nama_dosen',"
            . "'$this->jenis_kelamin_dosen',"
            . "'$this->tgl_lahir_dosen',"
            . "'$this->gelar_dosen',"
            . "'$this->pendidikan_terakhir_dosen')";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    public function Update()
    {
        $query = "update dosen set "
            . "nama_dosen = ' $this->nama_dosen',"
            . "tgl_lahir_dosen = '$this->tgl_lahir_dosen',"
            . "jenis_kelamin_dosen = '$this->jenis_kelamin_dosen',"
            . "gelar_dosen = '$this->gelar_dosen',"
            . "pendidikan_terakhir_dosen = '$this->pendidikan_terakhir_dosen'"
            . "where no_induk_dosen = '$this->no_induk_dosen'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }
    public function delete()
    {
        $query = "delete from dosen where no_induk_dosen = '$this->no_induk_dosen'";
        $conn = new Koneksi();
        return mysqli_query($conn->Koneksi, $query);
    }

}
