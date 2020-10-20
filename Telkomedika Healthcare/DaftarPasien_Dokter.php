<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Data Pasien - Dokter</title>
  </head>
  <body>
      <?php
       $nama = $_POST ['nama'];
       $tanggallahir = $_POST ['tanggallahir'];
       $gender = $_POST ['gender'];
       $bb = $_POST ['bb'];
       $tb = $_POST ['tb'];
       $kg = "kg";
        $cm = "cm";
       $keluhan = $_POST ['keluhan'];
      ?>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:maroon;">
    <div class="container">
      <img src="telkomedic.png" width="100px" height="70px" /><span class="mr-1"></span><a class="navbar-brand"
        href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="TelkoMedika - Homepage.html">Home <span
                class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white" href="DataPasien.php">Tanya Dokter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Artikel</a>
          </li>
        </ul>
      </div>
      </diiv>
  </nav>
  </div>
  <div class="background-color bg-light">
    <div class="container">
      <div class="row">
      <div class = "col-sm-3"></div>
        <div class = "col-sm-9 py-5">
      <div class="card mb-9" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-sm-4 d-flex justify-content-center align-items-center">
      <img src="fever.svg" height="150px" weight="150px" style = " margin-left: 15px;">
    </div>
    <div class="col-sm-8">
      <div class="card-body">
        <h5 class="card-title">Pasien 1</h5>
        <table class="table">
            <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?= $nama ?></td>
        </tr>
        <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><?= $tanggallahir ?></td>
        </tr>
        <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?= $gender ?></td>
        </tr>
        <tr>
        <td>Berat badan</td>
        <td>:</td>
        <td><?php echo"$bb $kg";?></td>
        </tr>
        <tr>
        <td>Tinggi badan</td>
        <td>:</td>
        <td><?php echo"$tb $cm";?></td>
        </tr>
        <tr>
        <td>Keluhan</td>
        <td>:</td>
        <td><?= $keluhan ?></td>
        </tr>
</table>
      </div>
    </div>
  </div>
</div>
</div>
    </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>