<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="styleshhet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active"  aria-current="page" href="index.php">Home  <span class="sr-only">(current)</sapan></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">our Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="About.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
  
  <!-- The slideshow -->
      <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/cc1.jpg" alt="Los Angeles" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="images/cc2.jpg" alt="Chicago" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="images/cc3.jpg" alt="New York" width="1100" height="500">
          </div>
      </div>
  
  <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
</div>


<section class="my-5">
    <div>
        <h2 class="text-center">About us</h2>
    </div>
  <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <img class="card-img-top" src="images/cc4.jpg" alt="Card image">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2> i am sonal</h2>
                <p>Adds a right (next) button to the carousel, which allows the user to go forward between the slides</p>
                <a href="about.php"  class="btn btn-success">check more </a>
            </div>
        </div>
  </div>
</section>


<section class="my-5">
    <div>
        <h2 class="text-center">our services</h2>
    </div>
<div class="container-fluid">
  <div class="row">
          <div class="col-lg-4 col-md-4 col-4">
              <div class= "card">
                  <img class="card-img-top" src="images/cc5.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">beautiful nature</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-4 col-4">
        <div class= "card">
            <img class="card-img-top" src="images/cc5.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">beautiful nature</h4>
            <p class="card-text">Some example text.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <div class= "card">
            <img class="card-img-top" src="images/cc5.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">beautiful nature</h4>
            <p class="card-text">Some example text.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
    </div>
  </div>
</div>
</section>



<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">our Gallery</h2>
    </div>
</section>


<div class="w-50 m-auto">

    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>username</label>
          <input type="text" name="user" class="form-control">
      </div>
      <div class="form-group">
        <label>Email id</label>
        <input type="text" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>mobile</label>
          <input type="text" name="mobile" class="form-control">
      </div>
        <div class="form-group">
          <label>comment</label>
            <textarea class="form-control" name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>    
</div>

<div>

<footer style="margin-top: 30px;">
    <p class="p-3 bg-dark text-white text-center mg "> @sonal tomar</p>
</footer>
</div>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



</body>
    </html>