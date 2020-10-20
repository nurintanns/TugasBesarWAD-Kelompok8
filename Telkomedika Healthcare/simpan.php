<!DOCTYPE html>
<html>
    
    <head>
        <title>Success</title>    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <style>
        .center {
          margin: 0;
          position: absolute;
          top: 50%;
          left: 50%;
          -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
        }

        </style>

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

      <body>

      <div class="center">
          <div class="panel-heading">Pendaftaran sukses!</div>       
            <?php
                $nama=$_POST["nama"];
                $email=$_POST["email"];
                $password=md5($_POST["password"]);

                echo "Akun bernama $nama dengan email $email berhasil di daftarkan";
            ?>
            <div class="panel-body">Silahkan login <a href="link.html">klik disini</a></div>
</div>

</body>
</html>