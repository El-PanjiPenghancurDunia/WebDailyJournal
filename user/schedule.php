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
    <link rel="icon" href="gambar/Logo-Udinus-Official-02-1-1280x1280.png" />  
    </head>
  <body>
    

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
                <div class="card-header fw-bold" style="background-color : #CB9DF0">
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
                <div class="card-header fw-bold" style="background-color: #ffff">
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



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  <style>
</style>
</html>
