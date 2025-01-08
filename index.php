<?php

include "koneksi.php";  


//check jika belum ada user yang login arahkan ke halaman login
// if (!isset($_SESSION['username'])) { 
// 	header("location:login.php"); 
// } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Daily Journal | Admin</title>
    <link rel="icon" href="../img/logo.png" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
    />
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
        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
        }

    </style>
</head>
<body>
<?php include 'navbar/nav.php'; ?>
      <!-- nav begin -->
        <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top bg-danger-subtle" >
            <div class="container">
                <a class="navbar-brand" href="#">Daily Journal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a class="nav-link active" id="activelink" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="articlee.php">Article</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="schedule.php">Schedule</a>
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
      <!-- nav end -->
    
        <section id="hero" class="text-center text-sm-start p-5 bg-danger-subtle">
          <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <div class="gambar col-md-4">
                    <img src="gambar/foto2.jpg" class="img-fluid" width="500" alt="" />
                </div>
                <div class="col-md-8">
                    <h1 class="fw-bold display-4" id="nav1">Ini Adalah Tampilan Home</h1>
                    <h4 class="lead display-6">
                    Gambar disamping adalah sebuah gambar dimana seorang pria menunjuk plat mobil BMW berwarna hitam bertuliskan "H 111 TAM" atau bisa juga disebut <b>HITAM</b> , Karena itulah orangnya mengambil gambar plat nomor mobil tersebut, tidak lain dan bukan adalah karena <b> UNIQUE</b>.
                    </h4>
                </div>
            </div>
          </div>
        </section>

      <section id="article" class="text-center p-5">
          <div class="container">
            <h1 class="fw-bold display-4 pb-3" id="nav1">article </h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
              <?php
              $sql = "SELECT * FROM article ORDER BY tanggal DESC";
              $hasil = $conn->query($sql); 

              $no = 1;
              while($row = $hasil->fetch_assoc()){
                ?>
                <div class="col">
                  <div class="card h-100">
                    <img src="gambar/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                    <div class="card-body">
                      <h5 class="card-title"><?= $row["judul"]?></h5>
                      <p class="card-text">
                        <?= $row["isi"]?>
                      </p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary">
                        <?= $row["tanggal"]?>
                      </small>
                    </div>
                  </div>
                </div>
                <?php
              }
              ?> 
            </div>
          </div>
        </section>
      <!-- article end -->


          <section id="schedule" class="text-center p-5 bg-danger-subtle ">
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


      <section id="gallery" class="text-center p-5 ">
          <div class="container">
              <h1 class="fw-bold display-4 pb-3">Gallery</h1>
              <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                  <?php
                  // Query untuk mengambil data dari tabel gallery
                  $query = "SELECT * FROM gallery ORDER BY tanggal DESC";
                  $result = mysqli_query($conn, $query);
                  $first = true;
                  
                  while($row = mysqli_fetch_assoc($result)) {
                  $activeClass = $first ? 'active' : '';
                  ?>
                  <div class="carousel-item <?php echo $activeClass; ?>">
                      <img src="gambar/<?php echo $row['gambar']; ?>" class="d-block w-100" alt="Gallery Image" />
                      <div class="carousel-caption d-none d-md-block">
                      <p>Uploaded by: <?php echo $row['username']; ?></p>
                      <p>Date: <?php echo $row['tanggal']; ?></p>
                      </div>
                  </div>
                  <?php
                  $first = false;
                  }
                  ?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
              </div>
          </div>
      </section>
    <br>   
    
    <!-- Profile Section -->

    <section id="profile" class="bg-danger-subtle">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-md-4">
                <img src="gambar/𝗪𝗵𝗶𝘁𝗲 𝗥𝗮𝗻𝗴𝗲𝗿.jpg" class="gambar-profil rounded-circle" alt="">
                </div>
                <div class="col-md-8 ahsiap">
                    <div class="biodata">
                        <h1 class="display-4">BIODATA MAHASISWA</h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="itemss ">
                                    <h5 class="fw-bold text-primary">Nama</h5>
                                    <p class="">Panji Kusumo</p>
                                </div>
                                <div class="itemss ">
                                    <h5 class="fw-bold text-primary">Nim</h5>
                                    <p class="">A11.2023.15423</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="itemss ">
                                    <h5 class="fw-bold text-primary">Semester</h5>
                                    <p class="">3</p>
                                </div>
                                <div class="itemss ">
                                    <h5 class="fw-bold text-primary">Tanggal Lahir</h5>
                                    <p class="">Pati, 29 September 2005</p>
                                </div>
                            </div>
                            <hr>    
                            <div class="col-md-6">
                                <div class="button-link">
                                        <a href="https://www.facebook.com/panji.kusumo.5458" class="facebook"><i class="bi bi-facebook"> facebook</i></a>
                                        <a href="https://www.instagram.com/p.paanji/" class="instagram"><i class="bi bi-instagram"> instagram</i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- footer begin -->
    <footer class="text-center p-5">
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
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
    ></script>
    <style>
      #profile{
    padding : 80px 0;
    }
    .gambar-profil{
        height : 350px;
        width : 350px;
        object-fit : cover;
        border: 5px solid #fff;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    .biodata{
      padding : 50px;
      border-radius : 10px;
      box-shadow : 0 5px 10px rgba(0,0,0, .2);
      background-color : white;
    }

    .button-link a{
        text-decoration : none;
        padding : 10px;
        margin: 3px;
        
    } 
    .facebook{
        border-radius : 10px; 
        border: 1px solid blue;
        background-color : #fff;
    }
    
    .facebook:hover{
        color : white;
        background-color : blue;

    }
    .instagram{
        border-radius : 10px; 
        border: 1px solid blue;
        background-color : #fff;
    }
    
    .instagram:hover{
        color : white;
        background-color : blue;

    }
    .twitter{
        border-radius : 10px; 
        border: 1px solid blue;
        background-color : #fff;
    }
    
    .twitter:hover{
        color : white;
        background-color : blue;

    }
    </style>
</body>
</html> 