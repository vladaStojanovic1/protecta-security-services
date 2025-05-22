<?php
$single_service_content = get_field( 'single_service_content' );

?>
<section class="m-singleService sections-spacing">
    <div id="scroll"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" data-aos="fade-up"
                 data-aos-offset="100"
                 data-aos-easing="ease-in-sine">
                <div class="m-singleService__content">
                    <?php echo $single_service_content; ?>
                </div>
            </div>
        </div>
    </div>

</section>