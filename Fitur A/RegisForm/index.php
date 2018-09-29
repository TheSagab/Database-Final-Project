<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme2.css" type="text/css"> 
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
 require "connection.php";
 $connection = connection();
 pg_query($connection, "SET search_path to BMNC;");
 $query = "SELECT MAX(ID) 
 FROM NARASUMBER";
 $idInsert = pg_query($connection, $query);
 $query2 = "INSERT INTO BMNC.NARASUMBER(id, username, password, nama, email, tempat, tanggal, no_hp)VALUES
 ($idInsert, ".$_POST["username"].", ".$_POST["password"].", ".$_POST["name"].", ".$_POST["email"].", 
 ".$_POST["tempatlahir"].", ".$_POST["tanggallahir"].", ".$_POST["nomorhp"].");";
 $narasumber = pg_query($connection, $query2);
 pg_close($connection);
 
?>
  
<div class="bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs p-1">
            <li class="nav-item">
              <a href="#" class="navbar-brand">
                <img src="https://www.shareicon.net/data/48x48/2015/09/29/648191_news_512x512.png" width="30" height="30" class="d-inline-block align-top" alt=""> BMNC </a>
            </li>
            <li class="nav-item text-dark">
              <a href="#" class="nav-link">HOME</a>
            </li>
            <li class="nav-item text-dark">
              <a href="#" class="nav-link">LINK</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="p-2 border border-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-light">
          <h1 class="display-4 text-dark">Registration Form</h1>
        </div>
      </div>
    </div>
  </div>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $tempatlahirErr = $tanggallahirErr = $nomorhpErr = 
