<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP8 Chapter 4 - External Methods</title>
    <!-- CSS ----------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
    <link rel="stylesheet" href="../../fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- END OF CSS ---------------------------------------------------------------------------------------------->
</head>
<body class="h-100 d-flex flex-column">
<!-- HEADER ----------------------------------------------------------------------------------------------------->
<header>
    <nav class="navbar navbar-expand-lg sticky-top bg-light navbar-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand" role="button">
                <img src="img/logo.png" alt="" class="navbar-brand-img">
            </a>
            <button role="button" class="navbar-toggler" data-bs-target="#header_nav_collapse_content" data-bs-toggle="collapse"
                    aria-expanded="false" aria-controls="header_nav_collapse_content" id="header_nav_toggler">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="header_nav_collapse_content" aria-labelledby="header_nav_toggler">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="fa fa-home"></span>
                            <span>Main</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="fa fa-pencil"></span>
                            <span>Register</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="fa fa-store"></span>
                            <span>Shop</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="fa fa-contact-book"></span>
                            <span>Addresses</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="fa fa-question"></span>
                            <span>About</span>
                        </a>
                    </li>
                </ul>
                <!-- Search Form --------------------------------------------------------------------------------->
                <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="get" class="ms-auto d-flex flex-row align-items-center">
                    <div class="input-group py-0 my-0">
                        <span class="input-group-text" id="input_group_addition_search"><a href="#" class="fa fa-search"></a></span>
                        <input type="search" class="form-control" placeholder="Serach item" name="nav_form_search_text"
                               aria-label="search_label" aria-describedby="input_group_addition_search">
                    </div>
                    <button type="submit" role="button" class="btn btn-outline-success mx-1 my-2">Find</button>
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
                <div class="console"></div>
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
                    <div class="row">
                        <div class="col">
                            <h4>Main</h4>
                        </div>
                        <div class="col">
                            <h4>Products</h4>
                        </div>
                        <div class="col">
                            <h4>Contacts</h4>
                        </div>
                        <div class="col">
                            <h4>Help</h4>
                        </div>
                        <div class="col">
                            <h4>Authors</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <h5>Company Address</h5>
                <address>
                    Some address 144654 <br>Moscow, Russia <br>
                    <abbr title="Phone">P:</abbr>8 495 322-23-23
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