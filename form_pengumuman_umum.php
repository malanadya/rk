<?php
  include 'header.php';
  include 'navbar.php';
?>

<main class="pt-6 text-center">
  <div class="container">
    <div class="container">
      <div class="row">
          <div class="col text-center">
              <h1>Daftar pengumuman</h1>
          </div>
      </div>

      <div class="row" style="text-align: -webkit-center">
        <table class="display dataTable" style="width:70%; text-align: center">
          <thead>
                  <tr>
                    <th>No</th>
                    <th>Perihal</th>
                    <th>Waktu posting</th>
                    <th style="text-align: center;">Lihat Detail</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Hackathon</td>
                    <td>1 Mei 2017, 13.20</td>
                    <td><a href="detail_prestasi.php" class="btn btn-default">Lihat detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Indie Game</td>
                    <td>2 Mei 2017, 13.00</td>
                    <td><a href="" class="btn btn-default">Lihat detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>TCode</td>
                    <td>2 Mei 2017, 13.27</td>
                    <td><a href="" class="btn btn-default">Lihat detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Capture Flag</td>
                    <td>4 Mei 2017, 13.00</td>
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
