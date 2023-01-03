
<form action="prosesTambah.php" method='POST'>
    <div class="card">
        <div class="card-header">Form Tambah Dosen</div>
        <div class="card-body">

            <div class="form-group">
                <label for="">No Induk Dosen </label>
                <input class="form-control" type="text" required name="no_induk_dosen" />
            </div>


            <div class="form-group">
                <label for="">Nama Dosen </label>
                <input class="form-control" type="text" required name="nama_dosen"  />
            </div>


            <div class="form-group">
                <label for="">Tanggal Lahir Dosen </label>
                <input class="form-control" type="date" required name="tgl_lahir_dosen"  />
            </div>


            <div  class="form-group">
                <label for="">Jenis Kelamin Dosen </label>
                <select class="form-control"  name="jenis_kelamin_dosen" >
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>


            <div  class="form-group">
                <label for="">Gelar Dosen </label>
                <input class="form-control" type="text" required name="gelar_dosen"  />
            </div>

            <div  class="form-group">
                <label for="">Pendidikan terakhir Dosen </label>
                <input class="form-control" type="text" required name="pendidikan_terakhir_dosen"  />
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success " type="Submit">
                <i class="fa fa-save"></i>
                Simpan Dosen
            </button>
        </div>
    </div>
</form>
