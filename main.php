<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ManoShop</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/articulostyle.css">
    </head>

<body class = "sidebar-mini" style="height: auto;">
<div class = "wrapper">
    <nav class="navbar navbar-expand navbar-dark navbar-light">

        <ul class="navbar-nav">
            <li class="nav-icon">
                <img src="img/logo.png" type="image/png" id="logo">
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu-control" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="?controller=Dashboard" class="nav-link">Admin mode</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="?controller=category" class="nav-link">Category</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" data-target="#navbar-search4" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block" id="navbar-search4">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
                <a href="?controller=Dashboard" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>

                </a>
            </li>
<?php if(isset($_SESSION['User'])){ ?>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>   
            <?php } else { ?>

        <?php } ?>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="?controller=user&action=showuser" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                </a>
            <li class="nav-item">
                <!--a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a-->
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <style>
                            svg {
                                fill: #ffffff
                            }
                        </style>
                        <path d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z" />
                    </svg>
                </a>
            </li>
        </ul>
      
    </nav>
   
       

    <aside class="control-sidebar control-sidebar-dark">
        <table>
            <th>Sort by</th>
            <tr>
                <td>
                    <input type="radio" name="sort">
                </td>
                <td>
                    Most Recent
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="sort">
                </td>
                <td>
                    Most Bought
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="sort">
                </td>
                <td>
                    Most Reviews
                </td>
            </tr>
        </table>
        <table>
            <th>Filter by</th>
            <tr>
                <td>Category: </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox">
                </td>
                <td>
                    PVP
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox">
                </td>
                <td>
                    Action
                </td>
            </tr>

            <tr>
                <td>
                    <input type="checkbox">
                </td>
                <td>
                    Arcade
                </td>
            </tr>

            <tr>
                <td>
                    <input type="checkbox">
                </td>
                <td>
                    Adventure
                </td>
            </tr>

            <tr>
                <td>
                    <input type="checkbox">
                </td>
                <td>
                    Sports
                </td>
            </tr>

            <tr>
                <td>
                    <input type="checkbox">
                </td>
                <td>
                    Survival
                </td>
            </tr>

        </table>
    </aside>

    <!--aside class="main-sidebar sidebar-primary elevation-8">

Hello <?php //$user->getFirstname() ?>

<div class="sidebar">
    hey
<?php //include_once 'View/interface/showusr.php' ?>
</div>
       
    <?php //include_once 'View/interface/showusr.php' ?>
    </aside-->


    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js?v=3.2.0"></script>
    </div>
</body>
</html>