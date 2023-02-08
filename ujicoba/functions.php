<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "ujikejuruan");


function query($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $row = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $row[] = $row;
    }
    return $row;
}


function tambah($data) {
    global $conn;

    $nama_santri = htmlspecialchars($data["nama santri"]);
    $alamat_santri = htmlspecialchars($data["alamat santri"]);
    $no_telpn = htmlspecialchars($data["no telpn"]);
    $nama_santri = htmlspecialchars($data["nama santri"]);

}