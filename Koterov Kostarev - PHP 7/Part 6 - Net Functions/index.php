<?php
    require_once ("core/ApplicationChapter_33.php");

    use core\ApplicationChapter_33 as App;
?>
<!doctype html>
<html lang="ru" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=App::Title()?></title>
    <!-- CSS SECTION ----------------------------------------------------------------------------- -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- END OF CSS SECTION ---------------------------------------------------------------------- -->
<body class="h-100 d-flex flex-column">
<!-- MENU SECTION ----------------------------------------------------------------------------- -->
<nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light ">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">
            <img src="img/logo.png" alt="" style="height: 35px;">
        </a>
        <button role="button" class="navbar-toggler" aria-expanded="false" aria-controls="navbarToggleMenu"
                data-bs-target="#navbarToggleMenu" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarToggleMenu">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="#" class="nav-link">Menu Item #1</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" aria-expanded="false"
                       aria-haspopup="true" data-bs-toggle="dropdown">Dropdown Menu</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Some Link To</a>
                        <span class="dropdown-divider"></span>
                        <a href="#" class="dropdown-item">Another Link To</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END OF MENU SECTION ---------------------------------------------------------------------- -->

<!-- MAIN SECTION ----------------------------------------------------------------------------- -->
<main class="flex-shrink-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                $a = core\ApplicationChapter_33::getInstance();
                $a->exec();
                ?>
            </div>
        </div>
    </div>
</main>
<!-- END OF MAIN SECTION ---------------------------------------------------------------------- -->

<!-- FOOTER SECTION ----------------------------------------------------------------------------- -->
<footer class="mt-auto my-2">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="img/logo.png" alt="">
            </div>
            <div class="col-6"></div>
            <div class="col-3"></div>
        </div>
    </div>
</footer>
<!-- END OF FOOTER SECTION ---------------------------------------------------------------------- -->
<!-- SCRIPT SECTION ----------------------------------------------------------------------------- -->
<script type="text/javascript" charset="utf-8" src="js/jquery-3.6.0.js"></script>
<script type="text/javascript" charset="utf-8" src="js/popper.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/bootstrap.min.js"></script>
<!-- END OF SCRIPT SECTION ---------------------------------------------------------------------- -->
</body>
</html>
