 <!doctype html>
 <html>

 <head>
     <link rel="stylesheet" href="./bootstrap/css/style.css">
     <link rel="stylesheet" href="./bootstrap/css/prism.css">
     <style type="text/css">
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
     <div class="container">
         <h1 align="center" id="h1">Membuat CRUD menggunakan database dan PDO</h1>
         <hr /><br /><br />
         <ol>
             <h4>Perhatikan Penjelasan dengan Cermat</h4>
             <p>
                 <li>jalankan xampp kalian dan klik start </li><br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/Website/WPH_CRUD_PDO/1.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div>

             <li> download <a
                     href="https://drive.google.com/file/d/19vjMsZVIPUpdBZVt6mi4osGgjJ9iUv36/view?usp=sharing"><b><i>
                             database</i> disini</b></a> karena tutorial ini memakai <i> database </i>tersebut
                 <br /><br />

             <li>Import terlebih dahulu databasenya dengan nama databasenya <b>stikom</b>. kalian bisa melihat cara
                 mengimport<a href="?folder=Web&page=import_database_xampp"> database disini</a><br />
             </li>

             <li>Buka aplikasi Editor kalian Penulis menyarankan memakai Visual Studio code, jika tidak ada kalian bisa
                 memakai aplikasi editor kesayangan kalian seperti <i>sublime, notepad++</i> atau yang
                 lainnya<br /><br /></li>

             <li>buat 2 folder dan 1 file <i><b>index.php</b></i> seperti gambar dibawah nama folder dan file harus sama
                 sesuai gambar, harus memakai huruf kecil semua<br /><br /></li>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/MyCampus/MyQuizS5/5.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div>
             <br />

             <li>pada 2 folder tersebut buat file - file <i>PHP </i>seperti gambar dibawah nama - nama file harus
                 menggunakan huruf kecil<br /><br /></li>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/MyCampus/MyQuizS5/6.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div>
             <br />
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
                 <li> Buka <i>index.php</i> masukan kode dibawah ini </li> <br />
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
                    <!-- input code php atas disini -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>PHP Data Object</title>
    <style>
    body {
        padding: 20px 150px;
        font-family: "Nunito Sans";
    }

    nav {
        background-color: #CE3C65;
        text-align: center;
        padding: 20px;
    }

    nav a {
        display: inline-block;
        /* background-color: #67A6BF; */
        text-decoration: none;
        color: #EFFA1D;
        padding: 10px 10px 10px 10px;
        font-size: 30px;
        font-weight: bold;

    }

    nav a:hover {
        background-color: #fff;
        color: #FF5A0B;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
        font-size: 30px;
    }

    input,
    select,
    textarea {
        border: 1px solid #5555FF;
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
        border: 1px solid #ccc;
        font-size: 30px;
        background-color: #CE3C65;
        color: #fff;
    }

    button:hover {
        color: #CE3C65;
        background-color: #000029;
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
        <a href="index.php?page=home">HOME</a>
        <a href="index.php?page=master_dosen">Dosen</a>
        <a href="index.php?page=master_mahasiswa">Mahasiswa</a>
        <a href="index.php?page=master_jurusan">Jurusan</a>
        <a href="index.php?page=nilai">Nilai</a>
        <a href="index.php?page=mata_kuliah">Mata Kuliah</a>
    </nav>
    
    <div class="container">

        <!-- input code dibawah php disini -->
        
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
        color: #EABD0A;

    }

    td {
        border-bottom: 1px dashed white;
        text-align: left;
        padding: 5px;
        font-size: 30px;

    }

    a {
        color: #EABD0A;
        text-decoration: none;
    }
    </style>
</head>

<body style="background-color:#383636;color:#F8F1F7;font-size:20px;">
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
       
        <!-- input code php dibawah disini -->

    </table><br>
</body>

                </script>
                </code>
                </pre>
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php  
    require_once "./config/koneksi.php";
    $sql = $con->prepare("SELECT * FROM dosen");
    $sql->execute();
    while ($r = $sql->fetch(PDO::FETCH_BOTH)) {
    echo "<script type="text/plain" class="language-markup"><tr>
        <td>$r[NID]</td>
        <td>$r[NAMA_DOSEN]</td>
        <td>$r[ALAMAT]</td>
        <td><a href='index.php?page=master_dosen_edit&NID=$r[0]' onclick='return confirm(\"apakah anda yakin mengedit data $r[0] - $r[1] ?\");'>Edit</a>
        <a href='index.php?page=master_dosen_delete&NID=$r[0]' onclick='return confirm(\"apakah anda yakin menghapus data  $r[0] - $r[1]?\");'>Delete</a>
        </td>
    </tr>";</script>
    }
?&gt;           
           </code>
        </pre><br />
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
		echo "<script type="text/plain" class="language-markup"><script>
				alert('Data Harus Dilengkapi');
				window.location.href = 'index.php?page=master_dosen';
		/script>"	;</script>
	}
	else
	{
		$sql = $con->prepare("SELECT * FROM dosen WHERE NID = ?");
		$sql->bindParam(1,$nid);
		$sql->execute();
        $row = $sql->rowCount(); 
		if($row > 0){
			$sql=$con->prepare("UPDATE dosen Set NAMA_DOSEN = ?, ALAMAT = ? WHERE NID = ?");
			$sql->bindParam(1,$nama);
			$sql->bindParam(2,$alamat);
			$sql->bindParam(3,$nid);
			$sql->execute();            
		    $row = $sql->rowCount(); 	
			echo "<script type="text/plain" class="language-markup"><script>
				alert('$row Data Berhasil DiUpdate');
				window.location.href = 'index.php?page=master_dosen';
			/script>"	;</script>

		}
		else{
			$sql =$con->prepare( "INSERT INTO dosen VALUES (?, ?, ?)");
			$sql->bindParam(1,$nid);
			$sql->bindParam(2,$nama);
			$sql->bindParam(3,$alamat);			
			$sql->execute();
            $row = $sql->rowCount(); 
			echo "<script type="text/plain" class="language-markup"><script>
				alert('$row Data Berhasil Ditambahkan');
				window.location.href = 'index.php?page=master_dosen';
			/script>"	;</script>

		}

		
	}
