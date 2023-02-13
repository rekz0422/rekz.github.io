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
         <h1 align="center" id="h1">MEMBUAT ACTIVITY INTENT DENGAN ADT ECLIPSE</h1>
         <hr /><br /><br />
         <p1 id="p">1. Buka ADT eclipse kalian, jika belum ada download <a id="a"
                 href="https://drive.google.com/file/d/1BK2UHMRtp_VMlCBYSvydAVpykP2fWbeN/view?usp=sharing">di
                 sini</a><br />
             2. Klik <a id="a" href="?folder=PremrogramanMobile&page=PM_tutorial_first_android"> di sini </a> untuk cara membuat <i> project </i>
             di ADT ECLIPSE <br />
             3. Buat <i>project</i> baru dan atur seperti ini : <br>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     ​<picture>
                         <img src="img/PemrogramanMobile/PM_tutorial_intent/3.png" alt="" class="img-fluid img-thumbnail mx-auto d-block"               >
                     </picture>
                 </div>
             </div><br />
             4. Klik <i>activity_main.xml</i> dan masukan kode dibawah ini sesuai Gambar <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intent/4.png" class="img-fluid mx-auto d-block">
                 </div>
             </div><br />
             Kode :
         </p1>
        <pre class="line-numbers">
        <code class="language-xml">
             &lt;TextView android:id="@+id/view_first" android:layout_width="wrap_content"
                 android:layout_height="wrap_content" android:layout_alignParentTop="true"
                 android:layout_centerHorizontal="true" android:layout_marginTop="159dp" android:text="First Page"
                 android:textSize="50sp" />

             &lt;Button android:id="@+id/btn_next" android:layout_width="wrap_content" android:layout_height="wrap_content"
                 android:layout_alignRight="@+id/view_first" android:layout_below="@+id/view_first"
                 android:layout_marginTop="55dp" android:text="Next" />
       </code></pre><br />
         <p1>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intent/4_1.png" class="img-fluid mx-auto d-block">
                 </div>
             </div><br />
         </p1>
         <p1 id="p">
             5. Berikutnya kita akan membuat satu <i>activity</i> <br />
             Klik kanan Pada <i>layout</i> dan pilih <i> new >> other</i><br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intent/5.png" class="img-fluid mx-auto d-block">
                 </div>
             </div><br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intent/5_1.png" class="img-fluid mx-auto d-block">
                 </div>
             </div><br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intent/5_2.png" class="img-fluid mx-auto d-block">
                 </div>
             </div><br />

             6. <i>rename </i> seperti dibawah ini dan klik <i>finish</i> <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intent/6.png" class="img-fluid mx-auto d-block">
                 </div>
             </div><br />
             7. Buka <i>Activity </i> yang baru dibuat <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intent/7.png" class="img-fluid img-thumbnail" style="height:200px;">
                 </div>
             </div><br />
             8. Masukan Kode dibawah ini <br />
            <pre class="line-numbers">
            <code class="language-xml">
                &lt;TextView
                android:id="@+id/view_second"
                android:layout_width="wrap_content"
                android:layout_height="wrap_content"
                android:layout_above="@+id/btn_back"
                android:layout_centerHorizontal="true"
                android:text="Second Page"
                android:textSize="50sp" />

        &lt;Button
                android:id="@+id/btn_back"
                android:layout_width="wrap_content"
                android:layout_height="wrap_content"
                android:layout_alignParentBottom="true"
                android:layout_alignRight="@+id/view_second"
                android:layout_marginBottom="192dp"
                android:text="Back" />
        </code>
        </pre>
        <br />
             9. Selanjutnya, buka <i>src >> com.example.activity >> MainActivity.java </i><br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intent/9.png" class="img-fluid img-thumbnail" style="height:300px;">
                 </div>
             </div><br />
             10. Masukan Kode Di bawah ini sesuai gambar <br />
         </p1>
         <pre class="line-numbers"><code class="language-java">
             Button next;
         </code></pre><br />
         <pre class="line-numbers">
         <code class="language-java">                         
            next = (Button)findViewById(R.id.btn_next);
            next.setOnClickListener(new View.OnClickListener() {

            public void onClick(View v) {
            Intent myIntent = new Intent(v.getContext(),SecondActivity.class);
            startActivityForResult(myIntent, 0);
            }
            });
        </code></pre><br />
         <p1 id="p">
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intent/10.png" class="img-fluid mx-auto d-block">
                 </div>
             </div><br />
             <br /> Jika ada Error maka klik erornya dan tekan <i style="color:red;">Import ‘Button’(android.widget)
             </i> <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intent/10_1.png" class="img-fluid img-thumbnail">
                 </div>
             </div><br />
             11. Selanjutnya, buka <i>src > com.example.activity >> MainActivity.java </i><br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intent/11.png" class="img-fluid img-thumbnail" style="height:300px;">
                 </div>
             </div><br />
             12. Masukan Kode dibawah ini sama seperti di gambar <br />
         </p1>
         <pre class="line-numbers"><code class="language-java">
            Button back;
         </code></pre>
        <pre class="line-numbers">
         <code class="language-java">              
            back = (Button)findViewById(R.id.btn_back);
            back.setOnClickListener(new View.OnClickListener() {

            public void onClick(View v) {
            Intent myIntent = new Intent(v.getContext(),MainActivity.class);
            startActivityForResult(myIntent, 0);
            }
            });
        </code></pre>
         <p1 id="p">
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intent/12.png" class="img-fluid img-thumbnail" style="height:300px;">
                 </div>
             </div><br />

             13. Jika di jalankan aplikasi android kalian akan seperti ini <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intent/intent.gif">
                 </div>
             </div><br />

             <br />SEKIAN dan TERIMA KASIH sudah membaca di website ku, God Bless You<br />

         </p1>
         <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

     </div>
     <!-- Akhir Content-->

 </body>

 </html>