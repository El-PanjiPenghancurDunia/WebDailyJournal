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
                <a class="nav-link active" id="activelink" aria-current="page" href="gallery.php">Gallery</a>
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
    <!-- <section id="gallery" class="text-center p-5 bg-danger-subtle">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Gallery</h1>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="gambar/foto1.jpeg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="gambar/foto2.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="gambar/foto3.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="gambar/foto2.jpg" class="d-block w-100" alt="..." />
            </div>
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
    <br /> -->
    <br>

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
</html>
