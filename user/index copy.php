<?php
if (!isset($_SESSION['role'])) {
    header("location: login.php");
    exit();
}
include "../koneksi.php"; 
?>


<section id="hero" class="text-center text-sm-start p-5 bg-danger-subtle">
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
            <div class="gambar col-md-4">
                <img src="../gambar/foto2.jpg" class="img-fluid" width="500" alt="" />
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
      <h1 class="fw-bold display-4 pb-3">article </h1>
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql); 

        $no = 1;
        while($row = $hasil->fetch_assoc()){
          ?>
          <div class="col">
            <div class="card h-100">
              <img src="../gambar/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
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


    <section id="gallery" class="text-center p-5 bg-light">
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
                <img src="../gambar/<?php echo $row['gambar']; ?>" class="d-block w-100" alt="Gallery Image" />
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

        <section id="profile">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-md-4">
                <img src="../gambar/𝗪𝗵𝗶𝘁𝗲 𝗥𝗮𝗻𝗴𝗲𝗿.jpg" class="gambar-profil rounded-circle" alt="">
                </div>
                <div class="col-md-8">
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
</html>
