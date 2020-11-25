<?php
    session_start();
    require_once 'assets/php/inc/auth.php';
    $auth = new Auth();
    if(!isset($_SESSION['user'])){
        header('location: index.php');
        die;
    }
    $User = $auth->user($_SESSION['user']);
    $name = $User['name'];
    $id = $User['id'];
    $email = $User['email'];
    $category = $User['category'];

    $mentor = $auth->getMentor();
    $mentee = $auth->getMentee();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eLearning System | Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="mt-2">Name: <?= $name ; ?> </h1>
                <h2>Postion: <?= $category; ?></h2>
                
                <!-- Mentee Display -->
                <?php if($category === 'mentee') : ?>
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Mentor Name</th>
                    </thead>
                    <tbody>
                        <?php foreach($mentor as $key=> $ment): ?>
                            <tr>
                                <td><?= $key+1 ;?></td>
                                <td><?= $ment['name'] ;?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>

                <!-- Mentor Display -->
                <?php if($category === 'mentor') : ?>
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Mentee Name</th>
                    </thead>
                    <tbody>
                        <?php foreach($mentee as $key=> $mente): ?>
                            <tr>
                                <td><?= $key+1 ;?></td>
                                <td><?= $mente['name'] ;?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>
            <a href="assets/php/logoutController.php" class="btn btn-secondary">Logout</a>
        </div>
       
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw==" crossorigin="anonymous"></script>
<script src="assets/js/app.js"></script>
</body>
</html>