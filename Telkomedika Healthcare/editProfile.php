<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Edit Profile</title>
       
        <nav class="navbar navbar-expand-lg navbar-light" style = "background-color:maroon;">
        <div class ="container">
        <img src="telkomedic.png" width="100px" height="90px" /><span class="mr-1"></span><a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link text-white" href="TelkoMedika - Homepage.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link text-white" href="Data Pasien.html">Tanya Dokter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Artikel</a>
              </li>
            </ul>
          </div>
        </diiv>
        </nav> 
        </div>
  </li>
  
</ul>
                </div>
            </nav>
        </div>

        <style> 
        h2 {
                text-align: center;
                font-family:  Arial, Helvetica, sans-serif;
                font-size: 40px;
            }
        h5{
            font-family:  Arial, Helvetica, sans-serif;
        }
        label{
                font-family:  Arial, Helvetica, sans-serif;
                font-size: 22px;
                
            }
        
        </style>

        <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="card ; shadow p-3 mb-5 bg-white rounded justify-content-center col-md-12 d-flex" style="width: 50rem; Margin-left: 200px;" > 
            <div class="card-body " >

                <h2 style="text-align: center"><b>Profile Settings</b></h2>
                <br>
                <br>
                <br>
<center><svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="grey" xmlns="http://www.w3.org/2000/svg">
  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
</svg></center> <br><br>
                <form action="" method="POST">
                    <div class="form-group col-md-12 ">
                        <label for="nama">Username</label>
                        <input class="form-control" id="Username" name="nama" placeholder="Username" value=""  type="text"> 
                    </div>
                    <br>

                    <div class="form-group col-md-12 ">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <br>

                    <div class="form-group col-md-12">
                        <label for="identitynumber">Identity Number </label>
                        <input class="form-control" id="identitynumber" name="identitynumber" placeholder="Enter Identity Number " value="" type="number">
                    </div>
                    <br>
    
                    <div class="form-group col-md-12">
                        <label for="PhoneNumber">Phone Number</label>
                        <input class="form-control" id="PhoneNumber" name="PhoneNumber" placeholder="Enter Phone Number " value="" type="number">
                    </div>
                    
                    <div class="form-group col-md-12">
                    <label for="Tanggal Lahir">Tanggal Lahir </label><br>
                    <input type="date"id="Tanggal Lahir">
                    </div>
                    

                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                      <h5><b>Change Password </b></h5>
                      <br>
                        <div class="row">
                        <div class="col">
                        <div class="form-group col-md-12">
                        <label>Current Password</label>
                        <input class="form-control" type="password" placeholder="••••••">
                    </div>
                    </div>
                    </div>
                        <div class="row">
                        <div class="col">
                        <div class="form-group col-md-12">
                        <label>New Password</label>
                        <input class="form-control" type="password" placeholder="••••••">
                    </div>
                    </div>
                    </div>
                        <div class="row">
                        <div class="col">
                        <div class="form-group col-md-12 ">
                        <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                        <input class="form-control" type="password" placeholder="••••••"></div>
                    </div>
                    </div>
                    </div>
                    <br>

                    
                </form>
                
                <br>
                
                <a href="#" type="button" class="btn btn-primary btn-lg btn-block">Save Changes</a>
                
            </div><br>

            
            <!--<div class="center-vert">
            <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button><br>
            </div>-->
        </div>
        </div>
    </body>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    



</html>