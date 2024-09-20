<?php
//Menyertakan file koneksi.php yang berisi koneksi database dan kelas Database
include 'koneksi.php';

//Mendeklarasikan kelas NilaiPerbaikanTugas yang merupakan turunan dari kelas Database
class NilaiPerbaikanTugas extends Database {

    //Fungsi tampilData untuk mengambil data dari tabel 'nilai_perbaikan' dengan kriteria tertentu
    public function tampilData()
    {
        //Query SQL untuk mengambil data dari tabel 'nilai_perbaikan' 
        //di mana keterangan bernilai 'Perbaikan nilai tugas'
        $data = "SELECT * FROM nilai_perbaikan WHERE Keterangan = 'Perbaikan nilai tugas'";
        
        //Menjalankan query dan menyimpan hasilnya ke variabel $hasil
        $hasil = $this->conn->query($data);
        
        //Mendefinisikan array kosong untuk menyimpan hasil query
        $result = [];

        //Memeriksa apakah hasil query valid dan memiliki data (jumlah baris lebih dari 0)
        if ($hasil && $hasil->num_rows > 0) 
        {
            //Mengambil setiap baris data dari hasil query dan menyimpannya ke dalam array $result
            while ($row = $hasil->fetch_assoc()) 
            {
                $result[] = $row;
            }
        }

        //Mengembalikan array hasil query
        return $result;
    }
}
?>
