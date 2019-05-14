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
            <li><a href="index.php">Home</a></li>
            <li><a href="post.php">Data</a></li>
          </ul>
          
        </div>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
    <h1 class="page-header">Edit</h1>
            <div>
             
              <form action="prosesedit.php" method="POST" >
                <?php

                    include("koneksi.php");
                    $id_post=$_GET['id_post'];
                    $sqlEdit = "SELECT * FROM post WHERE id_post=$id_post";
                    $result = $conn->query($sqlEdit);

                    if($result->num_rows > 0){
                    while($e =$result->fetch_assoc()){

                ?>
              <table>
              <tr>
                <td> Judul   : </td>
                <td>
                <input type="hidden" name="id_post" value="<?php echo $e['id_post']; ?>">
                <input type="text" name="judul" value="<?php echo $e['judul']; ?>">
              </td>
              </tr>
              
              <tr>
                <td> Isi  : </td>
                <td><br><br><textarea name="isi" rows="7" cols="100"><?php echo $e['isi'];?></textarea></td>
              </tr>
              <tr>
              <td><br><input type="submit" value="Update"></td>
            

                <td><br><input type="submit" value="Back" ><a href="post.php"></td>
                
              </tr>
            </table>
            <?php
                }
            }
          ?>
          </form>
            </div>
          </div>   
      </div>
      </div>

   <!-- /container -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
