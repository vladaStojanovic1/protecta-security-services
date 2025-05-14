<?php
$professional_bg = get_field('professional_background');
$professional_title = get_field('professional_title');
$professional_text = get_field('professional_text');
$professional_button = get_field('professional_button');
?>

<section class="m-professional">

    <div class="reveal-wrapper">
        <div class="reveal-image text-center d-flex align-items-center" >
            <div class="overlay-1" style="background-image: url(<?php echo $professional_bg; ?>)"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-xl-7 col-xxl-6">
                        <div class="position-relative z-2">
                            <h1 class="text-white text-uppercase lh-1 mb-4"><?php echo $professional_title ?></h1>
                            <p class="text-white mb-4"><?php echo $professional_text ?></p>
                            <a href="<?php echo $professional_button['url'] ?>" class="a-btn -primary"><?php echo $professional_button['title'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>