<footer class="footer">
	<div class="container-fluid custom-container">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6 col-12 text-lg-start text-center">
				<a class="d-block" href="<?php echo trailingslashit(home_url()); ?>">
					<img class="productLogo" src="<?php echo wp_get_attachment_image_url(get_field('footer_logo','options'), 'full'); ?>" alt="Paynela Logo">
				</a>
			</div>
			<div class="col-lg-6 col-12 text-lg-end text-center">
				<div class="footer--copyright">
					<?php echo get_field('copyright_statement','options')?>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="modal fade" id="contactModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content text-center">
			<button type="button" class="btn-close modal-close" data-bs-dismiss="modal" aria-label="Close"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M2.2438 0.778533C1.95091 0.485638 1.47604 0.485638 1.18315 0.778533C0.890257 1.07143 0.890257 1.5463 1.18315 1.8392L5.93832 6.59441L0.66049 11.8723C0.367598 12.1652 0.367598 12.6401 0.66049 12.9329C0.953382 13.2258 1.42825 13.2258 1.72115 12.9329L6.99898 7.65507L12.2768 12.9329C12.5697 13.2258 13.0446 13.2258 13.3374 12.9329C13.6303 12.64 13.6303 12.1652 13.3374 11.8723L8.05963 6.59441L12.8148 1.83922C13.1077 1.54632 13.1077 1.07145 12.8148 0.778551C12.5219 0.485656 12.047 0.485657 11.7541 0.778552L6.99898 5.53374L2.2438 0.778533Z" fill="#ffffff" />
				</svg>
			</button>
			<h3 class="modal-title" id="contactModalLabel"><?php the_field('modal_title', 'options'); ?></h3>
			<div class="modal-form">
				<?php echo do_shortcode('[wpforms id="'.get_field('select_form','options').'" title="Contact Us"]');?>
			</div>
		</div>
	</div>
</div>

</div> <!-- closes 'backgroundWrap'-->

<?php wp_footer(); ?>
</body>

</html>