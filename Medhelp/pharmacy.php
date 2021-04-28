<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/index.css">
    <link rel="stylesheet" href="src/style.css">
    <title>Pharmacy details</title>
</head>
<body>
<?php 
$connection = mysqli_connect("localhost", "root", "", "iemhcktn");
//echo "CONNECTION ESTABLISHED! ready to go";
if (isset($_GET['id'])) {
$shopID = $_GET['id'];
$query = "SELECT * FROM pharmacy WHERE sid='$shopID' ";
$query_run = mysqli_query($connection, $query);
$row = mysqli_fetch_array($query_run);
$sdata[]=$row;
}
 ?>
    <header>
        <div class="login-bar" id="nav-desk">
            <div class="navbar-desktop">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Need Help?</a></li>
                </ul>
            </div>
            
            <div class="login">
                <a href="./admin/login.html">Admin login</a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav-mob">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Need help</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link bg-warning" href="./admin/login.html">Admin Login</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
    <main>
    <?php foreach ($sdata as $row){    ?> 
      <div class="pha-detail-flex">
        <img src="https://arnabiem.github.io/Medhelp/assets/ms.jpg" alt="pharmacy-image">
        <div class="pha-detail">
            <div class="rating">
                <div class="stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                     <span>(149)</span>
                </div>
            </div>
            <h2><?php echo $row['name']; ?></h2>
            <div class="cta">
                <a href="callto:<?php echo $row['phno']; ?>" class="call"><i class="fa fa-phone" aria-hidden="true"></i> Call now</a>
                <a href="#" class="directions"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Directions</a>
            </div>
            <p class="pha-address">
                <b>Address:</b> <?php echo $row['address']; ?>
            </p>
            <p>
              <b>Search for available medicines details: </b>
              <div class="search-bar">
                <input type="text" placeholder="Search for medicine.." style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                <a href="#" style="background-color: rgb(21, 169, 196); width: 35px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; display: flex; align-items: center; justify-content: center;"><i class="fa fa-search" style="color: white;" aria-hidden="true"></i></a>
              </div>
            </p>
            <!-- show the below paragraph only after the successful search of medicine to show details -->
           <p class="av-med-detail">
              <div class="medicine-result">
                <div class="med-name">Medicine name 1</div>
                <div class="med-price">&#8377;<span id="med-price">100</span>/-</div>
              </div>
            </p>
        </div>
    </div>
    <?php 
    } ?>
    <div class="comments">
      <form action="">
          <h4>Reviews</h4>
          <input type="text" placeholder="Your name" required>
          <input type="text" id="com-in" placeholder="Leave a review" required>
          <button type="submit">Commennt</button>
      </form>
      <div class="comment">
          <div class="com-name"></div>
          <div class="com">
              
          </div>
      </div>
    </div>
    </main>
    <footer>
        <div class="row">
            <div class="row-one">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="row-two">
                <h3>Social Links</h3>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                    <li><a href="#"><i class="fa fa-github" aria-hidden="true"></i> Github</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="src/index.js"></script>

</body>
</html>