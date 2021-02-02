    </div>
    <?php /** @link https://developer.wordpress.org/reference/functions/wp_footer/ */ ?>
    <?php wp_footer(); ?>
</body>
<footer class="footer-distributed">

			<div class="footer-right">

				<a href="https://facebook.fr"><img src="<?php echo get_template_directory_uri() .'/dist/images/facebook.svg' ?>" alt="Facebook" ></a>
				<a href="https://twitter.fr"><img src="<?php echo get_template_directory_uri() .'/dist/images/instagram.svg' ?>" alt="Instagram" ></a>
				<a href="https://instagram.fr"><img src="<?php echo get_template_directory_uri() .'/dist/images/twitter.svg' ?>" alt="Twitter" ></a>
				

			</div>
            
			<?php lpwd_clean_custom_Footer("footer-menu") ?>

		</footer>
</html>