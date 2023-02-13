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
     <div class="">
         <h1 align="center" id="h1">Membuat CRUD KHS, NILAI dan MATAKULIAH Menggunakan database dan PDO</h1>
         <hr />
         <ol>
             <div align="center" class="embed-responsive embed-responsive-16by9 mb-3">
                 <iframe controls width="720px" height="480" class="embed-responsive-item" src="https://www.youtube.com/embed/-gLrEyKlGLU"
                     frameborder="1"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                     allowfullscreen></iframe>
             </div>

             <h4>Perhatikan Penjelasan dengan Cermat</h4><br />
             <p>Saran Penulis kalian menonton video diatas atau klik <a
                     href="https://www.youtube.com/watch?v=-gLrEyKlGLU"> disini untuk melihat videonya</a></p><br />
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

             <li>Import terlebih dahulu databasenya dengan nama database <b>stikom</b>. kalian bisa melihat cara
                 mengimport<a href="?folder=Web&page=import_database_xampp"> database disini</a><br />
             </li><br />

             <li>Buka aplikasi Editor kalian Penulis menyarankan memakai Visual Studio code, jika tidak ada kalian bisa
                 memakai aplikasi editor kesayangan kalian seperti <i>sublime, notepad++</i> atau yang
                 lainnya<br /><br /></li>

             <li>buat 2 folder dan 1 file <i><b>index.php</b></i> seperti gambar dibawah. nama folder dan file harus
                 sama
                 sesuai gambar, harus memakai huruf kecil semua<br /><br /></li>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/MyCampus/MyUtsS5/1.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div>
             <br />

             <li>pada 2 folder tersebut buat file - file <i>PHP </i>seperti gambar dibawah, nama - nama file harus
                 menggunakan huruf kecil dan sama<br /><br /></li>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/MyCampus/MyUtsS5/2.PNG" class="img-fluid rounded" alt="...">
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

?>
                    </code>
                </pre><br />

             <li> Buka <i>index.php</i> masukan kode dibawah ini </li> <br />

             <pre class="line-numbers">
                <code class="language-php">
&lt;?php  	
	require_once 'config/koneksi.php';
?>
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
    <style type="text/css">
    @import url(content/style.css);
    </style>
</head>

<body>
    <nav>
        <a href="?page=aplikasi_khs">UTS</a>
        <a href="?page=nilai">NILAI</a>
        <a href="?page=matakuliah">MATAKULIAH</a>
    </nav>

    <div class="container">

        <!-- input code php bawah disini  -->
        
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
?>
                    </code>
                </pre><br />

             <p>
                 <li> Buka <i>style.css.php</i> masukan kode dibawah ini </li> <br />
             </p>
             <pre class="line-numbers">
                <code class="language-css">
               
    body {
        padding: 20px 150px;
        font-family: "Nunito Sans";        
        color:rgb(0, 0, 0);       
    }

    nav {
        background-color: #928d8e;
        text-align: center;
        padding: 20px;
    }

    nav a {
        display: inline-block;
        text-decoration: none;
        color: #fff;
        padding: 10px 10px 10px 10px;
        font-size: 30px;
        font-weight: bold;

    }

    nav a:hover {
        background-color: rgb(255, 255, 255);
        color: #5618ff;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
        font-size: 20px;
    }

    input,
    select,
    textarea {
        border: 1px solid #000000;
        padding: 10px 20px;
        margin-bottom: 5px;
        width: 100%;
        box-sizing: border-box;
        font-size: 20px;
    }

    table {
        border: 1px solid rgb(0, 0, 0);
        border-collapse: collapse; 
        font-size: 20px;    
        position:relative;  
        width: 80%; 
        max-width: 100%;
        overflow:auto;
    }
    
    th {
        border-bottom: 2px solid #000029;
        text-align: left;
        font-size: 25px;    
        padding: 5px;
        color: #ffffff;
        background-color: #928d8e;

    }

    td {
        border-bottom: 1px dashed rgb(2, 2, 2);
        text-align: left;
        padding: 5px;
        text-align:center;
        border: 1px solid rgb(0, 0, 0);
    }
 
    button {
        margin: 5px 0;
        font-weight: bold;
        padding: 10px 30px;
        margin-bottom: 5px;
        border: 1px solid #ccc;
        font-size: 20px;
        background-color: #d8ddd8;
        color: rgb(0, 0, 0);
    }

    button:hover {
        color: #ffffff;
        background-color:#928d8e;
    }

    h1 {
        font-size: 35px;
        text-align:center;
        font-weight: bold;
    }

  a {
        color: #020202;
        text-decoration: none;
    }
