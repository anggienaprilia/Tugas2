<?php
//Mengikutsertakan file koneksi.php untuk mendapatkan akses ke class Database
include 'koneksi.php';

//Mendeklarasikan class NilaiPerbaikanUjian yang merupakan turunan dari class Database
class NilaiPerbaikanUjian extends Database {

    //Method untuk menampilkan data dari tabel 'nilai_perbaikan' 
    public function tampilData() 
    {
        //Query SQL untuk mengambil semua data dari tabel 'nilai_perbaikan' 
        //dengan keterangan 'Perbaikan nilai ujian akhir'
        $data = "SELECT * FROM nilai_perbaikan WHERE Keterangan = 'Perbaikan nilai ujian akhir'";

        //Menjalankan query dan menyimpan hasilnya ke dalam variabel $hasil
        $hasil = $this->conn->query($data);

        //Menyiapkan array kosong untuk menyimpan hasil query jika ada
        $result = [];

        //Mengecek apakah hasil query ada dan memiliki lebih dari 0 baris data
        if ($hasil && $hasil->num_rows > 0) 
        {
            //Mengambil setiap baris data dari hasil query dan menambahkannya ke array $result
            while ($row = $hasil->fetch_assoc()) 
            {
                $result[] = $row;
            }
        }

        //Mengembalikan array $result yang berisi data dari query
        return $result;
    }
}
?>
