<?php
	include 'header.php';
	include 'navbar.php';
 ?>

	<main class="pt-6 text-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Unggah surat</h1>
                </div>
            </div>
            <hr>
            <form>
								<h3>
										Nomor surat :
								</h3>
								<input type="text" name="nomer">
								<br>
								<br>
								<br>
									<h3>
	                    Perihal :
	                </h3>
	                <input type="text" name="perihal">
	                <br>
	                <br>
	                <br>
	                <h3>
	                    Deskripsi surat :
	                </h3>
	                <input type="text" name="desc">
	                <br>
	                <br>
	                <br>
									<h3>
	                    Berkas Surat :
	                </h3>
									<br>
										<input type="file" multiple>
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
