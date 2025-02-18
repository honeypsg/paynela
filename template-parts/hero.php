<div class="hero__section">
	<div class="hero__section--intro">
		<?php $heroData = get_field('hero_details'); ?>
		<div class="container-fluid custom-container">
			<div class="hero__section--intro--title">
				<h1>
					<?php echo $heroData['hero_fixed_heading'] ?>
					<div class="hero__section--intro--title--slider">
						<div class="hero__section--intro--title--slider--container">
							<?php foreach ($heroData['hero_changing_heading'] as $title): ?>
								<div><?php echo $title['title'] ?></div>
							<?php endforeach; ?>
						</div>
					</div>
				</h1>
			</div>
			<div class="hero__section--intro--description">
				<?php echo $heroData['hero_description'] ?>
			</div>
		</div>
	</div>
	<div class="hero__section--video">
		<video id="hero__section--video--id" loop muted playsinline autoplay>
			<?php $heroData = get_field('hero_details'); ?>
			<?php if (isset($heroData['hero_video_mov']['url']) && $heroData['hero_video_mov']['url'] != ''): ?>
				<source src="<?php echo $heroData['hero_video_mov']['url'] ?>" type="video/quicktime">
			<?php endif; ?>
			<?php if (isset($heroData['hero_video']['url']) && $heroData['hero_video']['url'] != ''): ?>
				<source src="<?php echo $heroData['hero_video']['url'] ?>" type="video/webm">
			<?php endif; ?>
			<?php if (isset($heroData['hero_vidhero_video_mp4eo']['url']) && $heroData['hero_video_mp4']['url'] != ''): ?>
				<source src="<?php echo $heroData['hero_vhero_video_mp4ideo_mov']['url'] ?>" type="video/mp4">
			<?php endif; ?>
		</video>
	</div>
	<?php $marquee_text = get_field('marquee_text');?>
	<div class="hero__section--marquee">
		<div class="hero__section--marquee--inner">
			<?php for($i=0;$i<=10;$i++):?>
			<span><?php echo $marquee_text?></span>
			<span class="hero__section--marquee--inner--seperator">-</span>
			<?php endfor;?>
		</div>
	</div>
</div>