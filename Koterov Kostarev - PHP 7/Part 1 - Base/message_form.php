<!doctype html>
<html lang="en">
<head class="h-100">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message Form</title>
    <!-- CSS STYLES ----------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="css/message_form.css" type="text/css">
    <!-- END OF CSS STYLES ---------------------------------------------------------------------------------------------->
</head>
<body class="h-100 d-flex flex-column">
<!-- HEADER SECTION ----------------------------------------------------------------------------------------------------->
<header>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="img/logo.png" alt="" class="navbar-brand-img">
            </a>
            <button role="button" class="navbar-toggler" data-bs-target="#header_nav_main" aria-expanded="false"
            aria-controls="header_nav_main" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="header_nav_main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">
                            <span class="fa fa-home"></span>
                            <span>Main</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="fa fa-link"></span>
                            <span>Links</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="index.php" class="nav-link dropdown-toggle" role="button" aria-expanded="false" data-bs-toggle="dropdown" id="header_nav_dropdown_items">
                            <span class="fa fa-address-book"></span>
                            <span>Dropdown</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="header_nav_dropdown_items">
                            <li><a href="#" class="dropdown-item">Item 1</a></li>
                            <li><span class="dropdown-divider"></span></li>
                            <li><a href="#" class="dropdown-item">Item 2</a></li>
                            <li><a href="#" class="dropdown-item">Item 3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- END OF HEADER SECTION ---------------------------------------------------------------------------------------------->
<!-- MAIN SECTION ----------------------------------------------------------------------------------------------------->
<main class="flex-shrink-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Some Content</h3>
                <img src="img/landscape.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</main>
<!-- END OF MAIN SECTION ---------------------------------------------------------------------------------------------->
<!-- FOOTER SECTION ----------------------------------------------------------------------------------------------------->
<footer class="mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="img/logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-6">
                <nav class="nav nav-fill justify-content-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Main</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Links</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Items</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                </nav>
            </div>
            <div class="col-3">

            </div>
        </div>
    </div>
</footer>
<!-- END OF FOOTER SECTION ---------------------------------------------------------------------------------------------->
<!-- JS SECTION ----------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/message_form.js"></script>
<!-- END OF JS SECTION ---------------------------------------------------------------------------------------------->
</body>
</html>
