create database 2021_pweb_01;

use 2021_pweb_01;


CREATE TABLE dosen
(
    no_induk_dosen    VARCHAR(40) NOT NULL,
    nama_dosen    VARCHAR(200),
    tgl_lahir_dosen    DATE,
    jenis_kelamin_dosen    ENUM('L', 'P'),
    gelar_dosen    VARCHAR(40),
    pendidikan_terakhir_dosen    VARCHAR(120),
    PRIMARY KEY(no_induk_dosen)
) ENGINE = InnoDB;
COMMIT;

CREATE TABLE mahasiswa
(
    nim_mahasiswa    VARCHAR(40) NOT NULL,
    nama_mahasiswa    VARCHAR(200),
    tgl_lahir_mahasiswa    DATE,
    jenis_kelamin_mahasiswa    ENUM('L', 'P'),
    no_induk_dosen    VARCHAR(40),
    PRIMARY KEY(nim_mahasiswa),
    INDEX no_induk_dosen(no_induk_dosen)
) ENGINE = InnoDB;
COMMIT;
