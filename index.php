<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>WEBSITE INFORMATION ABOUT NOVEL</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="" rel="stylesheet">
  </head>

  <body>
    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Operations</a>
        </div>
        <form id="form-container" class="form-container">
        <div class="navbar-collapse collapse">
           <div class="nav navbar-nav navbar-right">
            <label for="input">Wikipedia : </label>
            <input type="text" id="input" value="">
            <button id="submit-btn">submit</button>
            <div class="wikipedia-container">
                  <h3 id="wikipedia-header">Relevant Wikipedia Links</h3>
                  <ul id="wikipedia-links">Type in an address above and find relevant Wikipedia articles here!</ul>
            </div>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Sign Up</a></li>
          </ul>
          <br><br><br>

          <h1>INFORMATION ABOUT NOVELS</h1>
          <br>


          <?php
$servername = "sql303.epizy.com";
$username = "epiz_23899029";
$password = "RgAdCfZV5qSN";
$dbname = "epiz_23899029_crudd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM post";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " ".$row["waktu"]."<br>"."<br>";
        echo " - judul: " . $row["judul"]."<br>". "  isi: " . substr($row["isi"], 0.20); }
} else {
    echo "";
}
$conn->close();
?>
          <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
