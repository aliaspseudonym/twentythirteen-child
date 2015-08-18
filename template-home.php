<?php
/* Template Name: Home Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div id="toprow">
			<ul id="buttonrow">
					<li class="signpost" id="panel1b"><a href="<?php echo home_url('/'); ?>portfolio-type/web-development/"></a></li>
					<li class= "signpost" id="panel2b"><a href="<?php echo home_url('/'); ?>about-me"></a></li>
					<li class="signpost" id="panel3b"><a href="<?php echo home_url('/'); ?>category/blog/"></a></li>
					<li class="signpost" id="panel4b"><a href="#"></a></li>
				</ul>
		</div>	
		<div class="lander">
		<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/08/blank.png" />
		</div> <!-- .lander -->

		
		
			<div class="hide">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->
			<?php endwhile; ?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>