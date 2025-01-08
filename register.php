<?php
session_start();
include "koneksi.php";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $error_message = '';

    // Validate inputs
    if (empty($username) || empty($password) || empty($confirm_password)) {
        $error_message = "Semua field harus diisi";
    } elseif ($password !== $confirm_password) {
        $error_message = "Password tidak cocok";
    } else {
        // Check if username already exists
        $check_stmt = $conn->prepare("SELECT username FROM user WHERE username = ?");
        $check_stmt->bind_param("s", $username);
        $check_stmt->execute();
        $result = $check_stmt->get_result();
        
        if ($result->num_rows > 0) {
            $error_message = "Username sudah digunakan";
        } else {
            // Insert new user
            $insert_stmt = $conn->prepare("INSERT INTO user (username, password, role) VALUES (?, ?, 'user')");            
            $insert_stmt->bind_param("ss", $username, $password);
            
            if ($insert_stmt->execute()) {
                $_SESSION['registration_success'] = true;
                header("location:login.php");
                exit();
            } else {
                $error_message = "Terjadi kesalahan saat mendaftar";
            }
            $insert_stmt->close();
        }
        $check_stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        .register-form h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .form-floating {
            margin-bottom: 15px;
        }
        .btn-register {
            background-color: #0d6efd;
            border: none;
            padding: 12px;
            font-size: 16px;
        }
        .btn-register:hover {
            background-color: #0b5ed7;
        }
        .password-requirements {
            font-size: 0.85rem;
            color: #6c757d;
            margin-top: -10px;
            margin-bottom: 15px;
        }
        .error-message {
            color: #dc3545;
            font-size: 0.875rem;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="register-form">
                    <h2 class="mb-4">Register Account</h2>

                    <?php if (isset($error_message) && !empty($error_message)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo htmlspecialchars($error_message); ?>
                    </div>
                    <?php endif; ?>

                    <form class="needs-validation" method="post" novalidate>
                        <!-- Username input -->
                        <div class="form-floating mb-3">
                            <input type="text" 
                                   class="form-control" 
                                   id="username" 
                                   name="username" 
                                   placeholder="Username"
                                   required
                                   minlength="3"
                                   pattern="[a-zA-Z0-9]+"
                                   value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
                            <label for="username">
                                <i class="fas fa-user me-2"></i>Username
                            </label>
                            <div class="invalid-feedback">
                                Username harus minimal 3 karakter dan hanya boleh mengandung huruf dan angka.
                            </div>
                        </div>

                        <!-- Password input -->
                        <div class="form-floating mb-3">
                            <input type="password" 
                                   class="form-control" 
                                   id="password" 
                                   name="password" 
                                   placeholder="Password"
                                   required
                                   minlength="3">
                            <label for="password">
                                <i class="fas fa-lock me-2"></i>Password
                            </label>
                            <div class="invalid-feedback">
                                Password harus minimal 6 karakter.
                            </div>
                        </div>

                        <!-- Confirm Password input -->
                        <div class="form-floating mb-3">
                            <input type="password" 
                                   class="form-control" 
                                   id="confirm_password" 
                                   name="confirm_password" 
                                   placeholder="Confirm Password"
                                   required>
                            <label for="confirm_password">
                                <i class="fas fa-lock me-2"></i>Confirm Password
                            </label>
                            <div class="invalid-feedback">
                                Password tidak cocok.
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary w-100 btn-register mb-3">
                            <i class="fas fa-user-plus me-2"></i>Register
                        </button>

                        <!-- Additional links -->
                        <div class="text-center">
                            <div class="mt-2">
                                Sudah punya akun? <a href="login.php" class="text-decoration-none">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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

            // Check if passwords match
            var password = document.getElementById("password")
            var confirm_password = document.getElementById("confirm_password");

            function validatePassword(){
                if(password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("Passwords Don't Match");
                } else {
                    confirm_password.setCustomValidity('');
                }
            }

            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
        })()
    </script>
</body>
</html>