<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 5 - Remind Session</title>
    <!-- CSS SECTION ---------------------------------------------------------------------------------------------- -->
    <link rel="stylesheet" href="css/bootstrap.css">
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <!-- END OF CSS SECTION --------------------------------------------------------------------------------------- -->
</head>
<body class="h-100 d-flex flex-column">
<!-- HEAD SECTION ---------------------------------------------------------------------------------------------- -->
<header>
    <nav class="navbar navbar-expand-lg sticky-top fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="<?=$_SERVER['PHP_SELF']?>" class="navbar-brand">
                <img src="img/logo.png" alt="" class="navbar-brand-img">
            </a>
            <button role="button" class="navbar-toggler" data-bs-target="#navbar_menu_container" data-bs-toggle="collapse"
                    aria-expanded="false" aria-controls="navbar_menu_container" aria-label="Navbar collapse button"></button>
            <div class="navbar-collapse collapse d-flex" id="navbar_menu_container">
                <ul class="navbar-nav item">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class=""></span>
                            <span>Company</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class=""></span>
                            <span>Send message</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                            <span class=""></span>
                            <span>Products</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Oils</a></li>
                            <li><a href="#" class="dropdown-item">Bread</a></li>
                            <li><a href="#" class="dropdown-item">Superfood</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="#" class="dropdown-item">Brands</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class=""></span>
                            <span>Contacts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class=""></span>
                            <span>Register</span>
                        </a>
                    </li>
                </ul>

                <form action="<?=$_SERVER['PHP_SELF']?>" method="get" class="ms-auto d-flex">
                    <div class="input-group me-1">
                        <div class="input-group-text" id="nav_form_input_addon_1">
                            <span class="fa"></span>
                        </div>
                        <input type="search" class="form-control" id="nav_form_search" name="nav_form_search">
                    </div>
                    <button role="button" type="submit" class="btn btn-outline-success">Search</button>
                </form>

            </div>
        </div>
    </nav>
</header>
<!-- END OF HEAD SECTION --------------------------------------------------------------------------------------- -->
<!-- MAIN SECTION ---------------------------------------------------------------------------------------------- -->
<main class="flex-shrink-0"></main>
<!-- END OF MAIN SECTION --------------------------------------------------------------------------------------- -->
<!-- FOOTER SECTION ---------------------------------------------------------------------------------------------- -->
<footer class="footer mt-auto my-3">
    <div class="container">
        <div class="col-2">
            <img src="img/logo.png" alt="" class="img-fluid">
        </div>
        <div class="col-8">
            <ul class="nav nav-fill">
                <li class="nav-item">
                    <a href="#" class="nav-link">Site Map</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Company</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<!-- END OF FOOTER SECTION --------------------------------------------------------------------------------------- -->
<!-- JS SECTION ---------------------------------------------------------------------------------------------- -->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<!-- END OF JS SECTION --------------------------------------------------------------------------------------- -->
</body>
</html>