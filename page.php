<?php get_header(); ?>
	<div id="content" class="container">
		<div id="inner-content">
            <div id="main" class="main" role="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<div class="entry-content" itemprop="articleBody">
							<?php the_content(); ?>
                        </div> <!-- end article section -->
					</article> <!-- end article -->
					<?php endwhile; else : ?>
							<article id="post-not-found" class="hentry clearfix">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article>
					<?php endif; ?>
				</div> <!-- end #main -->
                <?php get_sidebar ();?>
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
<?php get_footer(); ?>
