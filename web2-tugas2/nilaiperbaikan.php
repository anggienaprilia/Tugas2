<?php
//Mengikutsertakan file koneksi.php yang berisi class Database
include 'koneksi.php';

//Membuat class NilaiPerbaikan yang merupakan turunan dari class Database
class NilaiPerbaikan extends Database {
    
    //Override (menimpa) metode tampilData dari class induk untuk menampilkan data dari tabel nilai_perbaikan
    public function tampilData()
    {
        //Membuat query untuk mengambil semua data dari tabel nilai_perbaikan
        $query = "SELECT * FROM nilai_perbaikan";
        
        //Melakukan eksekusi query menggunakan properti conn yang diwarisi dari class Database
        $hasil = $this->conn->query($query);
        
        //Mendefinisikan array kosong untuk menyimpan hasil data
        $result = [];

        //Memeriksa apakah query berhasil dan ada data yang dikembalikan
        if ($hasil && $hasil->num_rows > 0) 
        {
            //Mengambil setiap baris data dan menyimpannya ke dalam array result
            while ($row = $hasil->fetch_assoc()) 
            {
                $result[] = $row;
            }
        }

        //Mengembalikan array berisi data hasil query
        return $result;
    }
}
?>
