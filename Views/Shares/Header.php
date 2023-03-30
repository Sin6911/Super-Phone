<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>pomato</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="Theme/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="Theme/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="Theme/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="Theme/images/fevicon.png" type="Theme/image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="Theme/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Theme/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Theme/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!-- [if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif] -->
</head>
<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="Theme/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="Theme/images/loggo.gif" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index">Home</a> </li>
                                        <li> <a href="about">About</a> </li>
                                        <li><a href="brand">Brand</a></li>
                                        <li><a href="special">Specials</a></li>
                                        <li><a href="contact">Contact Us</a></li>
                                        <li class="last">
                                            <a href="#"><img src="Theme/images/search_icon.png" alt="icon" /></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul>
                                <li><img src="Theme/icon/call.png" />(+84)336973447</li>
                                <li><img src="Theme/icon/email.png" />sangovoly@gmail.com</li>
                                <li><img src="Theme/icon/loc.png" />Location</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>

    <!-- Javascript files-->
    <script src="Theme/js/jquery.min.js"></script>
    <script src="Theme/js/popper.min.js"></script>
    <script src="Theme/js/bootstrap.bundle.min.js"></script>
    <script src="Theme/js/jquery-3.0.0.min.js"></script>
    <script src="Theme/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="Theme/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="Theme/js/custom.js"></script>
    <!-- javascript -->
    <script src="Theme/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

$(this).addClass('transition');
}, function() {

$(this).removeClass('transition');
});
});
</script>