a:hover{
    background-color:#000;
    color:#fff;
}

                </code>
                </pre>



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
                 <li> Buka folder <i>content</i> >> <i>aplikasi_khs.php </i> dan masukan kode dibawah ini </li>
             </p><br />
             <pre class="line-numbers">
                <code class="language-php">               
&lt;?php  
 //code php 1
    $sql = $con->prepare("SELECT * FROM matakuliah");
    $sql->execute();
    while ($mk = $sql->fetch()) {
        echo "<script type="text/plain" class="language-markup"><option value='$mk[1]'>$mk[1]</option>";
    }
?></script>
                 </code>
            </pre><br />

             <pre class="line-numbers">
                <code class="language-php">                   
&lt;?php  
 //code php 2
    $sql = $con->prepare("SELECT * FROM grade");
    $sql->execute();
    while ($g = $sql->fetch()) {
        echo "<script type="text/plain" class="language-markup"><option value='$g[2]'>$g[1]</option>";
    }
?></script>
                 </code>
            </pre><br />

             <pre class="line-numbers">
                <code class="language-html">
                <script type="text/plain" class="language-markup">
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style type="text/css">
    @import url(style.css);
    </style>
</head>

<body>
    <h1>UTS SEMESTER 5</h1>

    <div class="">
        <form action="?page=save_khs" method="POST">
            <label for="">ID KHS : </label><br>
            <input type="number" name="id_khs" placeholder="Masukan Nilai ID KS" required=""><br>
            <label for="">Mata Kuliah : </label><br>
            <select name="nama_mk" id="">
               
            <!-- input code php 1 diatas disini -->

            </select><br>
            <label for="">SKS : </label><br>
            <input type="number" name="sks" placeholder="Masukan Nilai SKS" required=""><br>
            <label for="">GRADE : </label><br>
            <select name="grade" id="">

                <!-- input code php 2 diatas disini -->
                
            </select><br />
            <button type="submit">Simpan</button><br />
        </form>
    </div>

    <h1>Data KHS</h1>
    <table>
        <tr>
            <th>ID KHS</th>
            <th>MATAKULIAH</th>
            <th>SKS</th>
            <th>GRADE</th>
            <th>SKS x GRADE</th>
            <th>AKSI</th>
            </th>
        </tr>

         <!-- input code php 3 dibawah disini -->

        <tr>
            <td colspan=4>Total SKS <br />Indeks Prestasi</td>
            <td colspan=2></script>&lt;?php echo "{$sks}" ?><script type="text/plain" class="language-markup"><br /></script>&lt;?php echo "{$ip}" ?><script type="text/plain" class="language-markup"></td>
        </tr>

    </table><br>
</body>

</html>
                </script>
                </code>
             </pre><br />

             <pre class="line-numbers">
                <code class="language-php">                  
