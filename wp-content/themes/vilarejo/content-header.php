<header id="header" class="clearfix wrapper">
    <div class="grid">
        <div class="col-2" push-left="off-1">
            <a class="logo-wrapper" href="<?php echo get_site_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" />
            </a>
        </div>
        <div class="col-9 col-bottom menu-wrapper">
            <ul class="header-contact">
                <li class="email"></li>
                <li class="whatsapp"></li>
                <li class="telephone"></li>
            </ul>
            <?php wp_nav_menu(array('theme_location' => 'header-menu','container' => 'none')); ?>
        </div>
    </div>
</header>
