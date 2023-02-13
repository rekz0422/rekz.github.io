 <!doctype html>
 <html>

 <head>
     <link rel="stylesheet" href="styles.css">
     <style>
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
     <div class="">
         <h1 align="center" id="h1">Tutorial Membuat Toast dan Button click di xampp </h1>
         <hr /><br /><br />
         <p1 id="p">1. Buka ADT eclipse kalian, jika belum ada download <a id="a" href="https://drive.google.com/file/d/1BK2UHMRtp_VMlCBYSvydAVpykP2fWbeN/view?usp=sharing">di
                 sini</a><br />
             2. Buat <i>android application project</i> baru, jika tidak tahu <a href="?page=PM_tutorial_first_android" id="a">Baca
                 artikel ini</a><br />
             3. Pada <i>Activity_Main.xml</i> ketik kode dibawah ini <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_button/0.PNG" class="card-img-top" alt="...">
                 </div>
             </div>
         </p1>
         <pre class="line-numbers">
            <code class="language-xml" > 
                &lt;TextView
                    android:id="@+id/textView1"
                    android:layout_width="wrap_content"
                    android:layout_height="wrap_content"
                    android:layout_centerHorizontal="true"
                    android:layout_centerVertical="true"
                    android:text="0"
                    android:textSize="100sp" />

                &lt;Button
                    android:id="@+id/btn_click"
                    android:layout_width="wrap_content"
                    android:layout_height="wrap_content"
                    android:layout_above="@+id/textView1"
                    android:layout_centerHorizontal="true"
                    android:layout_marginBottom="22dp"
                    android:text="Click Me" />
            </code>
         </pre>
         <br />
         <p1 id="p">
             4. tekan <i>ctrl + S</i>, lalu buka <i>Folder src >> com.example.button >> MainActivity.java </i>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_button/1.PNG" class="card-img-top" alt="...">
                 </div>
             </div><br />
             5. Letakan 2 Kode Dibawah Ini sama seperti Gambar <br />
             <pre class="line-numbers">
             <code class="language-java" >
                    private int no=0;
	                TextView view ;                    
            </code></pre> <br />
             <pre class="line-numbers">
             <code class="language-java">
                    Button click = (Button)findViewById(R.id.btn_click);
                    view = (TextView)findViewById(R.id.textView1);
                    click.setOnClickListener(new View.OnClickListener() {			
                        @Override
                        public void onClick(View v) {
                        // TODO Auto-generated method stub
                        if (view != null){
                            no++;
                            view.setText(Integer.toString(no));
                        }
                        Toast.makeText(getApplicationContext(),"anda mengklik button",Toast.LENGTH_LONG).show();
                        }
		            });                 
                </code></pre>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_button/2.PNG" class="card-img-top" alt="...">
                 </div>
             </div><br />
             5. Jika kalian berhasil maka <i>project android</i> kalian akan seperti ini.<br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/PemrogramanMobile/PM_tutorial_button/Btn.gif" class="card-img-top" alt="...">
                 </div>
             </div><br />


             SEKIAN dan TERIMA KASIH sudah membaca di website ku, God Bless You<br />

         </p1>
         <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

     </div>
     <!-- Akhir Content-->

 </body>

 </html>