&lt;?php 
 //code php 3
    // $sql = $con->query("SELECT m.*, n.* , mk.*, d.* FROM nilai n INNER JOIN mahasiswa m ON m.NIM = n.NIM INNER JOIN matakuliah mk ON mk.id_mk = n.KODE_MK INNER JOIN dosen d ON d.NID = n.NID");
    $sql = $con->prepare("SELECT * FROM khs");
    $sql->execute();
    while ($r = $sql->fetch(PDO::FETCH_BOTH)) {
    echo "<script type="text/plain" class="language-markup"><tr>
        <td>$r[0]</td>
        <td>$r[1]</td>
        <td>$r[2]</td>
        <td>$r[3]</td>
        <td>$r[4]</td>
        <td><a href='?page=edit_khs&id_khs=$r[0]' onclick='return confirm(\"apakah anda yakin mengedit data dengan id = $r[0] ?\");'>Edit</a>
        <a href='?page=delete_khs&id_khs=$r[0]' onclick='return confirm(\"apakah anda yakin menghapus data dengan id = $r[0] ?\");'>Delete</a>
        </td>
    </tr>";</script>
    }
                            
    $sum = $con->prepare("SELECT SUM(sks) tot_sks FROM khs");
    $sum->execute();
    while ($t = $sum->fetch(PDO::FETCH_BOTH)) {
        $sks = $t[0];
    }                                          
    $sum = $con->prepare("SELECT SUM(total_nilai_bobot) bobot FROM khs");
    $sum->execute();
    while ($t = $sum->fetch(PDO::FETCH_BOTH)) {
        $bobot = $t[0];
    }
    $ip = $bobot/$sks;
?>
                    
                 </code>
            </pre><br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>save_khs.php </i> dan masukan kode dibawah ini, jangan
                     lupa tambah kan tanda <b>" < "</b> pada kata <i><b>" /script"</b></i></li>
             </p><br />
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php
    //save_update KHS

 	$id_khs = filter_var($_POST['id_khs'], FILTER_SANITIZE_STRING);
    $sks = filter_var($_POST['sks'], FILTER_SANITIZE_STRING);
    $grade = filter_var($_POST['grade'], FILTER_SANITIZE_STRING);
    $mk = filter_var($_POST['nama_mk'], FILTER_SANITIZE_STRING);       
    $a=intval($sks);
    $b=intval($grade);
    $tot_nil_bbt=$a*$b;

   if (empty($sks)) 
	{
		echo "<script type="text/plain" class="language-markup"><script>
            alert('Data Harus Dilengkapi');
            window.location.href ='index.php?page=aplikasi_khs';
		/script>";</script>
	}
	else
	{
		$sql = $con->prepare("SELECT * FROM khs WHERE id_khs = ?");
		$sql->bindParam(1, $id_khs);
		$sql->execute();
		$row = $sql->rowCount(); 	
		if($row >= 1){
			$sql=$con->prepare( "UPDATE khs Set matakuliah = ?, sks = ?, grade = ?, total_nilai_bobot = ? WHERE id_khs = ?");
			$sql->bindParam(1,$mk);
            $sql->bindParam(2,$sks);
            $sql->bindParam(3,$grade);
            $sql->bindParam(4,$tot_nil_bbt);
            $sql->bindParam(5,$id_khs);
			$sql->execute();
			echo "<script type="text/plain" class="language-markup"><script>
				alert('$row Data Berhasil DiUpdate');
				window.location.href = '?page=aplikasi_khs';
			/script>"; </script>
		
		}		else{	
			
			$sql = $con->prepare("INSERT INTO khs VALUES (?, ?, ?, ?, ?)");
			$sql->bindParam(1,$id_khs);
			$sql->bindParam(2,$mk);
            $sql->bindParam(3,$sks);
            $sql->bindParam(4,$grade);
            $sql->bindParam(5,$tot_nil_bbt);           
			$sql->execute();
			$row = $sql->rowCount(); 				
			echo "<script type="text/plain" class="language-markup"><script>
					alert('$row Data Berhasil Ditambahkan');
					window.location.href = 'index.php?page=aplikasi_khs';
			/script>"; </script>

			}		
	}	
?>              
                </code>
            </pre>

             <li> Buka folder <i>content</i> >> <i>edit_khs.php </i> dan masukan kode dibawah ini</li><br />
             <pre class="line-numbers">
                <code class="language-php">                
&lt;?php
//code php 1

    $id =$_GET['id_khs'];
    $sql = $con->prepare("SELECT * FROM khs Where id_khs=?");
    $sql->bindParam(1, $id);
    $sql->execute();
    $r = $sql->fetch(PDO::FETCH_BOTH)
?>
                </code>
                </pre><br />

             <pre class="line-numbers">
                <code class="language-php">                
