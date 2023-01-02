
            <form action="prosesTambah.php" method = "POST">
                <div class="card">
                    <div class="card-header">Form Tambah Mahasiswa</div>
                    <div class="card-body">
                            <div class="form-group">
                                <label for="">No Induk Mahasiswa </label>
                                <input class="form-control" type="text" required name="nim_mahasiswa" />
                            </div>

                            <div  class="form-group">
                                <label for="">Nama Mahasiswa </label>
                                <input class="form-control" type="text" required name="nama_mahasiswa" />
                            </div>

                            <div  class="form-group">
                                <label for="">Tanggal Lahir Mahasiswa </label>
                                <input class="form-control" type="date" required name="tgl_lahir_mahasiswa" />
                            </div>

                            <div  class="form-group">
                                <label for="">Jenis Kelamin Mahasiswa </label>
                                <select class="form-control" name="jenis_kelamin_mahasiswa" >
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>

                            <div  class="form-group">
                                <label for="">Dosen Wali </label>
                                <select class="form-control" required name="no_induk_dosen">
                                    <option selected disabled value="">Pilih Dosen Wali</option>
                                    <?php
                                    include ('Model/Dosen.php');
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
                            </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success " type="Submit">
                            <i class="fa fa-save"></i>
                            Simpan Mahasiswa
                        </button>
                    </div>
                 </div>
            </form>