?&gt;
                </code>
                </pre>
             <br />
             <li> Buka folder <i>content</i> >> <i>master_dosen_edit.php </i> dan masukan kode dibawah ini</li><br />
             <pre class="line-numbers">
                <code class="language-php">                
&lt;?php
    $NID =$_GET['NID'];
    $sql = $con->prepare("SELECT * FROM dosen Where NID=?");
    $sql->bindParam(1, $NID);
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

<body style="background-color:#383636;color:#F8F1F7;font-size:20px;">
    <h1 align="center">EDIT DOSEN STIKOM</h1>
    
    <!-- Masukan kode php diatas disini -->

    <h3 align="center"></script>&lt;?php echo "$r[0] - $r[1]" ?><script type="text/plain" class="language-markup"></h3>
    <form action="index.php?page=master_dosen_save" method="POST">
        <label for="">NID</label><br>
        <input type="text" name="nid" placeholder="Masukan NID" required=""
            onclick="alert('NID  </script>&lt;?php echo $NID?> Tak Bisa Di Ubah!!!')" value="&lt;?php echo $r[0]?>" readonly><script type="text/plain" class="language-markup"><br><br>
        <label for="">Nama</label><br/>
        <input type="text" name="nama" placeholder="Masukan Nama Dosen " value="</script>&lt;?php echo $r[1]?>" required=""><script type="text/plain" class="language-markup"><br><br>
        <label for="">Alamat</label><br>
        <input type="text" name="alamat" placeholder="Masukan Alamat" value="</script>&lt;?php echo $r[2]?>" required=""><script type="text/plain" class="language-markup"><br><br>
        <button type="submit">UPDATE</button>
    </form>

</body>

</html>                          
                 </script>
                </code>
                </pre><br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>master_dosen_delete.php </i> dan masukan kode dibawah ini jangan
                     lupa tambah kan tanda <b>" < "</b> pada kata <i><b>" /script"</b></i>
                 </li>
             </p>
             <pre class="line-numbers">
                <code class="language-php">              
&lt;?php
    $NID = $_GET['NID'];
    $sql = $con->prepare("DELETE FROM dosen WHERE NID = ?");
    $sql->bindParam(1, $NID);
    $sql->execute();
    echo "<script type="text/plain" class="language-markup"><script>
                alert('Data dengan NID = $NID Berhasil Di hapus');
                window.location.href = 'index.php?page=master_dosen';
        /script>";</script>
   
?>
                 </script>
                </code>
                </pre>
             <p>
                 <li> Buka folder <i>content</i> >> <i>master_mahasiswa.php </i> dan masukan kode dibawah ini
                 </li>
             </p><br />
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php  
        $sql = $con->query("SELECT * FROM jurusan");
        while ($d = $sql->fetch()) {
                 <script type="text/plain" class="language-markup">
            echo "<option value='$d[0]'>$d[1]</option>";</script>
            }
	?>
                </code>
            </pre><br />

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
        color: #EABD0A;

    }

    td {
        border-bottom: 1px dashed white;
        text-align: left;
        padding: 5px;
        font-size: 30px;

    }

    a {
        color: #EABD0A;
        text-decoration: none;
    }
    </style>
</head>

<body style="background-color:#383636;color:#F8F1F7;font-size:20px;">
    <h1 align="center">Master Mahasiswa</h1>
    <hr />
    <form action="index.php?page=save_mahasiswa" method="post">
        <label for="">NIM</label><br>
        <input type="text" name="Nim" require="" placeholder="Masukan Nim"><br>
        <label for="">Nama</label><br>
        <input type="text" name="Nama" require="" placeholder="Masukan Nama"><br>
        <label for="">Jurusan</label><br>
        <select name="Jurusan" id="">

           <!-- masukan kode php diatas disini -->

        </select><br>
        <label for="">Alamat</label><br>
        <input type="text" name="Alamat" require="" placeholder="Masukan Alamat"><br>
        <button tyepe="submit" name="btn">SIMPAN</button>

    </form>
    <hr />
    <h1 align="center">Data Mahasiswa</h1>
    <table>
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NAMA JURUSAN</th>
            <th>AKSI</th>
        </tr>
        
        <!-- masukan kode php dibawah disini -->

    </table><br>
</body>
                  </script>
                </code>
                </pre><br />
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php  
    $sql = $con->query("SELECT j.*, m.* FROM mahasiswa m  INNER JOIN jurusan j ON j.kode_jurusan = m.KODE_JURUSAN");
    $sql->execute();
    while ($r = $sql->fetch(PDO::FETCH_BOTH)) {
    echo "<script type="text/plain" class="language-markup"><tr>
            <td>$r[NIM]</td>
            <td>$r[NAMA_MHS]</td>
            <td>$r[ALAMAT]</td>
            <td>$r[nama_jurusan]</td>
            <td><a href='index.php?page=edit_mahasiswa&NIM=$r[NIM]' onclick='return confirm(\"apakah anda yakin mengedit data $r[NIM] - $r[NAMA_MHS] ?\");'>Edit</a>
            <a href='index.php?page=delete_mahasiswa&NIM=$r[NIM]' onclick='return confirm(\"apakah anda yakin menghapus data $r[NIM] - $r[NAMA_MHS]  ?\");'>Delete</a>
            </td>
        </tr>";</script>
    }