&lt;?php
        //code php 2
    $mk= $con->prepare("SELECT * FROM matakuliah");
    $mk->execute();
    while($mtakuliah= $mk->fetch()){
        $selected = "";
        if($r[1] == $mtakuliah[1]){
            $selected = "selected";
        }
        echo "<script type="text/plain" class="language-markup"><option value='$mtakuliah[1]' $selected> $mtakuliah[1] </option>";
    }
?>
                    </script>
                </code>
                </pre><br />

             <pre class="line-numbers">
                <code class="language-php">                
&lt;?php  
        //code php 3

    $grade = $con->prepare("SELECT * FROM grade");
    $grade->execute();
    while ($g = $grade->fetch()) {
        $selected = "";
        if($r[3] == $g[2]){
            $selected = "selected";
        }
        echo "<script type="text/plain" class="language-markup"><option value='$g[2]' $selected> $g[1] </option>";
    }
?>              </script>
                </code>
                </pre><br />

             <pre class="line-numbers">
                <code class="language-html">
                <script type="text/plain" class="language-markup">
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style type="text/css">
    @import url(style.css);
    </style>
    <!-- Bootstrap CSS -->
</head>

<body>

    <!-- input code php 1 diatas disini -->
    
    <h1>EDIT KHS</h1>
    <!-- aplikasi -->
    <div class="">
        <form action="?page=save_khs" method="POST">
            <label for="">ID KHS : </label><br>
            <input type="number" name="id_khs" placeholder="Masukan Nilai ID KS" value="</script>&lt;?php echo"$r[0]"?>" readonly
                onclick="alert('id tidak bisa di edit')"> <script type="text/plain" class="language-markup"><br>
            <label for="">Mata Kuliah : </label><br>
            <select name="nama_mk" id="">

             <!-- input code php 2 diatas disini -->
                
            </select><br>
            <label for="">SKS : </label><br>
            <input type="number" name="sks" placeholder="Masukan Nilai SKS" required="" value="</script>&lt;?php echo"$r[2]"?>"><script type="text/plain" class="language-markup"><br>
            <label for="">GRADE : </label><br>
            <select name="grade" id="">
               
                    <!-- input code php 3 diatas disini -->

            </select><br />
            <button type="submit">Update</button><br />
        </form>
    </div>
    <!-- aplikasi end -->
    <!-- KHS -->
    <h1>Data KHS</h1>
    <table>
        <tr>
            <th>ID KHS</th>
            <th>MATAKULIAH</th>
            <th>SKS</th>
            <th>GRADE</th>
            <th>SKS x GRADE</th>
            <th>AKSI</th>
            </th>
        </tr>

        <!-- input code php 4 bawah disini -->
        
        <tr>
            <td colspan=4>Total SKS <br />Indeks Prestasi</td>
            <td colspan=2></script>&lt;?php echo "{$sks}" ?><script type="text/plain" class="language-markup"><br /></script>&lt;?php echo "{$ip}" ?> <script type="text/plain" class="language-markup"></td>
        </tr>

    </table><br>

</body>

</html>

                 </script>
                </code>
             </pre><br />
             <pre class="line-numbers">
                <code class="language-php">                
&lt;?php 
        //kode php 4

    // $sql = $con->query("SELECT m.*, n.* , mk.*, d.* FROM nilai n INNER JOIN mahasiswa m ON m.NIM = n.NIM INNER JOIN matakuliah mk ON mk.id_mk = n.KODE_MK INNER JOIN dosen d ON d.NID = n.NID");
    $sql = $con->prepare("SELECT * FROM khs");
    $sql->execute();
    while ($r = $sql->fetch(PDO::FETCH_BOTH)) {
    echo "<script type="text/plain" class="language-markup"><tr>
        <td>$r[0]</td>
        <td>$r[1]</td>
        <td>$r[2]</td>
        <td>$r[3]</td>
        <td>$r[4]</td>
        <td><a href='index.php?page=#i&id=$r[0]' onclick='return confirm(\"apakah anda yakin mengedit data dengan id = $r[0] ?\");'>Edit</a>
        <a href='?page=delete_khs&id_khs=$r[0]' onclick='return confirm(\"apakah anda yakin menghapus data dengan id = $r[0] ?\");'>Delete</a>
        </td>
    </tr>";
    }
                            
    $sum = $con->prepare("SELECT SUM(sks) tot_sks FROM khs");
    $sum->execute();
    while ($t = $sum->fetch(PDO::FETCH_BOTH)) {
        $sks = $t[0];
    }                                          
    $sum = $con->prepare("SELECT SUM(total_nilai_bobot) bobot FROM khs");
    $sum->execute();
    while ($t = $sum->fetch(PDO::FETCH_BOTH)) {
        $bobot = $t[0];
    }
    $ip = $bobot/$sks;
