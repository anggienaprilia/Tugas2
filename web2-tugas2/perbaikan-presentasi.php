<?php
//Menghubungkan file koneksi.php yang berisi class Database dan koneksi ke database
include 'koneksi.php';

//Membuat class NilaiPerbaikanPresentasi yang merupakan turunan dari class Database
class NilaiPerbaikanPresentasi extends Database {

    //Method untuk menampilkan data perbaikan nilai presentasi dari tabel nilai_perbaikan
    public function tampilData()
    {
        //Query SQL untuk memilih data dari tabel 'nilai_perbaikan' yang memiliki keterangan 'Perbaikan nilai presentasi'
        $data = "SELECT * FROM nilai_perbaikan WHERE Keterangan = 'Perbaikan nilai presentasi'";

        //Menjalankan query dan menyimpan hasilnya ke variabel $hasil
        $hasil = $this->conn->query($data);

        //Inisialisasi array kosong untuk menyimpan hasil query
        $result = [];

        //Mengecek apakah hasil query tidak kosong dan ada data yang ditemukan
        if ($hasil && $hasil->num_rows > 0) 
        {
            //Mengambil setiap baris data yang ditemukan dan menyimpannya ke dalam array $result
            while ($row = $hasil->fetch_assoc()) 
            {
                $result[] = $row;
            }
        }

        //Mengembalikan hasil query dalam bentuk array
        return $result;
    }
}
?>
