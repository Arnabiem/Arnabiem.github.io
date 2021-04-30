<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/index.css">
    <title>Home</title>
</head>
<body>
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
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
        <div class="main-header">
            <div class="overlay-black"></div>
            <div id="content">
                <h1 class="title">Medhelp</h1>
                <form action="" method="POST">
                    <div class="search-bar">
                        <div class="location">
                            <select name="options" id="med-hos-op">
                                <option value="hos">Hospital</option>
                                <option value="1">Pharmacy</option>
                                <option value="2">Medicine</option>
                            </select>
                        </div>
                        <input type="text" placeholder="Search here..">
                        <button name="search-btn" ><i class="fa fa-search" aria-hidden="true"></i></button>

                        <div class="pincode"> Your Pincode :
                <input type="text" id="pincode" name="searchbox" placeholder="700001" maxlength="6" required>
                <button id="pin-search" name="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>

                    </div>
                </form>
            </div>
        </div>
    </header>
    <main>
    <form action="" method="POST">
    
            </form>
        <?php
        $connection = mysqli_connect("localhost", "root", "", "iemhcktn");
        //echo "CONNECTION ESTABLISHED! ready to go";
        if (isset($_POST['search-btn'])) 
        {
            $pin = $_POST['searchbox'];
            $cat =$_POST['options'];
            if($cat==1)
            {
                $query = "SELECT * FROM pharmacy WHERE pincode='$pin' ";
                $query_run = mysqli_query($connection, $query);
            
      
        ?>
            <section class="nearby-med-store">
                <h2>Nearby Medical Stores</h2>
              
                <div class="d-flex justify-content-around flex-wrap">
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_array($query_run)) { ?>
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="assets/ms.jpg" alt="Card image cap">
                                    <div class="card-body">
                                    <a href="pharmacy.php?id=<?php echo $row['sid']; ?>">
                                        <h5 class="card-title"><?php echo $row['name']; ?></h5></a>
                                        <p class="card-text">
                                            <?php echo $row['address']; ?>
                                        </p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            Open Hours: <?php echo $row['timing']; ?>
                                            <button type="button" class="btn btn-success">Open now</button>
                                        </li>
                                        <li class="list-group-item">Phone :<?php echo $row['phno']; ?></li>
                                    </ul>
                                </div>
                        <?php
                            }
                        } else {
                            echo "Sorry ! No nearby medical shop found ";
                        }
                    }
                        ?>
                </div>
               
          
            </section>
            <?php
        if($cat=='hos')
        {
            $query = "SELECT * FROM hospital WHERE pincode='$pin' ";
            $query_run = mysqli_query($connection, $query);
        
        ?>
            <section class="nearby-hospitals">
                <h2>Nearby Hospitals</h2>
                <a href="/">
                <div class="d-flex justify-content-around flex-wrap" id="rslt">
                <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_array($query_run)) { ?>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="assets/hospital.jpg" alt="Card image cap">
                            <div class="card-body">
                            <a href="hospital.php?id=<?php echo $row['hid']; ?>">
                                <h5 class="card-title"><?php echo $row['name']; ?></h5></a>
                                <p class="card-text">
                                <?php echo $row['address']; ?>
                                </p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                <?php echo $row['timing']; ?>
                                    <button type="button" class="btn btn-success">Open now</button>
                                </li>
                                <li class="list-group-item">Phone :<?php echo $row['phno']; ?></li>
                            </ul>
                        </div>
                        <?php
                            }
                        } else {
                            echo "Sorry ! No nearby hospital found ";
                        }
                    }
                        ?>
                </div>
                </a>
                <?php
        }
            ?>
            </section>
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