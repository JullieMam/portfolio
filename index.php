<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  <title>Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/pushy.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" href="images/portfolio.ico"/>

</head>

<body>

<button class="menu-btn">&#9776;</button>

<!-- Pushy Menu -->
<nav class="pushy pushy-left">
  <div class="pushy-content">
    <ul>
      <li class="pushy-link"><a href="aboutpage.php">About</a></li>
      <li class="pushy-link"><a href="contact.php">Contact</a></li>
      <li class="pushy-link"><a href="projects.php">Projects</a></li>
    </ul>
  </div>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>

  <div class="jumbotron bg-danger">
    <div class="container">
      <h1 class="display-4">&nbspWelcome!</h1>
      <p class="lead"> Welcome to my portfolio where you can find information about me, my projects and my contact info.</p>
      <a href="nl/index.php" class="language btn btn-dark">NL</a>
    </div>
  </div>

  <!-- particles.js container -->
  <div id="particles-js"></div>

  <div class="container">
    <div class="row">
      <div class="col-md-4 mt-4">
        <div class="card bg-danger">
          <div class="card-body">
            <h4>About me!</h4>
            <p class="lead">Info about me</p>
            <p>My name is André Arguello and im a web developer who likes to develop websites. I'm from Spain. </br></br></br></p>
            <a href="aboutpage.php" class="btn btn-dark">About me</a>
          </div>
        </div>
      </div>      

      <div class="col-md-4 mt-4">
        <div class="card bg-danger">
          <div class="card-body">
            <h4>Contact</h4>
            <p class="lead">Contact</p>
            <p><b>Name:</b> André Arguello </br> <b>Phone Number:</b> 0629384239 </br> <b>Email:</b> andrearguello@fakemail.com</br> <b>Adress:</b> Deltaweg 205, 5709 AB Helmond</p>
            <a href="contact.php" class="btn btn-dark">Contact</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mt-4">
        <div class="card bg-danger">
          <div class="card-body">
            <h4>Projects</h4>
            <p class="lead">My projects</p>
            <p>Here are some of my projects: </br> Radiogaga </br> Gameworld </br> DC Heroes</p>
            <a href="projects.php" class="btn btn-dark">My projects</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

  <?php
    include("inc/script.php")
  ?>
  <?php
    include("inc/footer.php")
  ?>
  
</html>    