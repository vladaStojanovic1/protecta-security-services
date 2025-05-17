<?php
$experienced_background  = get_field('experienced_background');
$experienced_title = get_field('experienced_title');
$experienced_text = get_field('experienced_text');
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
                        <div class="label position-relative">Equipment</div>
                        <div class="bar-bg">
                            <div class="bar-fill" data-percent="85%"></div>
                        </div>
                    </div>

                    <div class="progress-bar-container">
                        <div class="label position-relative">Security</div>
                        <div class="bar-bg">
                            <div class="bar-fill" data-percent="92%"></div>
                        </div>
                    </div>
                    <div class="progress-bar-container">
                        <div class="label position-relative">Experience</div>
                        <div class="bar-bg">
                            <div class="bar-fill" data-percent="83%"></div>
                        </div>
                    </div>
                    <div class="progress-bar-container">
                        <div class="label position-relative">Protection</div>
                        <div class="bar-bg">
                            <div class="bar-fill" data-percent="93%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>