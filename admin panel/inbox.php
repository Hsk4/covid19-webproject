





<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php
    include('../partials/links.php');
    
    ?>
</head>

<body class="animsition">


    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile bg-dark">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                patients detail
                                <i class="fas fa-tachometer-alt"></i>patients details</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Chart</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        
       <?php
       
       include('../partials/sidebar.php');
       
       ?>


        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
           <?php
           
           include '../partials/navbar.php';
           
           
           
           ?>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content ">
                <div class="section__content section__content--p30">
                    
                    <link rel="stylesheet" href="C:\xampp\htdocs\covid19-webproject\partials\sidebar.html">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                  </div>

                                </div>
                     </div>
                    </div>
                </div>
            </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->



<!-- all commented content is here -->
<!-- <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
    <div class="bg-overlay bg-overlay--blue"></div>
    <h3>
        <i class="zmdi zmdi-comment-text"></i>New Messages</h3>
    <button class="au-btn-plus">
        <i class="zmdi zmdi-plus"></i>
    </button>
</div>
<div class="au-inbox-wrap js-inbox-wrap">
    <div class="au-message js-list-load">
        <div class="au-message__noti">
            <p>You Have
                <span>2</span>

                new messages
            </p>
        </div>
        <div class="au-message-list">
            <div class="au-message__item unread">
                <div class="au-message__item-inner">
                    <div class="au-message__item-text">
                        <div class="avatar-wrap">
                            <div class="avatar">
                                <img src="images/icon/avatar-02.jpg" alt="John Smith">
                            </div>
                        </div>
                        <div class="text">
                            <h5 class="name">John Smith</h5>
                            <p>Have sent a photo</p>
                        </div>
                    </div>
                    <div class="au-message__item-time">
                        <span>12 Min ago</span>
                    </div>
                </div>
            </div>
            <div class="au-message__item unread">
                <div class="au-message__item-inner">
                    <div class="au-message__item-text">
                        <div class="avatar-wrap online">
                            <div class="avatar">
                                <img src="images/icon/avatar-03.jpg" alt="Nicholas Martinez">
                            </div>
                        </div>
                        <div class="text">
                            <h5 class="name">Nicholas Martinez</h5>
                            <p>You are now connected on message</p>
                        </div>
                    </div>
                    <div class="au-message__item-time">
                        <span>11:00 PM</span>
                    </div>
                </div>
            </div>
            <div class="au-message__item">
                <div class="au-message__item-inner">
                    <div class="au-message__item-text">
                        <div class="avatar-wrap online">
                            <div class="avatar">
                                <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                            </div>
                        </div>
                        <div class="text">
                            <h5 class="name">Michelle Sims</h5>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="au-message__item-time">
                        <span>Yesterday</span>
                    </div>
                </div>
            </div>
            <div class="au-message__item">
                <div class="au-message__item-inner">
                    <div class="au-message__item-text">
                        <div class="avatar-wrap">
                            <div class="avatar">
                                <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                            </div>
                        </div>
                        <div class="text">
                            <h5 class="name">Michelle Sims</h5>
                            <p>Purus feugiat finibus</p>
                        </div>
                    </div>
                    <div class="au-message__item-time">
                        <span>Sunday</span>
                    </div>
                </div>
            </div>
            <div class="au-message__item js-load-item">
                <div class="au-message__item-inner">
                    <div class="au-message__item-text">
                        <div class="avatar-wrap online">
                            <div class="avatar">
                                <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                            </div>
                        </div>
                        <div class="text">
                            <h5 class="name">Michelle Sims</h5>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="au-message__item-time">
                        <span>Yesterday</span>
                    </div>
                </div>
            </div>
            <div class="au-message__item js-load-item">
                <div class="au-message__item-inner">
                    <div class="au-message__item-text">
                        <div class="avatar-wrap">
                            <div class="avatar">
                                <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                            </div>
                        </div>
                        <div class="text">
                            <h5 class="name">Michelle Sims</h5>
                            <p>Purus feugiat finibus</p>
                        </div>
                    </div>
                    <div class="au-message__item-time">
                        <span>Sunday</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="au-message__footer">
            <button class="au-btn au-btn-load js-load-btn">load more</button>
        </div>
    </div>
    <div class="au-chat">
        <div class="au-chat__title">
            <div class="au-chat-info">
                <div class="avatar-wrap online">
                    <div class="avatar avatar--small">
                        <img src="images/icon/avatar-02.jpg" alt="John Smith">
                    </div>
                </div>
                <span class="nick">
                    <a href="#">John Smith</a>
                </span>
            </div>
        </div>
        <div class="au-chat__content">
            <div class="recei-mess-wrap">
                <span class="mess-time">12 Min ago</span>
                <div class="recei-mess__inner">
                    <div class="avatar avatar--tiny">
                        <img src="images/icon/avatar-02.jpg" alt="John Smith">
                    </div>
                    <div class="recei-mess-list">
                        <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                        <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                    </div>
                </div>
            </div>
            <div class="send-mess-wrap">
                <span class="mess-time">30 Sec ago</span>
                <div class="send-mess__inner">
                    <div class="send-mess-list">
                        <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="au-chat-textfield">
            <form class="au-form-icon">
                <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                <button class="au-input-icon">
                    <i class="zmdi zmdi-camera"></i>
                </button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">
<div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
    <div class="bg-overlay bg-overlay--blue"></div>
    <h3>
        <i class="zmdi zmdi-comment-text"></i>Chat</h3>
    <button class="au-btn-plus">
        <i class="zmdi zmdi-plus"></i>
    </button>
</div>
<div class="au-inbox-wrap">
    <div class="au-chat au-chat--border">
        <div class="au-chat__title">
            <div class="au-chat-info">
                <div class="avatar-wrap online">
                    <div class="avatar avatar--small">
                        <img src="images/icon/avatar-02.jpg" alt="John Smith">
                    </div>
                </div>
                <span class="nick">
                    <a href="#">John Smith</a>
                </span>
            </div>
        </div>

        
        <div class="au-chat__content au-chat__content2 js-scrollbar5">
            <div class="recei-mess-wrap">
                <span class="mess-time">12 Min ago</span>
                <div class="recei-mess__inner">
                    <div class="avatar avatar--tiny">
                        <img src="images/icon/avatar-02.jpg" alt="John Smith">
                    </div>
                    <div class="recei-mess-list">
                        <div class="recei-mess">Lorem ipsum dolor sit amet elit</div>
                        <div class="recei-mess">Donec tempor viverra</div>
                    </div>
                </div>
            </div>
            <div class="send-mess-wrap">
                <span class="mess-time">30 Sec ago</span>
                <div class="send-mess__inner">
                    <div class="send-mess-list">
                        <div class="send-mess">Lorem ipsum dolor sit amet elit</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="au-chat-textfield">
            <form class="au-form-icon">
                <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                <button class="au-input-icon">
                    <i class="zmdi zmdi-camera"></i>
                </button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->
<!-- END PAGE CONTAINER-->

<!-- all commented content is here -->
