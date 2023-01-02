
<?php
include_once ('Model/Dosen.php');
$no_induk_dosen = $_REQUEST['no_induk_dosen'];
$dsnList = Dosen::getByPrimaryKey($no_induk_dosen);
$dsn = [];
while($dosen = mysqli_fetch_object($dsnList))
{
    $dsn = $dosen;
}


?>
<form action="prosesUbah.php" method ="POST">
    <p>
        No Induk Dosen  <br>
        <input type="text" required name="no_induk_dosen" value=<?=$dsn->no_induk_dosen?> readonly>

    </p>

    <p>
        Nama Dosen <br>
        <input type="text" required name="nama_dosen" value="<?=$dsn->nama_dosen?>">

    </p>

    <p>
        Tanggal Lahir Dose  <br>
        <input type="date" required name="tgl_lahir_dosen" value=<?=$dsn->tgl_lahir_dosen?>>

    </p>

    <p>
        Jenis Kelamin Dosen  <br>
        <?php if($dsn->jenis_kelamin_dosen == "L") :?>
            <select name="jenis_kelamin_dosen">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        <?php elseif($dsn->jenis_kelamin_dosen == "P"):?>
            <select name="jenis_kelamin_dosen">
                <option value="P">Perempuan</option>
                <option value="L">Laki-laki</option>
            </select>
        <?php endif;?>

    </p>
    <p>
        Gelar Dosen <br>
        <input type="text" required name="gelar_dosen" value="<?=$dsn->gelar_dosen?>">

    </p>
    <p>
        Pendidikan Terakhir Dosen <br>
        <input type="text" required name="pendidikan_terakhir_dosen" value="<?=$dsn->pendidikan_terakhir_dosen ?>">

    </p>

    <p>
        <button type="Submit">Ubah Data Dosen</button>
    </p>

</form>

