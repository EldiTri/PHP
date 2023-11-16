<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>penjualan</title>
  </head>
  <body>
    <div class="container">
        <form action="" method="POST" name="penjualan">
        <h1>Toko Wayang Kami</h1>
        <p>Program Aplikasi sederhana untuk menghitung penjualan toko Wayang kami</p>

  <div class="form-group">
    <label for="nm_brg">Nama Barang</label>
    <input type="text" class="form-control" id="nm_brg" name="nm_brg" Required>
  </div>
  <div class="form-group">
    <label for="H_brg">Harga Barang</label>
    <input type="number" class="form-control" id="h_brg" name="h_brg" Required>
  </div>
  <div class="form-group">
    <label for="jml_brg">Jumlah Barang</label>
    <input type="number" class="form-control" id="jml_brg" name="jml_brg" required>
  </div>
  <div class="form-group">
    <label for="jml_brg">Diskon</label>
    <input type="text" class="form-control"  id="diskon" name="diskon" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Hitung</button>
</form>
<hr>
    </div>
<?php 
if(isset($_POST['submit'])){
    $nama = $_POST['nm_brg'];
    $harga = $_POST['h_brg'];
    $jumlah = $_POST['jml_brg'];
    $diskon = $_POST['diskon'];
    $total = $harga * $jumlah;
    $diskon1 = $diskon/100 * $total;
    $totalSetelahDiskon = $total - $diskon1;

    echo"<div class='container'>";
    echo"<h1>Jumlah yang harus dibayarkan:</h1>";
    echo"<h4>Nama Barang: $nama</h4>";
    echo"<h4>Harga Barang: Rp. ". number_format($harga)." </h4>"; 
    echo"<h4>Jumlah Barang: $jumlah</h4>";
    echo "<h4>Diskon $diskon% : Rp. ". number_format($diskon1). "</h4>";
    echo "<h4>Total Pembayaran Setelah Diskon : Rp. ". number_format($totalSetelahDiskon). "</h4>";
    echo"</div>";
}
?>
   


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>