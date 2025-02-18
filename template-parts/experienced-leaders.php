<div class="experienced__leaders">
	<div class="container-fluid custom-container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="experienced__leaders--intro text-center">
					<div class="row justify-content-center">
						<div class="col-12">
							<?php $introContent = get_field('experienced_leaders_intro_section');?>
								<?php if(isset($introContent['intro_title']) && isset($introContent['intro_title'])!=''):?>
									<h2><?php echo $introContent['intro_title']?></h2>
								<?php endif;?>
								<?php if(isset($introContent['intro_text']) && isset($introContent['intro_text'])!=''):?>
									<p><?php echo $introContent['intro_text']?></p>
								<?php endif;?>
							</div>
						</div>
					</div>
				<?php $members = get_field('member_details'); if(count($members)>0):?>
					<div class="experienced__leaders--members">
						<div class="row justify-content-center g-md-5 g-4">
							<?php foreach($members as $member):?>
								<div class="experienced__leaders--members--item col-lg-3 col-md-3 col-sm-4 col-12 text-center">
									<?php echo wp_get_attachment_image($member['member_image'],'full',false,array('class'=>'rounded-circle experienced__leaders--members--item--image'))?>
									<div class="experienced__leaders--members--item--name"><?php echo $member['member_name']?></div>
									<div class="experienced__leaders--members--item--designation"><?php echo $member['member_designation']?></div>
								</div>
							<?php endforeach;?>
						</div>
					</div>
				<?php endif?>
				<?php $cta = get_field('call_to_action'); if($cta['text']!='' || $cta['button_text']!=''):?>
					<div class="experienced__leaders--cta">
						<div class="row justify-content-center">
							<div class="col-12">
								<?php if(isset($cta['text']) && isset($cta['text'])!=''):?>
									<h4><?php echo $cta['text']?></h4>
								<?php endif;?>
								<?php if(isset($cta['text']) && isset($cta['text'])!=''):?>
									<button type="button" class="experienced__leaders--cta--button d-flex align-items-center justify-content-between" data-bs-toggle="modal" data-bs-target="#contactModal"><?php echo $cta['button_text']?> <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 9.5L9 1.5M9 1.5H1M9 1.5V9.5" stroke="white" stroke-width="1.5"/></svg></button>
								<?php endif;?>
							</div>
						</div>
					</div>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>
