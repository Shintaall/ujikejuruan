<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "ujikejuruan");

// ambil data dari tabel data santri / query data santri
$result = mysqli_query($conn, "SELECT * FROM data_santri");

// ambil data (fetch) santri dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduannya
// mysqli_fetch_object()

// while( $santri = mysqli_fetch_object($result) ) {
// var_dump($santri);
// }


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Latihan UK pendataan santri</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
          <div class="">
            <div class="card-header p-3 mb-2 bg-primary text-white">
              <h3>Daftar Data Santri</h3>
            </div>
            </div>
            <div class="card-body">
              <a href="tambah.php" class="btn btn-md btn-success" style="margin-bottom: 10px"><h6>TAMBAH DATA</h6></a>
              <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
              <table class="table table-bordered" id="Table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Santri</th>
                    <th scope="col">Alamat Santri</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Nama Ayah</th>
                    <th scope="col">Nama Ibu</th>
                    <th scope="col">Aksi</th>
                  </tr>

              
                </thead>
                <tbody>
                <tr>
                      <td>1</td>
                      <td>Fitriyani</td>
                      <td>Pekalongan</td>
                      <td>082334156783</td>
                      <td>Budi hartono</td>
                      <td>Fatmawati</td>
                      <td class="text-center">
                        <a href="edit.php" class="btn btn-sm btn-info">EDIT</a>
                        <a  class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>
                 <?php while( $row = mysqli_fetch_assoc($result) )  ?>
                  <tr>
                      <td>5</td>
                      <td>Rafa Aditya</td>
                      <td>Malang</td>
                      <td>085894332729</td>
                      <td>Khairul Anam</td>
                      <td>Nur Lina</td>
                      <td class="text-center">
                        <a href="edit.php" class="btn btn-sm btn-info">EDIT</a>
                        <a  class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</tr>
</body>
</html