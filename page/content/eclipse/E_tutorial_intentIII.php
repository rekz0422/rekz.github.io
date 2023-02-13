 <!doctype html>
 <html>

 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="styles.css">
     <style type="text/css">
     #h1 {
         font-size: 50px;
     }

     #p {
         font-size: 20px;
     }

     #a {
         text-decoration: none;
     }
     </style>

 </head>
 <!-- Awal Content-->

 <body>
     <div class="container">
         <h1 align="center" id="h1">MEMUTAR VIDEO di ACTIVITY INTENT DENGAN ADT ECLIPSE</h1>
         <hr /><br /><br />
         <p id="p">1. Buka ADT eclipse kalian, jika belum ada download <a id="a"
                 href="https://drive.google.com/file/d/1BK2UHMRtp_VMlCBYSvydAVpykP2fWbeN/view?usp=sharing">di
                 sini</a><br /><br />

             2. Klik <a id="a" href="?page=PM_tutorial_intent"> di sini </a> untuk cara membuat <i> activity intent</i>
             di ADT ECLIPSE<br />

             3. Klik <a id="a" href="?page=PM_tutorial_intentII"> di sini </a> untuk Mengetahui <i> project intent</i>
             sebelumnya di ADT ECLIPSE <br />

             4. Untuk memutar video di project kalian, maka kalian perlu membuat 1 folder baru di folder <i>res</i>
             dengan nama wajib yaitu <i><b>“raw”</b></i> <br />
         <div class="col-md-4 mb-2">
             <div class="card">
                 <img src="img/PemrogramanMobile/PM_tutorial_intentIII/4.png" class="img-fluid mx-auto d-block"
                     width="600" height="700">
             </div>
         </div><br />
         Kode :
         </p>
         <p>
         <div class="row"></div>
         <div class="col-md-4 mb-2">
             <div class="card">
                 <img src="img/PemrogramanMobile/PM_tutorial_intentIII/4_1.PNG" class="img-fluid mx-auto d-block">
             </div>
         </div>
         <div class="col-md-4 mb-2">
             <div class="card">
                 <img src="img/PemrogramanMobile/PM_tutorial_intentIII/4_2.PNG" class="img-fluid mx-auto d-block">
             </div>
         </div><br />

         </p>
         <p1 id="p">
             5. Copy video kalian ke folder (<i>raw</i> )yang baru dibuat dengan ketentuan nama video seperti ini,
             a-z_a-z0-9_1-9 <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentIII/5.PNG" class="img-fluid mx-auto d-block">
                 </div>
             </div><br />
             Jika ada error seperti ini maka silahkan ganti nama file video dengan huruf kecil semua atau sesuai gambar
             diatas <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentIII/5_1.PNG" class="img-fluid mx-auto d-block">
                 </div>
             </div><br />
             6. Buka Activity kalian atau jika kalian memakai project dari <a
                 href="?folder=PemrogramanMobile&page=PM_tutorial_intentII"> tutorial sebelumnya </a> maka buka
             activity_a1.xml, dan masukan kode dibawah ini <br />
         </p1>
         <pre class="line-numbers">
        <code class="language-xml">
                    &lt;TextView
                            android:id="@+id/textView1"
                            android:layout_width="wrap_content"
                            android:layout_height="wrap_content"
                            android:layout_alignParentTop="true"
                            android:layout_centerHorizontal="true"
                            android:text="JUDUL "
                            android:textAppearance="?android:attr/textAppearanceLarge"
                            android:textSize="40sp" />

                    &lt;VideoView
                        android:id="@+id/video1"
                        android:layout_width="wrap_content"
                        android:layout_height="200dp"
                        android:layout_below="@+id/textView1"
                        android:layout_centerHorizontal="true" />

                    &lt;Button
                        android:id="@+id/btn_back"
                        android:layout_width="wrap_content"
                        android:layout_height="wrap_content"
                        android:layout_alignParentBottom="true"
                        android:layout_alignRight="@+id/video1"
                        android:layout_marginBottom="24dp"
                        android:text="Back" />
         </code></pre><br />
         <p1 id="p">
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentIII/6.PNG" class="img-fluid mx-auto d-block">
                 </div>
             </div><br />
             7. Buka A1Activity.java atau file java kalian dan masukan kode dibawah ini
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentIII/7.PNG" class="img-fluid img-thumbnail">
                 </div>
             </div><br />
         </p1>
         <pre class="line-numbers">
     <code class="language-java">
                import android.os.Bundle;
                import android.app.Activity;
                import android.content.Intent;
                import android.view.Menu;
                import android.widget.Button;
                import android.widget.MediaController;
                import android.widget.Toast;
                import android.widget.VideoView;           
             </code></pre><br />
         <pre class="line-numbers">
     <code class="language-java">
                MediaController mc;
                VideoView video1;
                Button back;
                Intent a;
               </code></pre><br />
         <pre class="line-numbers">
     <code class="language-java">
                video1 = (VideoView)findViewById(R.id.video_view);
                mc = new MediaController(A1Activity.this);			
                video1.setVideoURI(Uri.parse("android.resource://"+getPackageName()+"/"+R.raw.v_1de0_1));		
                video1.setMediaController(mc);
                video1.requestFocus();
                mc.setAnchorView(video1);
                video1.start();		
                Toast.makeText(getApplicationContext(), "Playing Video", Toast.LENGTH_SHORT).show();
               </code></pre><br />

         <p1 id="p">
             8. Jika dijalankan maka hasilnya seperti ini : <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentIII/gif_8.gif" class="img-fluid img-thumbnail">
                 </div>
             </div><br />
             <br />SEKIAN dan TERIMA KASIH sudah membaca di website ku, God Bless You<br />

         </p1>
         <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

     </div>
     <!-- Akhir Content-->

 </body>

 </html>