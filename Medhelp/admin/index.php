<?php 
include("includes/header.php");
include("includes/topbar.php");
include("includes/sidebar.php");
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                <h3>40</h3>

                <p>Registered Hospitals</p>
                </div>
                <div class="icon">
                <i class="ion ion-bag"></i>
                </div>
                <a href="./hospitals.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                <h3>53</h3>

                <p>Registered Pharmacy</p>
                </div>
                <div class="icon">
                <i class="ion ion-stats-bars"></i>
                </div>
                <a href="./pharmacy.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
           </div>
           <!-- /.row -->
        </div>
    </section>
</div>

<script>
  const active = document.querySelector("#dashboard");
</script>

<?php
include("includes/footer.php");
?>
