
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
         <h1 align="center" id="h1">Membuat Design Login Aplikasi Speedboat V1</h1>
         <hr /><br /><br />
         <ol>
             <div align="center" class="embed-responsive embed-responsive-16by9">
                 <iframe controls class="embed-responsive-item" src="https://www.youtube.com/embed/8USlNrj1fFY"
                     frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                     allowfullscreen></iframe>
                </div>

             <h4>Perhatikan Penjelasan dengan Cermat</h4><br />
             <p>Saran Penulis kalian menonton video diatas atau klik <a
                     href="https://www.youtube.com/embed/8USlNrj1fFY"> disini untuk melihat videonya</a></p><br />
             <li> Download Data yang di perlukan terlebih dahulu <a
                     href="https://drive.google.com/file/d/1yZaOCjEy-R-yyG1lkTBl2ss4_cfgaQ84/view?usp=sharing"><b><i>
                                </i> disini</b></a> karena tutorial ini memakai <i> Data </i>tersebut
                 

             <li> Export file yang di download </li>
             <li> Buka Android Studio Kalian </li>
             <li> Buka folder drawable, lalu copy file drawable dari folder yang di download tadi</li>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/MyCampus/SpeedboatApp_V1/drawable.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div>
             <li> Buat folder font, lalu copy file font dari folder yang di download tadi </li><br>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/MyCampus/SpeedboatApp_V1/1.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div>
            <li> Tambahkan 2 file intent dengan nama seperti dibawah </li><br>
            <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/MyCampus/SpeedboatApp_V1/2.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div>
             <li> Buka file <b>activity_main.xml</b> dan masukan code dibawah ini</li><br>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/MyCampus/SpeedboatApp_V1/3.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div><br>
             <pre class="line-numbers language-XML">
                <code class="language-XML">
                    <script type="text/plain" class="language-XML" >
<androidx.constraintlayout.widget.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    android:background="#0584AC"
    tools:context=".MainActivity">

    <RelativeLayout
        android:layout_width="match_parent"
        android:layout_height="170dp"
        tools:ignore="MissingConstraints"
        android:id="@+id/header_progress">

        <TextView
            android:id="@+id/header_text"
            android:layout_width="match_parent"
            android:layout_height="match_parent"
            android:layout_marginTop="25dp"
            android:text="EXELENT IN EDUCATION"
            android:textAlignment="center"
            android:textColor="#FDBF04"
            android:textSize="50dp"
            android:textStyle="bold"
            android:fontFamily="@font/hello_avocado"/>

    </RelativeLayout>

    <LinearLayout
        android:id="@+id/image_progress"
        android:layout_width="match_parent"
        android:layout_height="390dp"
        android:layout_marginTop="30dp"
        app:layout_constraintTop_toBottomOf="@+id/header_progress">

        <ImageView
            android:layout_width="match_parent"
            android:layout_height="match_parent"
            android:background="@drawable/logo_stikom_progress"/>
    </LinearLayout>

    <ProgressBar
        android:id="@+id/progress"
        android:layout_width="80dp"
        android:layout_height="80dp"
        android:layout_alignParentLeft="true"
        android:layout_alignParentTop="true"
        android:layout_alignParentRight="true"
        android:layout_alignParentBottom="true"
        android:secondaryProgressTint="#FF0404"
        app:layout_constraintBottom_toBottomOf="@+id/image_progress"

        app:layout_constraintEnd_toEndOf="parent"
        app:layout_constraintStart_toStartOf="parent" />

    <RelativeLayout
        android:layout_width="match_parent"
        android:layout_height="80dp"
        android:background="@drawable/color_progress_fotter"
        app:layout_constraintBottom_toBottomOf="parent">

        <EditText
            android:layout_width="match_parent"
            android:layout_height="match_parent"
            android:text="Made by Rekz"
            android:textAlignment="center"
            android:textColor="@color/white"
            android:textSize="20dp"
            android:textStyle="bold" />
    </RelativeLayout>

</androidx.constraintlayout.widget.ConstraintLayout>

                 </script>
                </code>
                </pre><br />

             <li> Buka <b>MainActivity.java</b> dan copy code yang telah diberi tanda di bawah </li> <br />
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/MyCampus/SpeedboatApp_V1/4.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div><br>

             <pre class="line-numbers">
                <code class="language-java">
                package com.example.uts_program1;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

            //start_tulis code dibawah ini
        Thread tread = new Thread(){
            public void run(){
                try{
                    sleep(4000);
                }catch (InterruptedException e){
                    e.printStackTrace();
                }finally {
                    startActivity(new Intent(MainActivity.this, Speedboat_app.class));
                    finish();
                }
            }
        };
        tread.start();

        //end_code

    }
}
                </code>
            </pre>
             <p>
                 <li> Buka <b>activity_speedboat_app.xml</b> dan copy code dibawah ini </li>
             </p><br>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/MyCampus/SpeedboatApp_V1/5.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div><br>
             <pre class="line-numbers language-XML">
                <code class="language-XML">
                    <script type="text/plain" class="language-XML">   
