<?php get_header(); ?>


<!-- Content starts here ********************************** -->
<div class="main-wrapper" id="top">

<div class="page-content-container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="page-main-content">
    <h1><?php the_title_attribute(); ?></h1>

    <?php the_content(); ?>

<?php endwhile; else: ?>

  <section>
    <p>There's nothing here!</p>
  </section>

<?php endif; ?>

</section>

<?php get_sidebar(); ?>

</div> <!-- end .page-content-container -->

</div> <!-- end .main-wrapper -->

<?php get_footer(); ?>
