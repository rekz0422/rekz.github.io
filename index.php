<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KODE PROGRAM</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="bootstrap/prism_coy.css" rel="stylesheet" crossorigin="anonymous">
    <link href="mystyle.css" rel="stylesheet" crossorigin="anonymous">


    <script src="bootstrap/prism_coy.js" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="bootstrap/js/popper.min.js" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <section id="nav" class="sticky-top">
        <nav class="navbar navbar-light bg-info">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Rekz</a>

                <div class="offcanvas offcanvas-start text-bg-info" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU</h5>
                        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav d-flex justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="?page=home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?content=content&dir2=website&page=website">Website</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?content=content&dir2=eclipse&page=eclipse">Eclipse</a>
                            </li>
                            <li class="nav-item">
                                <a href="?content=content&dir2=universitas&page=universitas" class="nav-link">Universitas</a>
                            </li>
                            <li class="nav-item">
                                <a href="?content=content&dir2=design&page=design" class="nav-link">Desain</a>
                            </li>
                            <!-- dropdown  -->

                            <!-- end dropdown  -->
                        </ul>
                        <div class="d-flex">
                            <a  href="https://wa.me/6282194897880">
                                <img class="mt-5" src="icon/whatsapp.svg" width="62px" height="62px" class="img-fluid">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
    </section>

    <section id="page">
        <div class="container-fluid p-3">
            <?php

            $dir = 'page';
            @$dir1 = $_GET['content'];
            @$dir2 = $_GET['dir2'];

            @$page = $_GET['page'];

            if ($page != "") {
                include "$dir/$dir1/$dir2/$page.php";
            } else {
                include "page/home.php";
            }
            ?>
        </div>
    </section>

</body>

</html>