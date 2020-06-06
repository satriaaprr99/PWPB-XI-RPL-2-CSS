<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>GreenHealty</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- top -->
                    <!-- header -->
         <header class="header">
            
         <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="http://127.0.0.1:8000/home">Green Healthy</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<svg class="svg-inline--fa fa-bars fa-w-14 ml-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg><!-- <i class="fas fa-bars ml-1"></i> --></button>
               
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="http://127.0.0.1:8000/korona">Data Covid</a></li>
                        
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="http://127.0.0.1:8000/toko">Toko</a></li>
                        <li class="nav-item">
                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre="">
                  ChandraMuktiGimnastiyar <span class="caret"></span></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="http://127.0.0.1:8000/profile">Profile</a>
                                    <a class="dropdown-item" href="http://127.0.0.1:8000/history">Riwayat Pemesanan</a>
                                    <a class="dropdown-item" href="http://127.0.0.1:8000/admin">Halaman Admin</a>
                                    <a class="dropdown-item" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="kakakmv80IItJJD09GUVKV5G1WcVO2uK1aKjA1lr"></form>
                                </div>
                          </li>
                        <li class="nav-item">
                   <a class="nav-link js-scroll-trigger" href="http://127.0.0.1:8000/checkout"><svg class="svg-inline--fa fa-shopping-cart fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg><!-- <i class="fa fa-shopping-cart">
                            </i> -->   </a>
                        </li>
                     </ul>
                </div>
            </div>
        </nav>
         </header>
      <!-- end header -->
      <div class="full_bg">
      <!-- header inner -->
         <div class="section">
            <!-- carousel code -->
            <div id="banner1" class="carousel slide slider_main">
               <ol class="carousel-indicators ">
                  <li data-target="#banner1" data-slide-to="0" class="indicator-li-1">01</li>
                  <li data-target="#banner1" data-slide-to="1" class="">02</li>
                  <li data-target="#banner1" data-slide-to="2" class="active">03</li>
               </ol>
               <div class="carousel-inner">
                  <!-- first slide -->
                  <div class="carousel-item active">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                 <div class="photog">
                                    <h1>Berita Seputar Covid-19<br></h1>
                                    <a class="read_more" href="http://127.0.0.1:8000/home" >Baca Lengkap</a>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- second slide -->
                  <div class="carousel-item">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                <div class="photog">
                                    <h1>Data Korban Covid-19<br></h1>
                                    <a class="read_more" href="http://127.0.0.1:8000/korona" >Baca Lengkap</a>
                                   
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- third slide -->
                  <div class="carousel-item">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                <div class="photog">
                                    <h1>Toko<br>Kesehatan</h1>
                                    <a class="read_more" href="http://127.0.0.1:8000/toko">Baca Lengkap</a>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- controls -->
               <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
               <i class="fa fa-angle-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
      <!-- end banner -->
      <!-- about -->
      <div class="about">
         <div class="container_width">
            <div class="row d_flex">
                   <div class="col-md-7">
                  <div class="titlepage text_align_left">
                     <h2>Corona Virus </h2>
                     <p>Coronavirus adalah suatu kelompok virus yang dapat menyebabkan penyakit pada hewan atau manusia. Beberapa jenis coronavirus diketahui menyebabkan infeksi saluran nafas pada manusia mulai dari batuk pilek hingga yang lebih serius seperti Middle East Respiratory Syndrome (MERS) dan Severe Acute Respiratory Syndrome (SARS). Coronavirus jenis baru yang ditemukan menyebabkan penyakit COVID-19.COVID-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus yang baru ditemukan.  Virus baru dan penyakit yang disebabkannya ini tidak dikenal sebelum mulainya wabah di Wuhan, Tiongkok, bulan Desember 2019. COVID-19 ini sekarang menjadi sebuah pandemi yang terjadi di banyak negara di seluruh dunia.
                     </p>
                     <a class="read_more" href="http://127.0.0.1:8000/korona">Baca Data Laporan Corona</a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img text_align_center">
                     <figure><img src="images/about.png" alt="#"/></figure>
                  </div>
               </div>
              
            </div>
         </div>
      </div>
      <!-- end about -->
     <!-- coronata -->
      <div class="coronata">
         <div class="container">
            <div class="row d_flex grid">
               <div class="col-md-7">
                  <div class="coronata_img text_align_center">
                     <figure><img src="images/corona.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5 oder1">
                  <div class="titlepage text_align_left">
                     <h2>Gejala Pada Covid-19</h2>
                     <p>Gejala-gejala COVID-19 yang paling umum adalah demam, batuk kering, dan rasa lelah. Gejala lainnya yang lebih jarang dan mungkin dialami beberapa pasien meliputi rasa nyeri dan sakit, hidung tersumbat, sakit kepala, konjungtivitis, sakit tenggorokan, diare, kehilangan indera rasa atau penciuman, ruam pada kulit, atau perubahan warna jari tangan atau kaki. Gejala-gejala yang dialami biasanya bersifat ringan dan muncul secara bertahap. Beberapa orang menjadi terinfeksi tetapi hanya memiliki gejala ringan.

                     </p>
                     <a class="read_more" href="http://127.0.0.1:8000/toko">Lihat Toko Kesehatan</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end coronata -->
   
        <!-- protect -->
      <div class="protect">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>Bagaimana cara pencegahan dari Covid-19?</h2>
                  </div>
               </div>
            </div>
         </div>
           <div class="protect_bg">
         <div class="container">
             <div class="row">
               <div class="col-md-12">
                  <!--  Demos -->
                  <div class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="images/pro1.png" alt="#"/></i>
                           <h3> Menggunakan masker</h3>
                           <span> Menggunakan masker untuk orang sakit dengan gejala ringan seperti batuk dan flu,dan Pakailah masker ketika keluar rumah agar mengurangi pencegahan penularan Virus Corona ini.</span>
                          </div>
                           
                        </div>
                     </div>
                     <div class="item">
                          <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="images/pro2.png" alt="#"/></i>
                           <h3> Mencuci Tangan</h3>
                           <span> Mencuci tangan menggunakan sabun setelah beraktivitas diluar rumah.
