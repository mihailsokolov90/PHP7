<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koterov Kostarev - PHP7</title>
    <!-- CSS ----------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- END OF CSS ---------------------------------------------------------------------------------------------->
    <?php
    require_once "./engine/Application.php";
    ?>
</head>
<body class="h-100 d-flex flex-column">
<!-- HEADER ----------------------------------------------------------------------------------------------------->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand" role="button">
                <img src="img/logo.png" alt="" class="navbar-brand-img">
            </a>
            <button type="button" class="navbar-toggler" id="header_nav_toggler_button" aria-expanded="false"
            aria-controls="header_nav_menu_container" data-bs-target="#header_nav_menu_container" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="header_nav_menu_container" aria-labelledby="header_nav_toggler_button">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="fa fa-home"></span>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="fa fa-store"></span>
                            <span>Products</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="fa fa-shop"></span>
                            <span>Items</span>
                        </a>
                    </li><li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="fa fa-note-sticky"></span>
                            <span>Sells</span>
                        </a>
                    </li>
                </ul>
                <!-- NAVBAR SEARCH FORM -->
                <form action="" method="get" class="d-flex flex-row ms-auto align-items-center">
                    <div class="input-group">
                        <span class="input-group-text" id="header_nav_form_search_text">
                            <a class="fa fa-search text-white"></a>
                        </span>
                        <input type="search" class="form-control" aria-labelledby="header_nav_form_search_text" name="header_nav_form_search"
                        aria-label="Search Field" placeholder="Search item">
                    </div>
                    <button type="submit" class="btn btn-outline-success mx-1">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<!-- END OF HEADER ---------------------------------------------------------------------------------------------->
<!-- MAIN ----------------------------------------------------------------------------------------------------->
<main class="flex-shrink-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="console" id="main_console">
                    <?php
                    app\Application::instance()->Exec();
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- END OF MAIN ---------------------------------------------------------------------------------------------->
<!-- FOOTER ----------------------------------------------------------------------------------------------------->
<footer class="mt-auto">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <img src="img/logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-6">
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col">
                            <a href="#" class="h5">
                                <span class="fa fa-home"></span>
                                <span>Home</span>
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="h5">
                                <span class="fa fa-store"></span>
                                <span>Products</span>
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="h5">
                                <span class="fa fa-shop"></span>
                                <span>Items</span>
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="h5">
                                <span class="fa fa-note-sticky"></span>
                                <span>Sells</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <h5>Address</h5>
                <address>
                    Some address string... <br>
                </address>
            </div>
        </div>
    </div>
</footer>
<!-- END OF FOOTER ---------------------------------------------------------------------------------------------->
<!-- JS ----------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../../fontawesome-free-6.1.1-web/js/all.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<!-- END OF JS ---------------------------------------------------------------------------------------------->
</body>
</html>