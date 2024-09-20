<?php
//Definisi kelas Database
class Database {
    //Deklarasi properti untuk koneksi dan detail database
    private $host = "localhost";   //Host dari database
    private $db_name = "perkuliahan";  //Nama database
    private $username = "root";  //Username untuk koneksi ke database
    private $password = "";  //Password untuk koneksi ke database
    //Properti di atas bersifat private agar hanya bisa diakses di dalam kelas

    //Properti public untuk menyimpan koneksi database agar bisa diakses di luar kelas 
    public $conn;

    //Konstruktor, dipanggil saat objek kelas ini dibuat
    //Fungsi ini akan membuat koneksi ke database MySQL
    public function __construct()
    {
        //Membuat objek koneksi ke database menggunakan mysqli
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);

        //Memeriksa apakah koneksi berhasil atau gagal
        if ($this->conn->connect_error) 
        {
            //Jika koneksi gagal, tampilkan pesan error dan hentikan program
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    //Fungsi untuk mengambil data dari Database Perkuliahan
    //Saat ini fungsi mengembalikan array kosong, bisa dikembangkan untuk query data
    public function tampilData()
    {
        return [];
    }
}
?>
