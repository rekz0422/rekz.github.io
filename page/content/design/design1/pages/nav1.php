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
                <?php
                $no = 1;
                ?>
                <tr data-bs-toggle="modal" data-bs-target="#mdlData_show">
                    <th class="no"><?= $no++; ?></th>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
                </tr>      
                <tr data-bs-toggle="modal" data-bs-target="#mdlData_show">
                    <th class="no"><?= $no++; ?></th>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
                </tr>      
                <tr data-bs-toggle="modal" data-bs-target="#mdlData_show">
                    <th class="no"><?= $no++; ?></th>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
                </tr>      
                <tr data-bs-toggle="modal" data-bs-target="#mdlData_show">
                    <th class="no"><?= $no++; ?></th>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
                </tr>      
                <tr data-bs-toggle="modal" data-bs-target="#mdlData_show">
                    <th class="no"><?= $no++; ?></th>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
                    <td>admin</td>
                </tr>      
                <tr data-bs-toggle="modal" data-bs-target="#mdlData_show">
                    <th class="no"><?= $no++; ?></th>
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
        }
    </script>


</body>

</html>