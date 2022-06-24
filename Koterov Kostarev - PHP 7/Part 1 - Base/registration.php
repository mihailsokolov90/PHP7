<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chapter 3 - Registration Form</title>
    <!-- CSS ----------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../../fontawesome-free-6.1.1-web/css/all.css" type="text/css">
    <link rel="stylesheet" href="css/registration.css" type="text/css">
    <!-- END OF CSS ---------------------------------------------------------------------------------------------->
</head>
<body class="h-100 d-flex flex-column">
<!-- HEADER ----------------------------------------------------------------------------------------------------->
<header>
    <nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top">
        <div class="container-fluid">
            <a href="#" role="button" class="navbar-brand">
                <img src="img/logo.png" alt="" class="navbar-brand-img">
            </a>
            <button role="button" class="navbar-toggler" aria-expanded="false" aria-controls="navbar_collapse_menu"
                    data-bs-target="#navbar_collapse_menu" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_collapse_menu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <span class="fa fa-home"></span>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="fa fa-building"></span>
                            <span>Company</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbar_link_products"
                           aria-expanded="false" aria-haspopup="true" data-bs-target="#navbar_link_products_dropdown" data-bs-toggle="dropdown">
                            <span class="fa fa-shopping-cart"></span>
                            <span>Products</span>
                        </a>
                        <ul class="dropdown-menu" id="navbar_link_products_dropdown" aria-labelledby="navbar_link_products">
                            <li><a href="#" class="dropdown-item">Menu item #1</a></li>
                            <li><a href="#" class="dropdown-item">Menu item #2</a></li>
                            <li><span class="dropdown-divider"></span></li>
                            <li><a href="#" class="dropdown-item">Menu item #3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="fa fa-address-book"></span>
                            <span>Contacts</span>
                        </a>
                    </li>
                </ul>
                <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="get" class="d-flex flex-row me-auto px-1">
                    <div class="input-group">
                        <span class="input-group-text" id="navbar_form_search_prefix"> <span class="fa fa-search"></span> </span>
                        <input type="search" class="form-control" id="navbar_form_search" aria-label="search data"
                        placeholder="Type element to search" aria-labelledby="navbar_form_search_prefix">
                    </div>
                    <button role="button" type="submit" class="btn btn-outline-primary my-1">Find</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<!-- END OF HEADER ---------------------------------------------------------------------------------------------->
<!-- MAIN ----------------------------------------------------------------------------------------------------->
<main class="flex-shrink-0">
    <div class="container-fluid">
            <div class="row">
                <div class="main_wrapper_container">
                    <div class="col"></div>
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
                <div class="container-fluid">
                    <div class="col">
                        <a href="#" class="h5 text-white">
                            <span class="fa fa-home"></span>
                            <span>Main</span>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Site map</a></li>
                            <li><a href="#" class="text-white">General</a></li>
                            <li><a href="#" class="text-white">Purpose</a></li>
                            <li><a href="#" class="text-white">Some link</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <a href="#" class="h5 text-white">
                            <span class="fa fa-building"></span>
                            <span>Company</span>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Site map</a></li>
                            <li><a href="#" class="text-white">General</a></li>
                            <li><a href="#" class="text-white">Purpose</a></li>
                            <li><a href="#" class="text-white">Some link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <h5>Company address</h5>
                <address>
                    Some Street, 42 <br>
                    Moscow, Russia <br>
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
<script type="text/javascript" src="js/registration.js"></script>
<!-- END OF JS ---------------------------------------------------------------------------------------------->
</body>
</html>