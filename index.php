<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>IRENE MIRAJ NUR SARI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT & BOOTSTRAP -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f2e7;
            color: #2f3e2f;
            margin: 0;
            scroll-behavior: smooth;
        }

        .nav-container {
            background-color: #3c7d5d;
            color: white;
            padding: 15px 25px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 5px solid #a5d6aa;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-logo {
            font-size: 1.7rem;
            letter-spacing: 1px;
        }

        .dropdown-menu {
            background-color: #4d8f68;
            border: none;
            border-radius: 10px;
        }

        .dropdown-item {
            color: #f4fff7;
            font-weight: 500;
        }

        .dropdown-item:hover {
            background-color: #b4ecb4;
            color: #264d38;
        }

        .profile-section {
            background: linear-gradient(rgba(13, 49, 18, 0.71), rgba(0, 0, 0, 0.82)),
                url('https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExOTRlOTBoeG42ZDN0dHRjaXlnM29ibWptdjBkZ3kxMTMzdHRya3JncyZlcD12MV9naWZzX3NlYXJjaCZjdD1n/hAuYWrVIyfK5G/giphy.gif') center/cover no-repeat;
            padding: 70px 20px;
            text-align: center;
            color: white;
        }

        .profile-img {
            width: 220px;
            height: 220px;
            object-fit: cover;
            border-radius: 50%;
            border: 6px solid #ccebd4;
            margin-bottom: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }


        h2 {
            margin-bottom: 20px;
            font-weight: 700;
        }

        .section {
            padding: 70px 20px;
            border-top: 3px dashed #a4c9aa;
        }

        .text-center-limited {
            max-width: 800px;
            margin: 0 auto 30px auto;
            font-size: 4.5 rem;
            color: #4d604f;
        }


        .carousel-inner img {
            max-height: 350px;
            object-fit: contain;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.3);
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .experience-card {
            background-color: #fdfaf3;
            min-height: 100px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-radius: 15px;
            padding: 20px;
            margin: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.07);
            border-left: 6px solid #7dbf96;
            transition: all 0.3s ease;
        }

        .experience-card h3 {
            font-weight: 700;
            font-size: 1.3rem;
            /* lebih besar */
            margin-bottom: 15px;
            color: #2f3e2f;
        }


        .experience-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
        }


        .contact-icons a img {
            width: 60px;
            margin: 15px;
            transition: transform 0.3s ease, filter 0.3s ease;
            filter: grayscale(30%);
        }

        .contact-icons a img:hover {
            transform: scale(1.15);
            filter: grayscale(0%);
        }

        h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background-color: #6ab178;
            margin: 15px auto 30px auto;
            border-radius: 3px;
        }

        .about-text {
            max-width: 600px;
        }

        .profile-section .about-text p {
            font-size: 20px;
            line-height: 1.8;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .profile-img {
                width: 150px;
                height: 150px;
            }

            .container.d-flex {
                flex-direction: column !important;
                text-align: center;
            }

            .experience-card {
                padding: 15px;
            }

            .experience-card p {
                font-size: 1rem;
                line-height: 1.6;
                color: #4d604f;
            }
        }
    </style>

</head>

