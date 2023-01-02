

<?php
include_once ('Model/Mahasiswa.php');
include_once('Model/Dosen.php');
$noIndukDosen = $_REQUEST['no_induk_dosen'];
$nim = $_REQUEST['nim_mahasiswa'];
$mhsList = Mahasiswa::getByPrimaryKey($nim);
$mhs = [];

while($mahasiswa = mysqli_fetch_object($mhsList))
{
    $mhs = $mahasiswa;
}



?>
<form action="prosesUbah.php" method ="POST">
    <p>
        No Induk Mahasiswa  <br>
        <input type="text" required name="nim_mahasiswa" value=<?=$mhs->nim_mahasiswa?> readonly>

    </p>

    <p>
        Nama Mahasiswa <br>
        <input type="text" required name="nama_mahasiswa" value="<?=$mhs->nama_mahasiswa?>">

    </p>

    <p>
        Tanggal Lahir Mahasiswa  <br>
        <input type="date" required name="tgl_lahir_mahasiswa" value=<?=$mhs->tgl_lahir_mahasiswa?>>

    </p>

    <p>
        Jenis Kelamin Mahasiswa  <br>
        <?php if($mhs->jenis_kelamin_mahasiswa == "L") :?>
            <select name="jenis_kelamin_mahasiswa">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        <?php elseif($mhs->jenis_kelamin_mahasiswa == "P"):?>
            <select name="jenis_kelamin_mahasiswa">
                <option value="P">Perempuan</option>
                <option value="L">Laki-laki</option>
            </select>
        <?php endif;?>

    </p>

    <p>
        Dosen Wali <br>
        <select required name="no_induk_dosen">
            <option selected disabled value="">Pilih Dosen Wali</option>
            <?php

            $dsnList= Dosen::getAll();
            while($dosen = mysqli_fetch_object($dsnList)){

                ?>
                <option value=<?=$dosen->no_induk_dosen?>>
                    <?= $dosen->no_induk_dosen ?> | <?= $dosen->nama_dosen?>
                </option>
                <?php
            }
            ?>
        </select>
    </p>

    <p>
        <button type="Submit">Ubah Data Mahasiswa</button>
    </p>

</form>

