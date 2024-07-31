<!DOCTYPE html>
<html lang="fr">

<!-- Inclure l'en-tête -->
<?php include_once "../layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

  <div class="wrapper">
    <!-- Navigation -->
    <?php include_once "../layouts/nav.php" ?>
    <!-- Barre latérale -->
    <?php include_once "../layouts/aside.php" ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Branding Services</h1>
              </div>
              <div class="col-sm-6">
                <div class="float-sm-right">
                  <!-- Add navigation buttons if needed -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Branding Service Packs</h3>
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="search" class="form-control float-right" placeholder="Search">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Pack Name</th>
                        <th>Description</th>
                        <th>Features</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Basic Branding Pack</td>
                        <td>Entry-level branding package for startups</td>
                        <td>
                          <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success"></i> Logo design</li>
                            <li><i class="fas fa-check text-success"></i> Basic brand guidelines</li>
                          </ul>
                        </td>
                        <td>$99</td>
                        <td><a href="#" class="btn btn-primary btn-sm">Select Pack</a></td>
                      </tr>
                      <tr>
                        <td>Standard Branding Pack</td>
                        <td>Comprehensive branding package for established businesses</td>
                        <td>
                          <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success"></i> Logo design</li>
                            <li><i class="fas fa-check text-success"></i> Advanced brand guidelines</li>
                          </ul>
                        </td>
                        <td>$199</td>
                        <td><a href="#" class="btn btn-primary btn-sm">Select Pack</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Inclure le pied de page -->
    <?php include_once "../layouts/footer.php" ?>

  </div>

  <!-- Inclure le script -->
  <?php include_once "../layouts/script-link.php" ?>
</body>

</html>