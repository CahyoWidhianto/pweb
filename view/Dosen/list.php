<div class="card">
    <div class="card-header">Data Dosen</div>
        <div class="card-body">
            <table class="table table-hover table-bordered table-sm">
                <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Gelar</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                <?php
                include ('Model/Dosen.php');
                $dsnList = Dosen::getALL();
                $nomer = 1;
                while ($dosen = mysqli_fetch_object($dsnList)) {

                    ?>
                    <tr>
                        <td><?= $nomer++ ?></td>
                        <td><?= $dosen->no_induk_dosen ?></td>
                        <td><?= $dosen->nama_dosen ?></td>
                        <td><?= $dosen->tgl_lahir_dosen ?></td>
                        <td><?= $dosen->jenis_kelamin_dosen ?></td>
                        <td><?= $dosen->gelar_dosen ?></td>
                        <td><?= $dosen->pendidikan_terakhir_dosen ?></td>

                        <td>
                            <a class="btn btn-sm btn-warning"
                                href="index.php?page=editDosen&no_induk_dosen=<?= $dosen->no_induk_dosen ?>">Edit
                                <i class="fa fa-edit"></i>
                            </a>|
                            <a class="btn btn-sm btn-danger"
                                href="index.php?page=hapusDosen&no_induk_dosen=<?= $dosen->no_induk_dosen ?>">Hapus
                                <i class="fa fa-trash-alt"></i>
                            </a>|
                            <a class="btn btn-primary"
                                href="index.php?page=listMahasiswaPerwalian&no_induk_dosen=<?= $dosen->no_induk_dosen?>">Lihat Mahasiswa Perwalian
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                ?>
                </tbody>
            </table>
        </div>

</div>