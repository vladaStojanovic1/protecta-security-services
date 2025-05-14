<nav class="m-nav">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-3 text-lg-start text-center">
                <a href="/" class="m-nav__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/007-logo.png" alt="007 logo">
                </a>
            </div>

            <div class="col-md-6 d-none d-lg-flex">
                <div class="d-flex jus  tify-content-end">
                    <div class="d-flex align-items-center me-4">
                        <div class="yellow-icon d-flex justify-content-center align-items-center me-3">
                            <i class="bi bi-telephone-fill fs-4 primary-text-color"></i>
                        </div>

                        <div>
                            <p class="mb-0 fs-14 text-muted">On-Call Service 24/7</p>
                            <a class="primary-text-color fw-bold" href="tel:702-382-6150">702-382-6150</a>
                        </div>
                    </div>

                   <div class="d-flex align-items-center">
                       <div class="yellow-icon d-flex justify-content-center align-items-center me-3">
                           <i class="bi bi-envelope-fill fs-4 primary-text-color"></i>
                       </div>
                       <div>
                           <p class="mb-0 fs-14 text-muted">Email Address</p>
                           <a class="primary-text-color fw-bold" href="mailto:info@007securityservice.com">info@007securityservice.com</a>
                       </div>
                   </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-2 p-lg-0 dark-bg mt-3 d-flex justify-content-between">
                    <div class="m-nav__desktop d-none d-lg-flex">
                        <?php wp_nav_menu( array( 'theme_location' => 'desktop-menu', 'menu_class' => 'd-flex', )); ?>
                    </div>

                    <button class="d-lg-none hamburger-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                        <i class="bi bi-grid-3x3-gap fs-2 text-white"></i>
                    </button>

                    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                        <div class="offcanvas-header">
                            <h5 id="offcanvasTopLabel">Offcanvas top</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
                        </div>
                    </div>

                    <div class="d-flex align-items-center m-nav__social">
                        <a href="" class="text-white me-3"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="" class="text-white me-3"><i class="bi bi-twitter fs-5"></i></a>
                        <a href="" class="text-white me-3"><i class="bi bi-instagram fs-5"></i></a>
                    </div>

                </div>
            </div>
        </div>



    </div>
</nav>


