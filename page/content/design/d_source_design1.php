<head>
    <link rel="stylesheet" href="./././bootstrap/prism_coy.css">

    <link rel="stylesheet" href="./././page/css/design/design1.css">

    <script src="./././bootstrap/prism_coy.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <section id="sect_header">
                            <h1>SOURCE DESAIN 1</h1>
                            <hr>
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/KzEYGM21IaU" title="YouTube video" allowfullscreen></iframe>
                            </div>
                        </section>
                        <section id="sect_penjelasan">
                            <ol class="pt-5">
                                <!-- nampilin img drive google  -->
                                <?php
                                $drive = "https://drive.google.com/uc?export=view&id=";
                                ?>
                                <!-- end  -->

                                <h5 class="pb-2">Perhatikan Penjelasan dengan Cermat</h5>
                                <li>Saran Penulis kalian menonton video diatas atau klik <a href="https://www.youtube.com/watch?v=KzEYGM21IaU" target="_blank">
                                        disini untuk melihat videonya </a></li>
                                <li>Jalankan xampp kalian dan klik start </li>
                                <li>Buatlah sebuah folder baru pada <b>C:\xampp\htdocs\</b> dengan nama <b>desain1</b></li>
                                <li>Buatlah folder <b>bootstrap</b> di dalam <b> folder desain1</b></li>
                                <li>Download bootstrap klik <a href="https://drive.google.com/file/d/1-eNA8lwH63DcLvzndbimwnoXTWPraTCw/view?usp=share_link" target="_blank">disini</a></li>
                                <li>Extract dan pindahkan folder <b>css & js</b> ke folder bootstrap yang berada di <b>C:\xampp\htdocs\desain1\</b></li>
                                <li>Tambahkan folder baru ke <b>C:\xampp\htdocs\desain1\</b> dengan nama <b>icon</b> & <b>pages</b></li>
                                <div class="card">
                                    <div class="card-body">
                                        <img src="<?= $drive ?>1Sss-qnEyzImUwmEPn4NHtFW42eDnFgIX" class="img-fluid" />
                                    </div>
                                </div>
                                <li>Buatlah 2 file baru dengan nama <b>index.php</b> & <b>index.css</b></li>
                                <div class="card">
                                    <div class="card-body">
                                        <img src="<?= $drive ?>1dp_CG4UrABz_VyUYJadh8yk_glESpuAo" class="img-fluid" />
                                    </div>
                                </div>
                                <li>Buka file <b>index.php</b> & masukan code dibawah ini</li>
                                <div>
                                    <!-- source index.php -->
                                    <pre class="line-number">
                                    <code class="language-html">
                                        <script type="text" class="language-markup">
                                        <!-- index content-->
                                        <!DOCTYPE html>
                                        <html lang="en">

                                        <head>
                                            <meta charset="UTF-8">
                                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                            <title>:: desain1::</title>
                                            <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
                                            <link rel="stylesheet" href="index.css">

                                            <script src="bootstrap/js/bootstrap.bundle.min.js"></script>&lt;/script&gt;<script type="text" class="language-markup">
                                            <script src="boostrap/js/popper.min.js"></script>&lt;/script&gt;<script type="text" class="language-markup">
                                            <script src="bootstrap/js/bootstrap.min.js"></script>&lt;/script&gt;<script type="text" class="language-markup">
                                        </head>

                                        <body>
                                            <div class="container-fluid">
                                                <!-- sidebar -->
                                                <div class="sidebar text-center">
                                                    <img src="icon/School_200+.svg" class="img-fluid">
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
                                                                <a class="btn btn-success" href="#">YA</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end modal keluar  -->

                                                <!-- page/halaman  -->
                                            
                                                <div class="content">
                                                    </script>&lt;?php<script type="text" class="language-markup">                                                
                                                        $dir = 'pages';
                                                        $page = @$_GET['page'];
                                                        if ($page != "") {
                                                            include("$dir/$page.php");
                                                        } else {
                                                            include("$dir/home.php");
                                                        }
                                                    </script>?&gt;<script type="text" class="language-markup">
                                                </div>
                                                <!-- end page/halaman  -->
                                            </div>
                                        </body>

                                        </html>
                                        </script>

                                    </code>
                                </pre>
                                    <!-- end source index.php -->
                                </div>
                                <li>Buka file <b>index.css</b> & masukan code css dibawah ini</li>
                                <div>
                                    <!-- source index.css -->
                                    <pre class="line-number">
                                    <code class="language-css">
                                        /* sidebar  */
                                        .sidebar{
                                            background-color: #62a7d2;
                                            position: fixed;
                                            padding-top: 3rem;
                                            left: 0;
                                            width: 300px;
                                            height: 100vh;
                                            bottom: 0;
                                        }
                                        .sidebar a{ 
                                            cursor: pointer;   
                                            text-decoration: none;
                                            color: black;
                                            font-size: 20px;
                                            font-weight: bold;
                                        }
                                        .sidebar a:hover{
                                            cursor: pointer;
                                            color: white;
                                        }
                                        /* end sidebar  */

                                        /* content  */
                                        .content{
                                            margin-left: 300px;
                                        }
                                        /* end content  */
                                    </code>
                                </pre>
                                    <!-- end source index.css -->
                                </div>
                                <li>Download 4 icon dibawah ini dan pindahkan ke folder icon</li>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <ul>
                                            <li><a href="https://drive.google.com/file/d/1LpnIqh9JP3IpzJ1YxZRuS7hD1fZqlU7_/view?usp=share_link" target="_blank">icon 1</a></li>
                                            <li><a href="https://drive.google.com/file/d/1_6xSkNnOdTn3DfkDnl_vCq-eBy7-xP1T/view?usp=share_link" target="_blank">icon 2</a></li>
                                            <li><a href="https://drive.google.com/file/d/14kr1ZvAlSC-UAPVfKV8Appnv3CBiDtxm/view?usp=share_link" target="_blank" rel="noopener noreferrer">icon 3</a></li>
                                            <li><a href="https://drive.google.com/file/d/1sG1Cb4dBT4Wdbdb3cgyk8Mgf1wtOuf4V/view?usp=share_link" target="_blank" rel="noopener noreferrer">icon 4</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-10">
                                        <img src="<?= $drive ?>1VsOpe68DScAjlSxHIJ2AL9F86JYrJB8D" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <li>Buka folder <b>pages</b> dan buatlah <b> 5 file baru php & css</b> seperti gambar dibawah</li>
                                <div class="card">
                                    <div class="card-body">
                                        <img src="<?= $drive ?>1vdY8lYwpLxcMxSZukpukng0z8axz6Y4b" class="img-fluid" />
                                    </div>
                                </div>
                                <li>Buka file <b>home.php</b> & masukan code dibawah</li>
                                <div>
                                    <pre class="line-number">
                                    <code class="language-html">
                                        <!-- source home.php  -->
                                        <script type="text" class="language-markup">
                                            <html>
                                                <head>
                                                    <link rel="stylesheet" href="pages/home.css">
                                                </head>

                                                <body>
                                                    <!-- alert success & welcome  -->
                                                    <!-- alert 1  -->

                                                    <div class="alert alert-dismissible bg_alert1" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                                        <strong>WELCOME !</strong>you can see my design website.
                                                    </div>
                                                    <!-- end alert success & welcome  -->
                                                    <!-- header  -->
                                                    <div class="header">
                                                        <!-- logo  -->
                                                        <div class="card mb-3 mt-3">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-sm-5 d-flex justify-content-end">
                                                                        <!-- <img src="https://drive.google.com/uc?export=view&id=1LpnIqh9JP3IpzJ1YxZRuS7hD1fZqlU7_" class="img-fluid" width="40%" height="40%"> -->
                                                                        <img src="./icon/School_128.svg" class="img-fluid" width="40%" height="40%">
                                                                    </div>
                                                                    <div class="col-sm-7">
                                                                        <div class="mt-3">
                                                                            <h4 class="fs-5">Sistem Desain Website 1</h4>
                                                                            <div class="fs-2 b">DESAIN WEBSITE</div>
                                                                            <p class="mt-2">Jl.Admin no 23 no 24, Ambon, Maluku, Indonesia</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end logo  -->

                                                        <div class="alert bg_alert2 sticky-top">
                                                            <h5>HOME</h5>
                                                        </div>
                                                    </div>
                                                    <!-- end header  -->
                                                    <!-- content  -->
                                                    <div class="row mt-3">
                                                        <div class="col-md">
                                                            <!-- card siswa  -->
                                                            <div class="card bg_card1">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm">
                                                                            <!-- tampilin jumlah siswa  -->
                                                                            <h1>
                                                                                10
                                                                            </h1>
                                                                            <!-- tampilin jumlah siswa  -->
                                                                            <h3 class="mt-4">DATA I</h3>
                                                                        </div>
                                                                        <div class="col-sm d-flex justify-content-end">
                                                                            <!-- <img src="https://drive.google.com/uc?export=view&id=14kr1ZvAlSC-UAPVfKV8Appnv3CBiDtxm" alt=""> -->
                                                                            <img src="./icon/user1_128.svg" class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <a data-bs-toggle="modal" data-bs-target="#modalData">see your data</a>
                                                                </div>
                                                            </div>
                                                            <!-- end card siswa  -->
                                                        </div>
                                                        <div class="col-md">
                                                            <!-- card guru  -->
                                                            <div class="card bg_card2">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm">
                                                                            <h1>8</h1>
                                                                            <!-- tampilin jumlah staf pengajar  -->
                                                                            <h3 class="mt-4">DATA II</h3>
                                                                        </div>
                                                                        <div class="col-sm d-flex justify-content-end">
                                                                            <!-- <img src="https://drive.google.com/uc?export=view&id=1sG1Cb4dBT4Wdbdb3cgyk8Mgf1wtOuf4V" alt=""> -->
                                                                            <img src="./icon/user2_128.svg" class="ïmg-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <a data-bs-toggle="modal" data-bs-target="#modalData2">see your data</a>
                                                                </div>
                                                            </div>
                                                            <!-- end card  -->
                                                        </div>
                                                    </div>
                                                    <!-- modal data   -->
                                                    <!-- modal data -->
                                                    <div class="modal" id="modalData">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">DATA I</h4>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                                </div>
                                                                <!-- Modal body -->
                                                                <div class="modal-body">
                                                                    <!-- table  -->
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <thead class="sticky-top">
                                                                                <tr>                                                                                    
                                                                                    <th class="no">No</th>
                                                                                    <th>Nama</th>
                                                                                    <th>Admin</th>
                                                                                    <th>Admin</th>
                                                                                    <th>Admin</th>
                                                                                    <th>Admin</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                </script>&lt;?php<script type="text" class="language-markup">
                                                                                        $no = 1;
                                                                                </script>?&gt;<script type="text" class="language-markup">
                                                                                <tr>                                                                               
                                                                                    <th class="no"></script>&lt;?<script type="text" class="language-markup">= $no++; </script>?&gt;<script type="text" class="language-markup"></th>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>                                                                                    
                                                                                </tr>
                                                                                <tr>                                                                               
                                                                                    <th class="no"></script>&lt;?<script type="text" class="language-markup">= $no++; </script>?&gt;<script type="text" class="language-markup"></th>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>                                                                                    
                                                                                </tr>
                                                                                <tr>                                                                               
                                                                                    <th class="no"></script>&lt;?<script type="text" class="language-markup">= $no++; </script>?&gt;<script type="text" class="language-markup"></th>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>                                                                                    
                                                                                </tr>
                                                                               
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!-- end table  -->
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end modal data siswa  -->

                                                    <!-- modal data guru  -->
                                                    <div class="modal" id="modalData2">
                                                        <div class="modal-dialog ">
                                                            <div class="modal-content">

                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">DATA II</h4>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                                </div>

                                                                <!-- Modal body -->
                                                                <div class="modal-body">
                                                                    <!-- table  -->
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <thead class="sticky-top">
                                                                                <tr>
                                                                                    <th class="no">No</th>
                                                                                    <th>Nama</th>
                                                                                    <th>admin</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                </script>&lt;?php<script type="text" class="language-markup">
                                                                                        $no = 1;
                                                                                </script>?&gt;<script type="text" class="language-markup">
                                                                                <tr>
                                                                                    <th class="no"></script>&lt;?<script type="text" class="language-markup">= $no++; </script>?&gt;<script type="text" class="language-markup"></th>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>
                                                                                </tr>
                                                                                    <th class="no"></script>&lt;?<script type="text" class="language-markup">= $no++; </script>?&gt;<script type="text" class="language-markup"></th>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>
                                                                                </tr>
                                                                                    <th class="no"></script>&lt;?<script type="text" class="language-markup">= $no++; </script>?&gt;<script type="text" class="language-markup"></th>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>
                                                                                </tr>
                                                                                    <th class="no"></script>&lt;?<script type="text" class="language-markup">= $no++; </script>?&gt;<script type="text" class="language-markup"></th>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>
                                                                               
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!-- end table  -->
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end modal data guru  -->
                                                    <!-- end modal data siswa & guru  -->
                                                    <!-- end content  -->

                                                </body>
                                            </html>
                                        </script>
                                        <!-- end source -->
                                    </code>
                                </pre>
                                </div>
                                <li>Buka file <b>home.css</b> & masukan code dibawah ini</li>
                                <div>
                                    <!-- home.css  -->
                                    <pre class="line-number">
                                    <code class="language-css">
                                        body {
                                            background-color: antiquewhite;
                                        }


                                        /* alert  */
                                        .bg_alert1 {
                                            background-color: #43ea7e;
                                        }

                                        .bg_alert2 {
                                            background-color: #e9738d;
                                        }

                                        /* alert end */

                                        /* card  */
                                        .header .card {
                                            border-left: 9px solid #e9738d;
                                        }

                                        .row .card a {
                                            cursor: pointer;
                                            font-weight: bold;
                                            color: #65645b;
                                            text-decoration: none;
                                        }

                                        .bg_card1 {
                                            background-color: #d0cec2;
                                        }

                                        .bg_card2 {
                                            background-color: #D9CF43;
                                        }

                                        /* end card  */

                                        /* modal  */

                                        /* tabel  */
                                        tr:hover {
                                            cursor: pointer;
                                            background-color: #ee95a8;
                                        }
                                        .table-responsive{
                                            overflow: auto;
                                            height: 550px;
                                        }

                                        .table thead {
                                            background-color: #151313;
                                            color: white;
                                        }

                                        .table tbody {
                                            background-color: #c9cfe3;
                                            color: #000000;
                                        }

                                        .table tbody tr:hover {
                                            cursor: pointer;
                                            background-color: #e9738d;
                                        }

                                        tr,
                                        td {
                                            border: 2px solid white;
                                        }

                                        .table .no{
                                            width: 5%;
                                        }

                                        /* end tabel  */

                                        /* end modal  */
                                    </code>
                                </pre>
                                    <!-- home.css end  -->
                                </div>
                                <li>Buka file <b>nav1.php</b> & masukan code dibawah ini </li>
                                <div>
                                    <pre class="line-number">
                                    <!-- source nav1.php  -->
                                    <code class="language-html">
                                        <script type="text" class="language-markup">
                                            <html>

                                                <head>
                                                    <link rel="stylesheet" href="pages/nav1.css">
                                                </head>

                                                    <body>
                                                        <!-- header  -->
                                                        <div class="alert bg_alert2 mt-3 mb-5 sticky-sm-top">
                                                            <h5>NAV LINK</h5>
                                                        </div>
                                                        <!-- end header  -->

                                                        <!-- content  -->
                                                        <!-- button tambah & cetak  -->
                                                        <div class="ms-3">
                                                            <a class="btn bg_btn1" data-bs-toggle="modal" data-bs-target="#modalTambah">TAMBAH</a>
                                                            <a href="javascript:printDiv('print');" class="btn bg_btn2 no-print">CETAK</a>

                                                        </div>
                                                        <!-- end button tambah & cetak  -->
                                                        <!-- tabel  -->
                                                        <div class="tbl_scroll mt-3" id="print">
                                                            <!-- cetak  -->
                                                            <div class="khusus_cetak">
                                                                <center>
                                                                    <!-- logo  -->
                                                                    <img src="./icon/School_128.svg" style="width: 300px; height: 300px;">
                                                                    <h1>WEBSITE DESAIN</h1>
                                                                    <hr>
                                                                    <h3>Your Data</h3>
                                                                    <!-- end logo  -->
                                                                </center>
                                                            </div>
                                                            <!-- end cetak  -->
                                                            <!-- table  -->
                                                            <table class="table" style="width: 100%;" border="1">
                                                                <thead class="sticky-top">
                                                                    <tr>
                                                                        <th class="no">No</th>
                                                                        <th>Nama</th>
                                                                        <th>Admin</th>
                                                                        <th>Admin</th>
                                                                        <th>Admin</th>
                                                                        <th>Admin</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    </script>&lt;?php<script type="text" class="language-markup">
                                                                            $no = 1;
                                                                    </script>?&gt;<script type="text" class="language-markup">
                                                                    <tr data-bs-toggle="modal" data-bs-target="#mdlData_show">
                                                                        <th class="no"></script>&lt;?<script type="text" class="language-markup">= $no++; </script>?&gt;<script type="text" class="language-markup"></th>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                    <tr data-bs-toggle="modal" data-bs-target="#mdlData_show">
                                                                        <th class="no"></script>&lt;?<script type="text" class="language-markup">= $no++; </script>?&gt;<script type="text" class="language-markup"></th>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                    <tr data-bs-toggle="modal" data-bs-target="#mdlData_show">
                                                                        <th class="no"></script>&lt;?<script type="text" class="language-markup">= $no++; </script>?&gt;<script type="text" class="language-markup"></th>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                    <tr data-bs-toggle="modal" data-bs-target="#mdlData_show">
                                                                        <th class="no"></script>&lt;?<script type="text" class="language-markup">= $no++; </script>?&gt;<script type="text" class="language-markup"></th>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                    <tr data-bs-toggle="modal" data-bs-target="#mdlData_show">
                                                                        <th class="no"></script>&lt;?<script type="text" class="language-markup">= $no++; </script>?&gt;<script type="text" class="language-markup"></th>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                        <td>admin</td>
                                                                    </tr>                
                                                                </tbody>
                                                            </table>
                                                            <!-- end table  -->
                                                        </div>

                                                        <!-- modal  tambah -->
                                                        <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <!-- modal body  -->
                                                                    <div class="modal-body">
                                                                        <form action="#" method="POST">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Nama</label>
                                                                                <input type="text" class="form-control" autocomplete="off" name="nama" placeholder="Nama">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Admin</label>
                                                                                <input type="text" class="form-control" autocomplete="off" name="admin" placeholder="admin">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Admin</label>
                                                                                <select name="jk" class="form-control">
                                                                                    <option value="">Pilih</option>
                                                                                    <option value="Admin">Admin</option>
                                                                                    <option value="Admin">Admin</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Admin</label>
                                                                                <input type="text" class="form-control" autocomplete="off" name="admin" placeholder="admin">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Admin</label>
                                                                                <input type="text" class="form-control" autocomplete="off" name="Admin" placeholder="admin">
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn bg_btn1">Save</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end modal tambah -->

                                                        <!-- modal edit & delete  -->
                                                        <!-- show data  -->
                                                        <div class="modal fade" id="mdlData_show">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">

                                                                    <!-- Modal Header -->
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">edit & Hapus Data</h4>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <!-- Modal body -->
                                                                    <div class="modal-body">
                                                                        <!-- tabel  -->
                                                                        <div class="table-responsive">
                                                                            <table class="table text-center">
                                                                                <thead class="sticky-top">
                                                                                    <tr>
                                                                                        <th>Nama</th>
                                                                                        <th>Admin</th>
                                                                                        <th>Admin</th>
                                                                                        <th>Admin</th>
                                                                                        <th>Admin</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                        <tr>
                                                                                            <td>admin</td>
                                                                                            <td>admin</td>
                                                                                            <td>admin</td>
                                                                                            <td>admin</td>
                                                                                            <td>admin</td>
                                                                                        </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <!-- end tabel  -->
                                                                        <a data-bs-toggle="modal" data-bs-target="#mdlEdit_admin" data-bs-dismiss="modal" class="btn bg_btn3">edit</a>
                                                                        <a data-bs-toggle="modal" data-bs-target="#mdlHapus_admin" data-bs-dismiss="modal" class="btn bg_btn4">delete</a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end show data -->

                                                        <!-- modal edit -->
                                                        <div class="modal fade" id="mdlEdit_admin">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">

                                                                    <!-- Modal Header -->
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Edit Data</h4>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <!-- modal body  -->
                                                                    <div class="modal-body">
                                                                        <form action="#" method="POST">
                                                                            <input type="text" class="form-control" value="admin" name="admin" readonly >
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Nama</label><input type="text" class="form-control" autocomplete="off" value="admin" name="nama" placeholder="Nama">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Admin</label>
                                                                                <input type="text" class="form-control" autocomplete="off" value="admin" name="admin" placeholder="admin">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Admin</label>
                                                                            
                                                                                <select class='form-select' name='admin'>";
                                                                                    <option value="admin">Pilih</option>
                                                                                    <option value="admin">admin</option>
                                                                                    <option value="admin">admin</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label">admin</label>
                                                                                <input type="text" class="form-control" autocomplete="off" name="admin" value="admin" placeholder="admin">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label">admin</label>
                                                                                <input type="text" class="form-control" autocomplete="off" name="admin" value="admin" placeholder="admin">
                                                                            </div>
                                                                            <div class="d-flex">
                                                                                <button type="submit" class="btn bg_btn3 me-auto">Save</button>
                                                                                <a data-bs-toggle="modal" data-bs-target="#mdlData_show" data-bs-dismiss="modal" class=" btn bg_btn1">Back</a>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end edit  -->

                                                        <!-- modal hapus  -->
                                                        <div class="modal fade" id="mdlHapus_admin">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">

                                                                    <!-- Modal Header -->
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Hapus Data</h4>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <!-- modal body  -->
                                                                    <div class="modal-body">
                                                                        <h5 class="mb-2">apakah anda mau menghapus data admin ?</h5>
                                                                        <form action="#" method="POST">
                                                                            <input type="text" name="id" class="form-control" readonly hidden value="admin">
                                                                            <div class="d-flex">
                                                                                <button type="submit" class="btn bg_btn4">Delete</button>
                                                                                <a data-bs-toggle="modal" data-bs-target="#mdlData_show" data-bs-dismiss="modal" class=" btn bg_btn1 ms-auto">back</a>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end modal delete  -->
                                                        <!-- end modal edit & delete  -->

                                                        <!-- end content  -->


                                                        <!-- frame cetak  -->
                                                        <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
                                                        <!-- script cetak sebagian  -->
                                                        <script type="text/javascript">
                                                            function printDiv(elementId) {
                                                                var a = document.getElementById('print').value;
                                                                var b = document.getElementById(elementId).innerHTML;
                                                                window.frames["print_frame"].document.title = "DESAIN WEBSITE";
                                                                window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
                                                                window.frames["print_frame"].window.focus();
                                                                window.frames["print_frame"].window.print();
                                                            }</script>&lt;/script&gt;<script type="text" class="language-markup">
                                                    </body>
                                            </html>
                                        </script>
                                        
                                    </code>
                                    <!-- end source -->
                                </pre>
                                </div>

                                <li>Buka file <b>nav1.css</b> & masukan code css dibawah ini</li>
                                <div>
                                    <!-- source index.css -->
                                    <pre class="line-number">
                                    <code class="language-css">
                                        body {
                                            background-color: antiquewhite;
                                            height: 100vh;
                                        }

                                        /* header  */
                                        .bg_alert2 {
                                            background-color: #e9738d;
                                        }

                                        /* end header  */

                                        /* content  */
                                        /* button  */
                                        .bg_btn1 {
                                            border: 3px solid #566AA6;
                                            font-weight: bold;
                                            color: #566AA6;
                                        }

                                        .bg_btn1:hover {
                                            background-color: #566AA6;
                                            font-weight: bold;
                                            color: white;
                                        }

                                        .bg_btn2 {
                                            border: 3px solid #1ba94d;
                                            font-weight: bold;
                                            color: #1ba94d;
                                        }

                                        .bg_btn2:hover {
                                            background-color: #1ba94d;
                                            font-weight: bold;
                                            color: white;
                                        }
                                        .bg_btn3 {
                                            border: 3px solid #f98602;
                                            font-weight: bold;
                                            color: #e47d07;
                                        }

                                        .bg_btn3:hover {
                                            background-color: #f98602;
                                            font-weight: bold;
                                            color: white;
                                        }
                                        .bg_btn4 {
                                            border: 3px solid #da1220;
                                            font-weight: bold;
                                            color: #da1220;
                                        }

                                        .bg_btn4:hover {
                                            background-color: #da1220;
                                            font-weight: bold;
                                            color: white;
                                        }

                                        /* button end  */

                                        /* tabel  */
                                        .tbl_scroll {
                                            height: 500px;
                                            overflow: auto;
                                        }

                                        .table {
                                            border: none;
                                        }

                                        .table thead{
                                            background-color: #151313;
                                            color: white;
                                        }
                                        .table tbody{
                                            background-color: #c9cfe3;
                                            color: #000000;
                                        }
                                        .table tbody tr:hover{
                                            cursor: pointer;
                                            background-color: #e9738d;
                                        }
                                        tr, td{
                                            border: 2px solid white;
                                        }

                                        /* end table  */
                                        table .no{
                                            width: 5%;
                                        }
                                        /* cetak  */
                                        #print .khusus_cetak {
                                            display: none;
                                        }

                                        /* end cetak  */

                                        /* end content  */
                                    </code>
                                </pre>
                                    <!-- end source index.css -->
                                </div>
                                <li>Buka file <b>nav2.php</b> & masukan code dibawah ini </li>
                                <div>
                                    <pre class="line-number">
                                    <!-- source nav2.php  -->
                                    <code class="language-html">
                                        <script type="text" class="language-markup">
                                        <html>

                                            <head>
                                                <link rel="stylesheet" href="pages/nav1.css">
                                            </head>

                                            <body>
                                                <!-- header  -->
                                                <div class="alert bg_alert2 mt-3 mb-5 sticky-sm-top">
                                                    <h5>NAV LINK</h5>
                                                </div>
                                                <!-- end header  -->

                                                <!-- content  -->
                                                <!-- button tambah & cetak  -->
                                                <div class="ms-3">
                                                    <a class="btn bg_btn1" data-bs-toggle="modal" data-bs-target="#modalTambah">TAMBAH</a>
                                                    <a href="javascript:printDiv('print');" class="btn bg_btn2 no-print">CETAK</a>

                                                </div>
                                                <!-- end button tambah & cetak  -->
                                                <!-- tabel  -->
                                                <div class="tbl_scroll mt-3" id="print">
                                                    <!-- cetak  -->
                                                    <div class="khusus_cetak">
                                                        <center>
                                                            <!-- logo  -->
                                                            <img src="./icon/School_128.svg" style="width: 300px; height: 300px;">
                                                            <h1>WEBSITE DESAIN</h1>
                                                            <hr>
                                                            <h3>Your Data</h3>
                                                            <!-- end logo  -->
                                                        </center>
                                                    </div>
                                                    <!-- end cetak  -->
                                                    <!-- table  -->
                                                    <table class="table" style="width: 100%;" border="1">
                                                        <thead class="sticky-top">
                                                            <tr>
                                                                <th class="no">No</th>
                                                                <th>Nama</th>
                                                                <th>Admin</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            </script>&lt;?php<script type="text" class="language-markup">
                                                                $no = 1;
                                                            </script>?&gt;<script type="text" class="language-markup">
                                                            <tr data-bs-toggle="modal" data-bs-target="#mdlData_show">
                                                            <th class="no"></script>&lt;?<script type="text" class="language-markup">= $no++; </script>?&gt;<script type="text" class="language-markup"></th>
                                                                <td>admin</td>
                                                                <td>admin</td>
                                                            </tr>
                                                        
                                                        </tbody>
                                                    </table>
                                                    <!-- end table  -->
                                                </div>

                                                <!-- modal  tambah -->
                                                <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <!-- modal body  -->
                                                            <div class="modal-body">
                                                                <form action="#" method="POST">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Nama</label>
                                                                        <input type="text" class="form-control" autocomplete="off" name="nama" placeholder="Nama">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Admin</label>
                                                                        <input type="text" class="form-control" autocomplete="off" name="admin" placeholder="admin">
                                                                    </div>                       
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn bg_btn1">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end modal tambah -->

                                                <!-- modal edit & delete  -->
                                                <!-- show data  -->
                                                <div class="modal fade" id="mdlData_show">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">edit & Hapus Data</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                                <!-- tabel  -->
                                                                <div class="table-responsive">
                                                                    <table class="table text-center">
                                                                        <thead class="sticky-top">
                                                                            <tr>
                                                                                <th>Nama</th>
                                                                                <th>Admin</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr>
                                                                                    <td>admin</td>
                                                                                    <td>admin</td>
                                                                                </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <!-- end tabel  -->
                                                                <a data-bs-toggle="modal" data-bs-target="#mdlEdit_admin" data-bs-dismiss="modal" class="btn bg_btn3">edit</a>
                                                                <a data-bs-toggle="modal" data-bs-target="#mdlHapus_admin" data-bs-dismiss="modal" class="btn bg_btn4">delete</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end show data -->

                                                <!-- modal edit -->
                                                <div class="modal fade" id="mdlEdit_admin">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Data</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <!-- modal body  -->
                                                            <div class="modal-body">
                                                                <form action="#" method="POST">
                                                                    <input type="text" class="form-control" value="admin" name="admin" readonly >
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Nama</label><input type="text" class="form-control" autocomplete="off" value="admin" name="nama" placeholder="Nama">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Admin</label>
                                                                        <input type="text" class="form-control" autocomplete="off" value="admin" name="admin" placeholder="admin">
                                                                    </div>                       
                                                                    <div class="d-flex">
                                                                        <button type="submit" class="btn bg_btn3 me-auto">Save</button>
                                                                        <a data-bs-toggle="modal" data-bs-target="#mdlData_show" data-bs-dismiss="modal" class=" btn bg_btn1">Back</a>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end edit  -->

                                                <!-- modal hapus  -->
                                                <div class="modal fade" id="mdlHapus_admin">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Hapus Data</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <!-- modal body  -->
                                                            <div class="modal-body">
                                                                <h5 class="mb-2">apakah anda mau menghapus data admin ?</h5>
                                                                <form action="#" method="POST">
                                                                    <input type="text" name="id" class="form-control" readonly hidden value="admin">
                                                                    <div class="d-flex">
                                                                        <button type="submit" class="btn bg_btn4">Delete</button>
                                                                        <a data-bs-toggle="modal" data-bs-target="#mdlData_show" data-bs-dismiss="modal" class=" btn bg_btn1 ms-auto">back</a>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end modal delete  -->
                                                <!-- end modal edit & delete  -->

                                                <!-- end content  -->


                                                <!-- frame cetak  -->
                                                <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
                                                <!-- script cetak sebagian  -->
                                                <script type="text/javascript">
                                                    function printDiv(elementId) {
                                                        var a = document.getElementById('print').value;
                                                        var b = document.getElementById(elementId).innerHTML;
                                                        window.frames["print_frame"].document.title = "DESAIN WEBSITE";
                                                        window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
                                                        window.frames["print_frame"].window.focus();
                                                        window.frames["print_frame"].window.print();
                                                    }</script>&lt;/script&gt;<script type="text" class="language-markup">
                                                                                                


                                            </body>

                                        </html>

                                        </script>
                                    </code>
                                        <!-- end source -->
                                </pre>
                                </div>
                                <li>Jika web dijalan maka hasilnya seperti ini </li>
                                <div>
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="https://drive.google.com/uc?export=view&id=1ZYmfP6fu51HTZzqRxgrblMsyai-92tZ0" class="img-fluid card-img">

                                            <div class="d-flex flex-column card-img-overlay align-items-end">
                                                <div class="z-1 inner-ic position-absoluted-flex align-items-end mb-2">
                                                    <a href="./././page/content/design/design1/index.php" target="_blank">
                                                        <img src="https://drive.google.com/uc?export=view&id=1UCM4gUy-WgLTNTqJ1TYwdxI_OIizTZHj" class="d-flex justify-content-end mt-4 me-3">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <li>sekian & terimakasih telah membaca di website saya</li>
                            </ol>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <!-- <div class="z-1 inner-ic h-100 fixed-bottom">
                    <a href="#sect_penjelasan" class="">
                        <img src="https://drive.google.com/uc?export=view&id=11qrXhhjzaNHqNqxvH193MLq0RA_npYtN"></a>
                </div> -->

                </section>
            </div>
        </div>


    </div>



</body>