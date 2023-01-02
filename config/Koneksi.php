<?php
class Koneksi
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $namaDatabase = "2021_pweb_01";
    public $Koneksi;

    public function  __construct()
    {
        $this->Koneksi = mysqli_connect($this->host,
            $this->username,
            $this->password,
            $this->namaDatabase);
    }
}
