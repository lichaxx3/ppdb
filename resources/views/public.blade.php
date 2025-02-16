<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SMK - Golden </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('public/assets/img/logo_sekolah.png') }}" rel="icon">
    <link href="{{ asset('public/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('public/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!--Main CSS File -->
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><img src="{{ asset('public/assets/img/favicon.png') }}" alt="#"><a href="#hero" class="text-warning">SMK GOLDEN</a></h1>
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Rumah</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#guru">Guru</a></li>
                    <li><a class="nav-link scrollto" href="#jurusan">Jurusan</a></li>
                    <li><a class="nav-link scrollto" href="#eskul">Eskul</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <div class="login-daftar">
                <button><a class="btn" href="/login_web">Masuk</a></button>
                <button><a class="btn" href="/register_web">daftar</a></button>
            </div>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center hero">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up " class="text-warning">Mewujudkan generasi cerdas dan berkarakter melalui pendidikan berkualitas.</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400" class="text-white">Selamat Datang !</h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="#about" class="btn-get-started scrollto">Lihat!!!</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('public/assets/img/home.jpg') }}" class="img-fluid " alt="">
                </div>
            </div>
        </div>

    </section>

    <main id="main" class="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2 class="text-warning">Tentang Kami</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                        <p class="text-light">
                        SMK Golden, sekolah menengah kejuruan yang berkomitmen mencetak generasi unggul di bidang keterampilan dan keahlian. Dengan berbagai program studi yang relevan, seperti teknik komputer, perkantoran, perhotelan, dan pemasaran, SMK Golden memberikan pendidikan berkualitas yang memadukan teori dan praktik. Didukung fasilitas modern dan tenaga pengajar berpengalaman, siswa diajak mengembangkan potensi diri serta siap bersaing di dunia industri. Selain itu, SMK Golden menjalin kemitraan dengan berbagai perusahaan untuk memberikan kesempatan magang dan penempatan kerja bagi lulusannya. Dengan pendekatan inovatif dan lingkungan belajar kondusif, SMK Golden berusaha menciptakan lulusan yang tidak hanya terampil, tetapi juga memiliki karakter yang baik.
                        </p>

                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <p class="text-light">
                            Kualitas pendidikan bergantung kepada tenaga pendidik dan infrastruktur yang memadai.
                            Yuk cari tahu kenapa kamu harus memilih SMK Golden, Ayo daftarkan dirimu !!!
                        </p>
                        <a href="#" class="btn-learn-more">Daftar Sekolah</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row">
                    <div class="col-xl-13 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left"
                        data-aos-delay="300">
                        <div class="content d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-emoji-smile text-warning"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="1"
                                            data-purecounter-duration="1" class="purecounter text-warning"></span>
                                        <p class="text-light"><strong>Segudang prestasi</strong> Sekolah memiliki segudang prestasi yang
                                            bisa dibanggakan, Hasil prestasi tersebut karena adanya kerja sama antara
                                            siswa dan guru.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-journal-richtext text-warning"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="2"
                                            data-purecounter-duration="1" class="purecounter text-warning"></span>
                                        <p class="text-light"><strong>Guru berpengalaman</strong> Guru yang mengajar mempunyai pendidikan
                                            Guru S1-S2 Kependidikan. Tidak Hanya itu, guru yang mengajar juga seru-seru
                                            lho!</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-clock text-warning"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="3"
                                            data-purecounter-duration="1" class="purecounter text-warning"></span>
                                        <p class="text-light"><strong>Sekolah Adiwiyata</strong> Sekolah SMK Golden adalah satu sekola h
                                            adiwiyatama, Dengan lapangan yang luas, lingkungan yang masih asri dan sejuk
                                            kau tidak akan pernah bosan saat belajar.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-award text-warning"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="4"
                                            data-purecounter-duration="1" class="purecounter text-warning"></span>
                                        <p class="text-light"><strong>Ekstrakulikuler</strong> Bagi kamu yang ingin kembangin bakat, kau
                                            bisa mengikuti ekskul. Karena, di sekolah ini banyak ekskul yang bisa kamu
                                            ikuti untuk mengembangkan bakat kamu. Seperti sanggar tari, Pramuka, osis,
                                            paskibra, futsal, Basket dll.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Counts Section -->

        {{-- guru --}}
        <section id="guru" class="guru">

            <div class="section-title" data-aos="fade-up">
                <h2 class="text-warning">guru</h2>
            </div>
            <div class="container-guru">

            <div class="card">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX85rcAp8PuwE8xRCgVpuDn9AksfRGxlwJRA&s" alt="Card Image">
                </div>
                <div class="card-content">
                    <h2 class="card-title">nama guru</h2>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX85rcAp8PuwE8xRCgVpuDn9AksfRGxlwJRA&s" alt="Card Image">
                </div>
                <div class="card-content">
                    <h2 class="card-title">nama guru</h2>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX85rcAp8PuwE8xRCgVpuDn9AksfRGxlwJRA&s" alt="Card Image">
                </div>
                <div class="card-content">
                    <h2 class="card-title">nama guru</h2>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX85rcAp8PuwE8xRCgVpuDn9AksfRGxlwJRA&s" alt="Card Image">
                </div>
                <div class="card-content">
                    <h2 class="card-title">nama guru</h2>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX85rcAp8PuwE8xRCgVpuDn9AksfRGxlwJRA&s" alt="Card Image">
                </div>
                <div class="card-content">
                    <h2 class="card-title">nama guru</h2>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX85rcAp8PuwE8xRCgVpuDn9AksfRGxlwJRA&s" alt="Card Image">
                </div>
                <div class="card-content">
                    <h2 class="card-title">nama guru</h2>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX85rcAp8PuwE8xRCgVpuDn9AksfRGxlwJRA&s" alt="Card Image">
                </div>
                <div class="card-content">
                    <h2 class="card-title">nama guru</h2>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX85rcAp8PuwE8xRCgVpuDn9AksfRGxlwJRA&s" alt="Card Image">
                </div>
                <div class="card-content">
                    <h2 class="card-title">nama guru</h2>
                </div>
            </div>
            

        </div>
        <label class="lihat"><a href="#">Lihat lebih banyak!!!</a></label>
    </section>
        {{-- end guru --}}

        {{-- jurusan --}}
        <section id="jurusan" class="jurusan">

            <div class="section-title" data-aos="fade-up">
                <h2 class="text-warning">jurusan</h2>
            </div>
            <div class="container-guru">

            <div class="card">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX85rcAp8PuwE8xRCgVpuDn9AksfRGxlwJRA&s" alt="Card Image">
                </div>
                <div class="card-content">
                    <h2 class="card-title">tkj</h2>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX85rcAp8PuwE8xRCgVpuDn9AksfRGxlwJRA&s" alt="Card Image">
                </div>
                <div class="card-content">
                    <h2 class="card-title">mplb</h2>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX85rcAp8PuwE8xRCgVpuDn9AksfRGxlwJRA&s" alt="Card Image">
                </div>
                <div class="card-content">
                    <h2 class="card-title">HTL</h2>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX85rcAp8PuwE8xRCgVpuDn9AksfRGxlwJRA&s" alt="Card Image">
                </div>
                <div class="card-content">
                    <h2 class="card-title">pm</h2>
                </div>
            </div>
            

        </div>
    </section>
        {{-- end jurusan --}}
        {{-- eskul --}}
        <section id="eskul" class="eskul">

            <div class="section-title" data-aos="fade-up">
                <h2 class="text-warning">eskul</h2>
            </div>
            <div class="container-guru">

            <div class="card">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX85rcAp8PuwE8xRCgVpuDn9AksfRGxlwJRA&s" alt="Card Image">
                </div>
                <div class="card-content">
                    <h2 class="card-title">nama eskul</h2>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX85rcAp8PuwE8xRCgVpuDn9AksfRGxlwJRA&s" alt="Card Image">
                </div>
                <div class="card-content">
                    <h2 class="card-title">nama eskul</h2>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX85rcAp8PuwE8xRCgVpuDn9AksfRGxlwJRA&s" alt="Card Image">
                </div>
                <div class="card-content">
                    <h2 class="card-title">HTL</h2>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX85rcAp8PuwE8xRCgVpuDn9AksfRGxlwJRA&s" alt="Card Image">
                </div>
                <div class="card-content">
                    <h2 class="card-title">nama eskul</h2>
                </div>
            </div>
            

        </div>
    </section>
        {{-- end eskul --}}

        <!-- ======= More Services Section ======= -->
        <!-- <section id="more-services" class="more-services">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2 class="text-warning">Ekstrakulikuler</h2>
                    <p class="text-warning">Berikut Ekstrakulikuler SMK Golden</p>
                </div>

                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card"
                            style='background-image: url("http://127.0.0.1:8000/public/assets/img/PASKIBRA.jpg");'
                            data-aos="fade-up" data-aos-delay="100">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Paskibra</a></h5>
                                <p class="card-text">Paskibra ialah suatu ekstrakulikuler yang dapat menjadi media bagi
                                    anggotanya untuk membentuk nilai-nilai penting dalam diri. Di dalamnya terdapat
                                    nilai-nilai seperti kedisiplinan, cinta tanah air, patriotisme, dan lain-lain. dan
                                    mungkin kamu bisa menjadi salah satu perwakilan dari sekolah untuk mengibarkan
                                    bendera merah putih di Istana Negara Republik Indonesia? Wow, sungguh menarik sekali
                                    jikalau kamu pernah menjadi salah satunya.</p>
                                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read
                                        More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="card"
                            style='background-image: url("http://127.0.0.1:8000/public/assets/img/PIK_R.jpg");'
                            data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">PIK-R</a></h5>
                                <p class="card-text">PIK-R (Pusat Informasi dan Konseling Remaja) adalah suatu wadah
                                    kegiatan program Generasi Berencana (GENRE) yang dikelola dari, oleh, dan untuk
                                    remaja guna memberikan pelayanan informasi dan konseling tentang perencanaan
                                    kehidupan berkeluarga bagi remaja serta kegiatan-kegiatan penunjang lainnya.</p>
                                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read
                                        More</a></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4">
                        <div class="card"
                            style='background-image: url("http://127.0.0.1:8000/public/assets/img/Pramuka.jpg");'
                            data-aos="fade-up" data-aos-delay="100">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Pramuka</a></h5>
                                <p class="card-text">Pramuka adalah singkatan dari Praja Muda Karana dan merupakan
                                    organisasi atau gerakan kepanduan. Pramuka adalah sebuah organisasi yang merupakan
                                    wadah proses pendidikan kepramukaan yang dilaksanakan di Indonesia. Dalam dunia
                                    internasional, Pramuka disebut dengan istilah "Kepanduan" (Boy Scout). Gerakan
                                    Pramuka memiliki kode Kode Kehormatan Pramuka, Gerakan Pramuka memiliki Kode
                                    Kehormatan yang terdiri atas janji yang disebut Satya dan Ketentuan Moral yang
                                    disebut Darma Kode Kehormatan Pramuka disesuaikan dengan golongan usia dan
                                    perkembangan rohani dan jasmaninya, yaitu: Kode Kehormatan Pramuka Siaga terdiri
                                    atas Dwisatya dan Dwidarma.</p>
                                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read
                                        More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4">
                        <div class="card"
                            style='background-image: url("http://127.0.0.1:8000/public/assets/img/more-services-4.jpg");'
                            data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Pale Treda</a></h5>
                                <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro
                                    quisquam
                                    laudantium voluptatem.</p>
                                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read
                                        More</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> -->
        </section><!-- End More Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2 class="text-warning">Kontak</h2>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-about">
                            <h3 class="text-warning">SMK Golden</h3>
                            <p class="text-light">SMK Golden akan memastikan kamu <br> mendapatkan pengalaman belajar yang
                            berkualitas.</p>
                            
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="info">
                            <div>
                                <i class="ri-map-pin-line text-warning"></i>
                                <p class="text-light">Alamat: Jl. Letkol Atang Sanjaya RT 01/02 <br> 	KEC. RANCA BUNGUR <br> KAB. BOGOR <br> PROV. JAWA BARAT, 69967704</p>
                            </div>

                            <div>
                                <i class="ri-mail-send-line text-warning"></i>
                                <p class="text-light">smkgolden@gmail.com</p>
                            </div>

                            <div>
                                <i class="ri-phone-line text-warning"></i>
                                <p class="text-light">+62812121212</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14910.79140644951!2d106.70743939063652!3d-6.537737280949193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c34d7f73e9f3%3A0xc0da5ac14c57ab3c!2sSMK%20Golden!5e0!3m2!1sid!2sid!4v1727588176626!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
                                <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 600px;
                                }
                                </style>
                                <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 600px;
                                }
                                </style>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        <label class="text-warning">&copy; Copyright <strong>Imam Dermawan</strong></lebel>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short text-light"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('public/assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('public/assets/js/main.js') }}"></script>

</body>

</html>