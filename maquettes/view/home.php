<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<?php include_once "./layouts/heade.php" ?>
<!-- Add Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<body class="sidebar-mini" style="height: auto;">

    <!-- Urgent Alert -->
    <div class="alert alert-danger alert-dismissible fade show m-0 rounded-0" role="alert" id="urgentAlert">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <strong><i class="fas fa-exclamation-triangle mr-2"></i>Message urgent :</strong>
                Maintenance du site prévue ce soir de 22h à 23h. Certaines fonctionnalités pourraient être indisponibles.
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once "./layouts/nav.php" ?>
        <!-- Barre latérale -->
        <?php include_once "./layouts/aside.php" ?>

        <div class="content-wrapper pt-4">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Bienvenue</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-6">

                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>15</h3>
                                    <p>Projets</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="./projets/index.php" class="small-box-footer">Plus d'informations <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-6">

                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>23</h3>
                                    <p>Taches</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="./taches/index.php" class="small-box-footer">Plus d'informations <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-6">

                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>60</h3>
                                    <p>Utilisateurs</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="./utilisateurs/index.php" class="small-box-footer">Plus d'informations <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>
                    <!-- New row for charts -->
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Progression des projets</h3>
                                </div>
                                <div class="card-body">
                                    <canvas id="barChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Évolution des tâches</h3>
                                </div>
                                <div class="card-body">
                                    <canvas id="lineChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced section for coupons and sales -->
                    <div class="row mt-4 justify-content-center">
                        <div class="col-lg-10">
                            <div class="card bg-gradient-primary">
                                <div class="card-header border-0">
                                    <h3 class="card-title">
                                        <i class="fas fa-gift mr-2"></i>
                                        Offres Spéciales
                                    </h3>
                                </div>
                                <div class="card-body pt-0">
                                    <div id="carouselPromotions" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center bg-white rounded p-3 shadow-sm position-relative">
                                                    <img src="/view/assets/images/new.png" alt="New" class="new-badge">
                                                    <div class="promo-image mr-md-4">
                                                        <img src="/view/assets/images/coupon.webp" alt="Coupon promo" class="img-fluid rounded">
                                                    </div>
                                                    <div class="text-center text-md-left mb-3 mb-md-0 flex-grow-1">
                                                        <h4 class="mb-1 text-primary">🎉 Super Soldes d'Été! 🌞</h4>
                                                        <p class="mb-0 text-muted">Profitez de réductions <span class="text-danger font-weight-bold">JUSQU'À 70%</span> sur une sélection d'articles.</p>
                                                        <p class="mt-2 text-info">🕒 Offre valable jusqu'au 31 juillet</p>
                                                        <button class="btn btn-primary btn-lg pulse-button mt-3">
                                                            Découvrir 
                                                            <i class="fas fa-rocket ml-2"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center bg-white rounded p-3 shadow-sm position-relative">
                                                    <img src="/view/assets/images/new.png" alt="New" class="new-badge">
                                                    <div class="promo-image mr-md-4">
                                                        <img src="/view/assets/images/coupon.webp" alt="Code promo" class="img-fluid rounded">
                                                    </div>
                                                    <div class="text-center text-md-left mb-3 mb-md-0 flex-grow-1">
                                                        <h4 class="mb-1 text-success">🎁 Code Promo Magique! ✨</h4>
                                                        <p class="mb-0 text-muted">Entrez le code secret <span class="badge badge-success p-2 animated-badge">FUNSUM25</span> et obtenez <span class="text-success font-weight-bold">25% DE RÉDUCTION</span> sur votre commande!</p>
                                                        <p class="mt-2 text-info">🕒 Valable sur tout le site jusqu'au 15 août</p>
                                                        <button class="btn btn-success btn-lg wobble-button mt-3" onclick="copyPromoCode('FUNSUM25')">
                                                            Copier le code 
                                                            <i class="fas fa-magic ml-2"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

<div>
<?php include_once "./layouts/footer.php" ?>
</div>
<!-- get script -->
<?php include_once "./layouts/script-link.php"; ?>

<script>
    // Bar Chart
    var ctxBar = document.getElementById('barChart').getContext('2d');
    var barChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: ['Projet A', 'Projet B', 'Projet C', 'Projet D', 'Projet E'],
            datasets: [{
                label: 'Progression (%)',
                data: [65, 59, 80, 81, 56],
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100
                }
            }
        }
    });

    // Line Chart
    var ctxLine = document.getElementById('lineChart').getContext('2d');
    var lineChart = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin'],
            datasets: [{
                label: 'Tâches complétées',
                data: [12, 19, 3, 5, 2, 3],
                borderColor: 'rgba(75, 192, 192, 1)',
                tension: 0.1,
                fill: false
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Initialize the carousel
    $(document).ready(function() {
        $('#carouselPromotions').carousel({
            interval: 2000
        });
    });

    function copyPromoCode(code) {
        navigator.clipboard.writeText(code).then(function() {
            alert('Code promo magique copié: ' + code + '\n✨ Profitez-en bien! ✨');
        }, function(err) {
            console.error('Oups! Une erreur s\'est produite:', err);
        });
    }

    // Auto-hide alert after 10 seconds
    setTimeout(function() {
        $('#urgentAlert').alert('close');
    }, 60000);
</script>

<style>
    .pulse-button {
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
        100% {
            transform: scale(1);
        }
    }

    .wobble-button {
        animation: wobble 1s infinite;
    }

    @keyframes wobble {
        0% { transform: translateX(0%); }
        15% { transform: translateX(-25%) rotate(-5deg); }
        30% { transform: translateX(20%) rotate(3deg); }
        45% { transform: translateX(-15%) rotate(-3deg); }
        60% { transform: translateX(10%) rotate(2deg); }
        75% { transform: translateX(-5%) rotate(-1deg); }
        100% { transform: translateX(0%); }
    }

    .animated-badge {
        animation: colorChange 2s infinite;
    }

    @keyframes colorChange {
        0% { background-color: #28a745; }
        50% { background-color: #17a2b8; }
        100% { background-color: #28a745; }
    }

    .promo-image {
        width: 150px;
        height: 150px;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .promo-image:hover {
        transform: scale(1.05);
    }

    .promo-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @media (max-width: 768px) {
        .promo-image {
            width: 100%;
            height: auto;
            margin-bottom: 1rem;
        }
    }

    .card.bg-gradient-primary {
        background: linear-gradient(45deg, #007bff, #00c6ff);
    }

    .carousel-item {
        transition: transform 0.6s ease-in-out;
    }

    .carousel-item .bg-white {
        transition: box-shadow 0.3s ease;
        overflow: hidden;
    }

    .carousel-item .bg-white:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .new-badge {
        position: absolute;
        top: -10px;
        right: -10px;
        width: 80px;
        height: auto;
        z-index: 10;
        transform: rotate(15deg);
        transition: transform 0.3s ease;
    }

    .carousel-item:hover .new-badge {
        transform: rotate(0deg) scale(1.1);
    }
</style>

</html>