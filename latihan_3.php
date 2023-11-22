<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Nilai</title>
  </head>
  <body>
    <div class="container">
        <form action="" method="POST" name="penilaiyan">
        <h1>E-Rapor</h1>
        <p>Program Aplikasi sederhana untuk menghitung penilaian kampus kami</p>

  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" Required>
  </div>
  <div class="form-group">
    <label for="kelas">Kelas:</label>
    <input type="text" class="form-control" id="kelas" name="kelas" Required>
  </div>
  <div class="form-group">
    <label for="nilai_a">Nilai Adaptif:</label>
    <input type="number" class="form-control" id="nilai_a" name="nilai_a" Required>
  </div>
  <div class="form-group">
    <label for="nilai_b">Nilai Produktif:</label>
    <input type="number" class="form-control" id="nilai_b" name="nilai_b" Required>
  </div>
  <div class="form-group">
    <label for="nilai_c">Nilai Mulok:</label>
    <input type="number" class="form-control" id="nilai_c" name="nilai_c" Required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
    </div>
<?php 
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nilai_a = $_POST['nilai_a'];
    $nilai_b = $_POST['nilai_b'];
    $nilai_c = $_POST['nilai_c'];
    $total = $nilai_a * $nilai_b * $nilai_c;
    $rata= $total / 3;

    if($nilai_a > 90){
        $gradeA = "A"; 
    } elseif ($nilai_a > 80){
        $gradeA = "B";
    } elseif ($nilai_a > 70){
        $gradeA = "C"; 
    } elseif ($nilai_a > 60){
        $gradeA = "D"; 
    } elseif ($nilai_a > 50){
        $gradeA = "E";
    }

    if($nilai_b > 90){
        $gradeB = "A";
    } elseif($nilai_b > 80){
        $gradeB = "B";
    } elseif($nilai_b > 70){
        $gradeB = "C";
    } elseif($nilai_b > 60){
        $gradeB = "D";
    } elseif($nilai_b > 50){
        $gradeB = "E";
    }

    if($nilai_c > 90){
        $gradeC = "A";
    } elseif($nilai_c > 80){
        $gradeC = "B";
    } elseif($nilai_c > 70){
        $gradeC = "C";
    } elseif($nilai_c > 60){
        $gradeC = "D";
    } elseif($nilai_c > 50){
        $gradeC = "E";
    }

    $ketA = $nilai_a >= 70 ? "Lulus": "Tidak Lulus";
    $ketB = $nilai_b >= 70 ? "Lulus": "Tidak Lulus";
    $ketC = $nilai_c >= 70 ? "Lulus": "Tidak Lulus";
    $ketALL = $rata >= 70 ? "Lulus": "Tidak Lulus";

    echo"<div class='container'>
    <h4>nama: $nama</h4>
    <br>
    <h4>kelas: $kelas</h4>
    <br>
    <table class='table'>
   <thead class='thead-dark'>
     <tr>
       <th scope='col'>Nilai Adaptif</th>
       <th scope='col'>Nilai Produktif</th>
       <th scope='col'>Nilai Mulok</th>
       <th scope='col'>Grade</th>
       <th scope='col'>Keterangan</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td>$nilai_a</td>
       <td>$nilai_b</td>
       <td>$nilai_c</td>
       <td>$gradeA</td>
       <td>$ketA</td>
     </tr>
     <tr>
       <td>$nilai_a</td>
       <td>$nilai_b</td>
       <td>$nilai_c</td>
       <td>$gradeB</td>
       <td>$ketB</td>
     </tr>
     <tr>
       <td>$nilai_a</td>
       <td>$nilai_b</td>
       <td>$nilai_c</td>
       <td>$gradeC</td>
       <td>$ketC</td>
     </tr>
   </tbody>
 </table>
 </div>
 
 <div><h4>Nilai Rata-Rata:<h4></div>
 <h4>$rata<h4>
 <div></div>
 ";
}
?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>