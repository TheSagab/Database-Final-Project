<!doctype html>
<html lang="en">
  <head>
    <title>Berita</title>
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
	  $query = "SELECT * FROM BMNC.Berita";
	  $berita = pg_query($connection, $query);
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
		
      <h1 class="mt-5">Daftar Artikel</h1>
      	<div class="row">
			<?php
				$size = count($berita);
				if ($size != 0) {
					while ($row = pg_fetch_assoc($berita)) {
						echo('<div class="col-sm-4">');
						echo('<div class="card">');
						echo('<img class="card-img-top" src="https://vignette.wikia.nocookie.net/undertale-rho/images/5/5f/Placeholder.jpg/revision/latest/scale-to-width-down/480?cb=20180213155916" alt="Card image cap">');
						echo('<div class="card-body">');
						echo('<h4 class="card-title">' . $row["judul"] . '</h4>');
						echo('<p class="card-text">Topik: ' . $row["topik"] . '</p>');
						echo('<p class="card-text">Created at : ' . $row["created_at"] . '</p>');
						echo('<p class="card-text">Created at : ' . $row["created_at"] . '</p>');
						echo('<a href="#" class="btn btn-primary">Lihat artikel</a>');
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