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
                <h1>Video Services</h1>
              </div>
              <div class="col-sm-6">
                <div class="float-sm-right">
              
                <?php include_once "../Pole-social/form.php"; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


<!-- Main content -->
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row justify-content-center">
          <?php
          $service = isset($_GET['service']) ? $_GET['service'] : 'video';
          switch ($service) {
            case 'video':
              $packs = [
                [
                  'name' => 'Basic Video Pack',
                  'description' => 'Entry-level video package for simple projects',
                  'features' => [
                    '1 minute video',
                    'Basic editing',
                    '1 revision'
                  ],
                  'price' => '$99',
                  'portfolio_link' => '#'
                ],
                [
                  'name' => 'Standard Video Pack',
                  'description' => 'Comprehensive video package for most needs',
                  'features' => [
                    '3 minute video',
                    'Advanced editing',
                    '2 revisions'
                  ],
                  'price' => '$199',
                  'portfolio_link' => '#'
                ],
                [
                  'name' => 'Premium Video Pack',
                  'description' => 'High-end video package for complex projects',
                  'features' => [
                    '5 minute video',
                    'Professional editing',
                    'Unlimited revisions'
                  ],
                  'price' => '$299',
                  'portfolio_link' => '#'
                ]
              ];

              foreach ($packs as $pack) {
                ?>
                <div class="col-md-6 col-lg-4 mb-4">
                  <div class="card custom-card shadow-sm border-gray rounded">
                    <div class="card-header text-center">
                      <h5><?php echo $pack['name']; ?></h5>
                    </div>
                    <div class="card-img-top">
                      <video width="100%" height="auto" controls>
                        <source src="path_to_video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                    </div>
                    <div class="card-body">
                      <p class="card-text text-center"><?php echo $pack['description']; ?></p>
                      <div class="features">
                        <ul class="list-group list-group-flush">
                          <?php foreach ($pack['features'] as $feature) : ?>
                            <li class="list-group-item"><i class="fas fa-check text-success me-2"></i> <?php echo $feature; ?></li>
                          <?php endforeach; ?>
                        </ul>
                      </div>
                    
                      <div class="price text-center">
                        <h4 class="card-price">Price: <?php echo $pack['price']; ?></h4>
                      </div>
                      <div class="actions text-center">
                        <a href="<?php echo $pack['portfolio_link']; ?>" class="btn btn-info ">See Portfolio</a>



                      </div>
                
                    
                    </div>
                  </div>
                </div>
                <?php
              }
              break;
            default:
              echo "<tr><td colspan='5'>Service not found</td></tr>";
              break;
          }
          ?>
        </div>
      </div>
      <div  class= "modal-footer">
                      <?php include_once "../Pole-social/order.php"; ?>
                          </div>
      
    </div>
  </div>
</section>



<style>
.content {
  padding: 40px 0;
  background-color: #f8f9fa; /* Light background */
}

.custom-card {
  background-color: white;
  border-radius: 15px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: box-shadow 0.2s ease-in-out, transform 0.2s ease-in-out;
}

.card-header {
  background-color: #f0f0f0;
  border-bottom: 2px solid #ddd;
  color: #06285D; /* Primary color for heading */
}

.card-img-top {
  height: 200px; /* Adjust video height as needed */
  object-fit: cover; /* Ensure video fills the container */
  transition: opacity 0.2s ease-in-out;
}

.card-body {
  padding: 25px;
}

.card-text {
  color: #69727d; /* Secondary color for description */
}

.features {
  margin-bottom: 20px;
}

.price {
  color: #06285D; /* Primary color for price */
  font-size: 1.2rem;
  font-weight: bold;
}

.actions {
  margin-top: 20px;
}

.btn-info {
  background-color: #06285D;
  border-color: #06285D;
  color: white;
}

.btn-primary {
  background-color: #69727d;
  border-color: #69727d;
  color: white;
}

/* Hover effects */
.custom-card:hover {
  box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.25);
  transform: translateY(-5px);
}

.card-img-top:hover {
  opacity: 0.8;
}


  </style>


<!-- /.content -->
<!-- /.content -->

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