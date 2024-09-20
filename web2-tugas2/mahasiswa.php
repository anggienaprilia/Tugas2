<?php
//Mengimpor (include) file koneksi.php yang berisi kelas Database
include 'koneksi.php';

//Mendefinisikan kelas MahasiswaData yang merupakan turunan dari kelas Database
class MahasiswaData extends Database {
    
    //Menimpa (override) metode tampilData dari kelas Database untuk menampilkan data mahasiswa
    public function tampilData()
    {
        //Menyimpan query SQL untuk mengambil semua data dari tabel mahasiswa
        $data = "SELECT * FROM mahasiswa";
        
        //Menjalankan query dan menyimpan hasilnya ke dalam variabel $hasil
        $hasil = $this->conn->query($data);
        
        //Membuat array kosong untuk menyimpan hasil data yang diambil
        $result = [];

        //Memeriksa apakah query berhasil dan menghasilkan lebih dari 0 baris data
        if ($hasil && $hasil->num_rows > 0) 
        {
            //Mengambil setiap baris data dari hasil query dan memasukkannya ke dalam array $result
            while ($row = $hasil->fetch_assoc()) 
            {
                $result[] = $row;
            }
        }

        //Mengembalikan array yang berisi data mahasiswa
        return $result;
    }
}
?>
