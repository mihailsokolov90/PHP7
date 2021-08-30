<!doctype html>
<html lang="ru" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chapter 23 - Polymorth Interface</title>
    <!-- STYLES ------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" charset="utf-8" href="modules/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" type="text/css" charset="utf-8" href="modules/jquery-ui/jquery-ui.theme.css">
    <link rel="stylesheet" type="text/css" charset="utf-8" href="modules/chosen/chosen.min.css">
    <link rel="stylesheet" type="text/css" charset="utf-8" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" charset="utf-8" href="css/main.css">
    <!-- END OF STYLES ----------------------------------------------------------->
</head>
<body class="h-100 d-flex flex-column">
<!-- MAIN MENU ------------------------------------------------------------------>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a href="#" class="navbar-brand">
        <img src="imgs/logo.png" alt="" height="40">
    </a>
    <button role="button" class="btn navbar-toggler" aria-expanded="false" aria-controls="nav_main_content"
    data-toggle="collapse" data-target="#nav_main_content">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="nav_main_content">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link">Data</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Content</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Help</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" aria-haspopup="true" aria-expanded="false"
                data-toggle="dropdown">Options</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Option #1</a>
                    <span class="dropdown-divider"></span>
                    <a href="#" class="dropdown-item">Option #2</a>
                    <a href="#" class="dropdown-item">Option #3</a>
                </div>
            </li>
        </ul>
    </div>

    <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="get" id="nav_form_search" class="form-inline ml-auto justify-content-end">
        <div class="input-group">
            <input class="form-control" type="search" aria-label="Search" id="nav_form_search_field" name="nav_form_search_field"
            placeholder="Search"/>
            <span class="fa fa-search"></span>
        </div>
        <button type="submit" role="button" class="btn btn-outline-success my-2 my-sm-0" style="margin-left: 0.7rem;">Find</button>
    </form>

    <div class="btn-group">
        <a href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"
        data-toggle="dropdown">
            <img src="imgs/jon.png" alt="" height="40" width="40" class="img-thumbnail">
        </a>
        <ul class="dropdown-menu">
            <li>
                <a href="#" class="dropdown-item">Profile</a>
            </li>
            <li>
                <a href="#" class="dropdown-item">Settings</a>
            </li>
            <li class="dropdown-divider"></li>
            <li>
                <a href="#" class="dropdown-item">Logout</a>
            </li>
        </ul>
    </div>
</nav>
<!-- END OF MAIN MENU ----------------------------------------------------------->
<!-- CONTENT ------------------------------------------------------------------>
<main id="content_section" class="flex-shrink-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                require_once "core/ApplicationClasses.php";

                $app = \core\ApplicationClasses::CreateInstance();
                $app->Exec();
                ?>
            </div>
        </div>
    </div>
</main>
<!-- END OF CONTENT ----------------------------------------------------------->
<!-- FOOTER ------------------------------------------------------------------>
<footer class="mt-auto py-3">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="imgs/logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-4">
                <ul class="list-inline list-unstyled">
                    <li class="list-inline-item">
                        <a href="#" class="h4">Home</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="h4">Content</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="h4">Contacts</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="h4">About</a>
                    </li>
                </ul>
            </div>
            <div class="col-4">
                <h4>Address</h4>
                <address>
                    Some address, 24 <br>
                    <abbr title="Phone">Ph: </abbr> (999) 234-23-43
                </address>
            </div>
        </div>
    </div>
</footer>
<!-- END OF FOOTER ----------------------------------------------------------->
<!-- SCRIPT ------------------------------------------------------------------>
<script charset="utf-8" type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script charset="utf-8" type="text/javascript" src="js/popper.min.js"></script>
<script charset="utf-8" type="text/javascript" src="js/bootstrap.min.js"></script>
<script charset="utf-8" type="text/javascript" src="modules/jquery-ui/jquery-ui.min.js"></script>
<script charset="utf-8" type="text/javascript" src="modules/chosen/chosen.proto.min.js"></script>
<script charset="utf-8" type="text/javascript" src="js/main.js"></script>
<!-- END OF SCRIPT ----------------------------------------------------------->
</body>
</html>