$statusErr = $usernameErr = $passwordErr = $npmnikErr ="" ;
$name = $email = $tempatlahir = $tanggalahir = $nomorhp = $status = $username = $password = $npmnik ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["npmnik"])) {
    $npmnikErr = "NPM / NIK is required";
  } else {
    $npmnik = test_input($_POST["npmnik"]);
    if (!preg_match("/^[0-9]*$/",$npmnik)) {
      $npmnikErr = "Only number allowed"; 
    }
  }

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["tempatlahir"])) {
    $tempatlahirErr = "Tempat Lahir is required";
  } else {
    $tempatlahir = test_input($_POST["tempatlahir"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $tempatlahirErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["tanggallahir"])) {
    $tanggallahirErr = "Tanggal Lahir is required";
  } else {
    $tanggalahir = test_input($_POST["tanggallahir"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["nomorhp"])) {
    $nomorhp = "";
  } else {
    $nomorhp = test_input($_POST["nomorhp"]);
    if (!preg_match("/^[0-9]*$/",$nomorhp)) {
      $nomorhpErr = "Only number allowed"; 
    }
  }

  if (empty($_POST["statuskemahasiswaan"])) {
    $statusErr = "Status Kemahasiswaan is required";
  } else {
    $status = test_input($_POST["statuskemahasiswaan"]);
  }

  if (empty($_POST["iduniversitas"])) {
    $idErr = "ID Universitas is required";
  } else {
    $id = test_input($_POST["iduniversitas"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="p-1 border-dark border bg-info">
<div class="container">
<p><span class="error">* Required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="row">
  <div class="col-md-6"> 
  <h4><label for='formRole[]'>Select your role:</label></h4></div>
  <div class="col-md-6">
    <select multiple="multiple" name="formRole[]">
      <option value="Mahasiswa">Mahasiswa</option>
      <option value="Dosen">Dosen</option>
      <option value="Staff">Staff</option>
    </select></div>
</div>
<div class="row">
  <div class="col-md-6">
    <h4>
  Username: </h4></div>
  <div class="col-md-6"> 
  <input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $usernameErr;?></span>
  </div>
</div> 
<div class="row">
  <div class="col-md-6">
  <h4>Password: </h4></div>
  <div class="col-md-6">
    <input type="password" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  </div>
</div> 
<div class="row">
  <div class="col-md-6">
  <h4>NPM / NIK: </h4></div>
  <div class="col-md-6">
    <input type="text" name="npmnik" value="<?php echo $npmnik;?>">
  <span class="error">* <?php echo $npmnikErr;?></span>
  </div>
</div> 
<div class="row">
  <div class="col-md-6">
  <h4>Nama: </h4></div>
  <div class="col-md-6">
    <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  </div>
</div> 
<div class="row">
  <div class="col-md-6">
  <h4>Tempat Lahir: </h4></div>
  <div class="col-md-6">
    <input type="text" name="tempatlahir" value="<?php echo $tempatlahir;?>">
  <span class="error">* <?php echo $tempatlahirErr;?></span>
  </div>
</div> 
<div class="row">
  <div class="col-md-6">
  <h4>Tanggal Lahir: </h4></div>
  <div class="col-md-6">
    <input type="date" name="tanggallahir" value="<?php echo $tanggallahir;?>">
  <span class="error">* <?php echo $tanggallahirErr;?></span>
  </div>
</div> 
<div class="row">
  <div class="col-md-6">
  <h4>Email: </h4></div>
  <div class="col-md-6">
    <input type="email" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  </div>
</div> 
<div class="row">
  <div class="col-md-6">
  <h4>NomorHP: </h4></div>
  <div class="col-md-6">
    <input type="text" name="nomorhp" value="<?php echo $nomorhp;?>">
  <span class="error"> <?php echo $nomorhpErr;?></span>
  </div>
</div> 
<div class="row">
  <div class="col-md-6">
  <h4>Status Kemahasiswaan: </h4></div>
  <div class="col-md-6">
    <input type="text" name="statuskemahasiswaan" value="<?php echo $status;?>">
  <span class="error">* <?php echo $statusErr;?></span>
  </div>
</div>
<div class="row">
  <div class="col-md-6"> 
  <h4><label for='formID[]'>Select your ID:</label></h4></div>
  <div class="col-md-6">
    <select multiple="multiple" name="formID[]">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
      <option value="32">32</option>
      <option value="33">33</option>
      <option value="34">34</option>
      <option value="35">35</option>
      <option value="36">36</option>
      <option value="37">37</option>
      <option value="38">38</option>
      <option value="39">39</option>
      <option value="40">40</option>
      <option value="41">41</option>
      <option value="42">42</option>
      <option value="43">43</option>
      <option value="44">44</option>
      <option value="45">45</option>
      <option value="46">46</option>
      <option value="47">47</option>
      <option value="48">48</option>
      <option value="49">49</option>
      <option value="50">50</option>

    </select></div>
</div>
  <input type="submit" name="submit" value="Submit">
</form>

<br></br>
<?php
echo "<h2>Your Input:</h2>";
if(isset($_POST['submit'])) 
{
  $aRole = $_POST['formRole'];
  
  if(!isset($aRole)) 
  {
    echo("You didn't select any role!");
  } 
  else 
  {
    $nRole = count($aRole);
    
    echo("Role: ");
    for($i=0; $i < $nRole; $i++)
    {
      echo($aRole[$i] . " ");
    }
    echo("\n");
  }
}
echo "<br>";
echo ("Username: $username");
echo "<br>";
echo ("Password: $password");
echo "<br>";
echo ("Name: $name");
echo "<br>";
echo ("Tempat Lahir:$tempatlahir");
echo "<br>";
echo ("Tanggal Lahir:$tanggalahir");
echo "<br>";
echo ("Email: $email");
echo "<br>";
echo ("Nomor HP:$nomorhp");
echo "<br>";
echo ("Status: $status");
echo "<br>";
if(isset($_POST['submit'])) 
{
  $anID = $_POST['formID'];
  
  if(!isset($anID)) 
  {
    echo("You didn't select any ID!");
  } 
  else 
  {
    $nID = count($anID);
    
    echo("ID: ");
    for($i=0; $i < $nID; $i++)
    {
      echo($anID[$i] . " ");
    }
    echo("\n");
  }
}
?>

</div>
<br></br>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <footer class="footer">
    <div class="container">
      <span class="text-muted">© Kelompok 2 Basis Data D</span>
    </div>
  </footer>
</body>
</html>