?>                 </script>
                </code>
                </pre><br />

             <p>
                 <li> Buka folder <i>content</i> >> <i>delete_khs.php </i> dan masukan kode dibawah ini jangan
                     lupa tambah kan tanda <b>" < "</b> pada kata <i><b>" /script"</b></i>
                 </li>
             </p>
             <pre class="line-numbers">
                <code class="language-php">              
&lt;?php
    $id = $_GET['id_khs'];
    $sql = $con->prepare("DELETE FROM khs WHERE id_khs = ?");
    $sql->bindParam(1, $id);
    $sql->execute();
    $row = $sql->rowCount();
   
    echo "<script type="text/plain" class="language-markup"><script>
                alert('$row Data dengan ID = $id Berhasil Di hapus');
                window.location.href = 'index.php?page=aplikasi_khs';
        /script>";</script>
    
?&gt;
                 
                </code>
                </pre>

             <p>
                 <li> Buka folder <i>content</i> >> <i>nilai.php </i> dan masukan kode dibawah ini </li>
             </p><br />
             <!-- php nilai 1 -->
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php 
//code php 1

    $sql = $con->prepare("SELECT * FROM mahasiswa");
    $sql->execute();
    while ($mhs = $sql->fetch()) {
        echo " <script type="text/plain" class="language-markup"><option value='$mhs[0]'>$mhs[1]</option>";
    }
?>
                </script>
                </code>
            </pre><br />
             <!-- kode php nilai 2 -->
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php 
//code php 2 
    $sql = $con->prepare("SELECT * FROM matakuliah");
    $sql->execute();
    while ($mk = $sql->fetch()) {
        echo "<script type="text/plain" class="language-markup"><option value='$mk[0]'>$mk[1]</option>";
    }
?>
                </script>
                </code>
            </pre>
             <!-- kode php nilai 3 -->
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php  
//code php 3
    $sql = $con->prepare("SELECT * FROM dosen");
    $sql->execute();
    while ($d = $sql->fetch()) {
        echo "<script type="text/plain" class="language-markup"><option value='$d[0]'>$d[1]</option>";
    }
?>
               </script>
                </code>
            </pre>

             <pre class="line-numbers">
                <code class="language-html">
                <script type="text/plain" class="language-markup">
<body>
    <h1 align="center">Master Nilai</h1>
    <form action="index.php?page=save_nilai" method="POST">
        <label for="">Id Nilai </label><br>
        <input type="text" name="id_nilai" placeholder="Masukan Id  Nilai " required=""><br>
        <label for="">Nama Mahasiswa </label><br>
        <select name="nim" id="">
           
           <!-- input code php 1 diatas disini  -->

        </select><br>

        <label for="">Mata Kuliah : </label><br>
        <select name="kode_mk" id="">

            <!-- input code php 2 diatas disini  -->
            
        </select><br>

        <label for="">UTS : </label><br>
        <input type="number" name="uts" placeholder="Masukan Nilai Uts" required=""><br>
        <label for="">UAS : </label><br>
        <input type="number" name="uas" placeholder="Masukan Nilai Uas " required=""><br>
        <label for="">Tugas : </label><br>
        <input type="number" name="tugas" placeholder="Masukan Nilai Tugas" required=""><br>

        <label for="">Nama Dosen</label><br>
        <select name="dosen" id="">

        <!-- input code php 3 diatas disini  -->
            
        </select><br>
        <button type="submit">Simpan</button>
    </form>
    <h1 align="Center">Data Nilai</h1>
    <div class="table-container">
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
           <!-- input code php 4 dibawah disni -->
        </table><br>
    </div>