?>
            </script>
            </code>
            </pre> <br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>save_mahasiswa.php </i> dan masukan kode dibawah ini, jangan
                     lupa tambahkan tanda <b>" < "</b> pada kata <i><b>" /script"</b></i></li>
                 </li>
             </p>
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php
    $NIM = filter_var($_POST['Nim'], FILTER_SANITIZE_STRING);;
    $NAMA = filter_var($_POST['Nama'], FILTER_SANITIZE_STRING);;
    $ALAMAT = filter_var($_POST['Alamat'], FILTER_SANITIZE_STRING);;
    $JURUSAN = filter_var($_POST['Jurusan'], FILTER_SANITIZE_STRING);;

    if (empty($NIM) || empty($NAMA))
	{
		echo "<script type="text/plain" class="language-markup"><script>
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
			$sql=$con->prepare( "UPDATE mahasiswa Set NAMA_MHS = ?,ALAMAT = ?, KODE_JURUSAN = ? WHERE NIM = ?");
			$sql->bindParam(1,$NAMA);
			$sql->bindParam(2,$ALAMAT);
			$sql->bindParam(3,$JURUSAN);
			$sql->bindParam(4,$NIM);
			$sql->execute();
			echo "<script type="text/plain" class="language-markup"><script>
				alert('$row Data Berhasil DiUpdate');
				window.location.href = 'index.php?page=master_mahasiswa';
			/script>"; </script>
		}
		else{
		$sql =$con->prepare("INSERT INTO mahasiswa VALUES (?, ?, ?, ?)");
			$sql->bindParam(1,$NIM);
			$sql->bindParam(2,$NAMA);
			$sql->bindParam(3,$ALAMAT);
			$sql->bindParam(4,$JURUSAN);
			$sql->execute();
			$row = $sql->rowCount();
			echo "<script type="text/plain" class="language-markup"><script>
				alert('$row Data Berhasil Ditambahkan');
				window.location.href = 'index.php?page=master_mahasiswa';
		/script>" ; </script>
		}

    }
?>
                </code>
                </pre>
             <br />
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
?>
             </code>
             </pre><br />
             <pre class="line-numbers">
                <code class="language-html">
                <script type="text/plain" class="language-markup">
<!DOCTYPE html>
<html>

<body style="background-color:#383636;color:#F8F1F7;font-size:20px;">
    <h1 align="center">EDIT MAHASISWA</h1>
   
   <!-- isi kode php diatas disini -->

    <h3 align="center"></script>&lt;?php echo "$r[0] - $r[1]" ?><script type="text/plain" class="language-markup"></h3>
    <form action="index.php?page=save_mahasiswa" method="post">
        <label for="">NIM</label><br>
        <input type="text" name="Nim" require="" value="</script>&lt;?php echo $r['NIM'] ?>" readonly
            onclick="alert('NIM Tak Bisa Di Ubah')"> <script type="text/plain" class="language-markup"><br>
        <label for="">Nama</label><br>
        <input type="text" name="Nama" require="" value="</script>&lt;?php echo $r[1] ?>"> <script type="text/plain" class="language-markup"><br>
        <label for="">Jurusan</label><br>
        <select name="Jurusan" id="">
           
            <!-- isi kode php dibawah disini -->

        </select><br>
        <label for="">Alamat</label><br>
        <input type="text" name="Alamat" require="" value="</script>&lt;?php echo $r[2] ?>"> <script type="text/plain" class="language-markup"><br>
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
                 <li> Buka folder <i>content</i> >> <i>delete_mahasiswa.php </i> dan masukan kode dibawah ini
                 </li>
             </p>
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php  
    $NIM = $_GET['NIM'];
    $sql = $con->prepare("DELETE FROM mahasiswa WHERE NIM =? ");
    $sql->bindParam(1,$NIM);
    $sql->execute();
    echo "<script type="text/plain" class="language-markup"><script>
                alert('Data dengan NIM = $NIM Berhasil Di hapus');
                window.location.href = 'index.php?page=master_mahasiswa';
        /script>"; </script>   
?>      
                 </code>
                </pre><br /><br />

             <!-- jurusan -->
             <p>
                 <li> Buka folder <i>content</i> >> <i>master_jurusan.php </i> dan masukan kode dibawah ini
                 </li>
             </p><br />
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php  
        $sql = $con->prepare("SELECT * FROM dosen");
        $sql->execute();
        while ($d = $sql->fetch()) {
            echo "<script type="text/plain" class="language-markup"><option value='$d[0]'>$d[1]</option>";
        }
    ?>      
                    </script>
                </code>
            </pre><br />
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
        color: #0B486B;

    }

    td {
        border-bottom: 1px dashed white;
        text-align: left;
        padding: 5px;
        font-size: 30px;

    }

    a {
        color: #0B486B;
        text-decoration: none;
    }
    </style>

</head>

<body style="background-color:#383636;color:#F8F1F7;font-size:20px;">
    <h1 align="center">Master Jurusan</h1>
    <form action="index.php?page=master_jurusan_save" method="POST">
        <label for="">Kode Jurusan</label><br>
        <input type="text" placeholder="Masukan Kode Jurusan" name="kode_jur" required=""><br>
        <label for="">Nama Jurusan</label><br>
        <input type="text" placeholder="Masukan Nama Jurusan" name="nama_jur" required=""><br>
        <label for="">Nama Kaprodi</label><br>
        <select name="kaprodi" id="">
           
            <!-- masukan kode diatas disini -->

        </select>
        <button type="submit">Simpan</button>
    </form>
    <hr />
    <hr />
    <h1 align="center">Data Jurusan</h1>
    <table>
        <tr>
            <th>KODE JURUSAN</th>
            <th>NAMA JURUSAN</th>
            <th>KAPRODI</th>
            <th>AKSI</th>
        </tr>
        
        <!-- masukan kode dibawah disini -->

    </table>
