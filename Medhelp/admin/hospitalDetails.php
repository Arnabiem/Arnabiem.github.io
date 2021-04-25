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
            <h1 class="m-0">Hospitals Name</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Hospital Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Update controls</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>Beds available : </h4>
                            <input type="number" style="padding: 5px;">
                        </div>
                    </div>
                  <div class="row">
                    <div class="col-sm-6">
                        <h4>Bloods available : </h4>
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="AB+">
                          <label for="customCheckbox1" class="custom-control-label">AB+</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="AB-">
                          <label for="customCheckbox2" class="custom-control-label">AB-</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="A+">
                          <label for="customCheckbox3" class="custom-control-label">A+</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="A-">
                          <label for="customCheckbox4" class="custom-control-label">A-</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox5" value="B+">
                          <label for="customCheckbox5" class="custom-control-label">B+</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox6" value="B-">
                          <label for="customCheckbox6" class="custom-control-label">B-</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox7" value="O+">
                          <label for="customCheckbox7" class="custom-control-label">O+</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox8" value="O-">
                          <label for="customCheckbox8" class="custom-control-label">O-</label>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                    <button class="btn-info">Submit</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include("includes/footer.php");
?>