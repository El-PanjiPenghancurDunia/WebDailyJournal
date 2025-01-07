<?php
include "../koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daily Journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <style>
        .profile-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }
        .profile-image {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .bio-details {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
        }
        .bio-item {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
    </style>
    <link rel="icon" href="gambar/Logo-Udinus-Official-02-1-1280x1280.png" />  
    </head>
  <body>
    

    <!-- Profile Section -->
    <!-- <section class="profile-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center mb-4 mb-md-0">
                        <img src="../gambar/chaewon wallpaper 🏵1.jpg" class="profile-image rounded-circle" alt="Kim Chaewon">
                    </div>
                    <div class="col-md-8">
                        <div class="bio-details">
                            <h1 class="display-4 mb-4">Student Profile</h1>
                            <div class="bio-item">
                                <h5 class="text-primary">Name</h5>
                                <p class="lead mb-0">KIM CHAEWON</p>
                            </div>
                            <div class="bio-item">
                                <h5 class="text-primary">Student ID</h5>
                                <p class="lead mb-0">A11.2023.15423</p>
                            </div>
                            <div class="bio-item">
                                <h5 class="text-primary">Semester</h5>
                                <p class="lead mb-0">3</p>
                            </div>
                            <div class="social-links mt-4">
                                <a href="#" class="btn btn-outline-primary me-2">
                                    <i class="bi bi-linkedin"></i> LinkedIn
                                </a>
                                <a href="#" class="btn btn-outline-primary me-2">
                                    <i class="bi bi-github"></i> GitHub
                                </a>
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-envelope"></i> Email
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> -->

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
    *body{
        background-color : grey;
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
