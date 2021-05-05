  <?php
  if (!session_id()) {
    session_start();
  }
  include_once ('db.php');
  if (empty($_SESSION['user'])) {
    header("Location: index.php");
  }
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BookMyEvent</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link href="css/style.css" rel="stylesheet">

</head>

  <body>
    <?php 

    include 'header.php';
    
    include 'carousel.php'; 
    
    include 'movieList.php';
    
    ?>
    <!-- Bootstrap core JavaScript -->
    <script src="js/main.js"></script>
    <?php include 'footer.php'; ?>
  </body>
  </html>