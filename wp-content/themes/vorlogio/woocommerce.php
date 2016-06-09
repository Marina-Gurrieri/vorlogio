<?php
/**
 * Basic WooCommerce support
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="promozione">
	<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/promo1.jpg" alt="" />
</div>

<div class="percorsofile">
	<div class="row">
		<div class="small-12 columns">
			<?php
			$args = array(
				'delimiter' => ' <span>></span> '
			);
			 woocommerce_breadcrumb( $args ); ?>
			<a class="back" href="<?php bloginfo('url') ?> "><i class="fa fa-undo" aria-hidden="true"></i> Retour</a>
		</div>
	</div>
</div>

<div class="row">
	<aside class="sidebar">
		<?php dynamic_sidebar( 'products-widgets' ); ?>
	</aside>
	<div class="prodotto small-12 large-8 columns" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( woocommerce_content() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
</div>

<div class="promozione">
	<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/promo2.jpg" alt="" />
</div>

<?php get_footer();
