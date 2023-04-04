<?php
/**
 * The Template dispaing the page
 */
get_header();
?>
  <section id="body_area">
<div class="container">
    <div class="row">
        <div class="col-md-9">
       <?php get_template_part('template-part/post_setup')?>
        </div>

        <div class="col-md-3">
            <?php get_sidebar();?>
        </div>
    </div>
</div>
  </section>

  <?php
    /**
    * This is footer file
    */
   get_footer();