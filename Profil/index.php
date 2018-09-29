<?php 
//Code ini dipakai andaikan fitur session berjalan
/*session_start()*/
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Profil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="../css/footer.css" rel="stylesheet">
  </head>
  <body>
  	<?php  //Code ini dipakai andaikan fitur session berjalan
	  	/*require "connection.php";
		$connection = connection();
		pg_query($connection, "SET search_path to BMNC;");
		$query = "SELECT * FROM NARASUMBER;"
		$narasumber = pg_query($connection, $query);
		$query = "SELECT id, id_narasumber, nik_dosen, jurusan FROM NARASUMBER, DOSEN WHERE id = id_narasumber AND id =" . $_SESSION['id'] . ";"
		$dosen = pg_query($connection, $query);
		$query = "SELECT id, id_narasumber, nik_staf, posisi FROM NARASUMBER, STAF WHERE id = id_narasumber AND id =" . $_SESSION['id'] . ";"
		$staf = pg_query($connection, $query);
		$query = "SELECT id, id_narasumber, npm, status FROM NARASUMBER, MAHASISWA WHERE id = id_narasumber AND id =" . $_SESSION['id'] . ";"
		$mahasiswa = pg_query($connection, $query);
		pg_close($connection);*/
  	?>
  	<header>
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56bbff">
		  <a class="navbar-brand" href="#">
		    <img src="https://www.shareicon.net/data/48x48/2015/09/29/648191_news_512x512.png" width="30" height="30" class="d-inline-block align-top" alt="">
		    BMNC
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="../Profil/">Profil<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Berita
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <a class="dropdown-item" href="../Berita/">Lihat Daftar Berita</a>
		          <a class="dropdown-item" href="#">Tambah Berita</a>
		        </div>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Polling
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="../Polling/">Lihat Polling</a>
		          <a class="dropdown-item" href="#">Buat Polling Berita</a>
		          <a class="dropdown-item" href="#">Buat Polling Biasa</a>
		        </div>
		      </li>
		    </ul>
		    <span class="navbar-text">
		      <a class="btn btn-danger btn-sm" href="#" role="button">Logout</a>
		    </span>
		  </div>
		</nav>
  	</header>

	<main role="main" class="container">
		

      <h1 class="mt-5">Profile</h1>
      <div class="row">
      <div class="col-sm-2">
      	<img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" style="width:150px;height:150px;">
  	  </div>
  	  <div class="col-sm-10">
      	<h4>
		  Anindito Bhagawanta
		  <small class="text-muted">Mahasiswa</small>
		</h4>
		<div class="row">
			<div class="col-sm-3">Username:</div>
			<div class="col-sm-9">TheSagab</div>
			<div class="col-sm-3">NPM:</div>
			<div class="col-sm-9">1606879230</div>
			<div class="col-sm-3">Tempat Lahir:</div>
			<div class="col-sm-9">Jakarta</div>
			<div class="col-sm-3">Email:</div>
			<div class="col-sm-9">anindito.87bagas@gmail.com</div>
			<div class="col-sm-3">No HP:</div>
			<div class="col-sm-9">081286106255</div>
			<div class="col-sm-3">Status Kehamasiswaan:</div>
			<div class="col-sm-9">Aktif</div>
		</div>
		<?php 
		/* Code ini dipakai andaikan fitur session berjalan
		 * Isi dari kode ini adalah memasukkan data ke dalam HTML dari username sampai No Hp.
		 * Jika mahasiswa maka menambahkan NPM dan status kemahasiswaan
		 * Jika staf maka menambahkan NIK dan posisi
		 * Jika dosen maka menambahkan NIK dan jurusan
		 */
		?>
		<br>
      	<a class="btn btn-primary" href="../Berita/" role="button">Lihat Daftar Berita</a>
	
  	</div>

  </div>
</main>

	<footer class="footer">
      <div class="container">
        <span class="text-muted">&copy; Kelompok 2 Basis Data D</span>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>