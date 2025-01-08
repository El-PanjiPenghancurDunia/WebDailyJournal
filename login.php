<?php
session_start();
include "koneksi.php";

// In login.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT username, role FROM user WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        // Store both username and role in session
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        
        // Redirect based on role
        switch ($user['role']) {
            case 'admin':
                header("location: ./admin/admin.php");
                break;
            default:
                header("location: ./user/index.php");
                break;
        }
        exit();
    }
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
</head>
<body>

<?php 
    // $user = "admin";
    // $pass = "123";
?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-form ">
                    <h2 class="mb-4">Login</h2>

                    <form class="needs-validation" method="post" novalidate>
                        <!-- Username input -->
                        <div class="form-floating mb-3">
                            <input type="text" 
                                   class="form-control" 
                                   id="username" 
                                   name="username" 
                                   placeholder="Username"
                                   required>
                            <label for="username">
                                <i class="fas fa-user me-2"></i>Username
                            </label>
                            <div class="invalid-feedback">
                                Please enter your username.
                            </div>
                        </div>

                        <!-- Password input -->
                        <div class="form-floating mb-4">
                            <input type="password" 
                                   class="form-control" 
                                   id="password" 
                                   name="password" 
                                   placeholder="Password"
                                   required>
                            <label for="password">
                                <i class="fas fa-lock me-2"></i>Password
                            </label>
                            <div class="invalid-feedback">
                                Please enter your password.
                            </div>
                        </div>

                        <!-- Remember me checkbox -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">
                                Remember me
                            </label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary w-100 btn-login mb-3">
                            <i class="fas fa-sign-in-alt me-2"></i>Login
                        </button>

                        <!-- Additional links -->
                        <div class="text-center">
                            
                            <div class="mt-2">
                                Don't have an account? <a href="register.php" class="text-decoration-none">Sign Up</a>
                            </div>
                            <a href="index.php" class="text-decoration-none">Keluar</a>
                        </div>
                    </form>
                    
                <div class="text-center">

                </div>
            </div>
        </div>
    </div>
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-form h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .form-floating {
            margin-bottom: 15px;
        }
        .btn-login {
            background-color: #0d6efd;
            border: none;
            padding: 12px;
            font-size: 16px;
        }
        .btn-login:hover {
            background-color: #0b5ed7;
        }
        .input-group-text {
            background: none;
            border-left: none;
            cursor: pointer;
        }
        .form-control:not(:placeholder-shown) {
            background-color: white;
        }
    </style>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Form Validation Script -->
    <script>
        // Form validation
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>

<?php
}
?>
