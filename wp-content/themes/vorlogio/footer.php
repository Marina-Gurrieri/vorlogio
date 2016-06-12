<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<footer id="footer">
			<div class="nero">
				<div class="row">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-nav' ) ); ?>
					<ul class="reti-sociali medium-3 column">
						<li>
							<h4>Suivez-nous</h4>
							<ul class="sub-menu">
								<li>
									<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="pagamento medium-3 column">
						<li>
							<h4>Paiement sécurisé</h4>
							<ul class="sub-menu">
								<li>
									<i class="fa fa-cc-paypal" aria-hidden="true"></i>
									<i class="fa fa-cc-mastercard" aria-hidden="true"></i>
									<i class="fa fa-cc-visa" aria-hidden="true"></i>
								</li>
								<li>
									<div class="row">
										<div class="large-6 column">
											LIVRAISON 24h en relais <b>offerte</b>
										</div>
										<div class="large-6 column">
											Livraison/Retour
											<b>GRATUITS</b>
										</div>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="row newsletter">
					<div class="small-12 column">
						<h4>Inscription Newsletter</h4>
						<input type="email" name="name" value="" class="email" placeholder="Saisissez votre adresse email" />
						<input type="button" name="name" value="S'inscrire" class="buitoni" />
					</div>
				</div>
			</div>
			<div class="row bianco">
				<div class="small-12 column">© 2016 - Vorlogio. Design et intégration réalisés par Marina Gurrieri.</div>
			</div>
		</footer>

<script src="<?php bloginfo('template_directory') ?>/assets/components/owl.carousel/dist/owl.carousel.min.js" type="text/javascript"></script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
