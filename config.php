<?php

/*koneksi MYSQL biasa*/
/*$connection = new mysqli("localhost", "root", "", "belajar");*/


/*koneksi ke database ORACLE*/

/*$username = "raditya";
$password = "oracle";
$database = "localhost/orcl";
 
$connection = oci_connect($username,$password,$database);
*/

/*if (!$connection) {
    echo "<h1>Whoops! Koneksi database gagal</h1>";
}*/

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "data_pegawai";
}

switch ($page) {
    case 'dataPegwai': 
        $page = "data_pegawai";
    break;
    case 'logHadir': 
        $page = "log_hadir";
    break;
    case 'device': 
        $page = "device_info";
    break;
    default:
        $page = "data_pegawai";
    break;
}