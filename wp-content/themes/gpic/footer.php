<?php
/**
 * The template for displaying the footer
 * @package GPIC
 */
?>
	</main><!-- #content -->

	<footer>
		<div class="container">
            <div class="footer">
				<div class="contact">
					<h3><span>Contacto</span>¿Quieres ponerte en contacto con nosotros?</h3>
					<p>sbo@gpic.es</p>
					<p>954285612
					<a href="https://twitter.com/GPICSL"><i class="gpic-twitter-logo-silhouette"></i></a>
					<a href="https://www.linkedin.com/company/gpic-s.l/" target="_blank"><i class="gpic-linkedin-logo"></i></a></p>
					<p> Avenida Blas Infante nº 6 <br>
							Edificio Urbis, Planta 10, A <br>
							41011 Sevilla <br></p>
				</div>
				<div class="info">
					<div class="certifications">
						<img src="<?php bloginfo('template_url'); ?>/dist/assets/img/certification__iso.png" alt="">
						<img src="<?php bloginfo('template_url'); ?>/dist/assets/img/certification__itil.png" alt="">
					</div>
					<div class="links">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer',
								'container'      => 'ul'
							) );
						?>
					</div>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

<script src="<?php bloginfo('template_url'); ?>/dist/assets/js/static/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/dist/assets/js/static/glide.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/dist/assets/js/static/mui.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/dist/assets/js/custom.min.js"></script>

</body>
</html>