<body>

    <nav class="nav-container">
        <div class="nav-logo">IRENE MIRAJ NUR SARI</div>
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#certificate">Sertifikat</a></li>
                <li><a class="dropdown-item" href="#experience">Pengalaman</a></li>
                <li><a class="dropdown-item" href="#hobby">Hobi</a></li>
                <li><a class="dropdown-item" href="#contact">Kontak Saya</a></li>
            </ul>
        </div>
    </nav>


    <?php
    $tentang_query = mysqli_query($conn, "SELECT * FROM tentangsaya LIMIT 1");
    $tentang = mysqli_fetch_assoc($tentang_query);
    ?>
    <section class="profile-section">
        <img src="gambar/irene.jpeg" class="profile-img" alt="Foto Profil">
        <div class="about-text container">
            <h2>Tentang Saya</h2>
            <p><?= $tentang['description']; ?></p>
        </div>
    </section>

    <section id="certificate" class="section text-center">
        <h2>Sertifikat</h2>
        <p class="text-center-limited">Berikut ini adalah sertifikat yang saya miliki selama menjadi anggota aktif
            INFORSA (Information System Association), saya ikut cukup banyak kepanitiaan untuk menambah
            pengalaman sekaligus belajar dalam suatu divisi.
        </p>
        <div id="certificateCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $sertifikat_query = mysqli_query($conn, "SELECT * FROM sertifikat");
                $active = true;
                while ($sertif = mysqli_fetch_assoc($sertifikat_query)) {
                    echo '<div class="carousel-item ' . ($active ? 'active' : '') . '">';
                    echo '<img src="' . $sertif['image_path'] . '" class="d-block w-75" alt="Sertifikat">';
                    echo '</div>';
                    $active = false;
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#certificateCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#certificateCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <section id="experience" class="section text-center">
        <h2>Pengalaman</h2>
        <p class="text-center-limited"> Selama aktif dalam organisasi INFORSA saya juga berkesempatan menjadi koordinator suatu divisi
            yang mana hal ini pun memberikan saya pengalaman sebagai pemimpin dalam menjalankan
            suatu acara.
        </p>
        <div class="container">
            <div class="row">
                <?php
                $pengalaman_query = mysqli_query($conn, "SELECT * FROM pengalaman");
                while ($exp = mysqli_fetch_assoc($pengalaman_query)) {
                    echo '<div class="col-md-4 d-flex align-items-stretch">';
                    echo '<div class="experience-card">';
                    echo '<h3>' . $exp['title'] . '</h3>';
                    echo '<p>' . $exp['description'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>


    <section id="hobby" class="section text-center">
        <h2>Hobi</h2>
        <p class="text-center-limited"> Berikut adalah beberapa gambar yang saya buat di waktu senggang, saya memiliki hobi menggambar
            serta mencoba mengeksplorasi berbagai macam gaya gambar dengann berbagai percobaan shades warna
            mulai dari cooltone, warmtone, dan neutral. Saya menggunakan perangkat handphone dan stylush pen.
        </p>
        <div id="hobbyCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $hobi_query = mysqli_query($conn, "SELECT * FROM hobi");
                $active = true;
                while ($hobi = mysqli_fetch_assoc($hobi_query)) {
                    echo '<div class="carousel-item ' . ($active ? 'active' : '') . '">';
                    echo '<img src="' . $hobi['image_path'] . '" class="d-block w-50 mx-auto" alt="Gambar Hobi">';
                    echo '</div>';
                    $active = false;
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hobbyCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hobbyCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>


    <section id="contact" class="section text-center">
        <h2>Kontak Saya</h2>
        <p class="text-center-limited">Berikut adalah 3 media yang saya gunakan, Instagram untuk mencari informasi terbaru seperti beasiswa ataupun seminar, Twitter/X biasa saya gunakan untuk mencari berita terbaru terlebih mengenai kondisi negara saat ini yang kian hari memprihatinkan, dan ketiga ada GitHub saya gunakan untuk pengerjaan tugas pratikkum sekaligus mencari atau melihat contoh source code dari para pemrogramer lain yang biasanya memberikan video tutorial di youtube dan juga memberikan link GitHub mereka untuk bisa diakses.</p>
        <div class="contact-icons">
            <?php
            $kontak_query = mysqli_query($conn, "SELECT * FROM kontak");
            while ($kontak = mysqli_fetch_assoc($kontak_query)) {
                echo '<a href="' . $kontak['link'] . '" target="_blank">';
                echo '<img src="' . $kontak['icon_path'] . '" alt="' . $kontak['platform'] . '">';
                echo '</a>';
            }
            ?>
        </div>
    </section>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>