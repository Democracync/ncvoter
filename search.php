<?php get_header(); ?>


<!-- Content starts here ********************************** -->
<div class="main-wrapper" id="top">

<div class="page-content-container">

  <section class="page-main-content">
    <?php if (have_posts()) : ?>

			<article id="post-<?php the_ID(); ?>">
				<h1>Search Results for &ldquo;<?php the_search_query(); ?>&rdquo;</h1>
				<ol>

					<?php while (have_posts()) : the_post(); ?>

					<li>
						<h3 class="search-results"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
					</li>

					<?php endwhile; ?>

				</ol>
			</article>
			<nav>
				<p><?php posts_nav_link('&nbsp;&bull;&nbsp;'); ?></p>
			</nav>

			<?php else : ?>

			<article>
				<h1>No Results Found</h1>
				<p>Sorry, your search did not return any results. Try again?</p>

        <div class="content-section-search">
				<?php get_search_form(); ?>
        </div>

			</article>

			<?php endif; ?>

</section>

<?php get_sidebar(); ?>

</div> <!-- end .page-content-container -->

</div> <!-- end .main-wrapper -->

<?php get_footer(); ?>
