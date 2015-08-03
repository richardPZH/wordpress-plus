<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
		<!-- </div>#main -->
		<div id="footer" role="contentinfo">
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with four columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>
                                <div class="page_navi"><?php par_pagenavi(9); ?></div>
				<div id="site-info" style="margin-top:20px;width:100%;text-align:center;color:gray;font-weight: bold;text-decoration: none;vertical-align: baseline;background: transparent;font-family: "&#21326;&#25991;&#29733;&#29632;", "Oswald", "Lucida Sans Unicode", "Lucida Grande", sans-serif;font-size: 48px;letter-spacing: -0.02em;text-shadow: 2px 2px 1px #000;">
					COPYRIGHT @ 2013-2015 <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" style="color:#28A3C2;font-weight: bold;text-decoration: none;vertical-align: baseline;background: transparent;font-family: "&#21326;&#25991;&#29733;&#29632;", "Oswald", "Lucida Sans Unicode", "Lucida Grande", sans-serif;font-size: 48px;letter-spacing: -0.02em;text-shadow: 2px 2px 1px #000;">
						<?php bloginfo( 'name' ); ?>
					</a>
				</div><!-- #site-info -->

				<div id="site-generator">
					<?php do_action( 'twentyten_credits' ); ?>
				</div><!-- #site-generator -->

		</div><!-- #footer -->
	</div><!-- #wrapper -->
	<?php
		/* Always have wp_footer() just before the closing </body>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to reference JavaScript files.
		 */
		wp_footer();
	?>
<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?55f9f7926c1401a0780191b129807f61";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
</script>
</body>
</html>
