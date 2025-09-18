<?php
class Mahasiswa {
    var $nama;
    var $nim;
    var $prodi;

    protected $ipk;     // ubah jadi protected
    private $password;  // ubah jadi private

    // method protected
    protected function getNilaiIPK() {
        return "Nilai IPK mahasiswa : $this->ipk";
    }

    // method private
    private function getPassword() {
        return "Password akun mahasiswa : $this->password";
    }

    // setter
    public function setNilaiIPK($ipk) {
        $this->ipk = $ipk;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    // wrapper public method untuk memanggil yang protected
    public function tampilkanIPK() {
        return $this->getNilaiIPK();
    }

    // wrapper public method untuk memanggil yang private
    public function tampilkanPassword() {
        return $this->getPassword();
    }
}

// Membuat objek baru
$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "Kevin";
$mahasiswa->nim = "10250301";
$mahasiswa->prodi = "Teknik Informatika";
$mahasiswa->setNilaiIPK(3.85);
$mahasiswa->setPassword("150507");

// Tampilkan data menggunakan method yang sesuai
echo "Nama :". $mahasiswa->nama; 
echo "\n";
echo "Nim :". $mahasiswa->nim;
echo "\n";
echo "Prodi :". $mahasiswa->prodi;
echo "\n";
echo $mahasiswa->tampilkanIPK();     // akses protected via public method
echo "\n";
echo $mahasiswa->tampilkanPassword(); // akses private via public method
?>
