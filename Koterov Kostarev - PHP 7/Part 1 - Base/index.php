<!doctype html>
<html lang="ru" class="h-100">
<head >
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koterov Kostarev - PHP 7</title>
    <!-- CSS ----------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- END OF CSS ---------------------------------------------------------------------------------------------------->
    <?php
        require_once "engine/Application.php";
        # init main Application instance
        $app = \core\Application::instance();
    ?>
</head>
<body class="h-100 d-flex flex-column">
<!-- HEADER ----------------------------------------------------------------------------------------------------------->
<header>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="img/logo.png" alt="" class="navbar-brand-img">
            </a>
            <button role="button" class="navbar-toggler" data-bs-target="#header_nav_menu_container" data-bs-toggle="collapse"
            aria-expanded="false" aria-controls="header_nav_menu_container">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="header_nav_menu_container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <span class="fa fa-home"></span>
                            <span>Main</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link disabled">
                            <span class="fa fa-address-book"></span>
                            <span>Books</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" aria-expanded="false" data-bs-toggle="dropdown">
                            <span class="fa fa-store"></span>
                            <span>Store</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Item 1</a></li>
                            <li><a href="#" class="dropdown-item">Item 2</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="#" class="dropdown-item">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="fa fa-contact-book"></span>
                            <span>Contacts</span>
                        </a>
                    </li>
                </ul>
                <!-- Menu Search Field -->
<!--                <form action=""></form>-->
            </div>
        </div>
    </nav>
</header>
<!-- END OF HEADER ---------------------------------------------------------------------------------------------------->
<!-- MAIN ----------------------------------------------------------------------------------------------------------->
<main class="flex-shrink-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                $app->Exec();
                ?>
            </div>
        </div>
    </div>
</main>
<!-- END OF MAIN ---------------------------------------------------------------------------------------------------->
<!-- FOOTER ----------------------------------------------------------------------------------------------------------->
<footer class="mt-auto footer py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <img src="img/logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-6">

            </div>
            <div class="col-3">
                <address>
                    Some address etc... <br>
                    <abbr title="Phone">P:</abbr>
                    <span>+7 495 234-54-34</span>
                </address>
            </div>
        </div>
    </div>
</footer>
<!-- END OF FOOTER ---------------------------------------------------------------------------------------------------->
<!-- JS ----------------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<!-- END OF JS ---------------------------------------------------------------------------------------------------->
</body>
</html>