</body>

                </script>
                </code>
            </pre>

             <pre class="line-numbers">
                <code class="language-php">

 &lt;?php  
 //code php 4
 
    $sql = $con->query("SELECT m.*, n.* , mk.*, d.* FROM nilai n INNER JOIN mahasiswa m ON m.NIM = n.NIM INNER JOIN matakuliah mk ON mk.id_mk = n.KODE_MK INNER JOIN dosen d ON d.NID = n.NID");
    //$sql = $con->prepare("SELECT * FROM nilai");
    $sql->execute();
    while ($r = $sql->fetch(PDO::FETCH_BOTH)) {
    echo "<script type="text/plain" class="language-markup"><tr>
        <td>$r[ID_NILAI]</td>
        <td>$r[NAMA_MHS]</td>
        <td>$r[nama_mk]</td>
        <td>$r[UTS]</td>
        <td>$r[UAS]</td>
        <td>$r[TUGAS]</td>
        <td>$r[NAMA_DOSEN]</td>
        <td><a href='index.php?page=edit_nilai&id=$r[ID_NILAI]' onclick='return confirm(\"apakah anda yakin mengedit data $r[ID_NILAI] - $r[NAMA_MHS] ?\");'>Edit</a>
        <a href='index.php?page=delete_nilai&id=$r[ID_NILAI]' onclick='return confirm(\"apakah anda yakin menghapus data  $r[ID_NILAI] - $r[NAMA_MHS] ?\");'>Delete</a>
        </td>
    </tr>";
    }
?>
                </script>
                </code>
            </pre><br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>save_nilai.php </i> dan masukan kode dibawah ini, jangan
                     lupa tambah kan tanda <b>" < "</b> pada kata <i><b>" /script"</b></i></li>
             </p><br />
             <pre class="line-numbers">
                <code class="language-php">
&lt;?php
    //save_update nilai
  
	$ID_NILAI = filter_var($_POST['id_nilai'], FILTER_SANITIZE_STRING);
	$NIM = filter_var($_POST['nim'], FILTER_SANITIZE_STRING);   
    $KODE_MK = filter_var($_POST['kode_mk'], FILTER_SANITIZE_STRING);
	$UTS = filter_var($_POST['uts'], FILTER_SANITIZE_STRING);
    $UAS = filter_var($_POST['uas'], FILTER_SANITIZE_STRING);
    $TUGAS = filter_var($_POST['tugas'], FILTER_SANITIZE_STRING);
	$NID = filter_var($_POST['dosen'], FILTER_SANITIZE_STRING);
	
	if (empty($ID_NILAI)) 
	{
		echo "<script type="text/plain" class="language-markup"><script>
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
			echo "<script type="text/plain" class="language-markup"><script>
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
				echo "<script type="text/plain" class="language-markup"><script>
						alert('$row Data Berhasil Ditambahkan');
						window.location.href = 'index.php?page=nilai';
				/script>"	;</script>

			}		
	}	
?>
                </code>
            </pre>
             <p>
                 < <li> Buka folder <i>content</i> >> <i>edit_nilai.php </i> dan masukan kode dibawah ini</li><br />
             </p>
             <pre class="line-numbers">
                <code class="language-php">                
&lt;?php
//code php 1

    $id=$_GET['id'];
    $sql = $con->prepare("SELECT * FROM nilai Where id_nilai=?");
    $sql->bindParam(1, $id);
    $sql->execute();
    $r = $sql->fetch(PDO::FETCH_BOTH)
?>
                </code>
                </pre><br />
             <pre class="line-numbers">
                <code class="language-php">                
&lt;?php
//code php 2
    $mhs= $con->prepare("SELECT * FROM mahasiswa");
    $mhs->execute();
    while($mhasiswa= $mhs->fetch()){
        $selected = "";
        if($r[1] == $mhasiswa[0]){
            $selected = "selected";
        }
        echo "<script type="text/plain" class="language-markup"><option value='$mhasiswa[0]' $selected> $mhasiswa[1] </option>";
    }
