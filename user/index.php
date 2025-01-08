<?php

include "../koneksi.php";  

session_start();
if (!isset($_SESSION['role'])) {
    header("location: login.php");
    exit();
}

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
    <link rel="icon" href="img/logo.png" />
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
        #content {
            min-height: 460px;
            width: 100%
        } 
        .dropdown-menu {
            margin-top: 0;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .navbar-nav{
              font-weight  :    bold;
        }
        #activelink{
          border-radius : 10px; 
          border: 1px  ;
          background-color : #C65BCF;  
          color : white;
        }
          
          #activelink:hover{
            background-color: #FCC737;    
            color : #4335A7;     
        }        
    </style>
</head>
<body>
<?php include '../navbar/nav.php'; ?>
  <!-- nav begin -->
  <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top bg-danger-subtle">
        <div class="container">
            <a class="navbar-brand" href="">Ayam Geprek</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                    <?php echo getNavigation($_SESSION['role']); ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav end -->
    <!-- content begin -->
    <section id="content" class="p-2">
        <div class="container-fluid"> 
            <?php
            if(isset($_GET['page'])){
            ?>
              
                <?php
                include($_GET['page'].".php");
            }else{
            ?>
                <?php
                include("index copy.php");
            }
            ?>
        </div> 
    </section>
    <!-- content end -->
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
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
    ></script>
</body>
</html> 