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
                            <h1 style="color: #007bff; font-weight: bold;">Hello , 
                            <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'User'; ?>
                            </h1>
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
                <h3></h3>
                <p>number of Orders</p>
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
                <h3></h3>
                <p>total Transactions</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./taches/index.php" class="small-box-footer">Plus d'informations <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-4 col-6">
        <div class="small-box bg-warning">
            <div class=" user inner d-flex align-items-center justify-content-between">
                <div>
                    <h3></h3>
                    <p>Your credit balance is : 0.00 MAD</p>
                </div>
                <div>
                    <?php include_once "./Pole-social/form.php"; ?>
                </div>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="./utilisateurs/index.php" class="small-box-footer">Plus d'informations <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

<style>
    .small-box .user {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 100%;
    }

    .small-box ..user .btn {
        margin-left: 10px; /* Optional: Adjust the spacing between the text and the button */
    }
</style>

                    <!-- New row for charts -->
                  

                    <!-- Enhanced section for coupons and sales -->
                    <!-- <div class="row mt-4 justify-content-center">
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
                    </div> -->

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">services that i oderd it</h3>
                <select id="timePeriod" class="form-control w-auto">
                    <option value="month">Mois</option>
                    <option value="week">Semaine</option>
                    <option value="year">Année</option>
                </select>
            </div>
            <div class="card-body">
                <canvas id="barChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Historique des transactions</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nom du Produit</th>
                            <th>Montant</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody id="transactionTable">
                        <!-- Transaction data will be inserted here by JavaScript -->
                    </tbody>
                </table>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initial data for the bar chart
        var barChartData = {
            month: {
                labels: ['Winning Product', 'CRM', 'Community Manager', 'ADS Management', 'Design', 'Videos', 'Marketing Strategy'],
                data: [30, 20, 15, 40, 25, 10, 35] // Example data for month
            },
            week: {
                labels: ['Winning Product', 'CRM', 'Community Manager', 'ADS Management', 'Design', 'Videos', 'Marketing Strategy'],
                data: [10, 5, 8, 12, 9, 3, 11] // Example data for week
            },
            year: {
                labels: ['Winning Product', 'CRM', 'Community Manager', 'ADS Management', 'Design', 'Videos', 'Marketing Strategy'],
                data: [100, 80, 65, 120, 90, 50, 110] // Example data for year
            }
        };

        // Function to update the bar chart
        function updateBarChart(timePeriod) {
            barChart.data.labels = barChartData[timePeriod].labels;
            barChart.data.datasets[0].data = barChartData[timePeriod].data;
            barChart.update();
        }

        // Bar Chart
        var ctxBar = document.getElementById('barChart').getContext('2d');
        var barChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: barChartData.month.labels,
                datasets: [{
                    label: 'Services Commandés',
                    data: barChartData.month.data,
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 150
                    }
                }
            }
        });

        // Handle dropdown change
        document.getElementById('timePeriod').addEventListener('change', function() {
            var selectedPeriod = this.value;
            updateBarChart(selectedPeriod);
        });

        // Sample transaction data
        var transactions = [
            { product: 'Winning Product', amount: '450.00 MAD', date: '31/07/24 17:40' },
            { product: 'CRM', amount: '300.00 MAD', date: '30/07/24 15:20' },
            { product: 'Community Manager', amount: '500.00 MAD', date: '29/07/24 14:10' },
            { product: 'ADS Management', amount: '250.00 MAD', date: '28/07/24 16:50' },
            { product: 'Design', amount: '600.00 MAD', date: '27/07/24 13:30' },
            { product: 'Videos', amount: '200.00 MAD', date: '26/07/24 12:45' },
            { product: 'Marketing Strategy', amount: '350.00 MAD', date: '25/07/24 11:25' }
        ];

        // Populate transaction table
        var transactionTable = document.getElementById('transactionTable');
        transactions.forEach(function(transaction) {
            var row = document.createElement('tr');
            var productCell = document.createElement('td');
            var amountCell = document.createElement('td');
            var dateCell = document.createElement('td');

            productCell.textContent = transaction.product;
            amountCell.textContent = transaction.amount;
            dateCell.textContent = transaction.date;

            row.appendChild(productCell);
            row.appendChild(amountCell);
            row.appendChild(dateCell);
            transactionTable.appendChild(row);
        });
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





    html, body {
    height: 100%;
    margin: 0;
}

.wrapper {
    display: flex;
    flex-direction: column;
    min-height: 100vh; /* Ensure the wrapper spans the full viewport height */
}

.content-wrapper {
    flex: 1; /* Allows the content-wrapper to grow and fill available space */
    overflow: auto; /* Handle scrolling within content-wrapper */
}

.container-fluid {
    padding-bottom: 2rem; /* Add padding if needed to avoid content being cut off */
}
</style>

</html>