?>              </script>
                </code>
                </pre><br />
             <pre class="line-numbers">
                    <code class="language-php">                
&lt;?php
//code php 3

    $mk= $con->prepare("SELECT * FROM matakuliah");
    $mk->execute();
    while($mtakuliah= $mk->fetch()){
        $selected = "";
        if($r[2] == $mtakuliah[0]){
            $selected = "selected";
        }
        echo "<script type="text/plain" class="language-markup"><option value='$mtakuliah[0]' $selected> $mtakuliah[1] </option>";
    }
?>
                      </script>
                    </code>
                </pre><br />

             <pre class="line-numbers">
                <code class="language-html">
                <script type="text/plain" class="language-markup">
<body>
    
    <!-- input code php 1 diatas disni -->

    <h1 align="center">Edit Nilai</h1>
    <form action="index.php?page=save_nilai" method="POST">
        <label for="">Id Nilai </label><br>
        <input type="text" name="id_nilai" placeholder="Masukan Id  Nilai " readonly
            onclick="alert('Id Nilai tak bisa di Edit ! ')" value="</script>&lt;?php echo "$r[0]"?>"><script type="text/plain" class="language-markup"><br>
        <label for="">Nama Mahasiswa </label><br>
        <select name="nim" id="">
          
            <!-- input code php 2 diatas disini -->

        </select><br>

        <label for="">Mata Kuliah : </label><br>
        <select name="kode_mk" id="">
            
                <!-- input code php 3 diatas disni -->

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
            
            <!-- input code php 4 dibawah disini -->

        </select><br>
        <button type="submit">Update</button>
    </form>
</body>

                </script>
                </code>
            </pre>

             <pre class="line-numbers">
                    <code class="language-php">                
&lt;?php
//code php 4

    $dosen= $con->prepare("SELECT * FROM dosen");
    $dosen->execute();
    while($d= $dosen->fetch()){
        $selected = "";
        if($r[6] == $d[0]){
            $selected = "selected";
        }
        echo " <script type="text/plain" class="language-markup"><option value='$d[0]' $selected> $d[1] </option>";
    }
?>                      </script>
                    </code>
                </pre><br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>delete_nilai.php </i> dan masukan kode dibawah ini jangan
                     lupa tambah kan tanda <b>" < "</b> pada kata <i><b>" /script"</b></i>
                 </li>
             </p><br />
             <pre class="line-numbers">
                    <code class="language-php">                
&lt;?php

    $id_nilai = $_GET['id'];
    $sql = $con->prepare("DELETE FROM nilai WHERE ID_NILAI = ?");
    $sql->bindParam(1, $id_nilai);
    $sql->execute();
   
    echo " <script type="text/plain" class="language-markup"><script>
                alert('Data dengan id = $id_nilai Berhasil Di hapus');
                window.location.href = 'index.php?page=nilai';
        /script>"; </script>   
?>
                    </code>
                </pre><br />

             <p>
                 <li> Buka folder <i>content</i> >> <i>matakuliah.php </i> dan masukan kode dibawah ini </li>
             </p><br />
             <pre class="line-numbers">
                <code class="language-php">                
&lt;?php
//code php 1
  
    $sql = $con->query("SELECT * FROM jurusan");
    while ($d = $sql->fetch()) {
        echo " <script type="text/plain" class="language-markup"><option value='$d[0]'>$d[1]</option>";
        }
?>
    
             </script>
                </code>
                </pre><br />

             <pre class="line-numbers">
                    <code class="language-html">
                    <script type="text/plain" class="language-markup">
<body>
    <h1 align=" center">Master Matakuliah</h1><br />

    <form action="index.php?page=save_matakuliah" method="POST">
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
        
                <!-- input code php 2 bawah disini -->

    </table><br>

</body>

                    </script>
                    </code>
                </pre>
             <pre class="line-numbers">
                <code class="language-php">                
