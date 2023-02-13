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
                                <?php
                                $no = 1;
                                ?>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>

                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>

                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>

                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>

                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>

                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>

                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>

                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>

                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>

                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>

                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>

                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>

                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>admin</td>

                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
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
                                <?php
                                $no = 1;
                                ?>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <th class="no"><?= $no++; ?></th>
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
    <!-- end modal data guru  -->
    <!-- end modal data siswa & guru  -->


    <!-- end content  -->

</body>

</html>