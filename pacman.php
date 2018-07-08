<?php
	if(isset($POST)){
		echo "POST";
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>League of Snake</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    {# <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"> #}
    <link href="./assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/css/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
    <div id="image">
        <img src="assets/img/favicon.png"/>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
        <div class="container">
            <div class="navbar-translate">
                <img src="assets/img/favicon2.png" width=30>
                <a class="navbar-brand" href="index.php" data-placement="bottom" style="margin-left: 5px">
                    PAMA CUP
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="pacman.php">
                            <p>Pacman</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ghost.php">
                            <p>Ghost</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="result.php">
                            <p>Result</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper" style="margin-top: 100px;">
        <div class="container">
            <div class="row justify-content-center">
                <h1>Sân luyện Pacman</h1>
            </div>
            <div class="row justify-content-center" style="margin-bottom: 20px">
                <form action="" method="POST" enctype="multipart/form-data" class="col-6">
                    <div class="form-group row">
                        <label for="team" class="col-3 col-form-label">Team</label>
                        <div class="col-9">
                            <select name="team" id="team" class="form-control" required>
                                <option disabled selected value> -- Chọn team -- </option>
                                <option value="1">Team1</option>
                                <option value="2">Team2</option>
                                <option value="3">Team3</option>
                                <option value="4">Team4</option>
                                <option value="5">Team5</option>
                                <option value="6">Team6</option>
                                <option value="7">Team7</option>
                                <option value="8">Team8</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pacman" class="col-3 col-form-label">Tên Pacman</label>
                        <div class="col-9">
                            <input id="pacman" name="pacman" class="form-control" type="text" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pacman_file" class="col-3 col-form-label">File cpp</label>
                        <div class="col-9">
                            <input id="pacman_file" name="pacman_file" class="form-control" type="file" required>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <input type="submit" value="Chiến" class="btn btn-black btn-round col-2">
                        <div class="col-1"></div>
                        <input type="reset" value="Thôi" class="btn btn-black btn-round col-2">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</html>
