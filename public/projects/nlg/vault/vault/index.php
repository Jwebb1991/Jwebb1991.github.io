<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="../private/stylesheets/home.css">


    <style>
    .container{
      background: black;
    }
    img:hover, a:hover, href:hover{
      text-decoration: none;
      transform: scale(1.1);
    }
    .dropdown-item:hover{
      background: none;
    }
    #jumbo-text{
      opacity: .6;
    }
    #content1-heading, #content1-text, h1{
      text-decoration: none;
      text-shadow:
      1px 1px gray,
      -1px 1px gray,
      -1px -1px gray,
      1px -1px gray;

    }

    </style>

    <?php include '../templates/initialize.php';?>

    <title>The Vault</title>
  </head>
  <body>
    <nav class="d-md-none">
        <?php include '../templates/mobileNav.php';?>
    </nav>
    <nav class="d-none d-lg-block">
        <?php include '../templates/navbar.php';?>
    </nav>


    <div class="main">
      <?php include '../templates/jumbo1.php';?>
    </div>


    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-12">
          <h1 class="display-4 text-warning" style="font-size: 2.5rem;">Battle Royale!
            <p class="lead text-white text-center m-auto mb-0 pb-0">To play or not to play ... the decision has never been so easy!</p>

          <?php include '../templates/content1.php';?>
        </div>
    </div>

    <h1 class="display-4 text-warning mb-1 pb-0" style="font-size: 2rem;"><i class="fas fa-skull fa-1x mr-2"></i>Tis the season ...</h1>
    <p class="lead text-warning mb-0 pb-0 text-center m-auto">Halloween content has arrived and dressing up has never been so fun!</p>


    <footer>
      <?php include '../templates/footer.php';?>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
