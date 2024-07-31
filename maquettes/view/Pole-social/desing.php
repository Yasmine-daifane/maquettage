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
                <h1>Design Services</h1>
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
                  <h3 class="card-title">Design Service Packs</h3>
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
                      <?php
                      // Example design packs
                      $designPacks = [
                        [
                          'name' => 'Basic Design Pack',
                          'description' => 'Entry-level design package for simple projects',
                          'features' => [
                            '1 logo design',
                            '2 revisions',
                            'Basic color palette'
                          ],
                          'price' => '$99'
                        ],
                        [
                          'name' => 'Standard Design Pack',
                          'description' => 'Comprehensive design package for most needs',
                          'features' => [
                            '3 logo designs',
                            '5 revisions',
                            'Advanced color palette'
                          ],
                          'price' => '$199'
                        ]
                      ];

                      foreach ($designPacks as $pack) {
                          echo "<tr>
                                  <td>{$pack['name']}</td>
                                  <td>{$pack['description']}</td>
                                  <td>
                                    <ul class='list-unstyled'>";
                          foreach ($pack['features'] as $feature) {
                              echo "<li><i class='fas fa-check text-success'></i> $feature</li>";
                          }
                          echo "              </ul>
                                  </td>
                                  <td>{$pack['price']}</td>
                                  <td><a href='#' class='btn btn-primary btn-sm'>Select Pack</a></td>
                                </tr>";
                      }
                      ?>
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