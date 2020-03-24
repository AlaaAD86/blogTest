<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>MyBlog</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">My Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

            </ul>
            <div class="col-lg-2">
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">SETTINGS</a>
                    <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="caret"></span>
                    </a>


                    <ul class="dropdown-menu">

                        <?php $login_url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']; ?>

                        <?php if ($login_url == 'http://127.0.0.1/Blog/index.php') : ?>
                            <li><a class="dropdown-item" href="login.php"> Login </a></li>

                        <?php elseif (isset($_SESSION['username'])) : ?>
                            <li><a class="dropdown-item" href="dashboard.php"> Dashboard </a></li>
                            <li><a class="dropdown-item" href="profile.php"> Add Profile </a></li>
                            <li><a class="dropdown-item" href=""> Add post </a></li>
                            <li><a class="dropdown-item" href="logout.php"> Logoout </a></li>
                        <?php else :  ?>
                            <li><a class="dropdown-item" href="index.php"> Register </a></li>

                        <?php endif;  ?>

                    </ul>
                </div>
            </div>
        </div>
    </nav>