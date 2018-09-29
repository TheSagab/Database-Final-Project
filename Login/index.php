<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $connection = connection();
	  pg_query($connection, "SET search_path to BMNC;");
      $sql = "SELECT id FROM NARASUMBER WHERE username = '$myusername' and password = '$mypassword'";
      $login = pg_query($connection, $sql);
      $size = count($login);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($size == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
<style>
    .error {color: #fff;}
</style>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css"> </head>

<body style="background-image: url('abstract-sky-texture-purple-atmosphere-green-1402034-pxhere.com.jpg');background-size:cover;">
  <div class="py-4">
    <div class="container border filter-dark" style="background-image: url('C:/Users/Pradicta/Downloads/abstract-sky-texture-purple-atmosphere-green-1402034-pxhere.com.jpg');">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center text-secondary display-2">BIRU MERAH NEWS CORPORATION</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center">CARI INFO SEPUTAR UNIVERSITAS?
            <br>DISINI TEMPATNYA :)
            <br> </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="p-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12 border border-primary" style="background-image: url(&quot;abstract-sky-texture-purple-atmosphere-green-1402034-pxhere.com.jpg&quot;);background-size:cover;">
          <h2 class="text-light">SILAHKAN LOGIN</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 border border-primary" style="background-image: url('abstract-sky-texture-purple-atmosphere-green-1402034-pxhere.com.jpg');background-size:cover;">
          <form class="">
            <div class="form-group border border-primary bg-secondary text-white">
              <label class="p-1">USERNAME</label>
              <input type="text" name = 'username' class="form-control bg-info" placeholder="Username">
              <label class="p-1">PASSWORD</label>
              <input type="password" name = 'password' class="form-control bg-info" placeholder="Password"> </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <span class="error"> <?php echo ("Your Login Name or Password is invalid");?></span>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3 class="">Kelompok 2 / D</h3>
        </div>
        <div class="col-md-4  "></div>
        <div class="col-md-4  ">
          <h3 class="">Tugas Akhir Basdat</h3>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
