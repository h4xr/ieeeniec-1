<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon2.png">
    <title><?php wp_title(); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!--Font Awesome Style sheet for Footer Social Icons -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/scrolling-nav.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>


</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll logo transition" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg">
            </a>
        </div>

        <!--IEEE - Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse nav2">
            <ul class="nav navbar-nav">
                <!-- IEEE - Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#event">Events</a>
                </li>
                <li>
                    <a class="page-scroll" href="#achievements2">Achievements</a>
                </li>
                <li>
                    <a class="page-scroll" href="#projects">Projects</a>
                </li>
                <li>
                    <a class="page-scroll" href="#">WIE</a>
                </li>
                <li>
                    <a class="page-scroll" href="#">Articles</a>
                </li>
                <li>
                    <a class="page-scroll" href="#">Resources</a>
                </li>
                <li>
                    <a class="page-scroll" href="#footerWrapper">Contact Us</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>