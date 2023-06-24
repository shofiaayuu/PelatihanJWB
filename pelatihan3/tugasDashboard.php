<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMAN 1 REJOTANGAN</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
  <style>
    /* CSS untuk tampilan navbar */
    .navbar {
      background-color: #343a40;
    }

    .navbar-brand {
      font-size: 1.5rem;
    }

    .navbar-nav .nav-link {
      color: #fff;
      font-size: 1.2rem;
      
    }
    .navbar-nav .ml-auto{
      color: #f9f9f9;
    }

    .navbar-nav .nav-link:hover {
      color: #fff;
    }
    .dropdown-menu {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 200px;
      z-index: 1;
      padding: 0;
    }

    .dropdown-menu li {
      display: block;
    }

    .dropdown-menu li a {
      padding: 10px;
      color: #7c4b4b;
    }

    .dropdown:hover .dropdown-menu {
      display: block;
    }

    /* CSS untuk tampilan beranda*/
    .container {
      max-width: 1500px;
    }

    .container h2 {
      margin-bottom: 20px;
      text-align: center;
    }

    .container p {
      line-height: 1.6;
      text-align: justify;
      max-width: 700px;
    }
    .img-left {
      width: 100%;
      max-width: 500px;
      float: left;
      margin-right: 300px;
    }

    /*halaman tentang kami */

    .about-us .content {
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    .about-us .text {
      flex: 1;
      text-align: center;
    }

    .about-us .image {
      flex: 1;
      text-align: right;
    }

    .about-us .image img {
      max-width: 100%;
      height: auto;
    }
    /* CSS untuk tampilan footer */
    footer {
      background-color: #343a40;
      color: #fff;
    }
    footer p {
      margin-bottom: 5px;
    }
    .col-md-4 {
      text-align: left;
    }

    /* CSS tambahan */
    body {
      /* padding-top: 70px; */
      background-color: rgb(182, 194, 208);
    }
    .btn {
      font-family: 'Segoe UI', Arial, sans-serif;
      font-size: 16px;
      border-radius: 20px;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      margin-right: 100px; 
    }

  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="img/logo_sma.png" alt="Logo SMA" height="50" width="50" >
    SMAN 1 REJOTANGAN
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Akademik</a>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link dropdown-toggle">Tentang Kami</a>
          <ul class="dropdown-menu">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Tentang Sekolah</a></li>
            <li><a href="#">Galeri Sekolah</a></li>
            <li><a href="#">Alamat Sekolah</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="nav-link dropdown-toggle" href="#">Kontak</a>
          <ul class="dropdown-menu">
            <li><a href="#">Alamat</a></li>
            <li><a href="#">Telepon</a></li>
            <li><a href="#">Email</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="nav-link dropdown-toggle" href="#">Login</a>
          <ul class="dropdown-menu">
            <li><a href="#">Register</a></li>
            <li><a href="#">Login</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Beranda -->
  <section class="container mt-4">
    <div class="row">
      <div class="col-md-4">
        <img src="img/sma.jpg" class="img-fluid img-left">
      </div>
      <div class="col-md-8">
        <h2>Selamat Datang di SMAN 1 Rejotangan</h2>
        <p>Selamat datang di website resmi SMAN 1 Rejotangan.
          Kami menyediakan pendidikan berkualitas untuk siswa-siswi SMA sederajat.
          Harapan kami dengan dipublikasinya website ini adalah untuk meningkatkan layanan pendidikan
          kepada siswa,orangtua, dan masyarakat pada umumnya. <br>
        </p>
        <p>
          SMA Negeri 1 Rejotangan adalah sekolah yang berdedikasi dalam memberikan pendidikan terbaik 
          bagi para siswa-siswi. Kami memiliki tim pengajar yang berkualitas dan fasilitas modern yang 
          mendukung proses pembelajaran yang efektif. Dalam lingkungan belajar yang inspiratif, 
          kami memberikan kesempatan kepada siswa untuk mengembangkan potensi mereka di berbagai bidang, 
          baik akademik maupun non-akademik.
        </p>
      </div>
    </div>
  </section>


  <!-- Halaman About -->
  <section class="about-us">
  <div class="container"><br>
    <div class="content">
      <div class="text">
        <h2>Tentang Kami</h2>
        <p>SMAN 1 Rejotangan adalah sebuah sekolah menengah atas yang berdedikasi untuk menyediakan 
          pendidikan berkualitas dan menciptakan lingkungan belajar yang inspiratif bagi siswa-siswi kami. 
          Dengan berbagai fasilitas modern dan beragam kegiatan, kami berkomitmen untuk membantu siswa 
          mengembangkan potensi mereka dan mencapai keunggulan akademik.
        </p>
        <p>
        Fasilitas yang tersedia di SMAN 1 Rejotangan sangat mendukung proses pembelajaran yang efektif. 
        Kami memiliki perpustakaan yang dilengkapi dengan koleksi buku yang luas, laboratorium komputer 
        dengan perangkat terkini,dan laboratorium sains . . . . .
        </p>
        <button class="btn float-right">Selengkapnya-></button>
      </div>
      <div class="image">
        <img src="img/gambar1.jpg" alt="SMA Image">
      </div>
    </div>
  </div>
</section>

  

  
  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3 mt-4">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>Tentang Kami</h5>
          <ul class="list-unstyled">
            <li><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><i class="fas fa-info-circle"></i> Tentang Sekolah</a></li>
            <li><i class="fas fa-images"></i> Galeri Sekolah</a></li>
            <li><i class="fas fa-map-marker-alt"></i> Alamat Sekolah</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>News</h5>
          <ul class="list-unstyled">
            <li><i class="fas fa-bullhorn"></i> Pengumuman</a></li>
            <li><i class="far fa-calendar-alt"></i> Agenda</a></li>
            <li><i class="far fa-newspaper"></i> Berita</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Kontak Kami</h5>
          <ul class="list-unstyled">
            <li><i class="fas fa-home"></i> Jl. Raya Buntaran
                              Kec. Rejotangan, Kab. Tulungagung
                              Jawa Timur. Kode Pos. 66293</li>
            <li><i class="fas fa-phone"></i> (123) 456-7890</li>
            <li><i class="fas fa-envelope"></i> info@sman1rejotangan.com</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>