<androidx.constraintlayout.widget.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".MainActivity">

    <RelativeLayout
        android:layout_width="match_parent"
        android:layout_height="150dp"
        android:id="@+id/rlheader"
        tools:ignore="MissingConstraints">

        <ImageView
            android:layout_width="match_parent"
            android:layout_height="match_parent"
            android:src="@drawable/logo_stikom"/>
    </RelativeLayout>

    <RelativeLayout
        app:layout_constraintTop_toBottomOf="@+id/rlheader"
        android:layout_width="220dp"
        android:layout_height="480dp"
        android:background="@drawable/shape_left"
        tools:layout_editor_absoluteX="0dp"
        tools:layout_editor_absoluteY="160dp"
        tools:ignore="MissingConstraints">

        <TextView
            android:layout_marginTop="35dp"
            android:layout_marginLeft="20dp"
            android:layout_width="match_parent"
            android:layout_height="wrap_content"
            android:text="LOGIN"
            android:textSize="35sp"
            android:textStyle="bold"
            android:textColor="@color/white"/>
    </RelativeLayout>
    <LinearLayout
        app:layout_constraintTop_toBottomOf="@+id/rlheader"
        android:id="@+id/panelLogin"
        android:layout_marginTop="80dp"
        android:layout_width="match_parent"
        android:layout_height="350dp"
        android:background="@drawable/shape_login"
        android:orientation="vertical">

        <EditText
            android:drawableRight="@drawable/ic_business_man_24"
            android:id="@+id/Edit_User"
            android:layout_width="match_parent"
            android:layout_height="65dp"
            android:layout_alignParentStart="true"
            android:layout_alignParentTop="true"
            android:layout_alignParentEnd="true"
            android:layout_alignParentBottom="true"
            android:layout_marginStart="30dp"
            android:layout_marginTop="40dp"
            android:layout_marginEnd="21dp"
            android:layout_marginBottom="30dp"
            android:hint="Username" />

        <EditText
            android:drawableRight="@drawable/ic_key_24"
            android:id="@+id/Edit_Pass"
            android:layout_width="match_parent"
            android:layout_height="65dp"
            android:layout_alignParentStart="true"
            android:layout_alignParentTop="true"
            android:layout_alignParentEnd="true"
            android:layout_alignParentBottom="true"
            android:layout_marginStart="30dp"
            android:layout_marginEnd="21dp"
            android:layout_marginBottom="179dp"
            android:hint="Password"
            android:inputType="numberPassword"/>

    </LinearLayout>

    <Button
        android:id="@+id/btn_login"
        app:layout_constraintBottom_toBottomOf="@+id/panelLogin"
        app:layout_constraintStart_toStartOf="parent"
        app:layout_constraintEnd_toEndOf="parent"
        android:layout_width="150dp"
        android:layout_height="60dp"
        android:text="LOGIN"
        android:textColor="@color/white"
        android:background="@drawable/shape_login_button"/>

</androidx.constraintlayout.widget.ConstraintLayout>     
                    </script>
                </code>
            </pre>

             <p>
                 <li> Buka <b>Speedboat_app.java</b> dan copy code yang telah di beri tanda dibawah ini </li>
             </p><br>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/MyCampus/SpeedboatApp_V1/6.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div><br>

             <pre class="line-numbers">
                <code class="language-java"> 
