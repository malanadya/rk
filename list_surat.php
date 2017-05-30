<?php
  include 'header.php';
  include 'navbar.php';
?>

<main class="pt-6 text-center">
  <div class="container">
    <div class="container">
      <div class="row">
          <div class="col text-center">
              <h1>Daftar Surat masuk</h1>
          </div>
      </div>

      <div class="row" style="text-align: -webkit-center">
        <table class="display dataTable" style="width:70%; text-align: center">
          <thead>
                  <tr>
                    <th>No</th>
                    <th>No Surat</th>
                    <th>Nama pengirim</th>
                    <th>Perihal</th>
                    <th>Waktu posting</th>
                    <th style="text-align: center;">Ubah</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>12/03/2017</td>
                    <td>Ilyas B</td>
                    <td>Hackathon</td>
                    <td>1 Mei 2017, 13.20</td>
                    <td><a href="detail_surat.php" class="btn btn-default">Lihat detail</a>
                    <a href="" class="btn btn-default">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>13/03/2017</td>
                    <td>R.Ay. Noormala Nadya</td>
                    <td>Indie Game</td>
                    <td>2 Mei 2017, 13.00</td>
                    <td><a href="" class="btn btn-default">Lihat detail</a>
                    <a href="" class="btn btn-default">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>14/03/2017</td>
                    <td>A. Galang Anugerah</td>
                    <td>TCode</td>
                    <td>2 Mei 2017, 13.27</td>
                    <td><a href="" class="btn btn-default">Lihat detail</a>
                    <a href="" class="btn btn-default">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>15/03/2017</td>
                    <td>Kukuh Rilo</td>
                    <td>Capture Flag</td>
                    <td>4 Mei 2017, 13.00</td>
                    <td><a href="" class="btn btn-default">Lihat detail</a>
                    <a href="" class="btn btn-default">Hapus</a>
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
