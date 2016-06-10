<?php
/*
Template Name: Nouveaux produits
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
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile;?>
	</div>
</div>

<div class="promozione">
	<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/promo2.jpg" alt="" />
</div>

<?php get_footer();
