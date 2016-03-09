<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Blog Template</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">

		<link href="<?php echo get_template_directory_uri(); ?>/css/multi.css" rel="stylesheet">

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
      <a href="index.html" class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg"> </a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
				<?php
				 $categories=get_categories(array('hide_empty'=>0));
				 foreach($categories as $category){
					 echo '<li><a href="';
					 echo esc_url(get_category_link($category->term_id));
					 echo '">';
					 echo esc_html($category->name);
					 echo '</a></li>';
				 }
				?>
      </ul>

    </nav>
  </div>
</header>

<div id="masthead">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1><?php single_cat_title(); ?>

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
					  $cat_name = get_category(get_query_var('cat'))->name;
					  $category_id=get_cat_id($cat_name);
					  $args=array(
							'category'=>$category_id
						);
						$posts_recent=get_posts($args);
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





<?php get_footer(); ?>
