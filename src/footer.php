			<!-- footer -->
			<footer class="footer text-center" role="contentinfo">
				<p>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/totem_logo.png" alt="Totem Boards" />
				</p>
				<p class="footer-description"><?php bloginfo('description'); ?></p>
				<p class="footer-social">
					<a href="" target="_blank" ><i class="fi-social-facebook"></i></a>
					<a href="" target="_blank" ><i class="fi-social-instagram"></i></a>
					<a href="" target="_blank" ><i class="fi-social-twitter"></i></a>
					<a href="" target="_blank" ><i class="fi-social-linkedin"></i></a>
				</p>

				<!-- copyright -->
				<div class="copyright">
				Copyright &copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>.
				</div>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<script>
      $(document).ready(function(){
    		$(document).foundation();
    	});
    </script>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
