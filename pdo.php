<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 try {
 $conn = new PDO("mysql:host=$servername;dbname=bankhoahoc", $username, $password);
 // set the PDO error mode to exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Kết nối thành công";
 return $conn;
 } catch(PDOException $e) {
 echo "Kết nối thất bại: " . $e->getMessage();

 }?>