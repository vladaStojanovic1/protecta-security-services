<?php
/* Template Name: CCTV Monitoring */
get_header(); ?>
    <div id="content" class="site-content">
        <?php
        include(get_template_directory() . '/inc/_partials/_navigation.php');
        headerPage();
        ?>

        <main id="main" class="page-main site-main" role="main">
            <?php include(get_template_directory() . '/template-parts/sections/call.php'); ?>

        </main>
    </div>
<?php
get_footer();