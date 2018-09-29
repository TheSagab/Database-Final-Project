<!doctype html>
<html lang="en">
  <head>
    <title>Polling</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="../css/footer.css" rel="stylesheet">
  </head>
  <body>
  	<?php
	  require "connection.php";
	  $connection = connection();
	  pg_query($connection, "SET search_path to BMNC;");

	  $query = "SELECT id, polling_start, polling_end, total_responden, 
	  id_polling, url_berita
	  FROM POLLING P, POLLING_BERITA PB
	  WHERE id_polling = id";
	  $pollingBerita = pg_query($connection, $query);

	  $query = "SELECT id, polling_start, polling_end, total_responden, 
	  id_polling, url, deskripsi
	  FROM POLLING P, POLLING_BIASA PB
	  WHERE id_polling = id";
	  $pollingBiasa = pg_query($connection, $query);

	  pg_close($connection);
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
    

    <h1 class="mt-5">Daftar Polling</h1>
      <div class="row">
        <?php 
			$size = count($pollingBerita);
			if ($size != 0) {
				while ($row = pg_fetch_assoc($pollingBerita)) {
					echo('<div class="col-sm-6">');
					echo('<div class="card">');
					echo('<div class="card-body">');
					echo('<h4 class="card-title">Polling Berita ' . $row["id"] .'</h4>');
					echo('<p class="card-text">Responden : ' . $row["total_responden"] . '</p>');
					echo('<p class="card-text">Started at : ' . $row["polling_start"] . '</p>');
					echo('<p class="card-text">Ended at : ' . $row["polling_end"] . '</p>');
					echo('<a class="card-text" href="' . $row["url_berita"] . '" role="button">Link</a>');
					echo('</div>');
					echo('</div>');
					echo('</div>');
				}
			}

			$size = count($pollingBiasa);
			if ($size != 0) {
				while ($row = pg_fetch_assoc($pollingBiasa)) {
					echo('<div class="col-sm-6">');
					echo('<div class="card">');
					echo('<div class="card-body">');
					echo('<h4 class="card-title">Polling Biasa ' . $row["id"] .'</h4>');
					echo('<p class="card-text">Responden : ' . $row["total_responden"] . '</p>');
					echo('<p class="card-text">Started at : ' . $row["polling_start"] . '</p>');
					echo('<p class="card-text">Ended at : ' . $row["polling_end"] . '</p>');
					echo('<p class="card-text">Deskripsi : ' . $row["deskripsi"] . '</p>');
					echo('<a class="card-text" href="' . $row["url"] . '" role="button">Link</a>');
					echo('</div>');
					echo('</div>');
					echo('</div>');
				}
			}
        ?>
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