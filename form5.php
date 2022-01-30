<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ngo";
$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['F_Name'])) {
  $F_Name = $_POST['F_Name'];
  $L_Name = $_POST['L_Name'];
  $Email = $_POST['Email'];

  $insert_subscribe ="INSERT INTO `subscribe` (`F_Name`, `L_Name`, `Email`) VALUES('$F_Name', '$L_Name', '$Email');";
  if ($conn->query($insert_subscribe) == true) {
    //  echo "Success";
  } else {
     echo "ERROR: $insert_subscribe <br> $conn->error";
  }

  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forms</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/shelter.png">
    <link rel="stylesheet" href="ngo.css">
  </head>
  <body>
    <header>
      <a href="NGO.php" class="logo" id=nav>NGO</a>
      <ul >
        <li>
          <a href="NGO.php" class="home" id=nav>Home</a></li>
          <li><a href="NGO.php" class="home" id=nav>About Us</a>  </li>
          <li><a href="NGO.php" class="home" id=nav>Contact Us</a>  </li>
      </ul>
    </header>
<div class="container6">
  <div class="container7">
  <ul class="nav nav-tabs" id=tab>
    <li class="nav-item">
      <a class="nav-link"href="form.php">Report Lost animal</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="form1.php">Report Abuse</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="form2.php">Adopt a pet</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="form3.php">Donate</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="form4.php">Volunteer</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="form5.php">Subscribe</a>
    </li></ul>

    <article class="name">
    Subscribe
  </article> <br>

    <form class="row g-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="col-md-6">
   <label for="name1" class="form-label">First Name</label>
      <input type="text" class="form-control" id="name1" name="F_Name">
    </div>
    <div class="col-md-6">
      <label for="name2" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="name2" name="L_Name">
    </div>
    <div class="col-md-6">
   <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="Email">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck" required>
        <label class="form-check-label" for="gridCheck">
          I understood and read the terms and conditions.
        </label>
      </div>
    </div> <br> <br>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

  </div>
</div>



    <script src="ngo.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