Hindari menyentuh wajah jika belum mencuci tangan,dan makan makanan yang bergizi agar meningkatan sistem imune tubuh.</span>
                          </div>
                           
                        </div>
                     </div>
                     <div class="item">
                         <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="images/pro3.png" alt="#"/></i>
                           <h3> Stay at Home</h3>
                           <span>Hindari keramaian dan keluar rumah jika tidak berkepentingan,Melakukan social distancing dengan jaga jarak 1-2 m dengan orang lain,Mengkarantina diri atau mengisolasi diri dirumah jika ada gejala Covid-19.</span>
                          </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
          </div>
      </div>
         </div>
      </div>
      <!-- end protect -->
    <!-- cases -->
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Berita Mengenai Virus Corona</h2>
                     <p>Disini Anda Bisa Dapat Macam - Macam Berita tentang Virus</p>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases1.png" alt="#"/></figure>
                     
                     <div class="nostrud">
                        <h3>Cara mencegah penyebaran Virus</h3>
                        <p>Tetap ikuti informasi terbaru tentang wabah COVID-19 yang tersedia di situs web WHO dan melalui kementerian kesehatan dan dinas kesehatan di daerah Anda. Di banyak negara di seluruh dunia, kasus dan bahkan wabah COVID-19 telah terjadi. Pemerintah Tiongkok dan pemerintah beberapa negara lain telah berhasil memperlambat wabah yang terjadi di wilayahnya. Namun, situasi yang ada masih sulit diprediksi. Karena itu, tetaplah ikuti berita terbaru.</p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases2.png" alt="#"/></figure>
                      
                     <div class="nostrud">
                        <h3>COVID-19 dapat menular dari orang yang tidak menunjukkan gejala?</h3>
                        <p>COVID-19 terutama menyebar melalui percikan saluran pernapasan yang dikeluarkan oleh seseorang yang batuk atau memiliki gejala lain seperti demam atau rasa lelah. Banyak orang yang terinfeksi COVID-19 hanya mengalami gejala ringan terutama pada tahap-tahap awal. Karena itu, COVID-19 dapat menular dari orang yang hanya bergejala ringan, seperti batuk ringan,merasakan sehat.</p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases3.png" alt="#"/></figure>
                      
                     <div class="nostrud">
                        <h3>Bagaimana cara COVID-19 menyebar?</h3>
                        <p>Orang dapat tertular COVID-19 dari orang lain yang terinfeksi virus ini. COVID-19 dapat menyebar terutama dari orang ke orang melalui percikan-percikan dari hidung atau mulut yang keluar saat orang yang terinfeksi COVID-19 batuk, bersin atau berbicara. Percikan-percikan ini relatif berat, perjalanannya tidak jauh dan jatuh ke tanah dengan cepat. Orang dapat terinfeksi COVID-19 jika menghirup percikan orang yang terinfeksi virus ini.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end cases -->
         <!-- doctors -->
      <div class="doctors">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>What Admin say about Covid-19...</h2>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-4">
                     <div id="ho_efcet" class="reader text_align_center">
                        
                        <h3>Sahlan</h3>
                        <p>Menurut saya Virus corona adalah suatu wabah yang dapat meyadarkan manusia terhadap kebersihan lingkungan di sekitarnya.</p>
                        <span><img src="images/do.png" alt="#"/></span>
                     </div>
                  </div>
                  <div class=" col-md-4">
                     <div id="ho_efcet" class="reader text_align_center">
                        
                        <h3>Chandra</h3>
                        <p>Menurut saya Virus corona ialah virus yang mematikan yang harus di hindari manusia tetapi virus ini membawa dampak baik bagi alam yaitu tidak ada polusi udara karna lockdown , tidak ada yang memburu ikan di laut atau sebagainya.</p>
                        <span><img src="images/do.png" alt="#"/></span>
                     </div>
                  </div>
                          <div class=" col-md-4">
                     <div id="ho_efcet" class="reader text_align_center">
                        
                        <h3>Satria</h3>
                        <p>Menurut saya Virus corona dapat di cegah apabila kita mematuhi aturan yang di ajukan pemerintah dan menjaga kebersihan diri.</p>
                        <span><img src="images/do.png" alt="#"/></span>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- end cases -->

<!-- update -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>Covid-19</h3>
                             
           
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                             <h3>Tentang</h3>
                              <p>Apabila ada kendala silahkan hubungi admin langsung</p>
                           </div>
                        </div>
                     
                
                       
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3  text_align_left">
                              <h3>Kontak Kami</h3>
                                <ul class="top_infomation">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                           SMKN 4 Bandung
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                           Call : +62 8995969551
                        </li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                           <a href="Javascript:void(0)">Email : GreenHealty@gmail.com</a>
                        </li>
                     </ul>
                            
                           
                     </div>
                  </div>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>Negara</h3>
                              <div class="map">
                                <img src="images/map.png" alt="#"/>
                              </div>
                           </div>
                        </div>
                    
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 offset-md-2">
                        <p>© 2020 All Rights Reserved. Design by <a href="https://html.design/"> Green Healty</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
