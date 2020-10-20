<!DOCTYPE html>
<html>
<head>
	<title>Pesan Obat - TelkoMedika</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style type="text/css">
		.navbar-nav li{
			padding-left: 50px
		}
	</style>
	
</head>
<body>


	 <nav class="navbar navbar-expand-lg navbar-light" style = "background-color:maroon;">
        
        	<img src="medikalogo.png" width="100px" height="70px" /><span class="mr-1"></span><a class="navbar-brand" href="#"></a>
          	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         	 </button>
          	<div class="collapse navbar-collapse" id="navbarNav">
            	<ul class="navbar-nav ml-auto">
              	<li class="nav-item">
                <a class="nav-link text-white" href="TelkoMedika - Homepage.html">Home <span class="sr-only">(current)</span></a>
              	</li>
              	<li class="nav-item">
                <a class="nav-link text-white" href="Data Pasien.html">Tanya Dokter</a>
              	</li>
              	<li class="nav-item active">
                <a class="nav-link text-white" href="#">Layanan </a>
              	</li>
              	<li class="nav-item">
                <a class="nav-link text-white" href="#">Artikel</a>
              	</li>
           		</ul>
          	</div>
        
     </nav> 
        
	<br>
	<br>
	<br>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form>
					<div class="form-group">
    					<label for="exampleInputEmail1">Nama</label>
    					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama...">
    					<small id="emailHelp" class="form-text text-muted">.</small>
 					 </div>
 					 <br>
 					 <div class="form-group">
    					<label for="exampleInputEmail1">No. Telpon</label>
    					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nomor..">
    					<small id="emailHelp" class="form-text text-muted">.</small>
 					 </div>
 					 <br>
 					 <div class="form-group">
    					<label for="exampleInputEmail1">Alamat</label>
    					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="lokasi..">
    					<small id="emailHelp" class="form-text text-muted">.</small>
 					 </div>
 					 <br>
 					 <div class="form-group">
   						 <label for="exampleFormControlFile1">Upload Resep Obat</label>
    					<input type="file" class="form-control-file" id="exampleFormControlFile1">
  					</div>
  					<br>
  					<div class="form-footer">
  						<a type="submit" class="btn btn-primary btn-block">Pesan</a>
  					</div>
				</form>
			</div>
			<div class="col-md-6">
				<img src="medikalogo2.png">
			</div>
		</div>
	</div>

</body>
</html>