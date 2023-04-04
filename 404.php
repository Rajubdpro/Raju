<?php
/**
 * The template displaying 404 page (Not Found)
 */
get_header();
?>
  <section id="body_area">
<div class="container">
    <div class="row">
        <div class="col-md-12 error_page">
        <p>404 Error - Page not Found</p>
        <h1>Opps! Look likes Somthing was Wrong</h1>
        <div class="error_search">
            <?php get_search_form();?>
        </div>
        <a href="<?php echo home_url(); ?>" class="homepage">Home</a>
          </div> 
    </div>
</div>
  </section>

  <?php
    /**
    * This is footer file
    */
   get_footer();