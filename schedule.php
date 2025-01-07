<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daily Journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="icon" href="gambar/Logo-Udinus-Official-02-1-1280x1280.png" />
    <style> 
        .navbar-nav{
              font-weight  :    bold;
        }
        /* #activelink{
          border-radius : 10px; 
          border: 1px  ;
          background-color : #C65BCF;  
          color : white;
        }
          
          #activelink:hover{
            background-color: #FCC737;    
            color : #4335A7;     
        } */
        .pendaftaran .nav-item {
            display : flex;
            border-radius : 20%;

        }
        .pendaftaran .nav-link{
            margin-left : 5px;

        }
        .pendaftaran a{
                        font-weight : bold;
            
        }
        
        .login {
            background-color : #A1D6CB;
            border-radius : 20%;
            color : purple;
        } 

        .login:hover {
            background-color : #FF8383;
            color : #ffff;
        } 

        .register {
            background-color : #FF8383;
            border-radius : 20%;
            color : #fff;
        } 
        .register:hover {
            background-color : #A1D6CB;
            color : purple;
        } 
    </style>    
    </head>
  <body>
    
  <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top bg-danger-subtle">
        <div class="container">
            <a class="navbar-brand" href="#">Daily Journal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link "  href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="articlee.php">Article</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" id="activelink" aria-current="page" href="schedule.php">Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">profile</a>
                </li>
                <div class="pendaftaran">
                    <li class="nav-item ">
                      <a class="nav-link  login" href="login.php" >Login</a> 
                      <a class="nav-link register" href="register.php" >register</a>
                    </li>
                </div>
            </ul>
            </div>
        </div>
    </nav>
    <br>
    <section id="schedule" class="text-center p-5  ">
        <div class="container">
          <h1 class="fw-bold display-4 pb-3">Schedule</h1>
          <div class="row row-cols-1 row-cols-md-4 ">
            <div class="col">
              <div class="card h-100" style="width: 18rem;">
                <div class="card-header fw-bold" style="background-color : #80C4E9">
                  Selasa
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">PENDIDIKAN KEWARGANEGARAAN <br> 
                    <div class="waktu" ><i class="bi bi-stopwatch"> 08:40 - 10:20</i></div>    
                  </li>
                  <li class="list-group-item">N601A <i class="bi bi-pencil"> 2 SKS</i> </li>
                  <li class="list-group-item"><i class="bi bi-geo-alt-fill">AULA H7</i></li>
                </ul>
                <ul class="list-group list-group-flush"  >
                  <li class="list-group-item"  style="background-color : #80C4E9">PEMPROGRAMAN BERBASIS WEB <br> 
                    <div class="waktu" ><i class="bi bi-stopwatch"> 12:30 - 14:10</i></div>    
                  </li>
                  <li class="list-group-item" style="background-color : #80C4E9">A11.4317 <i class="bi bi-pencil"> 2 SKS</i> </li>
                  <li class="list-group-item" style="background-color : #80C4E9"><i class="bi bi-geo-alt-fill">D.2.J</i></li>
                </ul>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="width: 18rem; background-color : #FF7F3E;">
                <div class="card-header fw-bold" style="background-color : #ffff">
                  Rabu
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="background-color : #FF7F3E">BASIS DATA <br> 
                  <div class="waktu" ><i class="bi bi-stopwatch"> 08:40 - 10:20</i></div>    
                  </li>
                  <li class="list-group-item" style="background-color : #FF7F3E">A11.4315 <i class="bi bi-pencil"> 4 SKS</i> </li>
                  <li class="list-group-item" style="background-color : #FF7F3E"><i class="bi bi-geo-alt-fill">H.4.1</i></li>
                </ul>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" >SISTEM INFORMASI <br> 
                  <div class="waktu" ><i class="bi bi-stopwatch"> 12:30 - 15:00</i></div>    
                  </li>
                  <li class="list-group-item" >A11.4507 <i class="bi bi-pencil"> 3 SKS</i> </li>
                  <li class="list-group-item" ><i class="bi bi-geo-alt-fill">H.5.10</i></li>
                </ul>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="width: 18rem;">
                <div class="card-header" style="background-color : #CB9DF0">
                  Kamis
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" >REKAYASA PERANGKAT LUNAK <br> 
                  <div class="waktu" ><i class="bi bi-stopwatch"> 09:30 - 12:00</i></div>    
                  </li>
                  <li class="list-group-item">A11.4313 <i class="bi bi-pencil"> 3 SKS</i> </li>
                  <li class="list-group-item"><i class="bi bi-geo-alt-fill">H.5.10</i></li>
                </ul>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="background-color : #CB9DF0">LOGIKA INFORMATIKA <br> 
                  <div class="waktu" ><i class="bi bi-stopwatch"> 12:30 - 15:00</i></div>    
                  </li>
                  <li class="list-group-item" style="background-color : #CB9DF0">A11.4319 <i class="bi bi-pencil"> 3 SKS</i> </li>
                  <li class="list-group-item" style="background-color : #CB9DF0"><i class="bi bi-geo-alt-fill">H.4.10</i></li>
                </ul>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="width: 18rem ;background-color: #00FF9C;">
                <div class="card-header" style="background-color: #ffff">
                  Jumat
                </div>
                <ul class="list-group list-group-flush " >
                  <li class="list-group-item" style="background-color: #00FF9C">BASIS DATA <br> 
                  <div class="waktu" ><i class="bi bi-stopwatch"> 10:20 - 12:00</i></div>    
                  </li>
                  <li class="list-group-item" style="background-color: #00FF9C">A11.4315 <i class="bi bi-pencil"> 4 SKS</i> </li>
                  <li class="list-group-item" style="background-color: #00FF9C"><i class="bi bi-geo-alt-fill">D.3.M</i></li>
                </ul >
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">SISTEM OPERASI <br> 
                  <div class="waktu" ><i class="bi bi-stopwatch"> 12:30 - 15:00</i></div>    
                  </li>
                  <li class="list-group-item">A11.4301 <i class="bi bi-pencil"> 3 SKS</i> </li>
                  <li class="list-group-item"><i class="bi bi-geo-alt-fill">H.4.9</i></li>
                </ul>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="background-color: #00FF9C">PROBABILITAS DAN STATISTIK <br> 
                  <div class="waktu" ><i class="bi bi-stopwatch"> 15:30 - 18:00</i></div>    
                  </li>
                  <li class="list-group-item" style="background-color: #00FF9C">A11.4311 <i class="bi bi-pencil"> 3 SKS</i> </li>
                  <li class="list-group-item" style="background-color: #00FF9C"><i class="bi bi-geo-alt-fill">H.4.9</i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        </section>

    <br>
            <!-- footer begin -->
                <footer class="text-center p-5 bg-danger-subtle">
                    <div>
                        <a href="https://www.instagram.com/udinusofficial"
                        ><i class="bi bi-instagram h2 p-2 text-dark"></i
                        ></a>
                        <a href="https://twitter.com/udinusofficial"
                        ><i class="bi bi-twitter h2 p-2 text-dark"></i
                        ></a>
                        <a href="https://wa.me/+62812685577"
                        ><i class="bi bi-whatsapp h2 p-2 text-dark"></i
                        ></a>
                    </div>
                    <div>Panji Kusumo &copy; 2023</div>
                </footer>
            <!-- footer end -->

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  <style>
</style>
</html>
