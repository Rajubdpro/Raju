<?php
/**
 * The main header file
 */
get_header();
?>
  <section id="body_area">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php the_content();?>
        </div>
    </div>
</div>
  </section>

  <?php
    /**
    * This is footer file
    */
   get_footer();?>