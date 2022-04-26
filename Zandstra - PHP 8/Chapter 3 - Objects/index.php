<!doctype html>
<html lang="en">
<head class="h-100">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zandstra - PHP 8 - Chapter 3</title>
    <!-- CSS --------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" type="text/css">
<!--    <link rel="stylesheet" href="../../fontawesome-free-6.1.1-web/css/all.min.css" type="text/css" />-->
    <link rel="stylesheet" href="css/main.css">
    <!-- END OF CSS -------------------------------------------------------------------------------->
</head>
<body class="h-100 d-flex flex-column">
<!-- HEAD --------------------------------------------------------------------------------------->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="img/logo.png" alt="" class="navbar-brand-img">
            </a>
            <button role="button" class="navbar-toggler" aria-expanded="false" aria-controls="header_navbar_collapse"
            data-bs-target="#header_navbar_collapse" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse d-flex" id="header_navbar_collapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">
                            <span class="fa fa-home"></span>
                            Main
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="fa fa-gear"></span>
                            Settings
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true" data-bs-toggle="dropdown">
                            <span class="fa fa-store"></span>
                            Store
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Element1</a></li>
                            <li><a href="#" class="dropdown-item">Element2</a></li>
                            <li><a href="#" class="dropdown-item">Element3</a></li>
                            <li><span class="dropdown-divider"></span></li>
                            <li><a href="#" class="dropdown-item">Element Special</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="fa fa-contact-card"></span>
                            Contacts
                        </a>
                    </li>
                </ul>
                <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="get" class="ms-auto d-flex">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="header_nav_form_search_prepend"><span class="fa fa-search"></span></span>
                        <input type="search" id="header_nav_form_search" name="header_nav_form_search" class="form-control"
                           aria-describedby="header_nav_form_search_prepend" placeholder="Find elements" aria-label="Find Elements">
                    </div>
                    <button type="submit" class="btn btn-outline-primary mx-1 my-1" id="header_nav_form_submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<!-- END OF HEAD -------------------------------------------------------------------------------->
<!-- MAIN --------------------------------------------------------------------------------------->
<main class="flex-shrink-0">
    <div class="container">
        <div class="row">
            <div class="console" id="main_console"></div>
        </div>
    </div>
</main>
<!-- END OF MAIN -------------------------------------------------------------------------------->
<!-- FOOTER --------------------------------------------------------------------------------------->
<footer class="mt-auto">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <img src="img/logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-7">

            </div>
            <div class="col-2">
                <h4>Company</h4>
                <address>
                    <span class=""></span> Some address string... <br>
                </address>
            </div>
        </div>
    </div>
</footer>
<!-- END OF FOOTER -------------------------------------------------------------------------------->
<!-- JS --------------------------------------------------------------------------------------->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<!-- END OF JS -------------------------------------------------------------------------------->
</body>
</html>