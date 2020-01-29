<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>JWeatherAPP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/all.css">

</head>

<body style="background: #EF1A24; overflow: hidden">
<div class="row justify-content-center align-items-center" style="height: 100vh">
    <div class="col-xl-4 col-md-12">
        <div class="card shadow">
            <div class="card-body p-5">
                <div class="card-logo text-center">
                    <img src="images/brunei-logo.jpg" alt="">
                </div>
                <div class="card-title my-3">
                    <h3 class="m-0">Sign up</h3>
                    <p class="sub-text">Let's get started!</p>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="E-mailadres">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                    <!-- eventuelte error message? -->
                    <small class="form-text text-muted">Your password must be 6 characters long.</small>
                </div>
                <div class="form-group">
                    <!-- <label for="passwordConfirm">Confirm password</label> -->
                    <input type="passwordConfirm" class="form-control" placeholder="Confirm password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign up</button><br>
                <small>Already have an account? <a href="login.php">Click here!</a></small>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src="js/scripts.js"></script>

<script src="js/all.js"></script>
</body>
</html>
