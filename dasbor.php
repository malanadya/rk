<?php
  include 'header.php';
 ?>

<body>

    <header>
        <?php
          include 'navbar.php'
         ?>

        <!--Mask-->
        <div class="view hm-black-strong">
            <div class="full-bg-img flex-center">
                <div class="container">
                    <div class="white-text text-center wow fadeInUp">
                        <h2>Selamat datang di SI-Rukun Tetangga</h2>
                        <h5>Rukun Tetangga suatu daerah di ITS Surabaya</h5>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <!--/.Mask-->
    </header>

    <!--Main layout-->
    <main class="pt-2 text-center">
        <div class="container">
          <h1>Pilih menu</h1>
            <div class="row">
                <div class="col text-center">

                    <h5>Surat menyurat</h5>
                    <br>
                    <a class="btn btn-info" href="form_surat.php">Unggah surat</a>
                    <a class="btn btn-info" href="list_surat.php">Unduh surat</a>
                    <a class="btn btn-info" href="list_surat.php">Ubah surat</a>
                    <a class="btn btn-info" href="list_surat.php">Cetak surat</a>
                    <a class="btn btn-info" href="">Konfirmasi surat</a>
                    <br>
                    <br>
                    <h5>Pengumuman</h5>
                    <a class="btn btn-info" href="form_pengumuman.php">Buat pengumuman</a>
                    <a class="btn btn-info" href="list_pengumuman.php">Daftar pengumuman</a>
                    <br>
                    <br>
                    <h5>Laporan keuangan</h5>
                    <a class="btn btn-info" href="">Buat laporan</a>
                    <a class="btn btn-info" href="list_laporan.php">Lihat laporan</a>
                    <a class="btn btn-info" href="list_laporan.php">Ubah laporan</a>
                    <a class="btn btn-info" href="list_laporan.php">Cetak laporan</a>
                    <br>
                    <br>
                    <h5>Agenda kegiatan</h5>
                    <a class="btn btn-info" href="list_agenda.php">Lihat agenda</a>
                    <a class="btn btn-info" href="form_agenda.php">Buat agenda</a>
                    <a class="btn btn-info" href="list_agenda.php">Ubah agenda</a>
                </div>
            </div>
        </div>
    </main>


    <footer>
    </footer>



    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>

<?php
  include 'footer.php';
 ?>
