<?php
session_start();
include "../../config/koneksi.php";

 $username = $_POST['username'];
 $password = $_POST['password'];

//  echo $username. $password;
// 
 if(empty($username) == true OR empty($password) == true){
     $errors[] = '*username /password field is required';
     echo"gagal";
 }
 else {
//      //if username exists
     $sql = "SELECT * FROM tabel_user WHERE username = '$username'";
     $query = $db->query($sql);
     if($query->num_rows > 0 ){

        // echo "berhasil";
//          // echo "berhasil";
//          // check username and password
         $password = $password;

         $sql = "SELECT * FROM tabel_user WHERE username = '$username'
         AND password = '$password'";
         $query = $db->query($sql);
         $result = $query->fetch_array();

         $db->close();

         if($query->num_rows == 1) {
             $_SESSION['logged_in'] = true;
             $_SESSION['user_id'] = $result['id_user'];
             $_SESSION['username'] = $result['username'];
             $_SESSION['level'] = $result['level'];

             header('location:../../beranda.php');
             exit();
         }        
         else {
             header('location:../../index.php');
         }
    }
    else {
            header('location:../../index.php');
    }
// echo "berhasil";
 }