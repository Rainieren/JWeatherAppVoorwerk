<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>JWeatherAPP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/all.css">
</head>

<body style="background: #f9f9f9">
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <a class="navbar-brand" href="#"><a href="index.php"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <ul class="ml-auto navbar-nav">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
</nav>
<nav class="sidebar shadow-sm">
    <div class="sidebar-brand p-4">
        <img src="../images/brunei-logo.jpg" alt="" height="70"></a>
    </div>

    <ul class="list-unstyled my-4">
        <li class="sidebar-item"><a href="../index.php" class="sidebar-link"><span class="sidebar-icon"><i class="far fa-tachometer-alt"></i></span> Dashboard</a></li>
        <li class="sidebar-item"><a href="settings.php" class="sidebar-link"><span class="sidebar-icon"><i class="far fa-cog"></i></span> Settings</a></li>
    </ul>
</nav>
<div class="custom-container">
    <div class="row">
        <div class="col-md-12">
            <h2>Settings</h2>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-6">
            <div class="card animated fadeInUp">
                <div class="card-body p-5">
                    <div class="form-group row">
                        <div class="col-8">
                            <h5 class="m-0">Download daily history</h5>
                            <p class="m-0 sub-text font-weight-normal">Download the current data or someshit</p>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary">Download</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src="../js/scripts.js"></script>

<script src="../js/all.js"></script>
</body>
</html>