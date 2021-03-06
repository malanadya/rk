<?php
  include 'header.php';
  include 'navbar.php';
?>

<main class="pt-6 text-center">
  <div class="container">
    <div class="container">
      <div class="row">
          <div class="col text-center">
              <h1>Daftar Agenda RT</h1>
          </div>
      </div>

      <div class="row" style="text-align: -webkit-center">
        <table class="display dataTable" style="width:70%; text-align: center">
          <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama agenda</th>
                    <th>Waktu pelaksanaan</th>
                    <th>Waktu berakhir</th>
                    <th style="text-align: center;">Ubah</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Lomba badminton</td>
                    <td>5 Mei 2017, 13.00</td>
                    <td>5 Mei 2017, 15.00</td>
                    <td><a href="detail_agenda.php" class="btn btn-default">Lihat detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Senam pagi</td>
                    <td>5 Mei 2017, 6.00</td>
                    <td>5 Mei 2017, 9.00</td>
                    <td><a href="" class="btn btn-default">Lihat detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Bersih desa</td>
                    <td>10 Mei 2017, 6.00</td>
                    <td>10 Mei 2017, 8.00</td>
                    <td><a href="" class="btn btn-default">Lihat detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Futsal antar RT</td>
                    <td>25 Mei 2017, 16.00</td>
                    <td>25 Mei 2017, 18.00</td>
                    <td><a href="" class="btn btn-default">Lihat detail</a>
                    </td>
                  </tr>
                </tbody>
        </table>
      </div>



      </div>
</div>

</main>
</body>

<?php
  include 'footer.php';
 ?>
