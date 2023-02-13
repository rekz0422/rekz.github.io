<!-- index content-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: desain1::</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../boostrap/js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="container-fluid">
        <!-- nampilin img drive google  -->
        
        <!-- end  -->
        <!-- sidebar -->
        <div class="sidebar text-center">
            <img src="https://drive.google.com/uc?export=view&id=1_6xSkNnOdTn3DfkDnl_vCq-eBy7-xP1T" class="img-fluid">
            <ul class="nav flex-column mt-5">
                <li class="nav-item">
                    <a class="nav-link" href="?page=home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=nav1">NAV LINK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=nav2">NAV LINK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modalKeluar">LOGOUT</a>
                </li>
            </ul>

        </div>
        <!-- end sidebar  -->
        <!-- Modal keluar -->
        <div class="modal" id="modalKeluar">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">LOG OFF SISTEM</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Apakah anda mau keluar ?
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <a class="btn btn-success" href="../../../../index.php?content=content&dir2=design&page=design">YA</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- end modal keluar  -->

        <!-- page/halaman  -->
        <div class="content">
            <?php
            $dir = 'pages';
            $page = @$_GET['page'];
            if ($page != "") {
                include("$dir/$page.php");
            } else {
                include("$dir/home.php");
            }
            ?>

        </div>

        <!-- end page/halaman  -->
    </div>
</body>

</html>