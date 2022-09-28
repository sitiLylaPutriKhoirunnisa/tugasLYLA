<?php
 class tiket_pesawat{
    public $tiket = "VIP";
    public $nama_penumpang = "lyla";
    public $harga_tiket = "1000000";

    public function __construct(){
        echo "ini berasal dari construct tiket_pesawat";
    }
    public function ambil_tiket(){
        echo "ambil_tiket milik $this->nama_penumpang dengan harga $this->harga_tiket kelas $this->tiket";
    }
    public function __destruct(){
        echo "ini berasal dari destruct tiket_pesawat" ;
    }
   
 }
    $tiket_lyla = new tiket_pesawat();
    echo "<br/>";
    echo $tiket_lyla->ambil_tiket();
    echo "<br/>";
    ?>