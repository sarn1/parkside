<?php get_header(); ?>
<div id="content_body">
<section>
<?php if (have_posts()) :
		while (have_posts()) : the_post(); ?>

		  <!-- maybe this is not in a row but span 100% of width -->
		  <div class="row">
			<div class="twelve columns">
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

		  <div class="row">
			<div class="six columns">
			  <article role="main">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			  </article>
			</div>

			<div class="six columns">
			  <aside>
				<?php if (is_front_page()): ?>
				  <div class="row">
					<div class="six columns">
                      <?php if (is_front_page()): ?>
						  <div class="side_widget">
							<div class="head primary">
							  <h2>news <span>&</span> events here</h2>
							</div>
							<div class="body">
							  content ddddddd
							</div>
						  </div>
					  <?php else: ?>
						google map here
					  <?php endif; ?>
					</div>
					<div class="six columns">
					  <?php get_sidebar(); ?>
					</div>
				  </div>

			<?php if (is_front_page()): ?>


			<div class="row">
			  <div class="twelve columns">
				<div class="side_widget full">
				  <div class="head secondary">
					<h2>location <span>&</span> hours</h2>
				  </div>
				  <div class="body">
                    <div class="row">
                      <div class="six columns">
                          location
                      </div>
                      <div class="six columns">
                          hours
                      </div>
				  </div>
				</div>
			  </div>
			</div>
			<?php endif; ?>
				<?php else: ?>
				<div class="row">
				  <div class="twelve columns">
					<?php get_sidebar(); ?>
				  </div>
				</div>
				<?php endif; ?>

			  </aside>
		  	</div>




	<?php endwhile;
	elseif (is_404()) : ?>

		<article>
		<h1>We're sorry...</h1>
		<p>Looks like we can't find the page you are looking for!</p>
		</article>

	<?php endif; ?>
</section>
</div>
<?php get_footer(); ?>