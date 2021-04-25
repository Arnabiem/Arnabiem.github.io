<?php 
include("includes/tableNnormal/header.php");
include("includes/topbar.php");
include("includes/sidebar.php");
?>

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pharmacy name</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pharmacy Details</li>
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
                        <h3 class="card-title">Add Medicine</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Medicine Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    </div>
                    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Available Medicines</h3>
              </div>
              <!-- /.card-header -->
              <form action="">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Medicine Name</th>
                    <th>Price</th>
                    <th class="availability-box">Availability</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>1</td>
                    <td class="availability-box"><input type="checkbox" checked></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>1</td>
                    <td class="availability-box"><input type="checkbox" checked></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>1</td>
                    <td class="availability-box"><input type="checkbox" checked></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>1</td>
                    <td class="availability-box"><input type="checkbox" checked></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>1</td>
                    <td class="availability-box"><input type="checkbox" checked></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>1</td>
                    <td class="availability-box"><input type="checkbox" checked></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>1</td>
                    <td class="availability-box"><input type="checkbox" checked></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>1</td>
                    <td class="availability-box"><input type="checkbox" checked></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>1</td>
                    <td class="availability-box"><input type="checkbox" checked></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>1</td>
                    <td class="availability-box"><input type="checkbox" checked></td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Medicine Name</th>
                    <th>Price</th>
                    <th class="availability-box">Availability</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
                </div>
            </div>
        </div>
</div>

<?php
include("includes/tableNnormal/footer.php");
?>