import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class Speedboat_app extends AppCompatActivity {

    //start code

    EditText username, password;
    Button btnLogin;
    private String key = "key";
    String usernameKey, passwordKey;

    //end code


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_speedboat_app);

        //start code

        username = (EditText) findViewById(R.id.Edit_User);
        password = (EditText) findViewById(R.id.Edit_Pass);
        btnLogin = (Button)findViewById(R.id.btn_login);
        btnLogin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                usernameKey = username.getText().toString();
                passwordKey = password.getText().toString();
                if(usernameKey.equals("rowan") && passwordKey.equals("1234")){
                    DialogInterface.OnClickListener dialogClickListener = new DialogInterface.OnClickListener() {
                        @Override
                        public void onClick(DialogInterface dialog, int which) {
                            switch (which){
                                case DialogInterface.BUTTON_POSITIVE:
                                    Toast.makeText(getApplicationContext(), "Selamat datang pak dosen "+usernameKey,
                                            Toast.LENGTH_SHORT).show();
                                    Toast.makeText(getApplicationContext(),"Silahkan lakukan pemeriksaan tugas",
                                            Toast.LENGTH_LONG).show();
                                    Intent intent = new Intent(Speedboat_app.this,
                                            Speedboat_web.class);
                                    intent.putExtra(key,usernameKey);
                                    Speedboat_app.this.startActivity(intent);
                                    finish();

                                    break;

                                case DialogInterface.BUTTON_NEGATIVE:
                                    Toast.makeText(getApplicationContext(), "Selamat datang pak "+usernameKey,
                                            Toast.LENGTH_SHORT).show();
                                    Toast.makeText(getApplicationContext(),"Silahkan lakukan pemeriksaan tugas",
                                            Toast.LENGTH_LONG).show();
                                    Intent i = new Intent(Speedboat_app.this,
                                            Speedboat_web.class);
                                    i.putExtra(key,usernameKey);
                                    Speedboat_app.this.startActivity(i);
                                    finish();

                                    break;
                            }
                        }
                    };

                    AlertDialog.Builder builder = new AlertDialog.Builder(Speedboat_app.this);
                    builder.setMessage("Apakah anda DOSEN ? ").setPositiveButton("iya nih!",dialogClickListener)
                            .setNegativeButton("tidak",dialogClickListener).show();
                }else if(usernameKey.equals("rei") && passwordKey.equals("1234")){
                    Toast.makeText(getApplicationContext(), "Selamat datang "+usernameKey,
                            Toast.LENGTH_SHORT).show();
                    Intent intent = new Intent(Speedboat_app.this,
                            Speedboat_web.class);
                    intent.putExtra(key,usernameKey);
                    Speedboat_app.this.startActivity(intent);
                    finish();
                }
                else{
                    //jika login gagal
                    AlertDialog.Builder builder = new
                            AlertDialog.Builder(Speedboat_app.this);
                    builder.setMessage("Username = rowan & Password = 1234")
                            .setNegativeButton("Retry", null).create().show();
                }
            }
        });

    }

    public void onBackPressed(){
       DialogInterface.OnClickListener dialoogClick = new DialogInterface.OnClickListener() {
           @Override
           public void onClick(DialogInterface dialog, int which) {
               switch (which){
                   case DialogInterface.BUTTON_POSITIVE:
                       finish();
                       System.exit(0);
                       break;
                   case DialogInterface.BUTTON_NEGATIVE:
                       Toast.makeText(getApplicationContext(),"Silahkan Login",Toast.LENGTH_LONG).show();
               }
           }
       };
       AlertDialog.Builder builder= new AlertDialog.Builder(Speedboat_app.this);
       builder.setMessage("Apakah anda mau keluar ? ").setPositiveButton("iya nih", dialoogClick)
               .setNegativeButton("tidak",dialoogClick).show();
    }

    //end code
}
                </code>
             </pre><br />
            
             <p>
                 <li> Buka <b>activity_speedboat_web.xml</b> dan copy code dibawah ini </li> 
             </p><br>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/MyCampus/SpeedboatApp_V1/7.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div><br>

             <pre class="line-numbers language-XML">
                <code class="language-XML">
                    <script type="text/plain" class="language-XML">
<RelativeLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".Speedboat_web">

    <view class="androidx.swiperefreshlayout.widget.SwipeRefreshLayout"
        android:id="@+id/swipe_web"
        android:layout_width="match_parent"
        android:layout_height="650dp"
        app:layout_constraintTop_toTopOf="parent"
        app:layout_constraintVertical_bias="0.0"
        tools:layout_editor_absoluteX="0dp"
        app:layout_constraintBottom_toTopOf="@+id/fotter">

        <WebView
            android:id="@+id/web_appSpeddboat"
            android:layout_width="match_parent"
            android:layout_height="match_parent"/>
    </view>

    <RelativeLayout
        android:id="@+id/fotter"
        android:layout_width="match_parent"
        android:layout_height="65dp"
        android:layout_below="@+id/swipe_web"
        android:layout_alignParentBottom="true"
        android:background="#177FCF"
        app:layout_constraintBottom_toBottomOf="parent">

        <RelativeLayout
            android:id="@+id/icon_admin"
            android:layout_width="90dp"
            android:layout_height="match_parent">
            <ImageView
                android:layout_width="wrap_content"
                android:layout_height="wrap_content"
                android:layout_marginLeft="15dp"
                android:layout_marginTop="10dp"
                android:background="@drawable/ic_customer_64" />
        </RelativeLayout>

        <RelativeLayout
            android:layout_width="match_parent"
            android:layout_height="match_parent"
            android:layout_alignParentEnd="true"
            android:layout_marginEnd="4dp"
            android:layout_toEndOf="@+id/icon_admin">

            <TextView
                android:id="@+id/txt_user"
                android:layout_width="wrap_content"
                android:layout_height="match_parent"
                android:layout_alignParentStart="true"
                android:layout_alignParentEnd="true"
                android:layout_marginStart="4dp"
                android:layout_marginTop="10dp"
                android:layout_marginEnd="202dp"
                android:text="Username"
                android:textSize="20dp"
                android:textStyle="bold" />

            <TextView
                android:id="@+id/txt_status"
                android:layout_width="146dp"
                android:layout_height="38dp"
                android:layout_alignParentStart="true"
                android:layout_alignParentTop="true"
                android:layout_alignParentEnd="true"
                android:layout_alignParentBottom="true"
                android:layout_marginStart="4dp"
                android:layout_marginTop="41dp"
                android:layout_marginEnd="167dp"
                android:layout_marginBottom="3dp"
                android:text="Status"
                android:textColor="#36FF00"
                android:textSize="20dp"
                android:textStyle="bold" />

        </RelativeLayout>

    </RelativeLayout>

</RelativeLayout>

                   </script>
                </code>
            </pre><br />

             <p>
                 <li> Buka <b>Speedboat_web.java</b> dan copy code yang telah diberi tanda dibawah ini </li>
             </p><br>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/MyCampus/SpeedboatApp_V1/8.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div><br>

             <pre class="line-numbers">
                <code class="language-java">
import androidx.appcompat.app.AppCompatActivity;
import androidx.swiperefreshlayout.widget.SwipeRefreshLayout;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.webkit.WebChromeClient;
import android.webkit.WebResourceError;
import android.webkit.WebResourceRequest;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.RelativeLayout;
import android.widget.TextView;

public class Speedboat_web extends AppCompatActivity implements SwipeRefreshLayout.OnRefreshListener {

//    start code

    private String key = "key";
    private String name;

    WebView webView;
    WebSettings webSettings;
    SwipeRefreshLayout swipeRefreshLayout;
    String URL = "http://mycampus.ezyro.com";

//    end code

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_speedboat_web);

//        start code

        Bundle extra = getIntent().getExtras();
        name = extra.getString(key);
        TextView username = (TextView) findViewById(R.id.txt_user);
        TextView status = (TextView) findViewById(R.id.txt_status);

        username.setText(name);
        status.setText("Online");

        swipeRefreshLayout = (SwipeRefreshLayout)findViewById(R.id.swipe_web);
        webView = (WebView)findViewById(R.id.web_appSpeddboat);

        webSettings = webView.getSettings();
        webSettings.setJavaScriptEnabled(true);
        webSettings.setBuiltInZoomControls(true);
        webView.requestFocusFromTouch();

        webView.setWebChromeClient(new WebChromeClient(){
            @Override
            public void onProgressChanged(WebView view, int newProgress) {
                swipeRefreshLayout.setRefreshing(true);
            }
        });
        webView.setWebViewClient(new WebViewClient(){
            @Override
            public void onPageFinished(WebView view, String url) {
                swipeRefreshLayout.setRefreshing(false);
            }

            @Override
            public void onReceivedError(WebView view, WebResourceRequest request, WebResourceError error) {
                swipeRefreshLayout.setRefreshing(false);
            }
        });

        webView.loadUrl(URL);

    }
    public void onBackPressed(){
        if (webView.canGoBack()){
            webView.goBack();
        }else{
            Intent back_intent = new Intent(Speedboat_web.this, Speedboat_app.class);
            Speedboat_web.this.startActivity(back_intent);
            finish();
        }
    }

    @Override
    public void onRefresh() {
        webView.reload();
    }

//    end code
}
                </code>
            </pre>

            <p>
                 <li> Buka <b>AndroidManifest.xml</b> dan copy code dibawah ini </li> 
             </p><br>
             <div class="col-md-4 mb-2">
                 <div class="card">
                     <img src="img/MyCampus/SpeedboatApp_V1/9.PNG" class="img-fluid rounded" alt="...">
                 </div>
             </div><br>

             <pre class="line-numbers language-XML">
                <code class="language-XML">
                    <script type="text/plain" class="language-XML">

                    <uses-permission android:name="android.permission.INTERNET"/>
                    <application  android:usesCleartextTraffic="true"/>

                    </script>
                </code>
             </pre>

         </ol>
         <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
         </ol>
     </div>
 </body>