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
                    <li class="nav-item">
                        <a class="nav-link" href="pacman.php">
                            <p>Pacman</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ghost.php">
                            <p>Ghost</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="result.php">
                            <p>Result</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper" style="margin-top: 100px">
        <div class="container">
            <div class="row justify-content-md-center">
                <h1>Kết quả trận đấu</h1>
            </div>
            <div class="row justify-content-md-center" style="margin-bottom: 20px">
                <div class="form-group col-4" style="margin-bottom: 0">
                    <input type="text" name="username" placeholder="Player name" class="form-control">
                </div>
                <div>                   
                    <button class="btn btn-black btn-icon btn-round" type="button" style="margin: 0">
                        <i class="now-ui-icons ui-1_zoom-bold"></i>
                    </button>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-xl-8 col-md-10">
                    <div class="card">
                        <a href="" class="temp" style="color: #2c2c2c; text-decoration: none;">
                            <div class="card-body" style="min-height: 0; padding: 0;">
                                <div class="row">
                                    <div class="bg-success" style="width: 50px;">
                                        
                                    </div>
                                    <div class="col match-card">
                                        <div class="user-card">Nguyen Van A</div>
                                        <div class="elo-card">Elo: 1231(<span class="text-success">+23</span>)</div>
                                        <div class="rank-card">Rank: 1</div>
                                    </div>
                                    <div class="col-1 text-center  my-auto">
                                        <strong>VS</strong>
                                    </div>
                                    <div class="col match-card">
                                        <div class="user-card">Nguyen Van A</div>
                                        <div class="elo-card">Elo: 1231(<span class="text-danger">-23</span>)</div>
                                        <div class="rank-card">Rank: 1</div>
                                    </div>
                                    <div class="bg-danger" style="width: 50px;">
                                        
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="" class="temp" style="color: #2c2c2c; text-decoration: none;">
                            <div class="card-body" style="min-height: 0; padding: 0;">
                                <div class="row">
                                    <div class="bg-info" style="width: 50px;">
                                        
                                    </div>
                                    <div class="col match-card">
                                        <div class="user-card">Nguyen Van A</div>
                                        <div class="elo-card">Elo: 1231(<span class="text-info">0</span>)</div>
                                        <div class="rank-card">Rank: 1</div>
                                    </div>
                                    <div class="col-1 text-center  my-auto">
                                        <strong>VS</strong>
                                    </div>
                                    <div class="col match-card">
                                        <div class="user-card">Nguyen Van A</div>
                                        <div class="elo-card">Elo: 1231(<span class="text-info">0</span>)</div>
                                        <div class="rank-card">Rank: 1</div>
                                    </div>
                                    <div class="bg-info" style="width: 50px;">
                                        
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="" class="temp" style="color: #2c2c2c; text-decoration: none;">
                            <div class="card-body" style="min-height: 0; padding: 0;">
                                <div class="row">
                                    <div class="bg-success" style="width: 50px;">
                                        
                                    </div>
                                    <div class="col match-card">
                                        <div class="user-card">Nguyen Van A</div>
                                        <div class="elo-card">Elo: 1231(<span class="text-success">+23</span>)</div>
                                        <div class="rank-card">Rank: 1</div>
                                    </div>
                                    <div class="col-1 text-center  my-auto">
                                        <strong>VS</strong>
                                    </div>
                                    <div class="col match-card">
                                        <div class="user-card">Nguyen Van A</div>
                                        <div class="elo-card">Elo: 1231(<span class="text-danger">-23</span>)</div>
                                        <div class="rank-card">Rank: 1</div>
                                    </div>
                                    <div class="bg-danger" style="width: 50px;">
                                        
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
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