</body>
                  </script>
                </code>
                </pre><br />
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php  
        $sql = $con->query("SELECT j.*, d.* FROM jurusan j INNER JOIN dosen d ON d.nid = j.kaprodi");
        while ($r = $sql->fetch(PDO::FETCH_BOTH)) {            
			echo "<script type="plain/text" class="language-markup"><tr>
					<td>$r[kode_jurusan]</td>
					<td>$r[nama_jurusan]</td>
					<td>$r[NAMA_DOSEN]</td>
                    <td><a href='index.php?page=master_jurusan_edit&kode_jur=$r[kode_jurusan]' onclick='return confirm(\"apakah anda yakin mengedit data $r[0] - $r[1] ?\");'>Edit</a>
                       <a href='index.php?page=master_jurusan_delete&kode_jur=$r[0]' onclick='return confirm(\"apakah anda yakin menghapus data  $r[0] - $r[1]?\");'>Delete</a>
				</tr>";
		}
	?>
            </script>
            </code>
            </pre> <br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>mater_jurusan_save.php </i> dan masukan kode dibawah ini, jangan
                     lupa tambahkan tanda <b>" < "</b> pada kata <i><b>" /script"</b></i></li>
                 </li>
             </p>
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php  
    $kode_jur = filter_var($_POST['kode_jur'], FILTER_SANITIZE_STRING);
    $nama_jur = filter_var($_POST['nama_jur'], FILTER_SANITIZE_STRING);
    $nid = filter_var($_POST['kaprodi'], FILTER_SANITIZE_STRING);
    
    if (empty($kode_jur) || empty($nama_jur)) 
    {
        echo <script type="plain/text" class="language-markup">"<script>
                alert('Data Harus Dilengkapi');
                window.location.href ='index.php?page=master_jurusan';
        /script>"; </script>
    }
    else
    {
        $sql = $con->prepare("SELECT * FROM jurusan WHERE kode_jurusan = ?");
        $sql->bindParam(1, $kode_jur);
        $sql->execute();
        $row = $sql->rowCount(); 	
        if($row >= 1){
            $sql=$con->prepare( "UPDATE jurusan Set nama_jurusan = ?, kaprodi = ? WHERE kode_jurusan = ?");
            $sql->bindParam(1,$nama_jur);
            $sql->bindParam(2,$nid);
            $sql->bindParam(3,$kode_jur);
            $sql->execute();
            echo "<script type="plain/text" class="language-markup"><script>
                alert('$row Data Berhasil DiUpdate');
                window.location.href = 'index.php?page=master_jurusan';
            /script>"; </script>
        
        }
        else{	
            
                $sql = $con->prepare("INSERT INTO jurusan VALUES (?, ?, ?)");
                $sql->bindParam(1,$kode_jur);
                $sql->bindParam(2,$nama_jur);
                $sql->bindParam(3,$nid);
                $sql->execute();
                $row = $sql->rowCount(); 				
                echo "<script type="plain/text" class="language-markup"><script>
                        alert('$row Data Berhasil Ditambahkan');
                        window.location.href = 'index.php?page=master_jurusan';
                /script>"	;</script>

            }		
    }	
?>
                </code>
                </pre>
             <br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>master_jurusan_edit.php </i> dan masukan kode dibawah ini
                 </li>
             </p>
             <pre class="line-numbers">
             <code class="language-php">
&lt;?php
    $kode_jur =$_GET['kode_jur'];
    $sql = $con->prepare("SELECT * FROM jurusan Where kode_jurusan=?");
    $sql->bindParam(1, $kode_jur);
    $sql->execute();
    $r = $sql->fetch(PDO::FETCH_BOTH)
?>
             </code>
             </pre><br />
             <pre class="line-numbers">
                <code class="language-html">
                <script type="text/plain" class="language-markup">
<head>
    <style>
    a {
        color: #0B486B;
        text-decoration: none;
    }
    </style>

</head>

<body style="background-color:#383636;color:#F8F1F7;font-size:20px;">

    <!-- masukan kode php diatas disini -->

    <h1 align="center">Edit Jurusan</h1>
    <h2 align="center"></script>&lt;?php echo "$r[0] - $r[1]"?><script type="text/plain" class="language-markup"></h2>
    <form action="index.php?page=master_jurusan_save" method="POST">
        <label for="">Kode Jurusan</label><br>
        <input type="text" placeholder="Masukan Kode Jurusan" name="kode_jur" value="</script>&lt;?php echo "$r[0]"?>"
            onclick="alert('kode jurusan tidak Bisa diganti')" readonly><script type="text/plain" class="language-markup"><br>
        <label for="">Nama Jurusan</label><br>
        <input type="text" placeholder="Masukan Nama Jurusan" name="nama_jur" value="</script>&lt;?php echo "$r[1]"?>"
            require=""><script type="text/plain" class="language-markup"><br>
        <label for="">Nama Kaprodi</label><br>
        <select name="kaprodi" id="">
           
            <!-- masukan kode php dibawah disini -->

        </select>
        <button type="submit">Update</button>
    </form>

</body>
                  </script>
                </code>
                </pre><br />
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php
    $dosen= $con->prepare("SELECT * FROM dosen");
    $dosen->execute();
    while($d= $dosen->fetch()){
        $selected = "";
        if($r[2] == $d[0]){
            $selected = "selected";
        }
        echo "<script type="text/plain" class="language-markup"><option value='$d[0]' $selected> $d[1] </option>";
    }
