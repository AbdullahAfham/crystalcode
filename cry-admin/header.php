<?php
    session_start();
    if(!isset($_SESSION['crystal-admin-login'])){
        header('location:signin.php');
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.png">

    <title>Crystal Admin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&amp;subset=latin-ext"
          rel="stylesheet">

    <!-- CSS - REQUIRED - START -->
    <!-- Batch Icons -->
    <link rel="stylesheet" href="assets/fonts/batch-icons/css/batch-icons.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap/mdb.min.css">
    <!-- Custom Scrollbar -->
    <link rel="stylesheet" href="assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Hamburger Menu -->
    <link rel="stylesheet" href="assets/css/hamburgers/hamburgers.css">

    <!-- CSS - REQUIRED - END -->

    <!-- CSS - OPTIONAL - START -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <!-- JVMaps -->
    <link rel="stylesheet" href="assets/plugins/jvmaps/jqvmap.min.css">
    <!-- CSS - OPTIONAL - END -->

    <!-- QuillPro Styles -->
    <link rel="stylesheet" href="assets/css/quillpro/quillpro.css">
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="px-0 bg-dark bg-gradient sidebar fixed-left">
            <ul class="nav nav-pills flex-column">
                <li class="logo-nav-item">
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo-white.png" width="145" height="32.3" alt="QuillPro">
                    </a>
                </li>
                <li>
                    <h6 class="nav-header">General</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">
                        <i class="batch-icon batch-icon-browser-alt"></i>
                        Dashboard <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li>
                    <h6 class="nav-header">Manage</h6>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="batch-icon batch-icon-mail"></i>
                        Inbox
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="batch-icon batch-icon-paragraph-alt-justify"></i>
                        News 
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="batch-icon batch-icon-intersect"></i>
                        Projects 
                    </a>
                </li>

        </ul>
        </nav>
        <div class="right-column">
            <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
                <a class="navbar-brand d-block d-sm-block d-md-block d-lg-none" href="#">
                    <img src="assets/img/logo-dark.png" width="145" height="32.3" alt="QuillPro">
                </a>
                <button class="hamburger hamburger--slider" type="button" data-target=".sidebar" aria-controls="sidebar"
                        aria-expanded="false" aria-label="Toggle Sidebar">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                </button>
                <!-- Added Mobile-Only Menu -->
                <ul class="navbar-nav ml-auto mobile-only-control d-block d-sm-block d-md-block d-lg-none">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbar-notification-search-mobile"
                           data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                            <i class="batch-icon batch-icon-search"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-fullscreen"
                            aria-labelledby="navbar-notification-search-mobile">
                            <li>
                                <form class="form-inline my-2 my-lg-0 no-waves-effect">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for..."
                                               aria-label="Search for..." aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-gradient waves-effect waves-light"
                                                    type="button">
                                                <i class="batch-icon batch-icon-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!--  DEPRECATED CODE:
                    <div class="navbar-collapse" id="navbarSupportedContent">
                -->
                <!-- USE THIS CODE Instead of the Commented Code Above -->
                <!-- .collapse added to the element -->
                <div class="collapse navbar-collapse" id="navbar-header-content">
                    <ul class="navbar-nav navbar-language-translation mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbar-dropdown-menu-link" data-toggle="dropdown"
                               data-flip="false" aria-haspopup="true" aria-expanded="false">
                                <i class="batch-icon batch-icon-book-alt-"></i>
                                English
                            </a>
                            
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-notifications float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbar-notification-search" data-toggle="dropdown"
                               data-flip="false" aria-haspopup="true" aria-expanded="false">
                                <i class="batch-icon batch-icon-search"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-fullscreen"
                                aria-labelledby="navbar-notification-search">
                                <li>
                                    <form class="form-inline my-2 my-lg-0 no-waves-effect">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search for..."
                                                   aria-label="Search for..." aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary btn-gradient waves-effect waves-light"
                                                        type="button">Search
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle no-waves-effect" id="navbar-notification-calendar"
                               data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                                <i class="batch-icon batch-icon-calendar"></i>
                                <span class="notification-number">6</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-md"
                                aria-labelledby="navbar-notification-calendar">
                                <li class="media">
                                    <a href="task-list.html">
                                        <i class="batch-icon batch-icon-calendar batch-icon-xl d-flex mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 notification-heading">Meeting with Project Manager</h6>
                                            <div class="notification-text">
                                                Cras sit amet nibh libero
                                            </div>
                                            <span class="notification-time">Right now</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="task-list.html">
                                        <i class="batch-icon batch-icon-calendar batch-icon-xl d-flex mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 notification-heading">Sales Call</h6>
                                            <div class="notification-text">
                                                Nibh amet cras sit libero
                                            </div>
                                            <span class="notification-time">One hour from now</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="task-list.html">
                                        <i class="batch-icon batch-icon-calendar batch-icon-xl d-flex mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 notification-heading">Email CEO new expansion
                                                                                       proposal</h6>
                                            <div class="notification-text">
                                                Cras sit amet nibh libero
                                            </div>
                                            <span class="notification-time">In 3 days</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="task-list.html">
                                        <i class="batch-icon batch-icon-calendar batch-icon-xl d-flex mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 notification-heading">Team building exercise</h6>
                                            <div class="notification-text">
                                                Cras sit amet nibh libero
                                            </div>
                                            <span class="notification-time">In one week</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle no-waves-effect" id="navbar-notification-misc"
                               data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                                <i class="batch-icon batch-icon-bell"></i>
                                <span class="notification-number">4</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-md"
                                aria-labelledby="navbar-notification-misc">
                                <li class="media">
                                    <a href="task-list.html">
                                        <i class="batch-icon batch-icon-bell batch-icon-xl d-flex mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 notification-heading">General Notification</h6>
                                            <div class="notification-text">
                                                Cras sit amet nibh libero
                                            </div>
                                            <span class="notification-time">Just now</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="task-list.html">
                                        <i class="batch-icon batch-icon-cloud-download batch-icon-xl d-flex mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 notification-heading">Your Download Is Ready</h6>
                                            <div class="notification-text">
                                                Nibh amet cras sit libero
                                            </div>
                                            <span class="notification-time">5 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="task-list.html">
                                        <i class="batch-icon batch-icon-tag-alt-2 batch-icon-xl d-flex mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 notification-heading">New Order</h6>
                                            <div class="notification-text">
                                                Cras sit amet nibh libero
                                            </div>
                                            <span class="notification-time">Yesterday</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="task-list.html">
                                        <i class="batch-icon batch-icon-pull batch-icon-xl d-flex mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 notification-heading">Pull Request</h6>
                                            <div class="notification-text">
                                                Cras sit amet nibh libero
                                            </div>
                                            <span class="notification-time">3 day ago</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-5 navbar-profile">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbar-dropdown-navbar-profile"
                               data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                                <div class="profile-name">
                                    Johanna Quinn
                                </div>
                                <div class="profile-picture bg-gradient bg-primary has-message float-right">
                                    <img src="assets/img/profile-pic.jpg" width="44" height="44">
                                </div>
                            </a>
                            
                            <ul class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="navbar-dropdown-navbar-profile">
                                <li><a class="dropdown-item" href="profiles-member-profile.html">Profile</a></li>
                                <li>
                                    <a class="dropdown-item" href="mail-inbox.html">
                                        Messages
                                        <span class="badge badge-danger badge-pill float-right">3</span>
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="profiles-member-profile.html">Settings</a></li>
                                <li><a class="dropdown-item" id="logout" >Logout</a></li>
                            </ul>
                         
                        </li>
                    </ul>
                </div>
            </nav><br><br><br><br>

            <script>
                document.getElementById("logout").addEventListener("click", myFunction);

                function myFunction() {
                    document.write('<?php  unset($_SESSION["crystal-admin-login"]); ?>');
                    window.location = 'signin.php';
                }
            
            </script>