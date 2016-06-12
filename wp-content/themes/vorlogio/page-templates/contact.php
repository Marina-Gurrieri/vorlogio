<?php
/*
Template Name: Contact
*/
get_header(); ?>

<div class="row inizio">
	<div class="small-12 column">
		<a class="back" href="<?php bloginfo('url') ?> "><i class="fa fa-undo" aria-hidden="true"></i> Retour accueil</a>
		<?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
		<?php endwhile;?>
		<h2><?php the_field('under_contact'); ?></h2>
	</div>
</div>

<div class="mappa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.7429508145715!2d7.748231083372172!3d48.58212209996458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c85253398843%3A0xe7152777f55e2738!2sCath%C3%A9drale+Notre+Dame+de+Strasbourg!5e0!3m2!1sfr!2sfr!4v1465698772615" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="row">
	<aside class="large-3 column text-center">
		<a class="logo" href="<?php bloginfo(url) ?>"><img src="<?php bloginfo('template_directory')  ?>/assets/vorlogio/logo.png" alt="<?php bloginfo('name') ?>" /></a>
		<?php the_field('indirizzo'); ?>
		<div class="sociali">
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		</div>
	</aside>
	<div class="large-8 small-offset-1 column form" role="main">
		<h3>Formulaire de contact</h3>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile;?>
	</div>
</div>


<?php get_footer();