&lt;?php
//code php 2
    $sql = $con->query("SELECT j.*, mk.* FROM matakuliah mk INNER JOIN jurusan j ON j.kode_jurusan = mk.kode_jurusan");
    //$sql = $con->prepare("SELECT * FROM matakuliah");
    $sql->execute();
    while ($r = $sql->fetch(PDO::FETCH_BOTH)) {
    echo "<script type="text/plain" class="language-markup"><tr>
        <td>$r[id_mk]</td>
        <td>$r[nama_mk]</td>
        <td>$r[sks]</td>
        <td>$r[semester]</td>
        <td>$r[nama_jurusan]</td>
        <td><a href='index.php?page=edit_matakuliah&id_mk=$r[id_mk]' onclick='return confirm(\"apakah anda yakin mengedit data $r[id_mk] - $r[nama_mk] ?\");'>Edit</a>
        <a href='index.php?page=delete_matakuliah&id_mk=$r[id_mk]' onclick='return confirm(\"apakah anda yakin menghapus data   $r[id_mk] - $r[nama_mk] ?\");'>Delete</a>
        </td>
    </tr>";
    }
?>                 </script>
                </code>
                </pre><br />

             <p>
                 <li> Buka folder <i>content</i> >> <i>save_matakuliah.php </i> dan masukan kode dibawah ini, jangan
                     lupa tambah kan tanda <b>" < "</b> pada kata <i><b>" /script"</b></i></li>
             </p><br />
             <pre class="line-numbers">
                <code class="language-php">

&lt;?php 
//save_update matakuliah

	$id = filter_var($_POST['id_mk'], FILTER_SANITIZE_STRING);
	$nama_mk = filter_var($_POST['nama_mk'], FILTER_SANITIZE_STRING);
    $sks = filter_var($_POST['sks'], FILTER_SANITIZE_STRING);
    $semester = filter_var($_POST['semester'], FILTER_SANITIZE_STRING);
	$kode_jurusan = filter_var($_POST['kode_jur'], FILTER_SANITIZE_STRING);
	
	if (empty($nama_mk)||empty($sks)||empty($semester)||empty($kode_jurusan)) 
	{
		echo "<script type="text/plain" class="language-markup"><script>
            alert('Data Harus Dilengkapi');
            window.location.href ='index.php?page=matakuliah';
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
				window.location.href = 'index.php?page=matakuliah';
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
						window.location.href = 'index.php?page=matakuliah';
				/script>"	;</script>

			}		
	}	
?>              </code>
                </pre><br />
             <p>
                 < <li> Buka folder <i>content</i> >> <i>edit_matakuliah.php </i> dan masukan kode dibawah ini</li>
                     <br />
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
<body>
   
    <!-- input code php 1 atas disini -->

    <h1 align="center">Edit Matakuliah</h1>
    <form action="index.php?page=save_matakuliah" method="POST">
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

            <!-- input code php 2 bawah disini -->

        </select>
        <button type="submit">Update</button>
    </form>
</body>

                    </script>
                    </code>
                </pre>

             <pre class="line-numbers">
                <code class="language-php">                
&lt;?php
//code php 2
    $jur= $con->prepare("SELECT * FROM jurusan");
    $jur->execute();
    while($j= $jur->fetch()){
        $selected = "";
        if($r[4] == $j[0]){
            $selected = "selected";
        }
        echo "<script type="text/plain" class="language-markup"><option value='$j[0]' $selected> $j[1] </option>";
    }
?>              </script>

                </code>
                </pre><br />
             <p>
                 <li> Buka folder <i>content</i> >> <i>delete_matakuliah.php </i> dan masukan kode dibawah ini jangan
                     lupa tambah kan tanda <b>" < "</b> pada kata <i><b>" /script"</b></i>
                 </li>
             </p><br />
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
                window.location.href = 'index.php?page=matakuliah';
        /script>"; </script>
    
?>
                    </code>
                </pre><br />
             <!-- <p>
                 <li>saran saya kalian menonton video dibawah ini untuk Tutorial atau cara pemakaian database dan
                     kode - kode diatas</li>
             </p><br /><br /> -->
             <p> SEKIAN dan TERIMA KASIH sudah membaca di website ku, God Bless You All</p><br />

         </ol>
         <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
         </ol>
     </div>
 </body>

 </html>