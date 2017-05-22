<?php
	include 'header.php';
	include 'navbar.php';
 ?>

	<main class="pt-6 text-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Buat Agenda</h1>
                </div>
            </div>
            <hr>
            <form>
									<h3>
	                    Nama Agenda :
	                </h3>
	                <input type="text" name="name">
	                <br>
	                <br>
	                <br>
	                <h3>
	                    Deskripsi Agenda :
	                </h3>
	                <input type="textarea" name="desc" style="height: 12rem; overflow-y: scroll; width: 100%">
	                <br>
	                <br>
	                <br>
									<h3>
	                    Hari dan tanggal Agenda :
	                </h3>
										<input type="date" class="datepicker">
										<br>
										<br>
										<br>
									<h3>
		                  Waktu pelaksanaan Agenda :
		              </h3>
										<input type="time" class="datepicker">
										<br>
										<br>
										<br>
										<h3>
		                    Hari dan tanggal Agenda berakhir :
		                </h3>
											<input type="date" class="datepicker">
											<br>
											<br>
											<br>
										<h3>
			                  Waktu Agenda berakhir:
			              </h3>
											<input type="time" class="datepicker">
											<br>
											<br>
											<br>
                <a class="btn btn-default" href="">Submit</a>
            </form>

        </div>
    </main>

		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>
