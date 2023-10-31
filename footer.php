    <!-- Footer -->
    <footer class="py"> 
		<div class="container">
			<div class="d-flex justify-content-between">
				<div class="contact">
					<?php if(is_active_sidebar('footer-logo')) : ?>
						<?php dynamic_sidebar('footer-logo'); ?>
					<?php endif; ?>
					<?php if(is_active_sidebar('footer-tel')) : ?>
						<?php dynamic_sidebar('footer-tel'); ?>
					<?php endif; ?>
					<?php if(is_active_sidebar('footer-socials')) : ?>
						<?php dynamic_sidebar('footer-socials'); ?>
					<?php endif; ?>
				</div>
				<?php if(is_active_sidebar('footer-links-1')) : ?>
					<?php dynamic_sidebar('footer-links-1'); ?>
				<?php endif; ?>
				<?php if(is_active_sidebar('footer-links-2')) : ?>
					<?php dynamic_sidebar('footer-links-2'); ?>
				<?php endif; ?>
				<?php if(is_active_sidebar('footer-links-3')) : ?>
					<?php dynamic_sidebar('footer-links-3'); ?>
				<?php endif; ?>
				<?php if(is_active_sidebar('footer-links-4')) : ?>
					<?php dynamic_sidebar('footer-links-4'); ?>
				<?php endif; ?>
			</div>
			<hr class="my-5">
			<?php if(is_active_sidebar('footer-copy')) : ?>
				<?php dynamic_sidebar('footer-copy'); ?>
			<?php endif; ?>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>

</html>