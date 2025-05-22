<?php
$as_small_title = get_field("as_small_title");
$as_title = get_field("as_title");
$as_text = get_field("as_text");

$as_item_image_1 = get_field("as_item_image_1");
$as_item_image_2 = get_field("as_item_image_2");
$as_item_image_3 = get_field("as_item_image_3");
$as_item_text_1 = get_field("as_item_text_1");
$as_item_text_2 = get_field("as_item_text_2");
$as_item_text_3 = get_field("as_item_text_3");
$as_item_title_1 = get_field("as_item_title_1");
$as_item_title_2 = get_field("as_item_title_2");
$as_item_title_3 = get_field("as_item_title_3");
?>
<section class="m-abse sections-spacing">
    <div class="container">
        <div class="row m-abse__firstRow justify-content-center">
            <div class="col-lg-7 text-center" data-aos="fade-down"
                 data-aos-offset="100"
                 data-aos-easing="ease-in-sine">
                <p class="primary-text-color fw-semibold mb-2 fst-italic text-nowrap"> <?php echo $as_small_title ?></p>
                <h1 class="text-uppercase lh-1 mb-4"><?php echo $as_title ?></h1>
                <p class="mb-0"><?php echo $as_text; ?></p>
            </div>
        </div>

        <div class="row m-abse__secondRow align-items-center">
            <div class="col-lg-6" data-aos="fade-right"
                 data-aos-offset="100"
                 data-aos-easing="ease-in-sine">
                <div class="m-abse__itemImage" style="background-image: url(<?php echo $as_item_image_1 ?>)"></div>
            </div>
            <div class="col-lg-6" data-aos="fade-left"
                 data-aos-offset="100"
                 data-aos-easing="ease-in-sine">
                <div class="m-abse__secondRow--textBox px-lg-5 mt-4 mt-lg-0 h-100">
                    <h2 class="mb-4 text-uppercase lh-1 text-white"><?php echo $as_item_title_1; ?></h2>
                    <p class="text-white"><?php echo $as_item_text_1; ?></p>
                </div>
            </div>
        </div>

        <div class="row m-abse__secondRow flex-row-reverse align-items-center">
            <div class="col-lg-6" data-aos="fade-left"
                 data-aos-offset="100"
                 data-aos-easing="ease-in-sine">
                <div class="m-abse__itemImage" style="background-image: url(<?php echo $as_item_image_2 ?>)"></div>
            </div>
            <div class="col-lg-6" data-aos="fade-right"
                 data-aos-offset="100"
                 data-aos-easing="ease-in-sine">
                <div class="m-abse__secondRow--textBox px-lg-5 mt-4 mt-lg-0 h-100">
                    <h2 class="mb-4 text-uppercase lh-1 text-white"><?php echo $as_item_title_2; ?></h2>
                    <p class="text-white"><?php echo $as_item_text_2; ?></p>
                </div>
            </div>
        </div>

        <div class="row m-abse__secondRow align-items-center pb-5">
            <div class="col-lg-6" data-aos="fade-right"
                 data-aos-offset="100"
                 data-aos-easing="ease-in-sine">
                <div class="m-abse__itemImage" style="background-image: url(<?php echo $as_item_image_3 ?>)"></div>
            </div>
            <div class="col-lg-6" data-aos="fade-left"
                 data-aos-offset="100"
                 data-aos-easing="ease-in-sine">
                <div class="m-abse__secondRow--textBox px-lg-5 mt-4 mt-lg-0 h-100">
                    <h2 class="mb-4 text-uppercase lh-1 text-white"><?php echo $as_item_title_3; ?></h2>
                    <p class="text-white"><?php echo $as_item_text_3; ?></p>
                </div>
            </div>
        </div>

    </div>
</section>