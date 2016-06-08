<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="immagine">
		<?php
		if ( has_post_thumbnail() ) :
			the_post_thumbnail('');
		endif;
		?>
	</div>

<?php endwhile;?>

<div class="percorsofile">
	<div class="row">
		<?php
		if (is_page() && !is_front_page() || is_single() || is_category()) {
			?>
			<a title="<?php bloginfo('name') ?>" href="<?php bloginfo('url') ?>">
				Accueil
			</a> >
			<?php
			if (is_page())
			{
				$myAncestors = get_post_ancestors($post);
				if ($myAncestors)
				{
					$myAncestors = array_reverse($myAncestors);
					foreach ($myAncestors as $crumb)
					{
						echo '<a href="'.get_permalink($crumb).'">'.get_the_title($crumb).'</a> /; ';
					}
				}
			}
			if (is_category())
			{
				$myCategory = get_the_category();
				$myParentId = get_category($myCategory[0])->parent;
				$myParent = get_category( $myParentId );
				if (single_term_title('', false) != $myParent->name)
				{
					echo '<a href="' . esc_url( get_category_link( $myParentId ) ) . '">'.$myParent->name.'</a> > ';
				}
				echo '<span class="active">'.single_term_title('', false).'</span>';
			}
			if (is_single())
			{
				$myCategory = get_the_category();
				echo get_category_parents($myCategory[0], true, ' > ');
			}
			if (is_page() || is_single())
			{
				echo '<span class="active">'.the_title('', '', false).'</span>';
			}
			?>
			<?php
		}
		?>
		<a class="back" href="<?php echo get_category_link( 133 ); ?> "><i class="fa fa-undo" aria-hidden="true"></i> Retour blog</a>
	</div>
</div>

<div id="single-post" role="main">

<?php get_sidebar(); ?>
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="reti-sociali">
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
			</div>
		</header>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content">
			<?php
				if ( has_post_thumbnail() ) :
					the_post_thumbnail();
				endif;
			?>
			<h4><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('j F Y'); ?> <i class="fa fa-tags" aria-hidden="true"></i> <?php the_category(', '); ?></h4>
			<?php the_content(); ?>
		</div>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
		</footer>
		<?php do_action( 'foundationpress_post_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_post_after_comments' ); ?>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer();
