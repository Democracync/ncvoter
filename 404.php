<?php get_header(); ?>


<!-- Content starts here ********************************** -->
<div class="main-wrapper" id="top">

<div class="page-content-container">

  <section class="page-main-content">
    <h1>Error 404 - Page Not Found</h1>
  				<p>Sorry, but we couldn't find the page you were looking for! </p>

  <p>You can go back to the <a href="<?php echo home_url(); ?>" title="Home">home page</a> or use the form below to search the site.</p>
  <div class="content-section-search">
  <?php get_search_form(); ?>
  </div>
  <br />

  <h2>Other resources</h2>
  <p>Here are some pages which you may find helpful:</p>
  <ul>
  <li><a href="<?php echo home_url(); ?>/who-can-vote/" title="Who can vote in NC?">Who's eligible to vote?</a></li>
  <li><a href="<?php echo home_url(); ?>/registering-to-vote/" title="Registering to vote">Registering</a></li>
  <li><a href="<?php echo home_url(); ?>/voting-in-nc/" title="How to vote in NC">Voting in North Carolina</a></li>
  <li><a href="<?php echo home_url(); ?>/do-more/" title="Help increase voter turnout">Do more</a></li>
  <li><a href="<?php echo home_url(); ?>/share-your-story/" title="Tell us your story">Share your voting story</a></li>
  <li><a href="<?php echo home_url(); ?>/contact-us/" title="Contact us">Contact us</a></li>
  </ul>
</section>

<?php get_sidebar(); ?>

</div> <!-- end .page-content-container -->

</div> <!-- end .main-wrapper -->

<?php get_footer(); ?>
