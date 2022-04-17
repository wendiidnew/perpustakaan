<?php 
    include "../../config/koneksi.php";

   
    $nama_anggota       = $_POST['nama_anggota'];
    $jenis_kelamin      = $_POST['jenis_kelamin'];
    $alamat             = $_POST['alamat'];
    $no_hp              = $_POST['no_hp'];


    $sql = "update tabel_anggota set
    (
        nama_anggota    = '".$nama_anggota."'
        jenis_kelamin   = '".$jenis_kelamin."'
        alamat          = '".$alamat."'
        no_hp           = '".$no_hp."'
    ) 
    VALUES 
    (
        '".$nama_anggota."',
        '".$jenis_kelamin."',
        '".$alamat."',
        '".$no_hp."'
    )";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=anggota');

?>



