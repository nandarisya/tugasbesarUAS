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
    <link href="style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="home.php">Home</a></li>
            <li class="active"><a href="post.php">Data</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="create.php">Create New Data</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
          


    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>INFORMATION ABOUT NOVEL</h1>
        <br><br>
        <?php
             
              include("koneksi.php");
              $conn = mysqli_connect("sql303.epizy.com","epiz_23899029","RgAdCfZV5qSN","epiz_23899029_crudd");

              $sql = "SELECT * FROM post";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      echo " ".$row["waktu"]."<br>"."<br>";
                      echo "<strong>Judul : ". substr($row["judul"], 0,100)."</strong><br>"."<br>";
                      echo "-Content : " . substr($row["isi"], 0,100)."<br>";
                      echo " <a href='edit.php?id_post=".$row["id_post"]."'>Edit</a> ||";
                      echo " <a onclick=\"return confirm('Are you sure deleting this post?');\" href='hapus.php?id_post=".$row["id_post"]."'>Delete</a><br />";
                      echo "<hr/>";
                  }
              } else {
                  echo "0 results";
              }
            
              $conn->close();
              ?>
    </div> 
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
