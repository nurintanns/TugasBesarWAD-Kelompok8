<!DOCTYPE html>
<html>
<head>
	<title>Telkom Medika Rating</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="siesesRating.css">





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
      </div>
  </nav>

  <br><br>

  <div class="container">
  <div class="row">
    <div class="col">
      <div class="card-body">
            	<div class="card bg-white py-4" style="text-align: center;">
              		<h4>Rating Untuk</h4>
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

    <div class="col">

    		<div class="card-body">
              	<div class="card bg-white">
              		<div class="card-body py-4">
                		<div class="container">
			    			<div class="post">
			    				<h4 class= "font-weight-normal" align="center">Feedback Untuk dr. Abdillah Habib! </h4>
							</div>

							<div class="center">
			      				<div class="stars">
								    <input type="radio" id="five" name="rate" value="5">
								    <label for="five"></label>
								    <input type="radio" id="four" name="rate" value="4">
								    <label for="four"></label>
								    <input type="radio" id="three" name="rate" value="3">
								    <label for="three"></label>
								    <input type="radio" id="two" name="rate" value="2">
								    <label for="two"></label>
								    <input type="radio" id="one" name="rate" value="1">
								    <label for="one"></label>
								     <span class="result"></span>
			      				</div>
							</div>

							<form>
											<div class="form-group">
			    								<label for="exampleInputEmail1">Nama</label>
			    								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
			    								<small id="emailHelp" class="form-text text-muted"></small>
			 					 			</div>
			 					 	<br>
			 					 			<div class="form-group">
			    								<label for="exampleInputEmail1">Feedback</label>
			    								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jelaskan Pengalaman anda...">
			    								<small id="emailHelp" class="form-text text-muted"></small>
			 					 			</div>
			  						<br>
			  								<div class="form-footer">
			  									<a type="submit" class="btn btn-primary btn-block">Post</a>
			  								</div>
										</form>
						</div>
					</div>
				</div>
			</div>



			  
</body>
</html>