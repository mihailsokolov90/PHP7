<!doctype html>
<html lang="ru" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS SECTION ----------------------------------------------------------------------------------------------------- -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registration.css" type="text/css">
    <!-- END OF CSS SECTION ---------------------------------------------------------------------------------------------- -->
    <title>User Registration</title>
</head>
<body class="h-100 d-flex flex-column">
<!-- HEADER ----------------------------------------------------------------------------------------------------- -->
<header>
    <nav class="navbar navbar-expand-lg sticky-top bg-light navbar-light fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="img/logo.png" alt="" height="35">
            </a>
            <button role="button" class="navbar-toggler" id="nav_toggler_btn" data-bs-target="#nav_toggler_content" data-bs-toggle="collapse"
                    aria-expanded="false" aria-controls="nav_toggler_content">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse d-flex" id="nav_toggler_content" aria-labelledby="nav_toggler_btn">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <span>Home</span>
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span>Company</span>
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                            <span>Products</span>
                            <span class="fa fa-shopping-bag"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Item#</a></li>
                            <li><a href="#" class="dropdown-item">Item#</a></li>
                            <li><a href="#" class="dropdown-item">Item#</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a href="#" class="dropdown-item">Product#</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span>Contacts</span>
                            <span class="fa fa-user"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link disabled">
                            <span>About</span>
                        </a>
                    </li>
                </ul>

                <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="get" class="ms-auto d-flex">
                    <div class="input-group">
                        <span class="input-group-text fa fa-search text-white" id="nav_form_addon_1"></span>
                        <input type="search" name="nav_form_search_text" id="nav_form_search_text" class="form-control" aria-describedby="nav_form_addon_1" aria-label="form_search">
                    </div>
                    <button type="submit" class="btn-outline-success mx-2">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<!-- END OF HEADER ---------------------------------------------------------------------------------------------- -->
<!-- MAIN ----------------------------------------------------------------------------------------------------- -->
<main class="flex-shrink-0">

    <section id="main_section_headline">
        <div class="container">
            <div class="row">
                <div class="wrap-headline col-8 offset-2">
                    <!-- MAIN CAPTION -->
                    <h3 class="text-capitalize text-nowrap text-center text-white">User Registration</h3>
                    <!-- REG FORM -->
                    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                        <div class="mb-3">
                            <label for="main_reg_form_name" class="form-label">User name</label>
                            <input type="text" name="main_reg_form_name" id="main_reg_form_name" class="form-control" aria-describedby="main_reg_form_name_desc">
                            <span class="form-text" id="main_reg_form_name_desc">Your first name</span>
                        </div>
                        <div class="mb-3">
                            <label for="main_reg_form_email">Your email's address</label>
                            <div class="input-group">
                                <input type="email" name="main_reg_form_email" id="main_reg_form_email" class="form-control" aria-label="User Email" aria-describedby="main_reg_form_email_addon">
                                <div class="input-group-text" id="main_reg_form_email_addon">@gmail.com</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="main_reg_form_check_info" name="main_reg_form_check_info" checked>
                                <label for="main_reg_form_check_info">Receive </label>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>

</main>
<!-- END OF MAIN ---------------------------------------------------------------------------------------------- -->
<!-- FOOTER ----------------------------------------------------------------------------------------------------- -->
<footer class="mt-auto footer">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="img/logo.png" alt="Logo">
            </div>
            <div class="col-6">

            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
</footer>
<!-- END OF FOOTER ---------------------------------------------------------------------------------------------- -->
<!-- JAVASCRIPT  ---------------------------------------------------------------------------------------------------- -->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<!-- END OF JAVASCRIPT ---------------------------------------------------------------------------------------------- -->
</body>
</html>