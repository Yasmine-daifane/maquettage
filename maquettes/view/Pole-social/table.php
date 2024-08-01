<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- Include the header -->
  <?php include_once "../layouts/heade.php" ?>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  <script>
    tinymce.init({
      selector: '#detailsTextarea',
      menubar: false,
      plugins: 'lists link image preview',
      toolbar: 'undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
      height: 300
    });

    $(document).ready(function() {
      $('.btn-select-pack').on('click', function() {
        $('#detailsModal').modal('show');
      });
      
      $('#detailsForm').on('submit', function(e) {
        e.preventDefault();
        alert('Form submitted with details: ' + tinymce.get('detailsTextarea').getContent());
        $('#detailsModal').modal('hide');
      });
    });
  </script>
</head>

<body class="sidebar-mini" style="height: auto;">
  <div class="wrapper">
    <!-- Navigation -->
    <?php include_once "../layouts/nav.php" ?>
    <!-- Sidebar -->
    <?php include_once "../layouts/aside.php" ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Video Services</h1>
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
                  <h3 class="card-title">Video Service Packs</h3>
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
                        <th>Choose</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $service = isset($_GET['service']) ? $_GET['service'] : 'video';
                      switch ($service) {
                        case 'video':
                          ?>
                          <tr>
                            <td>Basic Video Pack</td>
                            <td>Entry-level video package for simple projects</td>
                            <td>
                              <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success"></i> 1 minute video</li>
                                <li><i class="fas fa-check text-success"></i> Basic editing</li>
                                <li><i class="fas fa-check text-success"></i> 1 revision</li>
                              </ul>
                            </td>
                            <td>$99</td>
                            <td><a href="#" class="btn btn-primary btn-sm btn-select-pack">Select Pack</a></td>
                          </tr>
                          <tr>
                            <td>Standard Video Pack</td>
                            <td>Comprehensive video package for most needs</td>
                            <td>
                              <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success"></i> 3 minute video</li>
                                <li><i class="fas fa-check text-success"></i> Advanced editing</li>
                                <li><i class="fas fa-check text-success"></i> 2 revisions</li>
                              </ul>
                            </td>
                            <td>$199</td>
                            <td><a href="#" class="btn btn-primary btn-sm btn-select-pack">Select Pack</a></td>
                          </tr>
                          <?php
                          break;
                        default:
                          echo "<tr><td colspan='5'>Service not found</td></tr>";
                          break;
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

    <!-- Include footer -->
    <?php include_once "../layouts/footer.php" ?>
  </div>

  <!-- Include scripts -->
  <?php include_once "../layouts/script-link.php" ?>

  <!-- Modal HTML -->
  <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel">Details for Selected Pack</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
