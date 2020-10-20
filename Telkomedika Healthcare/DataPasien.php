<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://kit.fontawesome.com/c81bb2fd05.js" crossorigin="anonymous"></script>

  <title>Data Pasien</title>
</head>

<body>
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
        <div class="col-sm-5">
            <div class="card-body">
              <div class="card bg-white py-4" style="text-align: center;">
              <h4>Chat dengan</h4>
              <img src="doctor (1).svg" height=100px weight=100px class="card2" alt="...">
              <h5>dr. Abdillah Habib</h5>
              <p class="font-weight-normal text-muted">Dokter Umum</p>
              <div class="row d-flex justify-content-center align-items-center">
                <div class="d-flex flex-row align-items-center mr-4">
                  <div class="d-flex mr-2">
                    <img src="likes.png" height=30px weight=30px></div>
                  <div class="d-flex flex-column w-100">
                    <small><span>98%</span></small>
                    <small class="text-muted"><span>Disukai</span></small>
                  </div>
                </div>
                <div class="d-flex flex-row align-items-center">
                  <div class="d-flex mr-2">
                    <img src="experiance.png" height=40px weight=40px></div>
                  <div class="d-flex flex-column w-100">
                    <small><span>3 tahun</span></small>
                    <small class="text-muted"><span>Pengalaman</span></small>
                  </div>
                </div>
              </div>
              <br>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Lulusan : <span class= "text-muted"> UNAIR, 2016</span> </li>
                <li class="list-group-item">Tempat Praktik : <span class= "text-muted"> Surabaya</span></li>
                <li class="list-group-item">Nomor STR : <span class= "text-muted"> 1311100117171617</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
            <div class="card-body">
              <div class="card bg-white">
              <div class="card-body py-4">
                <h4 class= "font-weight-normal">TelkoMedika membutuhkan <br> informasi  dasar tentang pasien </h4>
              <form action="DaftarPasien_Dokter.php" method="POST">
                <br>
                <div class="form-group">
                  <label class= "text-muted">Nama</label>
                  <input type="input" class="form-control" name="nama" >
                  </div>
                <div class="form-group">
                  <label class= "text-muted">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tanggallahir" >
                </div>
                <div class="form-group">
                  <label class= "text-muted">Jenis Kelamin</label>
                  <br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender"  value="Laki-laki">
                    <label class="form-check-label" >Laki-laki</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender"  value="Perempuan">
                    <label class="form-check-label" >Perempuan</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class= "text-muted">Berat Badan (kg)</label>
                  <input type="input" class="form-control" name="bb" >
                  </div>
                  <div class="form-group">
                    <label class= "text-muted">Tinggi Badan (cm)</label>
                    <input type="input" class="form-control" name="tb" >
                    </div>
                    <div class="form-group">
                      <label class= "text-muted">Keluhan</label>
                      <input type="input" class="form-control" name="keluhan" >
                      </div>
                      <br>
                      <div class="form-group">
                  <center><button type="submit" class="btn btn-danger" value="submit" name="submit">Simpan</button></center>
                </div>
                </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>