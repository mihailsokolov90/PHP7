<?php
/*require_once ("core/ApplicationChapter_31.php");

core\ApplicationChapter_31::InstallCookie();*/
?>
<!doctype html>
<html lang="ru" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chapter 31 - Web Functions</title>
    <!-- STYLESHEETS ------------------------------------------------------------------------------------------ -->
    <link rel="stylesheet" href="modules/jquery-ui/jquery-ui.min.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="modules/jquery-ui/jquery-ui.theme.min.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="modules/chosen/chosen.min.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
    <!-- END OF STYLESHEETS ----------------------------------------------------------------------------------- -->
</head>
<body class="d-flex h-100 flex-column">
<!-- NAV ------------------------------------------------------------------------------------------ -->
<!-- END OF NAV ----------------------------------------------------------------------------------- -->
<nav class="navbar navbar-light bg-light fixed-top navbar-expand-lg">
    <a href="#" role="button" class="navbar-brand">
        <img src="img/logo.png" alt="Company Logo">
    </a>
    <div class="navbar-collapse collapse">
        <button class="navbar-toggler" type="button" id="navbar_toggle_button" aria-expanded="false"
        aria-controls="nav_main_menu_collapse" data-toggle="collapse" data-target="#nav_main_menu_collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav" id="nav_main_menu_collapse">
            <li class="nav-item">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Contacts</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" aria-expanded="false" aria-haspopup="true"
                   data-toggle="dropdown">Parameters</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Item 1</a>
                    <a href="#" class="dropdown-item">Item 2</a>
                    <a href="#" class="dropdown-item">Item 3</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Item 1_1</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">About</a>
            </li>
        </ul>

        <form action="<?=$_SERVER['PHP_SELF'] ?>" class="form-inline justify-content-end ml-auto" method="get">
            <div class="input-group">
                <input type="search" class="form-control" aria-label="search" placeholder="find to"
                       name="nav_search_text" id="nav_search_text">
                <span class="fa fa-search nav_search_icon"></span>
            </div>
        </form>

        <div class="btn-group mx-2 d-none d-sm-block">
            <a href="#" role="button" class="dropdown-toggle" aria-expanded="false" aria-haspopup="true" data-toggle="dropdown">
                <img src="img/jon.png" alt="" class="nav_img_profile img-thumbnail">
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#" class="dropdown-item">User</a>
                </li>
                <li>
                    <a href="#" class="dropdown-item">Settings</a>
                </li>
                <li class="dropdown-divider"></li>
                <li>
                    <a href="#" class="dropdown-item">Quit</a>
                </li>
            </ul>
        </div>

        <button class="btn btn-outline-primary d-none d-sm-block my-2 mx-2">
            <span>Message In</span>
            <span class="fa fa-pencil"></span>
        </button>

    </div>

</nav>
<!-- MAIN ------------------------------------------------------------------------------------------ -->
<!-- END OF MAIN ----------------------------------------------------------------------------------- -->
<main class="flex-shrink-0">
    <div class="main_wrapper">
        <div class="container">
            <div class="col-10 offset-2">
                <?php
                require_once ("core/ApplicationChapter_32.php");

                use core\ApplicationChapter_32;

                $app = ApplicationChapter_32::getInstance();
                $app->Exec();

                ?>
                <!--<a href="core/chapter_31/headers_test.php">Headers Test</a>-->
            </div>
        </div>
    </div>
</main>
<!-- FOOTER ------------------------------------------------------------------------------------------ -->
<!-- END OF FOOTER ----------------------------------------------------------------------------------- -->
<footer class="mt-auto py-3 footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="img/logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-7">
                <ul class="list-unstyled list-inline ml-5">
                    <li class="list-inline-item">
                        <h5>About</h5>
                    </li>
                    <li class="list-inline-item">
                        <h5>Home</h5>
                    </li>
                    <li class="list-inline-item">
                        <h5>Contacts</h5>
                    </li>
                    <li class="list-inline-item">
                        <h5>About</h5>
                    </li>
                </ul>
            </div>
            <div class="col-3">
                <address>
                    <h5>Company Address</h5>
                    Moscow, Bolshakova st, 43 <br>
                    <abbr title="Phonne">P: </abbr> 8 (499) 234-23-43 <br>
                </address>
            </div>
        </div>
    </div>
</footer>
<!-- JAVASCRIPT ------------------------------------------------------------------------------------------ -->
<script type="text/javascript" charset="utf-8" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" charset="utf-8" src="modules/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" charset="utf-8" src="modules/chosen/chosen.jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/popper.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/main.js"></script>
<!-- END OF JAVASCRIPT ----------------------------------------------------------------------------------- -->
</body>
</html>