<?php

class Mobil{
    public $nama,
            $merk,
            $warna;

    public function tambahKecepatan(){

    }

    public function kurangiKecepatan(){

    }
}

class Produk {
    public $nama = 'ini nama',
            $jenis = 'ini jenis',
            $harga = 99999;
            const PHI = 3.14;

    public function __construct($nama, $jenis, $harga){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->harga = $harga;
    }

    public function Harga(){
        return $this->harga; 
    }
}

$produk2 = new Produk("BAJU HITAM POLOS", "KAOS", 150000);
echo "$produk2->nama, $produk2->jenis";
echo "<br>";
echo "Harga : " . $produk2->Harga();

$produk3 = new Produk("HOODIE HITAM POLOS", "JAKET", 185000);
echo "<br>";
echo "Produk 3 : $produk3->nama, $produk3->jenis";
echo "<br>";
echo "Harga : " . $produk3->Harga();


?>