<?php 
session_start();

if (isset($_SESSION['username'])) {
    header("location: Login.php");
    exit();
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $valid_username = "atminvinsen";
    $valid_password = "valorant1212";

    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: Login.php");
        exit();
    } else {
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="./assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boston MuayThai</title>

    <!--Feather Icons-->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./style1.css">

</head>

<body>
    <!--Navbar start-->
    <nav class="navbar">
        <a href="#" class="navbar-logo">
            <img class="logo me-3" src="./boston logo.jpeg" width="70" height="70" role="img" aria-label="Boston Logo">
        </a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#aboutus">Tentang Kami</a>
            <a href="#membership">Membership</a>
            <a href="#contact">Register</a>
        </div>

        <div class="navbar-extra">
            <a href="#login">Login</a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!--Navbar end-->


    <!--Hero Section start-->
    <section class="hero" id="home">
        <main class="content">
            <h1>Boston Muay Thai & MMA</h1>
            <p>Muay Thai, Boxing, Mixed Martial Arts.</p>
            <a href="#membership" class="cta">Pilih Kelas</a>
        </main>
    </section>
    <!--Hero Section end-->

    <!-- About Section start-->
    <section id="aboutus" class="about">
        <h2><span>Tentang</span> Kami</h2>

        <div class="row">
            <div class="about-img">
                <img src="./about boston.jpg" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>Kenapa Memilih Boston</h3>
                <p>Kami memiliki Personal Trainer/Coach yang sudah berpengalaman dalam bidangnya, bersertifikasi, dan
                    tentunya sudah lolos tahap seleksi. Anda dapat menggunakan jasa mereka dengan maksimal untuk
                    mencapai target Anda.</p>
                <p>Kami tidak hanya fokus dalam fasilitas sarana yang menunjang tujuan beladiri Anda, karena Anda bisa
                    melihat progress berat badan yang sudah tercapai dari awal bergabung dengan kami melalui program
                    weightloss.</p>
                <p>Anda bisa mencoba kelas yang kami sediakan dengan bergabung bersama kami. Dimulai dari Muay Thai,
                    Boxing, dan MMA sehingga meningkatkan skill beladiri/self defense anda.</p>
            </div>
        </div>
    </section>
    <!-- About Section end-->

    <!--Menu Section Start-->
    <section id="membership" class="member">
        <h2><span>Member</span> Class</h2>
        <p>Bagi yang ingin belajar Muay Thai, Boxing, dan MMA dapat datang ke camp kami
            Terdapat 2 Kelas yaitu Regular untuk perorangan dan Private untuk latihan yang lebih intens dan
            terfokus serta fleksibel berdasarkan tempat yang anda inginkan
        </p>

        <div class="row">
            <div class="member-card">
                <img src="./regular class.jpg" alt="Regular Class" class="member-card-img">
                <h3 class="member-card-title">- Regular Class -</h3>
                <p class="member-card-price">
                    Pendaftaran : Rp60.000
                    Paket 4X/Bulan : Rp190.000
                    Paket 8X/Bulan : Rp290.000
                    Paket Unlimited : Rp390.000
                    Isidentil/
                    Datang : Rp90.000</p>
            </div>
            <div class="member-card">
                <img src="./private class.jpg" alt="Private Class" class="member-card-img">
                <h3 class="member-card-title">- Private Class -</h3>
                <p class="member-card-price">
                    Single
                    Isidentil (1X)
                    Datang : Rp250.000
                    Paket 4X/Bulan : Rp800.000
                    Paket 8X/Bulan : Rp1.250.000
                </p>
                <p class="member-card-price">
                    Couple (2 Orang)
                    Isidentil(1X)
                    Datang : Rp400.000
                    Paket 4X/Bulan : Rp1.250.000
                    Paket 8X/Bulan : Rp2.350.000
                </p>
                <p class="member-card-price">
                    Group (3-6 Orang)
                    Isidentil(1X)
                    Datang : Rp1.050.000
                    Paket 4X/Bulan : Rp2.350.000
                    Paket 8X/Bulan : Rp3.350.000
                </p>
            </div>
        </div>
    </section>

    <!--Menu Section End-->

    <!--Register Section Start-->

    <section id="contact" class="contact">
        <h2><span>Register</span> Now</h2>
        <p>Daftarkan diri Anda pada kolom dibawah dan berikan kritik serta saran kepada kami, agar kami dapat selalu
            memberikan pelayanan yang terbaik kepada Anda
        </p>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.810183331698!2d110.34725457500525!3d-7.809908592210481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a578bded8e937%3A0xed57fb724bec4786!2sBOSTON%20Muay%20Thai%20%26%20Mixed%20Martial%20Arts!5e0!3m2!1sid!2sid!4v1715635665899!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <form action="">
                <div class="input-grub">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="Nama Lengkap">
                </div>
                <div class="input-grub">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-grub">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="No HP">
                </div>
                <div class="input-grub">
                    <i data-feather="send"></i>
                    <input type="text" placeholder="Pesan">
                </div>
                <button type="submit" class="btn">Kirim Pesan</button>
            </form>

        </div>
    </section>
    <!--Register Section End-->

    <!--Footer start-->
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#aboutus">Tentang Kami</a>
            <a href="#membership">Membership</a>
            <a href="#contact">Register</a>
        </div>

        <div class="credit">
            <p>Created by <a href="">Satria Pinayungan jati</a>. | &copy; 2024</p>
        </div>
    </footer>
    <!--Footer end-->

    <!--Feathe Icons-->
    <script>
        feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js">
    </script>
</body>

</html>