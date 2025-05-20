<?php
$experienced_background  = get_field('experienced_background');
$experienced_title = get_field('experienced_title');
$experienced_text = get_field('experienced_text');
$e_item_title_1 = get_field('e_item_title_1');
$e_item_title_2 = get_field('e_item_title_2');
$e_item_title_3 = get_field('e_item_title_3');
$e_item_title_4 = get_field('e_item_title_4');
$e_item_percentage_1 = get_field('e_item_percentage_1');
$e_item_percentage_2 = get_field('e_item_percentage_2');
$e_item_percentage_3 = get_field('e_item_percentage_3');
$e_item_percentage_4 = get_field('e_item_percentage_4');
?>
<section class="m-exp sections-spacing">
    <div class="overlay-1" style="background-image: url(<?php echo $experienced_background; ?>)"></div>

    <div class="container position-relative">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-5">
                <div>
                    <h1 class="text-uppercase lh-1 text-white"><?php echo $experienced_title; ?></h1>
                    <span class="line-text"></span>
                </div>

            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <p class="text-white mb-5"><?php echo $experienced_text; ?></p>

                <div>
                    <div class="progress-bar-container">
                        <div class="label position-relative"><?php echo $e_item_title_1; ?></div>
                        <div class="bar-bg">
                            <div class="bar-fill" data-percent="<?php echo $e_item_percentage_1; ?>"></div>
                        </div>
                    </div>

                    <div class="progress-bar-container">
                        <div class="label position-relative"><?php echo $e_item_title_2; ?></div>
                        <div class="bar-bg">
                            <div class="bar-fill" data-percent="<?php echo $e_item_percentage_2; ?>"></div>
                        </div>
                    </div>
                    <div class="progress-bar-container">
                        <div class="label position-relative"><?php echo $e_item_title_3; ?></div>
                        <div class="bar-bg">
                            <div class="bar-fill" data-percent="<?php echo $e_item_percentage_3; ?>"></div>
                        </div>
                    </div>
                    <div class="progress-bar-container">
                        <div class="label position-relative"><?php echo $e_item_title_4; ?></div>
                        <div class="bar-bg">
                            <div class="bar-fill" data-percent="<?php echo $e_item_percentage_4; ?>"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>