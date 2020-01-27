<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>JWeatherAPP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/animate.css">

</head>

<body style="background: #f9f9f9">
<nav class="sidebar shadow">
    <div class="logo-header">
        <a href="index.php"><img src="images/brunei-logo.jpg" alt=""></a>
    </div>
    <ul class="list-unstyled my-4">
        <li class="sidebar-item"><a href="" class="sidebar-link"><span class="sidebar-icon"><i class="far fa-tachometer-alt"></i></span> Dashboard</a></li>
        <li class="sidebar-item"><a href="pages/settings.php" class="sidebar-link"><span class="sidebar-icon"><i class="far fa-cog"></i></span> Settings</a></li>
    </ul>
</nav>
<div class="custom-container">
    <div class="row">
        <div class="col-md-12">
            <h2>Dashboard</h2>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-xl-4 col-md-12">
            <div class="card shadow-sm animated fadeInUp" id="card">
                <div class="card-header bg-white">
                    <h4>Current conditions</h4>
                </div>
                <div class="card-body p-5 text-center">
                    <h1>-9C</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-md-12">
            <div class="card shadow-sm animated fadeInUp">
                <div class="card-header bg-white">
                    <h4>Hourly forecast</h4>
                </div>
                <div class="card-body p-5">

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card shadow-sm animated fadeInUp">
                <div class="card-header bg-white">
                    <h4>Temperature</h4>
                </div>
                <div class="card-body p-5">
                    <div class="daily-chart">
                        <canvas id="dailyChart" height="300" style="width: 100%"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h4>History data</h4>
                </div>
                <div class="card-body p-5">
                    <ul id="history-list"></ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src="js/scripts.js"></script>

<script src="js/all.js"></script>
</body>
</html>