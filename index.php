<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('location: dashboard.php');
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eLearning System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />


</head>
<body>
    <div class="container mt-2">
        <div class="jumbotron text-center" id="welcome-box">
            <h1>
                <i class="fas fa-laptop-code text-primary"></i>
                <i class="fas fa-user-graduate text-danger"></i>
            </h1>
            <h2>Welcome To eLearning Platform!</h2>
            <p>You can register as a student or a mentor. Click on the Register or Login to get started!</p>
            <div class="text-center">
                <a href="#" id="login-btn" class="btn btn-primary px-5">Login</a>
                <a href="#" id="register-btn" class="btn btn-secondary px-5">Register</a>
            </div>
        </div>

        <!-- Registeration section -->
        <div class="row justify-content-center" id="register-box" style="display:none;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-light text-center">
                        <h3 class="text-primary">Register</h3>
                    </div>
                    <div class="card-body">
                        <div id="regMsg"></div>
                        <form action="" id="register-form" method="post">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="category">Register as a:</label>
                                <select class="form-control" name="category" id="category" required>
                                    <option disabled selected>Select option</option>
                                    <option value="mentee">Mentee</option>
                                    <option value="mentor">Mentor</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" minlength="5" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="cpassword"> Confirm Password</label>
                                <input type="password" name="cpassword" id="cpassword" minlength="5" class="form-control" required>
                                <div id="regAlert" class="text-danger"></div>
                            </div>
                            
                            <button type="submit" id="reg-btn" class="btn btn-info btn-block">Register</button>
                            <div class="mt-2">
                                <p>Already have an account?
                                    <a href="#" id="login-link">login here</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Registration End -->
        <!-- Login Starts -->
        <div class="row justify-content-center" id="login-box" style="display:none;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-light text-center">
                        <h3 class="text-success">Login</h3>
                    </div>
                    <div class="card-body">
                        <div id="logMsg"></div>
                        <form action="#" method="post" id="login-form">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="lpassword">Password</label>
                                <input type="password" name="lpass" id="lpass" class="form-control" required>
                            </div>
                            <button type="submit" id="log-btn" class="btn btn-success btn-block">Login</button>
                            <div class="mt-2">
                                <p>Don't have an account?
                                    <a href="#" id="register-link">register here</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login End -->
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw==" crossorigin="anonymous"></script>
<script src="assets/js/app.js"></script>
</body>
</html>