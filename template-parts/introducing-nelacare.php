<div class="introducing__nelacare">
    <div class="introducing__nelacare--intro">
        <div class="container-fluid custom-container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="introducing__nelacare--intro--content">
                        <?php $introContent = get_field('nroducing_nelacare_intro_section'); ?>
                        <?php if (isset($introContent['intro_title']) && isset($introContent['intro_title']) != ''): ?>
                            <h2><?php echo $introContent['intro_title'] ?></h2>
                        <?php endif; ?>
                        <?php if (isset($introContent['intro_text']) && isset($introContent['intro_text']) != ''): ?>
                            <p><?php echo $introContent['intro_text'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="introducing__nelacare--intro--accordian accordion" id="accordionExample">
                        <?php $accordions = get_field('accordian');
                        if (count($accordions) > 0): ?>
                            <?php $i = 0;
                            foreach ($accordions as $accordion): ?>
                                <div class="introducing__nelacare--intro--accordion--item accordion-item">
                                    <button class="accordion-button open collapsed introducing__nelacare--intro--accordion--item--button" type="button" data-bs-toggle="collapse" data-bs-target="#accordian-<?php echo $i ?>" aria-expanded="true" aria-controls="accordian-<?php echo $i ?>">
                                        <div class="introducing__nelacare--intro--accordion--item--button--title">
                                            <div class="introducing__nelacare--intro--accordion--item--button--title--eyebrow"><?php echo $accordion['eyebrow_text'] ?></div>
                                            <h5><?php echo $accordion['accordian_title'] ?></h5>
                                        </div>
                                    </button>
                                    <div id="accordian-<?php echo $i ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body introducing__nelacare--intro--accordion--item--body">
                                            <?php echo $accordion['accordian_content'] ?>
                                        </div>
                                    </div>
                                </div>
                            <?php $i++; endforeach ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="introducing__nelacare--nelagaurd">
        <div class="introducing__nelacare--nelagaurd--intro">
            <div class="container-fluid custom-container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <?php $data = get_field('stay_protected_section');?>
                        <div class="introducing__nelacare--nelagaurd--intro--title">
                            <h2>
                                <span><?php echo $data['title_1']?></span>
                                <?php echo wp_get_attachment_image($data['title_image'],'full')?>
                                <span><?php echo $data['title_2']?></span>
                            </h2>
                        </div>
                        <div class="introducing__nelacare--nelagaurd--intro--description">
                            <?php echo $data['description']?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $productSection = get_field('products_section');?>
        <div class="introducing__nelacare--nelagaurd--products-section">
            <div class="introducing__nelacare--nelagaurd--products-section--products d-block d-sm-flex align-items-center justify-content-between">
                <?php foreach($productSection['product_details'] as $product):?>
                    <div class="introducing__nelacare--nelagaurd--products-section--products--item">
                        <h6><?php echo $product['title']?></h6>
                    </div>
                <?php endforeach;?>
            </div>
            <video width="100%" loop autoplay muted playsinline class="d-none d-sm-block">
                <source src="<?php echo $productSection['desktop_background']['url']?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>