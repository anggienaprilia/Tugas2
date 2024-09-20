<?php
//Mengimpor file koneksi.php yang berisi class Database
include ("koneksi.php");

//Mendefinisikan class NilaiTugas yang merupakan turunan dari class Database
class NilaiTugas extends Database {
    
    //Constructor class NilaiTugas memanggil constructor class induk (Database)
    public function __construct()
    {
        //Memanggil constructor class Database menggunakan parent::__construct()
        parent::__construct();
    }

    //Method untuk menampilkan nilai tugas yang mengalami perbaikan
    public function tampilNilaiTugas()
    {
        //Query untuk mengambil data dari tabel nilai_perbaikan di mana kolom Keterangan bernilai 'Perbaikan nilai tugas'
        $sql = "SELECT * FROM nilai_perbaikan WHERE Keterangan = 'Perbaikan nilai tugas'";
        
        //Menjalankan query dan menyimpan hasilnya ke variabel $hasil
        $hasil = $this->conn->query($sql);

        //Inisialisasi array kosong untuk menyimpan hasil
        $result = [];
        
        //Mengecek apakah hasil query tidak kosong dan memiliki baris data
        if ($hasil && $hasil->num_rows > 0) 
        {
            //Looping melalui setiap baris hasil query dan menyimpannya dalam array $result
            while ($d = mysqli_fetch_array($hasil)) {
                $result[] = $d;
            }
        }

        //Mengembalikan array hasil query
        return $result;
    }

    //Method untuk menampilkan nilai presentasi yang mengalami perbaikan
    public function tampilNilaiPresentasi()
    {
        //Query untuk mengambil data dari tabel nilai_perbaikan di mana kolom Keterangan bernilai 'Perbaikan nilai presentasi'
        $sql = "SELECT * FROM nilai_perbaikan WHERE Keterangan = 'Perbaikan nilai presentasi'";
        
        //Menjalankan query dan menyimpan hasilnya ke variabel $hasil
        $hasil = $this->conn->query($sql);

        //Inisialisasi array kosong untuk menyimpan hasil
        $result = [];
        
        //Mengecek apakah hasil query tidak kosong dan memiliki baris data
        if ($hasil && $hasil->num_rows > 0) 
        {
            //Looping melalui setiap baris hasil query dan menyimpannya dalam array $result
            while ($d = mysqli_fetch_array($hasil)) {
                $result[] = $d;
            }
        }

        //Mengembalikan array hasil query
        return $result;
    }

    //Method untuk menampilkan nilai ujian akhir yang mengalami perbaikan
    public function tampilNilaiUjian()
    {
        //Query untuk mengambil data dari tabel nilai_perbaikan di mana kolom Keterangan bernilai 'Perbaikan nilai ujian akhir'
        $sql = "SELECT * FROM nilai_perbaikan WHERE Keterangan = 'Perbaikan nilai ujian akhir'";
        
        //Menjalankan query dan menyimpan hasilnya ke variabel $hasil
        $hasil = $this->conn->query($sql);

        //Inisialisasi array kosong untuk menyimpan hasil
        $result = [];
        
        //Mengecek apakah hasil query tidak kosong dan memiliki baris data
        if ($hasil && $hasil->num_rows > 0) 
        {
            //Looping melalui setiap baris hasil query dan menyimpannya dalam array $result
            while ($d = mysqli_fetch_array($hasil)) {
                $result[] = $d;
            }
        }

        //Mengembalikan array hasil query
        return $result;
    }
}
?>
