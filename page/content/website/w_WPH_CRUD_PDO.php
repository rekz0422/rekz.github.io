 <!doctype html>
 <html>

 <head>
     <link rel="stylesheet" href="styles.css">
     <style>
         #h1 {
             font-size: 50px;
         }

         li {
             font-size: 20px;
         }


         #a {
             text-decoration: none;
         }

         p {
             font-size: 20px;
         }
     </style>

 </head>
 <!-- Awal Content-->

 <body>
     <div class="posisi">
         <h1 align="center" id="h1">HTML_PHP - Membuat CRUD dengan Extension PDO</h1>
         <hr /><br /><br />
         <ol>
             <h4>Perhatikan Penjelasan dengan Cermat</h4>
             <p>
                 <li>Kalian dapat melihat full CRUD web kampus sederhana menggunakan database <a href="?folder=MyCampus&page=MyQuizS5"> disini </a>
                 </li>
                 <li> jalankan xampp kalian dan klik start </li><br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/Website/WPH_CRUD_PDO/1.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div>

             <li> buat database kalian atau biar gampang kalian bisa download <a href="https://drive.google.com/file/d/1W8kAi0-sFnGiB8q4z9rQfxQiYjQIKzKT/view?usp=sharing"><b><i>
                             database</i> disini</b></a> karena tutorial ini memakai <i> database </i>tersebut
                 <br /><br />

             <li>jika kalian mendownload data diatas, kalian bisa mengimportnya terlebih dahulu atau bisa melihat cara
                 mengimportnya<a href="?folder=Web&page=import_database_xampp"> disini</a><br />
             </li>

             <li>Buka aplikasi Editor kalian Penulis menyarankan memakai Visual Studio code, jika tidak ada kalian bisa
                 memakai yang lain seperti <i>sublime, notepad++</i> atau yang lainnya<br /><br /></li>

             <li>buat 2 folder dan 1 file <i><b>index.php</b></i> seperti gambar dibawah nama folder dan file harus sama
                 sesuai gambar, harus memakai huruf kecil semua<br /><br /></li>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/Website/WPH_CRUD_PDO/5.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div>
             <br />

             <li>pada 2 folder tersebut buat file - file <i>PHP </i>seperti gambar dibawah<br /><br /></li>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/Website/WPH_CRUD_PDO/6.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div>
             <br />

             <li> pada <i>index.php</i> masukan kode dibawah ini </li> <br />
             </p>
             <pre class="line-numbers">
                <code class="language-php">
                &lt;?php  
                    require_once 'config/koneksi.php';
                ?&gt;
                </code>
            </pre>
             <pre class="line-numbers">
                <code class="language-html">
                <script type="text/plain" class="language-markup">
                    <!-- isi kode php atas disini -->

                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>PHP Data Object</title>
                        <style>
                        body {
                            padding: 20px 150px;
                            font-family: "Nunito Sans";
                        }

                        nav {
                            background-color: #2C343C;
                            text-align: center;
                            padding: 20px;
                        }

                        nav a {
                            display: inline-block;
                            background-color: #2C343C;
                            text-decoration: none;
                            color: #FF8D1C;
                            padding: 10px 30px;
                            font-size: 30px;
                            font-weight: bold;

                        }

                        label {
                            font-weight: bold;
                            margin-bottom: 5px;
                            font-size: 30px;
                        }

                        input,
                        select,
                        textarea {
                            border: 1px solid #72777D;
                            padding: 10px 20px;
                            margin-bottom: 5px;
                            width: 100%;
                            box-sizing: border-box;
                            font-size: 20px;
                        }

                        button {
                            margin: 5px 0;
                            font-weight: bold;
                            padding: 10px 30px;
                            margin-bottom: 5px;
                            background-color: #2C343C;
                            border: 1px solid #ccc;
                            font-size: 30px;
                            color: #FF8D1C;
                        }

                        button:hover {
                            background-color: #FF8D1C;
                            color: #2C343C;
                        }

                        table {
                            width: 100%;
                            border: 1px solid black;
                            border-collapse: collapse;

                        }

                        th {
                            border-bottom: 2px solid black;
                            text-align: left;
                            padding: 5px;


                        }

                        td {
                            border-bottom: 1px dashed black;
                            text-align: left;
                            padding: 5px;


                        }

                        h1 {
                            font-size: 50px;

                        }
                        </style>
                    </head>

                    <body>
                    
                        <nav>
                            <a href="index.php?page=home">Home</a>
                            <a href="index.php?page=master_dosen">Master Dosen</a>
                            <a href="index.php?page=master_mahasiswa">Master Mahasiswa</a>
                            <a href="index.php?page=master_jurusan">Master Jurusan</a>
                            <a href="index.php?page=setting">Setting</a>
                        </nav>

                        <div class="container">

                        <!-- isi kode php di bawah disini -->
                            
                        </div>
                    </body>

                    </html>
                </script>
            </code>
         </pre>
             <pre class="line-numbers">
                <code class="language-php">
                    &lt;?php
                            $direktori = "content";
                            $page = @$_GET['page'];
                            
                            if($page != "")
                                include("$direktori/$page.php");
                            else
                                include("$direktori/home.php");
                    ?&gt;
                    </code>
                </pre><br />
             <p>
                 <li> Buka folder <i>config</i> >> <i>koneksi.php </i> dan masukan kode dibawah ini </li>
             </p>
             <pre class="line-numbers">
                <code class="language-php">
                    &lt;?php  
                            try 
                            {
                                //koneksi
                                $con = new PDO('mysql:host=localhost;dbname=stikom', "root", "");
                                //set error mode
                                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            } 
                            catch (PDOException $e) 
                            {
                                //jika ada error
                                echo "Koneksi Gagal : ". $e->getMessage() . "<br>";
                                die();
                            }

                        ?&gt;
                    </code>
                </pre><br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>home.php </i> dan masukan kode dibawah ini </li>
             </p>
             <pre class="line-numbers">
                <code class="language-html">
                <script type="text/plain" class="language-markup">
                    <h2>Home</h2>
                    <hr /></br />

                    <body style="background-color:#72777D;color:#fff">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure explicabo fugiat delectus autem nam, enim dolore
                            perspiciatis deserunt laborum expedita, odit repellendus doloremque, nulla sequi recusandae quos ea quidem
                            earum.</p>
                    </body>
                
                </script>
                </code>
             </pre><br />
             <p>
                 <li> Jika kalian benar maka akan sama seperti dibawah ini</li><br />
             </p>
             <div align="center" class="embed-responsive embed-responsive-16by9">
                 <video controls class="embed-responsive-item" src="img/Website/WPH_CRUD_PDO/video1.mp4" autoplay loop>
                 </video>
             </div>
             <p>
                 <li> Buka folder <i>content</i> >> <i>master_dosen.php </i> dan masukan kode dibawah ini </li>
             </p><br />

             <pre class="line-numbers">
                <code class="language-html">
                <script type="text/plain" class="language-markup">
                 <head>
                    <style>
                    table {
                        width: 100%;
                        border: 1px solid black;
                        border-collapse: collapse;
                        font-size: 30px;
                    }

                    th {
                        border-bottom: 2px solid black;
                        text-align: left;
                        padding: 5px;
                        font-size: 30px;

                    }

                    td {
                        border-bottom: 1px dashed white;
                        text-align: left;
                        padding: 5px;
                        font-size: 30px;

                    }

                    #a {
                        color: #285462;
                        text-decoration: none;
                    }
                    </style>
                </head>

            <body style="background-color:#72777D;color:#2C343C">
                <h1 align="center">Master Dosen</h1>
                <form action="index.php?page=master_dosen_save" method="POST">
                    <label for="">NID : </label><br>
                    <input type="text" name="nid" placeholder="Masukan NID" required=""><br>
                    <label for="">Nama : </label><br>
                    <input type="text" name="nama" placeholder="Masukan Nama Dosen" required=""><br>
                    <label for="">Alamat : </label><br>
                    <input type="text" name="alamat" placeholder="Masukan Alamat" required=""><br>
                    <button type="submit">Simpan</button>
                </form>

                <h1 align="Center">Data Dosen</h1>
                <table>
                    <tr>
                        <th>NID</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>AKSI</th>
                    </tr>
                    
                   <!-- isi kode php dibawah disini -->

                </table><br>
            </body>

                </script>
                </code>
                </pre>
             <pre class="line-numbers">
                <code class="language-php">
            &lt;?php  
                $con = new PDO('mysql:host=localhost;dbname=stikom', "root", "");
            //set error mode
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $con->prepare("SELECT * FROM dosen");
            $sql->execute();
            while ($r = $sql->fetch(PDO::FETCH_BOTH)) {
            echo "<script type="text/plain" class="language-markup"><tr>                
                <td>$r[NID]</td>
                <td>$r[NAMA]</td>
                <td>$r[ALAMAT]</td>
                <td><a href='index.php?page=master_dosen_edit&NID=$r[0]' onclick='return confirm(\"apakah anda yakin mengedit data $r[0] - $r[1] ?\");'>Edit</a>
                <a href='index.php?page=master_dosen_delete&NID=$r[0]' onclick='return confirm(\"apakah anda yakin menghapus data  $r[0] - $r[1]?\");'>Delete</a>
                </td>
            </tr>";</script>
            }
        ?&gt;
           </code>
        </pre><br />
             <p>
                 <li> Jika kalian benar maka akan sama seperti dibawah ini</li><br />
             </p>

             <div align="center" class="embed-responsive embed-responsive-16by9">
                 <video controls class="embed-responsive-item" src="img/Website/WPH_CRUD_PDO/video2.mp4" autoplay loop>
                 </video>
             </div>
             <br />
             <li> Buka folder <i>content</i> >> <i>master_dosen_save.php </i> dan masukan kode dibawah ini, jangan
                 lupa tambah kan tanda <b>" < "</b> pada kata <i><b>" /script"</b></i></li>
             <br />
             <pre class="line-numbers">
    <code class="language-php">
        &lt;?php  
                        $con = new PDO('mysql:host=localhost;dbname=stikom', "root", "");

                        $nid = filter_var($_POST['nid'], FILTER_SANITIZE_STRING);
                        $nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
                        $alamat = filter_var($_POST['alamat'], FILTER_SANITIZE_STRING);
                        
                        if (empty($nid) || empty($nama) || empty($alamat)) 
                        {
                            echo " <script type="text/plain" class="language-markup"><script>
                                    alert('Data Harus Dilengkapi');
                                    window.location.href = 'index.php?page=master_dosen';
                            /script>"</script>	;
                        }
                        else
                        {
                            $sql = $con->prepare("SELECT * FROM dosen WHERE NID = ?");
                            $sql->bindParam(1,$nid);
                            $sql->execute();

                            $row = $sql->rowCount(); 	
                            if($row > 0){
                                $sql=$con->prepare("UPDATE dosen Set NAMA = ?, ALAMAT = ? WHERE NID = ?");
                                $sql->bindParam(1,$nama);
                                $sql->bindParam(2,$alamat);
                                $sql->bindParam(3,$nid);
                                $sql->execute();
                                echo " <script type="text/plain" class="language-markup"><script>
                                    alert('$row Data Berhasil DiUpdate');
                                    window.location.href = 'index.php?page=master_dosen';
                                /script>"</script>	;

                            }
                            else{
                                $sql =$con->prepare( "INSERT INTO dosen VALUES (?, ?, ?)");
                                $sql->bindParam(1,$nid);
                                $sql->bindParam(2,$nama);
                                $sql->bindParam(3,$alamat);			
                                $sql->execute();
                                $row = $sql->rowCount();
                                echo " <script type="text/plain" class="language-markup"><script>
                                    alert('$row Data Berhasil Ditambahkan');
                                    window.location.href = 'index.php?page=master_dosen';
                                /script>"</script>	;

                                //query
                                // $row = $con->query($sql);
                                
                            }		
                        }	
                    ?&gt;
                </code>
                </pre>
             <p>
                 <li> Jika kalian benar maka akan sama seperti dibawah ini</li><br />
             </p>
             <div align="center" class="embed-responsive embed-responsive-16by9">
                 <video controls class="embed-responsive-item" src="img/Website/WPH_CRUD_PDO/video3.mp4" autoplay loop>
                 </video>
             </div>
             <br />
             <li> Buka folder <i>content</i> >> <i>master_dosen_edit.php </i> dan masukan kode dibawah ini</li>
             <pre class="line-numbers">
                <code class="language-html">
                <script type="text/plain" class="language-markup">
                <!DOCTYPE html>
                <html>

                <body style="background-color:#72777D;">
                    <h1 align="center">EDIT DOSEN STIKOM</h1>

                    <!--  Isi kode PHP dibawah disini -->

                    <h3 align="center"></script> &lt;?php echo "$r[0] - $r[1]" ?&gt;<script type="text/plain" class="language-markup"></h3>
                    <form action="index.php?page=master_dosen_save" method="POST">
                        <label for="">NID</label><br>
                        <input type="text" name="nid" placeholder="Masukan NID" required=""
                            onclick="alert('NID </script> &lt;?php echo $NID?&gt; Tak Bisa Di Ubah!!!')" value="&lt;?php echo $r[0]?&gt;" readonly> <script type="text/plain" class="language-markup"><br><br>
                        <label for="">Nama</label><br>
                        <input type="text" name="nama" placeholder="Masukan Nama Dosen " value="</script> &lt;?php echo $r[1]?&gt;" required=""> <script type="text/plain" class="language-markup"><br><br>
                        <label for="">Alamat</label><br>
                        <input type="text" name="alamat" placeholder="Masukan Alamat" value="</script> &lt;?php echo $r[2]?&gt;" required=""><script type="text/plain" class="language-markup"><br><br>
                        <button type="submit">UPDATE</button>
                    </form>                   
                </body>
                </html>                                
                 </script>
                </code>
                </pre>

             <pre class="line-numbers">
                <code class="language-php">                
                &lt;?php
                            $NID =$_GET['NID'];
                            $sql = $con->prepare("SELECT * FROM dosen Where NID=?");
                            $sql->bindParam(1, $NID);
                            $sql->execute();
                            $r = $sql->fetch(PDO::FETCH_BOTH)
                ?>
                </code>
                </pre><br />
             <p>
                 <li> Jika kalian benar maka akan sama seperti dibawah ini</li><br />
             </p><br />
             <div align="center" class="embed-responsive embed-responsive-16by9">
                 <video controls class="embed-responsive-item" src="img/Website/WPH_CRUD_PDO/video4.mp4" autoplay loop>
                 </video>
             </div><br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>master_dosen_delete.php </i> dan masukan kode dibawah ini jangan
                     lupa tambah kan tanda <b>" < "</b> pada kata <i><b>" /script"</b></i>
                 </li>
             </p>
             <pre class="line-numbers">
                <code class="language-php">
              
                            &lt;?php
                $con = new PDO('mysql:host=localhost;dbname=stikom', "root", "");
                    //set error mode
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $NID = $_GET['NID'];
                $sql = $con->prepare("DELETE FROM dosen WHERE NID = ?");
                $sql->bindParam(1, $NID);
                $sql->execute();
                $row = $sql->rowCount();
            
                echo "  <script type="text/plain" class="language-markup"><script>
                            alert('$row Data dengan NID = $NID Berhasil Di hapus');
                            window.location.href = 'index.php?page=master_dosen';
                   < /script>";
                //header("location:/Stikom/index.php?page=data_dosen");
                    ?>;
                 </script>
                </code>
                </pre>
             <p>
                 <li> Jika kalian benar maka akan sama seperti dibawah ini</li><br />
             </p><br />
             <div align="center" class="embed-responsive embed-responsive-16by9">
                 <video controls class="embed-responsive-item" src="img/Website/WPH_CRUD_PDO/video5.mp4" autoplay loop>
                 </video>
             </div><br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>master_mahasiswa.php </i> dan masukan kode dibawah ini
                 </li>
             </p>
             <pre class="line-numbers">
                <code class="language-html">
                <script type="text/plain" class="language-markup">

                <head>
                    <style>
                        table {
                            width: 100%;
                            border: 1px solid black;
                            border-collapse: collapse;
                            font-size: 30px;
                        }

                        th {
                            border-bottom: 2px solid black;
                            text-align: left;
                            padding: 5px;
                            font-size: 30px;

                        }

                        td {
                            border-bottom: 1px dashed white;
                            text-align: left;
                            padding: 5px;
                            font-size: 30px;
                        }

                        #a {
                            color: #285462;
                            text-decoration: none;
                        }
                     </style>
                </head>

                <body style="background-color:#72777D;color:#fff">
                    <h1 align="center">Master Mahasiswa</h1>
                    <hr />
                    <form action="index.php?page=save_mahasiswa" method="post">
                        <label for="">NIM</label><br>
                        <input type="text" name="Nim" require="" placeholder="Masukan Nim"><br>
                        <label for="">Nama</label><br>
                        <input type="text" name="Nama" require="" placeholder="Masukan Nama"><br>
                        <label for="">Jurusan</label><br>
                        <select name="Jurusan" id="">
                            <option value="">PILIH</option>
                            <option value="J01">SISTEM INFORMASI</option>
                            <option value="J02">TEKNIK JARINGAN</option>
                            <option value="J03">MANAJEMEN INFORMATIKA</option>
                            <option value="J04">KOMPUTERISASI AKUNTANSI</option>
                            <option value="J05">PARAWISATA</option>
                        </select><br>
                        <label for="">Alamat</label><br>
                        <input type="text" name="Alamat" require="" placeholder="Masukan Alamat"><br>
                        <button tyepe="submit" name="btn">SIMPAN</button>

                    </form>

                    <hr />
                    <hr />
                    <h1 align="center">Data Mahasiswa</h1>
                    <table>
                        <tr>
                            <th>NIM</th>
                            <th>NAMA</th>
                            <th>ALAMAT</th>
                            <th>KODE JURUSAN</th>
                            <th>AKSI</th>
                        </tr>

                        <!-- tambahkan kode php bawah disini -->

                    </table><br>
                </body>
                  </script>
                </code>
                </pre>

             <pre class="line-numbers">
                <code class="language-php">
                         
        &lt;?php  
        $con = new PDO('mysql:host=localhost;dbname=stikom', "root", "");
        //set error mode
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $con->prepare("SELECT * FROM mahasiswa");
        $sql->execute();
        while ($r = $sql->fetch(PDO::FETCH_BOTH)) {
        echo "<script type="text/plain" class="language-markup"><tr>
            <td>$r[NIM]</td>
            <td>$r[NAMA]</td>
            <td>$r[ALAMAT]</td>
            <td>$r[KODE_JURUSAN]</td>
            <td><a href='index.php?page=edit_mahasiswa&NIM=$r[0]' onclick='return confirm(\"apakah anda yakin mengedit data $r[0] - $r[1] ?\");'>Edit</a>
            <a href='index.php?page=delete_mahasiswa&NIM=$r[0]' onclick='return confirm(\"apakah anda yakin menghapus data $r[0] - $r[1]  ?\");'>Delete</a>
            </td>
        </tr>";</script>
        }
    ?>
                </script>
                </code>
                </pre> <br />
             <p>
                 <li> Jika kalian benar maka akan sama seperti dibawah ini</li><br />
             </p>
             <div align="center" class="embed-responsive embed-responsive-16by9">
                 <video controls class="embed-responsive-item" src="img/Website/WPH_CRUD_PDO/video6.mp4" autoplay loop>
                 </video>
             </div>
             <br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>save_mahasiswa.php </i> dan masukan kode dibawah ini,jangan
                     lupa tambah kan tanda <b>" < "</b> pada kata <i><b>" /script"</b></i></li>
                 </li>
             </p>
             <pre class="line-numbers">
                <code class="language-php">
               
                &lt;?php 
	$con = new PDO('mysql:host=localhost;dbname=stikom', "root", "");

    $NIM = filter_var($_POST['Nim'], FILTER_SANITIZE_STRING);;
    $NAMA = filter_var($_POST['Nama'], FILTER_SANITIZE_STRING);;    
    $ALAMAT = filter_var($_POST['Alamat'], FILTER_SANITIZE_STRING);;
    $JURUSAN = filter_var($_POST['Jurusan'], FILTER_SANITIZE_STRING);;

    if (empty($NIM) || empty($NAMA)) 
	{
		echo "  <script type="text/plain" class="language-markup"><script>
				alert('Data Harus Dilengkapi');
				window.location.href = 'index.php?page=master_mahasiswa';
		/script>";</script>
	}
	else
	{	
		
			$sql = $con->prepare("SELECT * FROM mahasiswa WHERE NIM = ?");
		$sql->bindParam(1, $NIM);
		$sql->execute();
		$row = $sql->rowCount(); 	
		if($row > 0){
			$sql=$con->prepare( "UPDATE mahasiswa Set NAMA = ?,ALAMAT = ?, KODE_JURUSAN = ? WHERE NIM = ?");
			$sql->bindParam(1,$NAMA);
			$sql->bindParam(2,$ALAMAT);
			$sql->bindParam(3,$JURUSAN);
			$sql->bindParam(4,$NIM);
			$sql->execute();
			echo " <script type="text/plain" class="language-markup"><script>
				alert('$row Data Berhasil DiUpdate');
				window.location.href = 'index.php?page=master_mahasiswa';
			/script>"	;</script>

		}
		else{	
		$sql =$con->prepare("INSERT INTO mahasiswa VALUES (?, ?, ?, ?)");
			$sql->bindParam(1,$NIM);	
			$sql->bindParam(2,$NAMA);
			$sql->bindParam(3,$ALAMAT);
			$sql->bindParam(4,$JURUSAN);
			$sql->execute();
            $row = $sql->rowCount();
			echo " <script type="text/plain" class="language-markup"><script>
				alert('$row Data Berhasil Ditambahkan');
				window.location.href = 'index.php?page=master_mahasiswa';
		/script>"	;</script>
		}
			
    }