?>  </script>
        </code>
        </pre>
             <br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>master_jurusan_delete.php </i> dan masukan kode dibawah ini
                 </li>
             </p>
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php  
    $NIM = $_GET['NIM'];
    $sql = $con->prepare("DELETE FROM mahasiswa WHERE NIM =? ");
    $sql->bindParam(1,$NIM);
    $sql->execute();
    echo "<script type="text/plain" class="language-markup"><script>
                alert('Data dengan NIM = $NIM Berhasil Di hapus');
                window.location.href = 'index.php?page=master_mahasiswa';
        /script>"; </script>   
?>      
                 </code>
                </pre><br /><br />

             <!-- Nilai -->
             <p>
                 <li> Buka folder <i>content</i> >> <i>nilai.php </i> dan masukan kode dibawah ini
                 </li>
             </p><br />
             <pre class="line-numbers">
                <code class="language-php">               
&lt;?php  
    //code php 1
    $sql = $con->prepare("SELECT * FROM mahasiswa");
    $sql->execute();
    while ($mhs = $sql->fetch()) {
        echo "<script type="plain/text" class="language-markup"><option value='$mhs[0]'>$mhs[1]</option>";
    }
?>   
                    </script>
                </code>
            </pre><br />

             <pre class="line-numbers">
                <code class="language-php">               
&lt;?php  
        //code php 2
        $sql = $con->prepare("SELECT * FROM matakuliah");
        $sql->execute();
        while ($mk = $sql->fetch()) {
            echo "<script type="plain/text" class="language-markup"><option value='$mk[0]'>$mk[1]</option>";
        }
    ?>
                    </script>
                </code>
            </pre><br />

             <pre class="line-numbers">
                <code class="language-php">               
&lt;?php  
        //code php 3
        $sql = $con->prepare("SELECT * FROM dosen");
        $sql->execute();
        while ($d = $sql->fetch()) {
            echo "<script type="plain/text" class="language-markup"><option value='$d[0]'>$d[1]</option>";
        }
    ?>

                    </script>
                </code>
            </pre><br />

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
        color: #fff000;

    }

    td {
        border-bottom: 1px dashed white;
        text-align: left;
        padding: 5px;
        font-size: 30px;

    }

    a {
        color: #fff000;
        text-decoration: none;
    }
    </style>
</head>

<body style="background-color:#383636;color:#F8F1F7;font-size:20px;">
    <h1 align="center">Master Nilai</h1>
    <form action="index.php?page=nilai_save" method="POST">
        <label for="">Id Nilai </label><br>
        <input type="text" name="id_nilai" placeholder="Masukan Id  Nilai " required=""><br>

        <label for="">Nama Mahasiswa </label><br>
        <select name="nim" id="">
            
                <!-- // input code php 1 diatas disini -->

        </select><br>

        <label for="">Mata Kuliah : </label><br>
        <select name="kode_mk" id="">

                 <!-- // input code php 2 diatas disini -->

        </select><br>

        <label for="">UTS : </label><br>
        <input type="number" name="uts" placeholder="Masukan Nilai Uts" required=""><br>
        <label for="">UAS : </label><br>
        <input type="number" name="uas" placeholder="Masukan Nilai Uas " required=""><br>
        <label for="">Tugas : </label><br>
        <input type="number" name="tugas" placeholder="Masukan Nilai Tugas" required=""><br>

        <label for="">Nama Dosen</label><br>
        <select name="dosen" id="">
           
                 <!-- // input code php 3 diatas disini -->

        </select><br>
        <button type="submit">Simpan</button>
    </form>
    <h1 align="Center">Data Nilai</h1>
    <table>
        <tr>
            <th>ID NILAI</th>
            <th>NAMA</th>
            <th>MATA KULIAH</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>TUGAS</th>
            <th>DOSEN</th>
            <th>AKSI</th>
            </th>
        </tr>
        
                <!-- input code php dibawah disini -->

    </table><br>
