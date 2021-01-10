<footer id="footer">
<?php
$copyright_text = get_field('copyright_text','option');
?>
	<div class="container">
		<div class="row top">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<?php
				if (is_active_sidebar('footer-sidebar-1')) {
					dynamic_sidebar('footer-sidebar-1');
				}
				?>

			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
				<?php
				if (is_active_sidebar('footer-sidebar-2')) {
					dynamic_sidebar('footer-sidebar-2');
				}
				?>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
				<?php
				if (is_active_sidebar('footer-sidebar-3')) {
					dynamic_sidebar('footer-sidebar-3');
				}
				?>
			</div>
		</div>

		
		<div class="row bottom">
			<div class="col-xs-12">
				<p><?php echo $copyright_text;?></p>
			</div>
		</div>
	</div>
</footer>

</div>


<?php wp_footer(); ?>
</body>

</html>