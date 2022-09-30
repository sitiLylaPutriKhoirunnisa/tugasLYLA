<?php

 $nama = htmlentities(trim($_POST['nama'])) ;
 $kelas = $_POST['kelas'];
 $pesan_error="";

 if(empty($nama)){
   $pesan_error="Data tidak boleh kosong";
 }


//  echo strlen($nama);
//  die();
if($pesan_error == ""){
 $database = new PDO("mysql:host=localhost;dbname=pbo12",'root','');
 $query = $database->query("insert into siswa values('','$nama','$kelas')");

 if($query){
    header("Location:index.php");
 }
 }else{
   header("location:tambah.php?error=$pesan_error");

 }

