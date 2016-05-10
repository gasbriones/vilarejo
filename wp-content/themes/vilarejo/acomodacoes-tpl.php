<?php
/*
Template Name: Acomodacoes
*/
get_header();

$page_contato = 14;

?>
<body <?php body_class(); ?>>
<?php get_template_part('content-header'); ?>
<section id="main" class="clearfix">
    <div class="carousel home-slider">
        <?php if( function_exists('bxslider') ) bxslider('slider-home'); ?>
        <div class="reserve"><a href="<?php echo get_permalink($page_contato); ?>">FAÇA SUA RESERVA</a></div>
    </div>
    <div class="wrapper">
        <div class="grid-center">
            <div class="col-11 page-wrapper">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="item">
                        <h2 class="page-title acomodacoes">
                            <?php echo the_title(); ?>
                        </h2>
                        <div class="entry">
                            <?php echo the_field('page_subtitle'); ?>
                        </div>
                    </div>
                    <div class="page-text"><?php the_content(); ?></div>
                    <div class="page-extras">
                        <div class="extras-content">
                            <?php echo the_field('services_pousada') ?></div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="grid-center extras">
            <div class="col-8">
                <div class="grid-spaceAround block comodidades">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="col">
                                <h2 class="title">Comodidades do Chalés</h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/comodidades-chale.png">
                                <div class="list">
                                    <?php echo the_field('comodidades_dos_chales') ?>
                                </div>
                            </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="col-3 facebook">

            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