?>
                </code>
                </pre>
             <br />
             <p>
                 <li> Jika kalian benar maka akan sama seperti dibawah ini</li><br />
             </p>
             <div align="center" class="embed-responsive embed-responsive-16by9">
                 <video controls class="embed-responsive-item" src="img/Website/WPH_CRUD_PDO/video7.mp4" autoplay loop>
                 </video>
             </div>
             <br />
             <p>
                 <li> Sampai disini, jika kalian memakai <i>database </i> dari website ini, maka pergilah ke
                     tabel jurusan dan isi beberapa data disana. seperti gambar dibawah
                 </li><br />
                 <li>Namun jika kalian tidak mau ya tidak apa2, namun kalo data jurusan tidak muncul maka coba isi data
                     di tabel jurusan
                 </li><br />
             <div class="row">
                 <div class="col-md-3 mb-1">
                     <img src="img/Website/WPH_CRUD_PDO/27.PNG" class="img-fluid" alt="...">
                 </div>
                 <div class="col-md-3 mb-1">
                     <img src="img/Website/WPH_CRUD_PDO/27_1.PNG" class="img-fluid" alt="...">
                 </div>
             </div>
             </p><br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>edit_mahasiswa.php </i> dan masukan kode dibawah ini
                 </li>
             </p>
             <pre class="line-numbers">
             <code class="language-php">
               &lt;?php
                $NIM =$_GET['NIM'];
                $sql = $con->prepare("SELECT * FROM mahasiswa WHERE NIM=?");
                $sql->bindParam(1,$NIM);
                $sql->execute();
		        $r = $sql->fetch(PDO::FETCH_BOTH)
            ?&gt;
             </code>
             </pre><br />
             <pre class="line-numbers">
                <code class="language-html">
                <script type="text/plain" class="language-markup">

            <!DOCTYPE html>
            <html>

            <body style="background-color:#72777D;">
                <h1 align="center">EDIT MAHASISWA</h1>
            
            <!-- masukan kode php atas disini -->

                <h3 align="center"></script>&lt;?php echo "$r[0] - $r[1]" ?> <script type="text/plain" class="language-markup"></h3>
                <form action="index.php?page=save_mahasiswa" method="post">
                    <label for="">NIM</label><br>
                    <input type="text" name="Nim" require="" value="</script>&lt;?php echo $r['NIM'] ?>" readonly
                        onclick="alert('NIM Tak Bisa Di Ubah')"> <script type="text/plain" class="language-markup"><br>
                    <label for="">Nama</label><br>
                    <input type="text" name="Nama" require="" value="</script>&lt;?php echo $r[1] ?>"> <script type="text/plain" class="language-markup"><br>
                    <label for="">Jurusan</label><br>
                    <select name="Jurusan" id="">
                    
                        <!-- masukan kode php bawah disini -->

                    </select><br>
                    <label for="">Alamat</label><br>
                    <input type="text" name="Alamat" require="" value="</script>&lt;?php echo $r[2] ?>"><script type="text/plain" class="language-markup"><br>
                    <button type="submit" name="btn">UPDATE</button>
                </form>
            </body>
            </html>
                  </script>
                </code>
                </pre><br />
             <pre class="line-numbers">
                <code class="language-php">
                 &lt;?php
                         
                        $sql = $con->prepare("SELECT * FROM jurusan WHERE kode_jurusan = ?");
                        $sql->bindParam(1,$r[3]);
                        $sql->execute();
                        $sqll = $con->prepare("SELECT * FROM jurusan");
                        $sqll->execute();
                        while($d = $sqll->fetch())
                        {
                            $selected = "";
                            if($r[3] == $d[0]){
                                $selected = "selected";
                            }
                            echo "<script type="text/plain" class="language-markup"><option value='$d[0]' $selected> $d[1] </option>";
                        }
                   ?></script>
                </code>
                </pre>
             <br />
             <p>
                 <li> Jika kalian benar maka akan sama seperti dibawah ini</li><br />
             </p>
             <div align="center" class="embed-responsive embed-responsive-16by9">
                 <video controls class="embed-responsive-item" src="img/Website/WPH_CRUD_PDO/video8.mp4" autoplay loop>
                 </video>
             </div>
             <br /><br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>delete_mahasiswa.php </i> dan masukan kode dibawah ini
                 </li>
             </p>
             <pre class="line-numbers">
                <code class="language-php">
                &lt;?php
                $con = new PDO('mysql:host=localhost;dbname=stikom', "root", "");
                    //set error mode
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $NIM = $_GET['NIM'];
                $sql = $con->prepare("DELETE FROM mahasiswa WHERE NIM =? ");
                $sql->bindParam(1,$NIM);
                $sql->execute();
                echo " <script type="text/plain" class="language-markup"><script>
                            alert('Data dengan NID = $NIM Berhasil Di hapus');
                            window.location.href = 'index.php?page=master_mahasiswa';
                    /script>";
                //header("location:/Stikom/index.php?page=data_dosen");
            ?>      
                 </script>
                </code>
                </pre><br /><br />
             <p>
                 <li> Jika kalian benar maka akan sama seperti dibawah ini</li><br />
             </p>
             <div align="center" class="embed-responsive embed-responsive-16by9">
                 <video controls class="embed-responsive-item" src="img/Website/WPH_CRUD_PDO/video9.mp4" autoplay loop>
                 </video>
             </div>
             <br /><br />
             <p> SEKIAN dan TERIMA KASIH sudah membaca di website ku, God Bless You All</p><br />

         </ol>
         </p>
         <br /><br /><br /><br />
     </div>
     <!-- Akhir Content-->

 </body>

 </html>