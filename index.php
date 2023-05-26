<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Aplikasi Pembayaran SPP</title>

      <link rel="shortcut icon" href="layouts/assets/img/aw.png" type="image">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/admin.png" class="brand">
                  <div class="user">Administrator</div>
            </header>

            <nav>
                  <ul>
                  
                  <li>
                              <a href="index.php?hal=main">
                                    <img class="icon" src="layouts/assets/img/home.png" alt=""> Home
                              </a>
                        </li>
                  <li>
                              <a href="index.php?hal=datasiswa_tampil">
                                    <img class="icon" src="layouts/assets/img/siswa.png" alt=""> Data Siswa
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=pembayaran_tampil">
                                    <img class="icon" src="layouts/assets/img/pembayaran_spp.png" alt=""> Pembayaran
                              </a>
                        </li>
                        <li>
                        <li>
                              <a href="index.php?hal=laporan_tampil">
                                    <img class="icon" src="layouts/assets/img/laporan.png" alt=""> Laporan
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=post_tampil">
                                    <img class="icon" src="layouts/assets/img/keluar.png" alt=""> Keluar
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by ALdric
            </footer>
      </main>

</body>

</html>