<?php get_header(); ?>
<section>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="banner">
  <?php
  //if homepage, slider, else feat. image
  if (is_front_page()) {
    if (function_exists('soliloquy')) {
      soliloquy('84');
    }
    if (function_exists('soliloquy')) {
      soliloquy('homepage-slider', 'slug');
    }
  } else {
    if ( has_post_thumbnail() ) {
      the_post_thumbnail('full');
    }
  }
  ?>
</div>

<div id="content_body">
  <div class="row" id="secondary_menu">
    <div class="three columns">
      <div class="box _center" id="box_1">
        <h2><a href="/obstetrics-gynecology-obgyn/">Obstetrics & Gynecology</a></h2>
      </div>
    </div>
    <div class="three columns">
      <div class="box _center" id="box_2">
        <h2><a href="/midwifery/">Midwifery</a></h2>
      </div>
    </div>
    <div class="three columns">
      <div class="box _center" id="box_3">
        <h2><a href="https://mycw7.eclinicalweb.com/fowh/jsp/100mp/login_new.jsp" target="_blank">Patient Portal</a></h2>
      </div>
    </div>
    <div class="three columns">
      <div class="box _center" id="box_4">
        <h2><a href="https://www.healow.com/apps/practice/focus-on-womens-health-432" target="_blank">Book an Appointment</a></h2>
      </div>
    </div>
  </div>

  <div class="row">


    <div class="<?php echo (is_front_page() || get_the_ID()==32)? 'six':'nine'?> columns">
      <article role="main">
        <h1><?php the_title(); ?></h1>
        <?php
          //if gynecology page use post type
          if (get_the_ID() == 23) {
            my_output_cpt('gynecology-type');
          } elseif (get_the_ID() == 28) {
            my_output_cpt('obstetric');
            echo '<h1>COMPLICATIONS OF PREGNANCY</h1>';
            my_output_cpt('obstetric_comp');
          }else {
            the_content();
          }
        ?>
      </article>
    </div>


<?php
//if homepage or contact page
if (is_front_page() || get_the_ID() == 32):
?>
  <div class="six columns">
    <aside>
      <div class="row">
        <div class="six columns">
          <?php if (is_front_page()): ?>
              <div class="side_widget">
                <div class="head primary">
                  <h2>NEWS <span>&</span> EVENTS</h2>
                </div>
                <div class="body">
                  <?php echo do_shortcode('[content_block id=94]'); ?>
                </div>
              </div>
          <?php else: ?>
            <div class="side_widget">
              <div class="head primary">
                <h2>FIND US!</h2>
              </div>
              <div class="body google_maps">
                <iframe frameborder="0" width="100%" height="10%" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Parkside+Obstetrics+Gynecology+%26+Infertility,+S.C.+1875+Dempster+St+%23465+Park+Ridge,+IL+60068&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=54.269804,79.013672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=parkside+obstetrics+gynecology+%26+infertility+sc+1875+dempster+st+465&amp;hnear=Park+Ridge,+Cook,+Illinois&amp;t=m&amp;cid=6935562693122326237&amp;ll=42.059744,-87.844448&amp;spn=0.044607,0.060081&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe><br /><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Parkside+Obstetrics+Gynecology+%26+Infertility,+S.C.+1875+Dempster+St+%23465+Park+Ridge,+IL+60068&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=54.269804,79.013672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=parkside+obstetrics+gynecology+%26+infertility+sc+1875+dempster+st+465&amp;hnear=Park+Ridge,+Cook,+Illinois&amp;t=m&amp;cid=6935562693122326237&amp;ll=42.059744,-87.844448&amp;spn=0.044607,0.060081&amp;z=13&amp;iwloc=A" text-align:left">View Larger Map</a>
              </div>
            </div>
          <?php endif; ?>
        </div>
        <div class="six columns">
          <?php get_sidebar(); ?>
        </div>
      </div>

      <?php if (is_front_page()): ?>
      <div class="row">
        <div class="twelve columns">
          <div class="side_widget full hours_location">
            <div class="head secondary">
              <h2>LOCATION <span>&</span> HOURS</h2>
            </div>
            <div class="body">
              <div class="row">
                <div class="six columns">
                  <?php echo do_shortcode('[content_block id=99]'); ?>
                </div>
                <div class="six columns hours_location_block">
                  <?php echo do_shortcode('[content_block id=101]'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </aside>
  </div>

<?php else: // every other page  ?>

  <aside>
    <div class="three columns u-pull-right">
      <?php get_sidebar(); ?>
    </div>
  </aside>

<?php endif; ?>


  </div>
</div>

<?php endwhile; elseif (is_404()) : ?>
  <div id="content_body">
    <article>
    <h1>We're sorry...</h1>
    <p>Looks like we can't find the page you are looking for!</p>
    </article>
  </div>
<?php endif; ?>


</section>

<?php get_footer(); ?>