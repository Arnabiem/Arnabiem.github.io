<?php 
include("includes/header.php");
include("includes/topbar.php");
include("includes/sidebar.php");
?>

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Hospital Registration</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Hospital</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Hospitals</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hospital Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Pincode</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
  const activeParent = document.getElementById("Add");
  const active = document.getElementById("addHospitals");
</script>

<?php
include("includes/footer.php");
?>