</body>
                  </script>
                </code>
                </pre><br />
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php  
$sql = $con->query("SELECT m.*, n.* , mk.*, d.* FROM nilai n INNER JOIN mahasiswa m ON m.NIM = n.NIM INNER JOIN matakuliah mk ON mk.id_mk = n.KODE_MK INNER JOIN dosen d ON d.NID = n.NID");
//$sql = $con->prepare("SELECT * FROM nilai");
$sql->execute();
while ($r = $sql->fetch(PDO::FETCH_BOTH)) {
echo "<script type="plain/text" class="language-markup"><tr>
    <td>$r[ID_NILAI]</td>
    <td>$r[NAMA_MHS]</td>
    <td>$r[nama_mk]</td>
    <td>$r[UTS]</td>
    <td>$r[UAS]</td>
    <td>$r[TUGAS]</td>
    <td>$r[NAMA_DOSEN]</td>
    <td><a href='index.php?page=nilai_edit&id=$r[ID_NILAI]' onclick='return confirm(\"apakah anda yakin mengedit data $r[ID_NILAI] - $r[NAMA_MHS] ?\");'>Edit</a>
    <a href='index.php?page=nilai_delete&id=$r[ID_NILAI]' onclick='return confirm(\"apakah anda yakin menghapus data  $r[ID_NILAI] - $r[NAMA_MHS] ?\");'>Delete</a>
    </td>
</tr>";
}
?>
            </script>
            </code>
            </pre> <br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>nilai_save.php </i> dan masukan kode dibawah ini, jangan
                     lupa tambahkan tanda <b>" < "</b> pada kata <i><b>" /script"</b></i></li>
                 </li>
             </p>
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php          
    $ID_NILAI = filter_var($_POST['id_nilai'], FILTER_SANITIZE_STRING);
    $NIM = filter_var($_POST['nim'], FILTER_SANITIZE_STRING);   
    $KODE_MK = filter_var($_POST['kode_mk'], FILTER_SANITIZE_STRING);
    $UTS = filter_var($_POST['uts'], FILTER_SANITIZE_STRING);
    $UAS = filter_var($_POST['uas'], FILTER_SANITIZE_STRING);
    $TUGAS = filter_var($_POST['tugas'], FILTER_SANITIZE_STRING);
    $NID = filter_var($_POST['dosen'], FILTER_SANITIZE_STRING);
    
    if (empty($ID_NILAI)) 
    {
        echo "<script type="plain/text" class="language-markup"><script>
                alert('Data Harus Dilengkapi');
                window.location.href ='index.php?page=nilai';
        /script>"; </script>
    }
    else
    {
        $sql = $con->prepare("SELECT * FROM nilai WHERE ID_NILAI = ?");
        $sql->bindParam(1, $ID_NILAI);
        $sql->execute();
        $row = $sql->rowCount(); 	
        
        if($row > 0){
            $sql=$con->prepare( "UPDATE nilai Set NIM = ?, KODE_MK=?, UTS=?, UAS=?, TUGAS=?, NID=? WHERE ID_NILAI = ?");			
            $sql->bindParam(1,$NIM);
            $sql->bindParam(2,$KODE_MK);
            $sql->bindParam(3,$UTS);
            $sql->bindParam(4,$UAS);
            $sql->bindParam(5,$TUGAS);
            $sql->bindParam(6,$NID);
            $sql->bindParam(7,$ID_NILAI);
            $sql->execute();
            echo "<script type="plain/text" class="language-markup"><script>
                alert('$row Data Berhasil DiUpdate');
                window.location.href = 'index.php?page=nilai';
            /script>"; </script>
        
        }
        else{	
            
                $sql = $con->prepare("INSERT INTO nilai VALUES (?, ?, ?, ?, ?, ?, ?)");
                $sql->bindParam(1,$ID_NILAI);
                $sql->bindParam(2,$NIM);
                $sql->bindParam(3,$KODE_MK);
                $sql->bindParam(4,$UTS);
                $sql->bindParam(5,$UAS);
                $sql->bindParam(6,$TUGAS);
                $sql->bindParam(7,$NID);
                $sql->execute();
                $row = $sql->rowCount(); 				
                echo "<script type="plain/text" class="language-markup"><script>
                        alert('$row Data Berhasil Ditambahkan');
                        window.location.href = 'index.php?page=nilai';
                /script>"	;</script>

            }		
    }	
?>
                </code>
                </pre>
             <br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>nilai_edit.php </i> dan masukan kode dibawah ini
                 </li>
             </p>
             <pre class="line-numbers">
             <code class="language-php">
&lt;?php   
    // code php 1 
    $id_nilai = $_GET['id'];
    $sql = $con->prepare("SELECT * FROM nilai Where ID_NILAI =?");
    $sql->bindParam(1, $id_nilai);
    $sql->execute();
    $r = $sql->fetch(PDO::FETCH_BOTH)
?>
             </code>
             </pre><br />

             <pre class="line-numbers">
             <code class="language-php">
&lt;?php   
     // code php 2 
    $mhs= $con->prepare("SELECT * FROM mahasiswa");
    $mhs->execute();
    while($mhasiswa= $mhs->fetch()){
        $selected = "";
        if($r[1] == $mhasiswa[0]){
            $selected = "selected";
        }
        echo "<script type="text/plain" class="language-markup"><option value='$mhasiswa[0]' $selected> $mhasiswa[1] </option>";
    }    
?>          </script>
             </code>
             </pre><br />

             <pre class="line-numbers">
             <code class="language-php">
&lt;?php   
    // code php 3
    $mk= $con->prepare("SELECT * FROM matakuliah");
    $mk->execute();
    while($mtakuliah= $mk->fetch()){
        $selected = "";
        if($r[2] == $mtakuliah[0]){
            $selected = "selected";
        }
        echo "<script type="text/plain" class="language-markup"><option value='$mtakuliah[0]' $selected> $mtakuliah[1] </option>";
    }
?>          </script>
             </code>
             </pre><br />

             <pre class="line-numbers">
                <code class="language-html">
                <script type="text/plain" class="language-markup">
<body style="background-color:#383636;color:#F8F1F7;font-size:20px;">
    
    <!-- input code php 1 diatas disini -->

    <h1 align="center">Edit Nilai</h1>
    <form action="index.php?page=nilai_save" method="POST">
        <label for="">Id Nilai </label><br>
        <input type="text" name="id_nilai" placeholder="Masukan Id  Nilai " readonly
            onclick="alert('Id Nilai tak bisa di Edit ! ')" value="</script>&lt;?php echo "$r[0]"?>"><script type="text/plain" class="language-markup"><br>
        <label for="">Nama Mahasiswa </label><br>
        <select name="nim" id="">

            <!-- //input code php 2 diatas disini -->

        </select><br>
        <label for="">Mata Kuliah : </label><br>
        <select name="kode_mk" id="">
            
             <!-- input code php 3 diatas disini -->

        </select><br>
        <label for="">UTS : </label><br>
        <input type="number" name="uts" placeholder="Masukan Nilai Uts" required="" value="</script>&lt;?php echo "$r[3]"?>"><script type="text/plain" class="language-markup"><br>
        <label for="">UAS : </label><br>
        <input type="number" name="uas" placeholder="Masukan Nilai Uas " required="" value="</script>&lt;?php echo "$r[4]"?>"><script type="text/plain" class="language-markup"><br>
        <label for="">Tugas : </label><br>
        <input type="number" name="tugas" placeholder="Masukan Nilai Tugas" required=""
            value="</script>&lt;?php echo "$r[5]"?>"><script type="text/plain" class="language-markup"><br>
        <label for="">Nama Dosen</label><br>
        <select name="dosen" id="">
            
                 <!-- input code php dibawah disini -->

        </select><br>
        <button type="submit">Update</button>
    </form>
