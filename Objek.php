<?php
class Karyawan {
    private $nama;
    private $tahunMasuk;
    private $jabatan;

    public function __construct($nama, $tahunMasuk, $jabatan) {
        $this->nama = $nama;
        $this->tahunMasuk = $tahunMasuk;
        $this->jabatan = $jabatan;
    }

    public function tampilkanInfo() {
        return "Nama: " . $this->nama . ", Tahun Masuk: " . $this->tahunMasuk . ", Jabatan: " . $this->jabatan;
    }

    public function ubahJabatan($jabatanBaru) {
        $this->jabatan = $jabatanBaru;
    }
}

class Manajer extends Karyawan {
    private $departemen;

    public function __construct($nama, $tahunMasuk, $jabatan, $departemen) {
        parent::__construct($nama, $tahunMasuk, $jabatan);
        $this->departemen = $departemen;
    }

    public function tampilkanInfo() {
        return parent::tampilkanInfo() . ", Departemen: " . $this->departemen;
    }
}

$karyawan1 = new Karyawan("Rizka", 2024, "Staf");
$karyawan2 = new Karyawan("Nabila", 2023, "Staf");
$manajer1 = new Manajer("Candra", 2019, "Manajer", "Pemasaran");
$manajer2 = new Manajer("Shelomita", 2023, "Manajer", "Keuangan");

    echo $karyawan1->tampilkanInfo(); 
    echo "\n", '<br>';
    echo $karyawan2->tampilkanInfo(); 
    echo "\n", '<br>';
    echo $manajer1->tampilkanInfo(); 
    echo "\n", '<br>';
    echo $manajer2->tampilkanInfo(); 
    echo "\n", '<br>';
    ?>
