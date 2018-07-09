<?php
    include "config.php";
    $result = mysqli_query($con,"SELECT * FROM game ORDER BY id DESC");
    $arr = array();
    while($rows = mysqli_fetch_array($result)){
        if($rows['status'] == -1){
            $rows['color1'] = 'danger';
            $rows['color2'] = 'danger';
        } elseif ($rows['status'] == 100) {
            if($rows['score1'] == $rows['score2']){
                $rows['color1'] = 'info';
                $rows['color2'] = 'info';
            } elseif ($rows['score1'] > $rows['score2']) {
                $rows['color1'] = 'success';
                $rows['color2'] = 'danger';
            } elseif ($rows['score1'] < $rows['score2']) {
                $rows['color1'] = 'danger';
                $rows['color2'] = 'success';
            }
        } else {
            $rows['color1'] = 'secondary';
            $rows['color2'] = 'secondary';
        }
        $arr[] = $rows;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" http-equiv="refresh" content="60"/>
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Pama Cup</title>
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
            <div class="row justify-content-center">
                <h1>Kết quả trận đấu</h1>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-xl-8 col-md-10">
                    <?php foreach($arr as $row){ ?>
                        <div class="card">
                            <a href="<?php echo isset($row['path'])?'game/'.$row['path'].'.pama':'#' ?>" class="temp" style="color: #2c2c2c; text-decoration: none;">
                                <div class="card-body" style="min-height: 0; padding: 0;">
                                    <div class="row">
                                        <div class="<?php echo "bg-".$row['color1']?>" style="width: 50px;">
                                        </div>
                                        <div class="col match-card">
                                            <div class="user-card"><?php echo $row['team1']?></div>
                                            <div class="elo-card">Pacman: <?php echo $row['name1'] ?></div>
                                            <div class="rank-card">Điểm: <span class="<?php echo "text-".$row['color1']?>"><?php echo $row['score1']?></span></div>
                                        </div>
                                        <div class="col-2 text-center  my-auto">
                                            <?php
                                                if($row['status'] == 0) echo 'Pending';
                                                elseif($row['status'] == 1) echo 'Đang đấu';
                                                else echo $row['time'];
                                            ?>
                                        </div>
                                        <div class="col match-card">
                                            <div class="user-card"><?php echo $row['team2']?></div>
                                            <div class="elo-card">Ghost: <?php echo $row['name2'] ?></div>
                                            <div class="rank-card">Điểm: <span class="<?php echo "text-".$row['color2']?>"><?php echo $row['score2']?></span></div>
                                        </div>
                                        <div class="<?php echo "bg-".$row['color2']?>" style="width: 50px;">
                                            
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
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
