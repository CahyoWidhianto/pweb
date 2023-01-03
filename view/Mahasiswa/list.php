
            <div class="card">
                <div class="card-header">Data Mahasiswa</div>
                <div class="card-body">
                    <table class="table table-hover table-bordered table-sm">
                        <thead class="table-dark">
                        <tr>
                            <th>No</th>


                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Dosen Wali</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        include('Model/mahasiswa.php');
                        $mhsList = Mahasiswa::getALLJoindosen();
                        $nomer = 1;
                        while ($mahasiswa = mysqli_fetch_object($mhsList)){
                            ?>
                            <tr>
                                <td><?= $nomer++ ?></td>
                                <td><?= $mahasiswa->nim_mahasiswa ?></td>
                                <td><?= $mahasiswa->nama_mahasiswa?></td>
                                <td><?= $mahasiswa->tgl_lahir_mahasiswa?></td>
                                <td><?= $mahasiswa->jenis_kelamin_mahasiswa?></td>
                                <td><?= $mahasiswa->nama_dosen . ' ' . $mahasiswa->gelar_dosen?></td>
                                <td>
                                    <a class="btn btn-sm btn-warning"
                                       href="index.php?page=editMahasiswa&nim_mahasiswa=<?= $mahasiswa->nim_mahasiswa ?>">Edit
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-danger"
                                       href="/index.php?page=hapusMahasiswa&nim_mahasiswa=<?= $mahasiswa->nim_mahasiswa ?>">Hapus
                                        <i class="fa fa-trash-alt"></i>
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