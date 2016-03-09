<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Blog Template</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

		<link href="css/multi.css" rel="stylesheet">

	</head>
	<body>
<header class="navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.html" class="navbar-brand"><img src="images/logo.svg"> </a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="#">Category</a>
        </li>
        <li>
          <a href="#">Category</a>
        </li>
        <li>
          <a href="#">Category</a>
        </li>
        <li>
          <a href="#">Category</a>
        </li>
      </ul>

    </nav>
  </div>
</header>

<div id="masthead">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1>Blog
          <p class="lead">Subtitle</p>
        </h1>
      </div>

    </div>
  </div><!-- /cont -->


</div>


<div class="container">
  <div class="row">

    <div class="col-md-12">

      <div class="panel">
        <div class="panel-body">


          <!--/stories-->
					<?php
					  $args=array(
							'numberposts'=>4,
						);
						$posts_recent=get_posts();
						foreach($posts_recent as $post)
						{
							setup_postdata($post);
							echo '<div class="row">';
							echo '<br>';
							echo '<div class="col-md-12 col-sm-3 text-center">';
							echo '<a class="story-img" href="#"><img src="';
							echo the_post_thumbnail_url();
							echo '" class="img-circle"></a></div>';
							echo '<div class="col-md-10 col-sm-9"><h3>';
							echo the_title();
							echo '</h3><div class="row"><div class="col-xs-9"><p>';
							echo the_excerpt();
							echo '</p><p class="lead"><button class="btn btn-default"><a href="';
							echo the_permalink();
							echo '">Read More</a></button></p>';
							echo '<ul class="list-inline"><li>';
							echo get_the_date();
							echo '</li></ul></div><div class="col-xs-3"></div></div><br><br></div></div><hr>';
						}
						wp_reset_postdata();
					?>
		  

          <a href="#" class="btn btn-primary pull-right btnNext">Next ></a>


        </div>
      </div>



   	</div><!--/col-12-->
  </div>
</div>


<hr>





<footer id="footerWrapper" class="contact-section">
    <section id="mainFooter">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footerWidget">
                        <h3>About Organization</h3>

                        <p><a href="http://www.ieee.org"
                              title="Institute of Electrical and Electronics Engineers">IEEE</a>
                            is the world’s largest professional association advancing innovation and technological
                            excellence
                            for the benefit of humanity. IEEE and its members inspire a global community to innovate for
                            a
                            better tomorrow through its highly-cited publications, conferences, technology standards,
                            and
                            professional and educational activities.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footerWidget">
                        <h3>Testimonies</h3>
                        <article class="boxTestimonial">

                            <blockquote class="fa fa-quote-left fa-3x fa-pull-left fa-border">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce volutpat neque id nunc
                            </blockquote>

                            <div class="MemberIcon">
                                <img src="images/vivek.jpg" alt="Vivek Goyal">
                                <span><strong>Vivek Goyal</strong><br> Chairperson IEEENIEC (2015-2017)</span>
                            </div>

                        </article>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footerWidget">
                        <h4>Meet Our team</h4>
                        <ul class="list-unstyled borderList ">

                            <li class=" fa fa-angle-right"><a href="#"> Executive Committee </a></li>
                            <li class=" fa fa-angle-right"><a href="#"> Editorial Team</a></li>
                            <li class=" fa fa-angle-right"><a href="#"> Publicity Team</a></li>
                            <li class=" fa fa-angle-right"><a href="#"> External Affairs Team</a></li>
                            <li class=" fa fa-angle-right"><a href="#"> Technical Monitoring Team</a></li>
                        </ul>
                        <ul class="socialNetwork list2">
                            <h3>Our Social Channels</h3>
                            <li><a href="#" class="tips" title="follow us on Facebook"><i
                                    class="fa fa-facebook-official fa-2x icn"></i></a></li>
                            <li><a href="#" class="tips" title="follow us on Google Play Store"><i
                                    class="fa fa-play-circle fa-2x icn"></i></a></li>
                            <li><a href="#" class="tips" title="follow us on Github"><i
                                    class="fa fa-github fa-2x icn"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footerWidget">

                        <h3>Reach Us</h3>


                        <section>
                            <p>
                                FC-26, Shastri Park,<br>
                                New Delhi, Delhi 110053 <br>
                                <i class="fa fa-envelope "></i>&nbsp;<a href="mailto:ieeeniec123@gmail.com">ieeeniec123@gmail.com</a>
                            </p>
                        </section>

                        <ul class="list-unstyled borderList list2">
                            <h3>Recent Post</h3>
                            <li class=" fa fa-angle-right"><a href="#"> Post 1</a></li>
                            <li class=" fa fa-angle-right"><a href="#"> Post 2</a></li>
                            <li class=" fa fa-angle-right"><a href="#"> Post 3</a></li>
                            <li class=" fa fa-angle-right"><a href="#"> Post 4</a></li>
                            <li class=" fa fa-angle-right"><a href="#"> Post 5</a></li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="footerRights">
        <img src="images/logo.svg" alt="IEEE NIEC" id="footerLogo">

        <p>Copyright &copy; 2016 <a href="www.ieeeniec.com">IEEE NIEC</a></p>

    </div>
</footer>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
