<header id="header" class="clearfix wrapper">
    <div class="grid">
        <div class="col-2_sm-3_xs-12" push-left="off-1_xs-0">
            <a class="logo-wrapper" href="<?php echo get_site_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" />
            </a>
        </div>
        <div class="col-9_xs-12 col-bottom menu-wrapper">
            <ul class="header-contact">
                <li class="email tooltip hvr-float" title="contato@vilarejomaresias.com.br"></li>
                <li class="whatsapp tooltip hvr-float" title="+55 12 99653-6063"></li>
                <li class="telephone tooltip hvr-float" title="12 3865-6639"></li>
            </ul>
            <?php wp_nav_menu(array('theme_location' => 'header-menu','container' => 'none')); ?>
        </div>
    </div>
</header>
