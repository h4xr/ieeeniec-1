<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , intial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/sub_style.css">
    <title>IEEE NIEC</title>
  </head>
  <body>
  	<div class="container-float">
      <?php while(have_posts()): the_post(); ?>
  		<div class="col-sm-8" style="margin-left:2%;margin-top:2%">
  			<h1><?php the_title(); ?></h1><hr>
  			<a href=""><img src="<?php if(has_post_thumbnail()){
          echo the_post_thumbnail_url();
        } ?>" class="thumbnail img-responsive" style="box-shadow:10px 5px 5px #efefef"></a><hr>
  			<div class="panel panel-default">
  				<div class="panel-body">
  					<ul class="list-inline" id="date">
  						<li class="glyphicon glyphicon-time"><?php echo get_the_date(); ?></li>
  						<li class="glyphicon glyphicon-tags"><?php echo the_tags(); ?></li>

  					</ul>


  				</div>
  			</div>
  			<p>
          <?php the_content(); ?>
        </p>
  		</div>
    <?php endwhile; ?>
  		<div class="col-sm-3" style="background-color:lavenderb;height:800px; margin-left:2%;margin-top:8%">
  			<h3>Recent activites</h3><hr>
  			<div class="row">
  				<div class="col-sm-5"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/new2.png" class="img-responsive"></a></div>
  				<div class="col-sm-7">
  					<p style="font-size:11px;">A workshop on website design was held on 7th, 8th and 9th of September, 2015 by
                        IEEE-NIEC’s prestigious Web Development team
                    </p>
  				</div>
  			</div>
  			<hr>
  			<div class="row">
  				<div class="col-sm-5"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/new2.png" class="img-responsive"></a></div>
  				<div class="col-sm-7">
  					<p style="font-size:11px;">A workshop on website design was held on 7th, 8th and 9th of September, 2015 by
                        IEEE-NIEC’s prestigious Web Development team
                    </p>
  				</div>
  			</div>
  			<hr>
  			<div class="row">
  				<div class="col-sm-5"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/new2.png" class="img-responsive"></a></div>
  				<div class="col-sm-7">
  					<p style="font-size:11px;">A workshop on website design was held on 7th, 8th and 9th of September, 2015 by
                        IEEE-NIEC’s prestigious Web Development team
                    </p>
  				</div>
  			</div>

  		</div>

  	</div>
  </body>