</body>
                  </script>
                </code>
                </pre><br />
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php
    $dosen= $con->prepare("SELECT * FROM dosen");
        $dosen->execute();
        while($d= $dosen->fetch()){
            $selected = "";
            if($r[6] == $d[0]){
                $selected = "selected";
            }
            echo "<script type="text/plain" class="language-markup"><option value='$d[0]' $selected> $d[1] </option>";
    }
?>  </script>
        </code>
        </pre>
             <br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>nilai_delete.php </i> dan masukan kode dibawah ini
                 </li>
             </p>
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php  
    $id_nilai = $_GET['id'];
    $sql = $con->prepare("DELETE FROM nilai WHERE ID_NILAI = ?");
    $sql->bindParam(1, $id_nilai);
    $sql->execute();
   
    echo "<script type="text/plain" class="language-markup"><script>
                alert('Data dengan id = $id_nilai Berhasil Di hapus');
                window.location.href = 'index.php?page=nilai';
        /script>"; </script>
    
?>
                 </code>
                </pre><br /><br />

             <!-- matakuliah -->

             <p>
                 <li> Buka folder <i>content</i> >> <i>mata_kuliah.php </i> dan masukan kode dibawah ini
                 </li>
             </p><br />
             <pre class="line-numbers">
                <code class="language-php">               
&lt;?php  
    //code php 1
    $sql = $con->query("SELECT * FROM jurusan");
    while ($d = $sql->fetch()) {
        echo "<script type="plain/text" class="language-markup"><option value='$d[0]'>$d[1]</option>";
        }
?>
                    </script>
                </code>
            </pre><br />

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
        color: #EABD0A;

    }

    td {
        border-bottom: 1px dashed white;
        text-align: left;
        padding: 5px;
        font-size: 30px;

    }

    a {
        color: #EABD0A;
        text-decoration: none;
    }
    </style>
</head>

<body style="background-color:#383636;color:#F8F1F7;font-size:20px;">
    <h1 align=" center">Master Matakuliah</h1>
    <form action="index.php?page=mata_kuliah_save" method="POST">
        <label for="">Id Matakuliah : </label><br>
        <input type="text" name="id_mk" placeholder="Masukan Id Mata Kuliah" required=""><br>
        <label for="">Nama Matakuliah : </label><br>
        <input type="text" name="nama_mk" placeholder="Masukan Nama Mata Kuliah" required=""><br>
        <label for="">SKS : </label><br>
        <input type="text" name="sks" placeholder="Masukan Sks" required=""><br>
        <label for="">Semester : </label><br>
        <input type="text" name="semester" placeholder="Masukan Semester" required=""><br>
        <label for="">Jurusan : </label><br>
        <select name=kode_jur>
           
            <!-- input code php 1 diatas disini -->

        </select>
        <button type="submit">Simpan</button>
    </form>

    <h1 align="Center">Data Mata Kuliah</h1>
    <table>
        <tr>
            <th>ID MK</th>
            <th>NAMA MK</th>
            <th>SKS</th>
            <th>SEMESTER</th>
            <th>JURUSAN</th>
            <th>AKSI</th>
        </tr>
       
		          <!-- input code php dibawah disini -->
    </table><br>
</body>
                  </script>
                </code>
                </pre><br />
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php  
    $sql = $con->query("SELECT j.*, mk.* FROM matakuliah mk INNER JOIN jurusan j ON j.kode_jurusan = mk.kode_jurusan");
    $sql->execute();
    while ($r = $sql->fetch(PDO::FETCH_BOTH)) {
    echo "<script type="text/plain" class="language-markup"><tr>
        <td>$r[id_mk]</td>
        <td>$r[nama_mk]</td>
        <td>$r[sks]</td>
        <td>$r[semester]</td>
        <td>$r[nama_jurusan]</td>
        <td><a href='index.php?page=mata_kuliah_edit&id_mk=$r[id_mk]' onclick='return confirm(\"apakah anda yakin mengedit data $r[id_mk] - $r[nama_mk] ?\");'>Edit</a>
        <a href='index.php?page=mata_kuliah_delete&id_mk=$r[id_mk]' onclick='return confirm(\"apakah anda yakin menghapus data   $r[id_mk] - $r[nama_mk] ?\");'>Delete</a>
        </td>
    </tr>";
    }
	          
