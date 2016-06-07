<?php
/*
Template Name: Page d'accueil
*/
get_header(); ?>
<div class="benvenuto">
	<div class="promozione">
		<img src="<?php bloginfo(url) ?><?php the_field('promotion_image'); ?>" alt="" />
		<div class="bianco">
			<p><?php the_field('promotion'); ?></p>
			<p><?php the_field('promotion_petit_champ'); ?></p>
			<a href="<?php the_field('promotion_lien'); ?>">Tout voir ></a>
		</div>
	</div>
	<div class="row nuovo">
		<div class="colmuns small-12">
			<h2>Nos nouveautés</h2>
			<div class="owl-carousel owl-nuovo owl-theme">
				<?php
				$args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 12, 'orderby' =>'date','order' => 'DESC' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<div class="">
						<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>
							<h3><?php the_title(); ?></h3>
							<h3 class="price"><?php echo $product->get_price_html(); ?></h3>
						 </a>
					 </div>
				 <?php endwhile; ?>
				 <?php wp_reset_query(); ?>
		 	</div>
		</div>
	</div>
	<div class="row vendita">
		<div class="colmuns small-12">
			<h2>Nos meilleures ventes</h2>
			<div class="owl-carousel owl-nuovo owl-theme">
				<?php
				$args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 12, 'meta_key' => 'total_sales' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<div class="">
						<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>
							<h3><?php the_title(); ?></h3>
							<h3 class="price"><?php echo $product->get_price_html(); ?></h3>
						 </a>
					 </div>
				 <?php endwhile; ?>
				 <?php wp_reset_query(); ?>
		 	</div>
		</div>
	</div>
	<div class="row notizie">
		<div class="colmuns small-12">
			<h2>Dernières actualités <a href="<?php echo get_category_link( 133 ); ?> ">Voir tout</a></h2>
		</div>
		<?php
			$catquery = new WP_Query( 'cat=133&posts_per_page=3' );
			while($catquery->have_posts()) : $catquery->the_post();
		?>
		<article class="columns medium-12 large-4">
			<?php if ( has_post_thumbnail() ) { ?>
				<header>
					<?php the_post_thumbnail(); ?>
				</header>
				<section>
					<h3><?php the_title(); ?></h3>
					<h4><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('j F Y'); ?></h4>
					<section>
						<?php the_excerpt() ?>
					</section>
					<a href="<?php the_permalink() ?>">Lire plus...</a>
				</section>
			<? } ?>
		</article>
		<?php endwhile; ?>
	</div>
	<div class="marques">

		<div class="row owl-carousel owl-marques owl-theme">
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/A-Lange-Sohne.jpg" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/apple.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/audemars.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/bellandross.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/blancpain.jpg" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/breguet.jpg" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/breitling.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/cartier.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/chanel.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/chopard.jpg" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/franckmuller.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/Girard-Perregaux.jpg" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/hamilton.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/hublot.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/iwc.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/jaeger-lecoultre.jpg" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/jaquet_droz.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/longines.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/mauriclacroix.jpg" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/omega.jpg" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/oris.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/panerai.jpg" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/patek.jpg" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/rolex.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/samsung.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/seiko.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/sinn.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/tagheuer.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/tissot.jpg" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/tudor.png" alt="" />
			<img src="<?php bloginfo('template_directory') ?>/assets/vorlogio/marques/zenith.png" alt="" />
		</div>
	</div>
</div>
<?php get_footer();
