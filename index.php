<?php get_header(); ?>
<div id="content_body">
<section>
<?php if (have_posts()) :
		while (have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>
		<article><?php the_content(); ?></article>

        <?php get_sidebar(); ?>

	<?php endwhile;
	elseif (is_404()) : ?>

		<article>
		<h1>We're sorry...</h1>
		<p>Looks like we can't find the page you are looking for!</p>
		</article>

	<?php endif; ?>

  <div class="row">
	<div class="twelve column">
	  <img src="/wp-content/uploads/2016/03/slide-3.jpg">
	</div>
  </div>

  <div class="row" id="secondary_menu">
	<div class="three columns">
	  <div class="box _center" id="box_1">
		<h2>Obstetrics & Gynecology</h2>
	  </div>
	</div>
	<div class="three columns">
	  <div class="box _center" id="box_2">
		<h2>Midwifery</h2>
	  </div>
	</div>
	<div class="three columns">
	  <div class="box _center" id="box_3">
		<h2>Patient Portal</h2>
	  </div>
	</div>
	<div class="three columns">
	  <div class="box _center" id="box_4">
		<h2>Book an Appointment</h2>
	  </div>
	</div>
  </div>



</section>
</div>
<?php get_footer(); ?>