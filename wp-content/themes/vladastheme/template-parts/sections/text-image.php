<?php
$ti_small_title = get_field( 'ti_small_title' );
$ti_title = get_field( 'ti_title' );
$ti_text = get_field( 'ti_text' );
$ti_image = get_field( 'ti_image' );

?>
<section class="m-textImage sections-spacing">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <p class="primary-text-color d-flex align-items-center fw-semibold mb-2 fst-italic text-nowrap"><span class="line-text me-3 dark-bg"></span> <?php echo $ti_small_title; ?></p> </>
                <h1 class="text-uppercase lh-1 mb-4"><?php echo $ti_title; ?></h1>
                <p><?php echo $ti_text; ?></p>

                <a href="" class="a-btn -primary mt-4 mt-md-5">Discover more</a>
            </div>

            <div class="col-md-6 col-lg-smaller mt-5 mt-md-0">
                <div class="position-relative m-textImage__image" style="background-image: url(<?php echo $ti_image; ?>)">
                    <span class="corner bottom-left"></span>
                    <span class="corner top-right"></span>
                    <span class="corner bottom-right"></span>
                    <span class="corner top-left"></span>
                    <div class="overlay-2"></div>
                </div>
            </div>
        </div>
    </div>
</section>