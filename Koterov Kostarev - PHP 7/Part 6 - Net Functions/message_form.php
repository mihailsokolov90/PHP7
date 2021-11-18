<!doctype html>
<html lang="ru" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message Form Example</title>
    <!-- CSS SECTION ----------------------------------------------------------------------------------------- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/message_form.css" type="text/css">
    <!-- END OF CSS SECTION ---------------------------------------------------------------------------------- -->
</head>
<body class="h-100 d-flex flex-column">
<!-- HEADER SECTION ----------------------------------------------------------------------------------------- -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top sticky-top">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="img/logo.png" height="40">
            </a>
            <button role="button" class="navbar-toggler" data-bs-target="#nav_main" data-bs-toggle="collapse"
                    aria-expanded="false" aria-controls="nav_main" id="nav_main_button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse d-flex" id="nav_main" aria-labelledby="nav_main_button">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Company</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true" role="button">Products</a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Monitors</a></li>
                            <li><a href="#" class="dropdown-item">Memory</a></li>
                            <li><span class="dropdown-divider"></span></li>
                            <li><a href="#" class="dropdown-item">Other</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">Shops</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contacts</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled">Private</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                </ul>

                <form action="<?=$_SERVER['SCRIPT_NAME']?>" class="d-flex flex-lg-row flex-sm-column ms-auto">
                    <div class="input-group">
                        <span class="input-group-text fa fa-search" id="navbar_form_search_text_addon"></span>
                        <input type="search" class="form-control" name="navbar_form_search_text"
                               id="navbar_form_search_text" placeholder="type for search"
                               aria-describedby="navbar_form_search_text_addon">
                    </div>
                    <button role="button" type="submit" class="btn-outline-success">Search</button>
                </form>

            </div>
        </div>
    </nav>
</header>
<!-- END OF HEADER SECTION ---------------------------------------------------------------------------------- -->

<!-- MAIN SECTION ----------------------------------------------------------------------------------------- -->
<main class="flex-shrink-0">
    <div class="container">
        <h4 class="mt-5">Message Form Test</h4>
    </div>
</main>
<!-- END OF MAIN SECTION ---------------------------------------------------------------------------------- -->

<!-- FOOTER SECTION ----------------------------------------------------------------------------------------- -->
<footer class="mt-auto footer py-3">
    <div class="container">
        <div class="row ">
            <div class="col-md-2">
                <img src="img/logo.png" alt="" class="img-fluid footer-brand">
            </div>
            <div class="col-md-6">
                <ul class="nav nav-fill justify-content-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Main</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Partners</a></li>
                            <li><a href="#" class="dropdown-item">Shops</a></li>
                            <li><a href="#" class="dropdown-item">Products</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="#" class="dropdown-item">Documents</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contacts</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <address>
                    Some address string <br/>
                    St.Main Avenue, 31b <br>
                    <abbr title="Phone">P:</abbr>8-343-987-23-12 <br>
                </address>
            </div>
        </div>
    </div>
</footer>
<!-- END OF FOOTER SECTION ---------------------------------------------------------------------------------- -->

<!-- JAVASCRIPT SECTION ----------------------------------------------------------------------------------------- -->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<!-- END OF JAVASCRIPT SECTION ---------------------------------------------------------------------------------- -->
</body>
</html>