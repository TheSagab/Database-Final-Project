<!doctype html>
<html lang="en">
  <head>
    <title>Buat Berita</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<style>
.myForm {
font-family: arial;
font-size: 1.1em;
width: 30em;
padding: 1em;
border: 1px solid #ccc;
}

.myForm * {
box-sizing: border-box;
}

.myForm fieldset {
border: none;
padding: 0;
}

.myForm legend,
.myForm label {
padding: 0;
font-weight: normal;
}

.myForm label.choice {
font-size: 0.9em;
font-weight: normal;
}

.myForm label {
text-align: left;
display: block;
}

.myForm input[type="text"],
.myForm input[type="url"],
.myForm input[type="text"],
.myForm input[type="number"],
.myForm input[type="text"],  
.myForm select,
.myForm textarea {
float: right;
width: 60%;
border: 1px solid #ccc;
font-family: arial;
font-size: 0.9em;
padding: 0.3em;
}

.myForm textarea {
height: 100px;
}

.myForm button {
padding: 1em;
border-radius: 0.5em;
background: #eee;
border: none;
font-weight: bold;
margin-left: 40%;
margin-top: 1.8em;
}

.myForm button:hover {
background: #ccc;
cursor: pointer;
}
</style>
  </head>
  <body>
  <?php
 require "connection.php";
 $connection = connection();
 $query = "INSERT INTO BMNC.BERITA(url, judul, topik, jumlah_kata)VALUES(" .$_POST["url"].", ".$_POST["judul"].", ".$_POST["topik"].", ".$_POST["jumlah kata"].");";
 $berita = pg_query($connection, $query);
 pg_close($connection);
 
?>
<header>
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #56bbff">
		  <a class="navbar-brand" href="../Profil/">
		    <img src="https://www.shareicon.net/data/48x48/2015/09/29/648191_news_512x512.png" width="30" height="30" class="d-inline-block align-top" alt="">
		    BMNC
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Profil<span class="sr-only">(current)</span></a>
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
	<div class="container">
	<h2>Buat Berita</h2>
    <form action="index.php" class="myForm" method="post" enctype="application/x-www-form-urlencoded">

<p>
<label>Judul
<input type="text" name="judul">
</label> 
</p>

<p>
<label>Url 
<input type="url" name="url">
</label>
</p>

<p>
<label>Topik
<input type="text" name="topik">
</label>
</p>

<p>
<label>Jumlah Kata
<input type="number" name="jumlah kata">
</label>
</p>
  
<p>
<label>Tag
<input type="text" name="tag">
</label>
</p>

<p><button>SUBMIT</button></p>
</form>
</div>
	<footer class="footer">
		<div class="container">
			<span class="text-muted">&copy;Kelompok 2 Basis Data D</span>
		</div>
	</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>