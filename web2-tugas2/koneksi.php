<?php
//Definisi kelas Database
class Database {
    //Deklarasi properti koneksi dan detail database
    private $host = "localhost";   //Host database
    private $db_name = "perkuliahan";  //Nama database
    private $username = "root";  //Username untuk koneksi database
    private $password = "";  //Password untuk koneksi database
    //Private agar tidak bisa diakses dari luar kelas

    //Public agar dapat diakses di luar kelas, karena properti conn adalah properti koneksi
    public $conn;  //Properti untuk menampung koneksi database

    //Konstruktor untuk melakukan koneksi ke database saat objek dibuat
    public function __construct()
    {
        //Membuat koneksi baru ke MySQL menggunakan mysqli
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);

        //Memeriksa apakah terjadi error saat koneksi
        if ($this->conn->connect_error) 
        {
            //Jika terjadi error, hentikan eksekusi dan tampilkan pesan error
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    //Fungsi untuk mengambil data mahasiswa dari tabel 'mahasiswa'
    public function tampilMahasiswa()
    {
        //Query untuk mengambil semua data dari tabel 'mahasiswa'
        $data = "SELECT * FROM mahasiswa";
        //Menjalankan query ke database
        $hasil = $this->conn->query($data);
        
        $result = [];  //Inisialisasi array untuk menampung hasil query
        //Memeriksa apakah query menghasilkan data
        if ($hasil && $hasil->num_rows > 0) {
            //Looping melalui setiap baris hasil query
            while ($d = mysqli_fetch_array($hasil)) 
            {
                //Menyimpan setiap baris ke dalam array result
                $result[] = $d;
            }
        }

        //Mengembalikan array hasil query
        return $result;
    }

    //Fungsi untuk mengambil data nilai perbaikan dari tabel 'nilai_perbaikan'
    public function tampilNilaiPerbaikan()
    {
        //Query untuk mengambil semua data dari tabel 'nilai_perbaikan'
        $data = "SELECT * FROM nilai_perbaikan";
        //Menjalankan query ke database
        $hasil = $this->conn->query($data);

        $result = [];  //Inisialisasi array untuk menampung hasil query
        //Memeriksa apakah query menghasilkan data
        if ($hasil && $hasil->num_rows > 0) 
        {
            //Looping melalui setiap baris hasil query
            while ($d = mysqli_fetch_array($hasil)) {
                //Menyimpan setiap baris ke dalam array result
                $result[] = $d;
            }
        }

        //Mengembalikan array hasil query
        return $result;
    }
}
?>
