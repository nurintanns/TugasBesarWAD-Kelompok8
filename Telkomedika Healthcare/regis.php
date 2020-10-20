<!DOCTYPE html>
<html>
    <head>
        <title>Registrasi</title>    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

<style>
    body {
          margin: 0;
          font-family: Verdana, Tahoma, sans-serif;
          background-color: #F8F9FA;
        }

    .kotak {
          justify-content: center;
          margin: auto;
          display: flex;
          height: 200px;
          position: relative;
        }

    .col {
          width: 600px;
          height: 500px;
        }

    .center {
          margin: 0;
          position: absolute;
          top: 50%;
          left: 50%;
          -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
        }

    .center-vertical {
          margin: 0;
          position: absolute;
          left: 50%;
          -ms-transform: translateX(-50%);
          transform: translateX(-50%);
        }
        

</style>

<!--NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-light" style = "background-color:maroon;">
      <div class ="container">
      <img src="telkomedic.png" width="100px" height="70px" /><span class="mr-1"></span><a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link text-white" href="TelkoMedika - Homepage.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="Data Pasien.html">Tanya Dokter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="regis.php">Daftar</a>
            </li>
          </ul>
        </div>
      </div>
      </nav>

      <!--body-->
<body>
<br><br>
<div class="kotak"> 
    <div class="row">
        <div class="col" style="background-color: #ffffff;">
            <div class="center">
                <h2 style="color: darkcyan"><b><center>Daftar<center></h2></b><br>
                <form action="simpan.php" method="post">

                <div class="form-group row">
                    <label>Nama:</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
                </div>

                <div class="form-group row">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukan Email" />
                </div>

                <div class="form-group row">
                    <label>Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukan Password" />
                    </div><br>

                <div class="center-vertical">
                    <button type="submit" name="submit" class="btn btn-success center-block">Buat Akun</button>
          
                </form>
            </div>
</body>
</html>