?>
            </script>
            </code>
            </pre> <br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>mata_kuliah_save.php </i> dan masukan kode dibawah ini, jangan
                     lupa tambahkan tanda <b>" < "</b> pada kata <i><b>" /script"</b></i></li>
                 </li>
             </p>
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php          
 	$id = filter_var($_POST['id_mk'], FILTER_SANITIZE_STRING);
	$nama_mk = filter_var($_POST['nama_mk'], FILTER_SANITIZE_STRING);
    $sks = filter_var($_POST['sks'], FILTER_SANITIZE_STRING);
    $semester = filter_var($_POST['semester'], FILTER_SANITIZE_STRING);
	$kode_jurusan = filter_var($_POST['kode_jur'], FILTER_SANITIZE_STRING);
	
	if (empty($nama_mk)||empty($sks)||empty($semester)||empty($kode_jurusan)) 
	{
		echo "<script type="text/plain" class="language-markup"><script>
            alert('Data Harus Dilengkapi');
            window.location.href ='index.php?page=mata_kuliah';
		/script>"; </script>
	}
	else
	{
		$sql = $con->prepare("SELECT * FROM matakuliah WHERE id_mk = ?");
		$sql->bindParam(1, $id);
		$sql->execute();
		$row = $sql->rowCount(); 	
		if($row > 0){
			$sql=$con->prepare( "UPDATE matakuliah Set nama_mk = ?, sks = ?, semester = ?, kode_jurusan = ? WHERE id_mk = ?");
			$sql->bindParam(1,$nama_mk);
            $sql->bindParam(2,$sks);
            $sql->bindParam(3,$semester);
            $sql->bindParam(4,$kode_jurusan);
            $sql->bindParam(5,$id);
			$sql->execute();
			echo "<script type="text/plain" class="language-markup"><script>
				alert('$row Data Berhasil DiUpdate');
				window.location.href = 'index.php?page=mata_kuliah';
			/script>"; </script>
		
		}
		else{	
			
				$sql = $con->prepare("INSERT INTO matakuliah VALUES (?, ?, ?, ?, ?)");
				$sql->bindParam(1,$id);
				$sql->bindParam(2,$nama_mk);
				$sql->bindParam(3,$sks);
                $sql->bindParam(4,$semester);
				$sql->bindParam(5,$kode_jurusan);
                $sql->execute();
				$row = $sql->rowCount(); 				
				echo "<script type="text/plain" class="language-markup"><script>
						alert('$row Data Berhasil Ditambahkan');
						window.location.href = 'index.php?page=mata_kuliah';
				/script>"	;</script>

			}		
	}	
?>                </code>
                </pre>
             <br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>mata_kuliah_edit.php </i> dan masukan kode dibawah ini
                 </li>
             </p>
             <pre class="line-numbers">
             <code class="language-php">
&lt;?php   
        //code php 1
    $id =$_GET['id_mk'];
    $sql = $con->prepare("SELECT * FROM matakuliah Where id_mk=?");
    $sql->bindParam(1, $id);
    $sql->execute();
    $r = $sql->fetch(PDO::FETCH_BOTH)
?>
             </code>
             </pre><br />

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
        color: #0B486B;

    }

    td {
        border-bottom: 1px dashed white;
        text-align: left;
        padding: 5px;
        font-size: 30px;

    }

    a {
        color: #0B486B;
        text-decoration: none;
    }
    </style>
</head>

<body style="background-color:#383636;color:#F8F1F7;font-size:20px;">
    
    <!-- input code php 1 diatas disini -->

    <h1 align="center">Edit Matakuliah</h1>
    <form action="index.php?page=mata_kuliah_save" method="POST">
        <label for="">Id Matakuliah : </label><br>
        <input type="text" name="id_mk" placeholder="Masukan Id Mata Kuliah" readonly value="</script>&lt;?php echo "$r[0]" ?>"
            onclick="alert('Id tidak Bisa Diganti')"><script type="text/plain" class="language-markup"><br>
        <label for="">Nama Matakuliah : </label><br>
        <input type="text" name="nama_mk" placeholder="Masukan Nama Mata Kuliah" required=""
            value="</script>&lt;?php echo "$r[1]"?>"><script type="text/plain" class="language-markup"><br>
        <label for="">SKS : </label><br>
        <input type="text" name="sks" placeholder="Masukan Sks" required="" value="</script>&lt;?php echo "$r[2]"?>"><script type="text/plain" class="language-markup"><br>
        <label for="">Semester : </label><br>
        <input type="text" name="semester" placeholder="Masukan Semester" required="" value="</script>&lt;?php echo "$r[3]"?>"><script type="text/plain" class="language-markup"><br>
        <label for="">Kode Jurusan : </label><br>
        <select name=kode_jur>
           
                <!-- input code php dibawah disini -->

        </select>
        <button type="submit">Update</button>
    </form>
</body>
                  </script>
                </code>
                </pre><br />
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php
    $jur= $con->prepare("SELECT * FROM jurusan");
    $jur->execute();
    while($j= $jur->fetch()){
        $selected = "";
        if($r[4] == $j[0]){
            $selected = "selected";
        }
        echo "<script type="text/plain" class="language-markup"><option value='$j[0]' $selected> $j[1] </option>";
    }
?>  </script>
        </code>
        </pre>
             <br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>mata_kuliah_delete.php </i> dan masukan kode dibawah ini, jangan
                     lupa tambahkan tanda <b>" < "</b> pada kata <i><b>" /script"</b></i></li>
             </p>
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php  
    $id = $_GET['id_mk'];
    $sql = $con->prepare("DELETE FROM matakuliah WHERE id_mk = ?");
    $sql->bindParam(1, $id);
    $sql->execute();
    $row = $sql->rowCount();
   
    echo "<script type="text/plain" class="language-markup"><script>
                alert('$row Data dengan ID = $id Berhasil Di hapus');
                window.location.href = 'index.php?page=mata_kuliah';
        /script>";  </script>  
?>
                 </code>
                </pre><br /><br />
             <!-- <p>
                 <li>saran saya kalian menonton video dibawah ini untuk Tutorial atau cara pemakaian database dan
                     kode - kode diatas</li>
             </p><br /><br /> -->
             <p> SEKIAN dan TERIMA KASIH sudah membaca di website ku, God Bless You All</p><br />

         </ol>
         <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

     </div>

     <!-- Akhir Content-->
     <script src="../bootstrap/js/prism.js"></script>
 </body>

 </html>