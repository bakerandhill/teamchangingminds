<?php
/* The theme footer file. */
?>
	</section>
		</main>
		<footer class="footer-site" id="footer-site">
			<section class="footer-crisis">
				<div class="wrapper">
					<div class="column">
						<?php
						// render content from widget area
						dynamic_sidebar( 'widget-crisis' );
						?>
					</div>
				</div>
			</section>
			<section class="footer-links">
				<div class="wrapper">
					<div class="row">
						<div class="column-third footer-subscribe">
							<?php
							// render content from widget area
							dynamic_sidebar( 'widget-subscribe' );
							?>
						</div>
						<div class="column-third footer-hashtag">
							<?php
							// render content from widget area
							dynamic_sidebar( 'widget-hashtag' );
							?>
						</div>
						<div class="column-third footer-nav">
							<?php
							// render content from widget area
							dynamic_sidebar( 'widget-footer-nav' );
							?>
						</div>
					</div>		
				</div>
				<div class="wrapper">
					<div class="row">
						<div class="column footer-copyright">
							<?php
							// render content from widget area
							dynamic_sidebar( 'widget-copyright' );
							?>
						</div>
					</div>
				</div>
			</section>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>