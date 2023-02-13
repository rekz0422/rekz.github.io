 <!doctype html>
 <html>

 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="styles.css">
     <style type="text/css">
     #h1 {
         font-size: 50px;
     }

     #p1 {
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
         <h1 align="center" id="h1">MEMBUAT ACTIVITY INTENT II DENGAN ADT ECLIPSE</h1>
         <hr /><br /><br />
         <p1 id="p1">1. Buka ADT eclipse kalian, jika belum ada download <a id="a"
                 href="https://drive.google.com/file/d/1BK2UHMRtp_VMlCBYSvydAVpykP2fWbeN/view?usp=sharing">di
                 sini</a><br />
             2. Klik <a id="a" href="?page=PM_tutorial_intentII"> di sini </a> untuk cara membuat <i> Activity Intent I
             </i>
             di ADT ECLIPSE <br />
             3. Buka ADT – ECLIPSE Kalian dan Buat Project baru, <br />
             kalian bisa mempelajari <a href="?page=PM_tutorial_first_android">cara bikin project baru di sini</a>
             <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     ​<picture>
                         <img src="img/PemrogramanMobile/PM_tutorial_intentII/3.PNG" alt="" class="img-fluid">
                     </picture>
                 </div>
             </div><br />
             4. Klik <i>activity_main.xml</i> dan masukan kode dibawah ini sesuai Gambar <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/4.PNG" class="img-fluid mx-auto d-block">
                 </div>
             </div><br />
             Diatas ada tanda berwarna kuning tempat memasukan kode <br />
             Kode :
         </p1>
            <pre class="line-numbers">
            <code class="language-xml">
                &lt;TextView
                    android:id="@+id/textView1"
                    android:layout_width="wrap_content"
                    android:layout_height="wrap_content"
                    android:layout_alignParentTop="true"
                    android:layout_centerHorizontal="true"
                    android:layout_marginTop="56dp"
                    android:text="Home"
                    android:textColor="#fff000"
                    android:textSize="50sp"
                    android:textStyle="bold" />

                &lt;Button
                    android:id="@+id/Btn_A"
                    android:layout_width="wrap_content"
                    android:layout_height="wrap_content"
                    android:layout_below="@+id/textView1"
                    android:layout_centerHorizontal="true"
                    android:layout_marginTop="87dp"
                    android:text="A activity"
                    android:textColor="#17D7FF"
                    android:textSize="25sp"
                    android:textStyle="bold" />

                &lt;Button
                    android:id="@+id/Btn_B"
                    android:layout_width="wrap_content"
                    android:layout_height="wrap_content"
                    android:layout_alignLeft="@+id/textView1"
                    android:layout_below="@+id/Btn_A"
                    android:layout_marginTop="48dp"
                    android:text="B activity"
                    android:textColor="#8ECF8C"
                    android:textSize="25sp"
                    android:textStyle="bold" />

            </code>
        </pre>
        <br />
         <p1 id="p1">
             5. Berikutnya kita akan membuat satu <i>activity</i> <br />
             Klik kanan Pada <i>layout</i> dan pilih <i> new >> other</i><br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/5.png" class="img-fluid mx-auto d-block">
                 </div>
             </div><br />
             Android activity >> next <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/5_1.PNG" class="img-fluid mx-auto d-block">
                 </div>
             </div><br />
             Blank Activity >> next <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/5_2.PNG" class="img-fluid mx-auto d-block">
                 </div>
             </div><br />

             <i>rename </i> seperti dibawah ini dan klik <i>finish</i> <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/5_3.PNG" class="img-fluid mx-auto d-block">
                 </div>
             </div><br />
             Di tempat Folder kalian akan muncul file baru seperti ini <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/5_4.PNG" class="img-fluid mx-auto d-block">
                 </div>
             </div><br />

             6. Klik <i>activity_a_.xml</i> dan masukan kode dibawah ini :
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/6.PNG" class="img-fluid">

                 </div>
             </div> <br />
        </p1>
            <pre class="line-numbers">
            <code class="language-xml">
     
         &lt;TextView
        android:id="@+id/textView1"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_alignParentTop="true"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="26dp"
        android:text="A Activity"
        android:textAppearance="?android:attr/textAppearanceLarge"
        android:textSize="40dp"
        android:textStyle="bold" />

    &lt;Button
        android:id="@+id/btn_a1"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_alignParentLeft="true"
        android:layout_below="@+id/textView1"
        android:layout_marginLeft="43dp"
        android:layout_marginTop="53dp"
        android:text="A 1" />

    &lt;Button
        android:id="@+id/btn_a2"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_alignBaseline="@+id/btn_a1"
        android:layout_alignBottom="@+id/btn_a1"
        android:layout_centerHorizontal="true"
        android:text="A 2" />

    &lt;Button
        android:id="@+id/btn_a3"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_above="@+id/btn_a4"
        android:layout_marginLeft="20dp"
        android:layout_toRightOf="@+id/btn_a2"
        android:text="A 3" />

    &lt;Button
        android:id="@+id/btn_a4"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_alignLeft="@+id/btn_a1"
        android:layout_below="@+id/btn_a1"
        android:layout_marginTop="27dp"
        android:text="A 4" />

    &lt;Button
        android:id="@+id/btn_a5"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_alignBaseline="@+id/btn_a4"
        android:layout_alignBottom="@+id/btn_a4"
        android:layout_alignLeft="@+id/btn_a2"
        android:text="A 5" />

    &lt;Button
        android:id="@+id/btn_a6"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_alignBaseline="@+id/btn_a5"
        android:layout_alignBottom="@+id/btn_a5"
        android:layout_alignLeft="@+id/btn_a3"
        android:text="A 6" />

    &lt;Button
        android:id="@+id/btn_a7"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_below="@+id/btn_a5"
        android:layout_marginTop="35dp"
        android:layout_toLeftOf="@+id/btn_a3"
        android:text="A 7" />

        </code></pre> <br />
         <p1 id="p1">
             7. Buatlah 7 <i>Activity </i> baru & beri nama sesuai <i>button</i> pada <i>A Activity</i> , gunakan cara
             no 5 diatas <br />
             8. Jika kalian melakukannya dengan benar, maka hasilnya akan seperti gambar dibawah ini, ditandai dengan
             warna kuning <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/8.png" class="img-fluid img-thumbnail"
                         style="height:300px;">
                 </div>
             </div><br />
             9. Untuk 7 activity yang baru dibuat, kalian bisa mendesain terserah kalian<br />
             10. Buka src >> com.example.NamaProject >> MainActivity.java dan masukan kode – kode
             dibawah ini seperti pada tanda di gambar <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/10.png" class="img-fluid img-thumbnail">
                 </div>
             </div><br />
         </p1>
         <pre class="line-numbers">
         <code class="language-java">  
            import android.os.Bundle;
            import android.app.Activity;
            import android.content.Intent;
            import android.view.Menu;
            import android.view.View;
            import android.widget.Button;
         </code></pre><br />

         <pre class="line-numbers"><code class="language-java">  
            Button A;
            Button B; 
            Intent move;
           </code></pre><br />

         <pre class="line-numbers"><code class="language-java">  
            A = (Button)findViewById(R.id.Btn_A);
            A.setOnClickListener(new View.OnClickListener() {
                
                @Override
                public void onClick(View v) {
                    // TODO Auto-generated method stub
                    move = new Intent(v.getContext(),A_Activity.class);
                    startActivityForResult(move, 0);
                }
            });
          </code> </pre><br />
         <p1 id="p1">
             11. Jika kalian run project maka untuk sementara project kalian akan seperti ini <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/gif_11.gif" class="img-fluid">
                 </div>
             </div><br />
             12. Buka src >> com.example.NamaProject >> A_Activity.java dan masukan kode – kode
             dibawah ini seperti pada tanda di gambar <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/12.png" class="img-fluid img-thumbnail"
                         style="height:200px;">
                 </div>
             </div><br />
         </p1>
         <pre class="line-numbers">
         <code class="language-java"> 
                import android.os.Bundle;
                import android.app.Activity;
                import android.content.Intent;
                import android.view.Menu;
                import android.view.View;
                import android.widget.Button;  
               </code></pre><br />
         <pre class="line-numbers">
         <code class="language-java">   

                a1 = (Button)findViewById(R.id.btn_a1);
                a1.setOnClickListener(new View.OnClickListener() {
                    
                    @Override
                    public void onClick(View v) {
                        // TODO Auto-generated method stub
                        move = new Intent(v.getContext(),A1Activity.class);
                        startActivityForResult(move, 0);
                    }
                });	
                a2 = (Button)findViewById(R.id.btn_a2);
                a2.setOnClickListener(new View.OnClickListener() {
                    
                    @Override
                    public void onClick(View v) {
                        // TODO Auto-generated method stub
                        move = new Intent(v.getContext(),A2Activity.class);
                        startActivityForResult(move, 0);
                    }
                });	
                a3 = (Button)findViewById(R.id.btn_a3);
                a3.setOnClickListener(new View.OnClickListener() {
                    
                    @Override
                    public void onClick(View v) {
                        // TODO Auto-generated method stub
                        move = new Intent(v.getContext(),A3Activity.class);
                        startActivityForResult(move, 0);
                    }
                });	
                a4 = (Button)findViewById(R.id.btn_a4);
                a4.setOnClickListener(new View.OnClickListener() {
                    
                    @Override
                    public void onClick(View v) {
                        // TODO Auto-generated method stub
                        move = new Intent(v.getContext(),A4Activity.class);
                        startActivityForResult(move, 0);
                    }
                });	
                a5 = (Button)findViewById(R.id.btn_a5);
                a5.setOnClickListener(new View.OnClickListener() {
                    
                    @Override
                    public void onClick(View v) {
                        // TODO Auto-generated method stub
                        move = new Intent(v.getContext(),A5Activity.class);
                        startActivityForResult(move, 0);
                    }
                });	
                a6 = (Button)findViewById(R.id.btn_a6);
                a6.setOnClickListener(new View.OnClickListener() {
                    
                    @Override
                    public void onClick(View v) {
                        // TODO Auto-generated method stub
                        move = new Intent(v.getContext(),A6Activity.class);
                        startActivityForResult(move, 0);
                    }
                });	
                a7 = (Button)findViewById(R.id.btn_a7);
                a7.setOnClickListener(new View.OnClickListener() {
                    
                    @Override
                    public void onClick(View v) {
                        // TODO Auto-generated method stub
                        move = new Intent(v.getContext(),A7Activity.class);
                        startActivityForResult(move, 0);
                    }
                });
               </code></pre><br />
         <p1 id="p1">
             Jika ada error <font color="red"> multiply</font> maka silahkan hapus kode yang sama persis <br />
             13. Jika kalian benar run project maka untuk sementara project kalian akan seperti ini <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/gif_12_1.gif" class="img-fluid img-thumbnail">
                 </div>
             </div><br />
             14. kita akan membuat <i>Activity</i> baru lagi, Klik kanan pada Folder res >> layout >> new >> other
             <br />
             15. Nama aktiviti - yaitu B_Activity<br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/15.PNG" class="img-fluid img-thumbnail">
                 </div>
             </div><br />
             16. Klik pada activity_b.xml dan masukan code dibawah ini
           
         </p1>
       <pre class="line-numbers">
       <code class="language-xml"> 
        &lt;Button
            android:id="@+id/btn_b3"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:layout_alignBaseline="@+id/btn_b2"
            android:layout_alignBottom="@+id/btn_b2"
            android:layout_alignParentRight="true"
            android:layout_marginRight="25dp"
            android:text="B 3" />

        &lt;Button
            android:id="@+id/btn_b4"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:layout_alignParentBottom="true"
            android:layout_marginBottom="127dp"
            android:layout_toLeftOf="@+id/btn_b2"
            android:text="B 4" />

        &lt;TextView
            android:id="@+id/textView1"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:layout_alignParentTop="true"
            android:layout_centerHorizontal="true"
            android:text="Videos Life Hack"
            android:textAppearance="?android:attr/textAppearanceLarge"
            android:textSize="40dp"
            android:textStyle="bold" />

        &lt;Button
            android:id="@+id/btn_b1"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:layout_alignParentLeft="true"
            android:layout_below="@+id/imageView1"
            android:layout_marginLeft="10dp"
            android:layout_marginTop="27dp"
            android:text="B 1" />

        &lt;Button
            android:id="@+id/btn_b2"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:layout_alignBaseline="@+id/btn_b1"
            android:layout_alignBottom="@+id/btn_b1"
            android:layout_centerHorizontal="true"
            android:text="B 2" />

        &lt;Button
            android:id="@+id/btn_b5"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:layout_alignBaseline="@+id/btn_b4"
            android:layout_alignBottom="@+id/btn_b4"
            android:layout_toRightOf="@+id/btn_b2"
            android:text="B 5" />

    </code>
    </pre><br />
         <br />
         <p1 id="p1">
             17. Jika kalian Benar maka harusnya tampilan activity_b.xml kalian seperti ini <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/17.PNG" class="img-fluid img-thumbnail">
                 </div>
             </div><br />

             18. Buka MainActivity.java dan tambahkan kode dibawah ini, sesuai gambar <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/18.PNG" class="img-fluid img-thumbnail">
                 </div>
             </div><br />
         </p1>
         <pre class="line-numbers">
         <code class="language-java">  
                
            B = (Button)findViewById(R.id.Btn_B);
            B.setOnClickListener(new View.OnClickListener() {
                
                @Override
                public void onClick(View v) {
                    // TODO Auto-generated method stub
                    move = new Intent(v.getContext(),B_Activity.class);
                    startActivityForResult(move, 0);
                }
            });	
           </pre>
           </code><br />
         <p1 id="p1">
             19. Jika kalian benar maka hasilnya akan seperti ini <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/gif_13.gif" class="img-fluid img-thumbnail">
                 </div>
             </div><br />

             20. Buatlah 7 <i>Activity </i> baru & beri nama sesuai <i>button</i> pada <i>A Activity</i> , gunakan cara
             no 5 diatas <br />
             21. Jika kalian melakukannya dengan benar, maka hasilnya akan seperti gambar dibawah ini, ditandai
             dengan warna kuning <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/21.PNG" class="img-fluid img-thumbnail">
                 </div>
             </div><br />

             22. Buka src >> com.example.NamaProject >> B_Activity.java dan masukan kode – kode dibawah ini seperti pada
             tanda di gambar <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_intentII/22.png" class="img-fluid">
                 </div>
             </div><br />
         </p1>
         <pre class="line-numbers">
         <code class="language-java">
                        
                import android.os.Bundle;
                import android.app.Activity;
                import android.content.Intent;
                import android.view.Menu;
                import android.view.View;
                import android.widget.Button;
             </pre></code><br />
         <pre class="line-numbers">
         <code class="language-java">
             Button b1,b2,b3,b4,b5,b6,b7;
             Intent move;
              </pre></code><br />
         <pre class="line-numbers">
         <code class="language-java">
              b1 = (Button)findViewById(R.id.btn_b1);
		b1.setOnClickListener(new View.OnClickListener() {
			
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				move = new Intent(v.getContext(),B1Activity.class);
				startActivityForResult(move, 0);
			}
		});	
		b2 = (Button)findViewById(R.id.btn_a2);
		b2.setOnClickListener(new View.OnClickListener() {
			
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				move = new Intent(v.getContext(),B2Activity.class);
				startActivityForResult(move, 0);
			}
		});	
		b3 = (Button)findViewById(R.id.btn_b3);
		b3.setOnClickListener(new View.OnClickListener() {
			
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				move = new Intent(v.getContext(),A3Activity.class);
				startActivityForResult(move, 0);
			}
		});	
		b4 = (Button)findViewById(R.id.btn_b4);
		b4.setOnClickListener(new View.OnClickListener() {
			
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				move = new Intent(v.getContext(),B4Activity.class);
				startActivityForResult(move, 0);
			}
		});	
		b5 = (Button)findViewById(R.id.btn_b5);
		b5.setOnClickListener(new View.OnClickListener() {
			
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				move = new Intent(v.getContext(),B5Activity.class);
				startActivityForResult(move, 0);
			}
		});
              </pre></code><br />
         <p1 id="p1">
             Jika ada error <font color="red"> multiply</font> maka silahkan hapus kode yang sama persis <br />
             23. Ini adalah hasil keseluruhan project kalian ketika programnya dijalankan <br />
             <div class="row">
                 <div class="col-md-4 mb-2">
                     <div class="card">
                         <img src="img/PemrogramanMobile/PM_tutorial_intentII/Output2.gif"
                             class="img-fluid img-thumbnail">
                     </div>

                 </div>
                 <div class="col-md-4 mb-2">
                     <div class="card">
                         <img src="img/PemrogramanMobile/PM_tutorial_intentII/Output1.gif"
                             class="img-fluid img-thumbnail">
                     </div>

                 </div>
             </div>


             <br />SEKIAN dan TERIMA KASIH sudah membaca di website ku, God Bless You<br />
         </p1>
         <br /><br /><br /><br /><br /><br /><br />

     </div>
     <!-- Akhir Content-->

 </body>

 </html>