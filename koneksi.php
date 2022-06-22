<?php
   $koneksi = mysqli_connect("localhost","root","","MONITORING1");

   if (mysqli_connect_error()) {
       echo "koneksi database Gagal". mysqli_connect_error();
   } 
?>   

