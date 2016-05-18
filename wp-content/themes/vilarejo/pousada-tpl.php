<?php
/*
Template Name: Pousada
*/
get_header();

$page_contato = 14;

?>
<body <?php body_class(); ?>>
<?php get_template_part('content-header'); ?>
<section id="main" class="clearfix">
    <div class="carousel home-slider">
        <?php if( function_exists('bxslider') ) bxslider('slider-a-pousada'); ?>
        <div class="reserve"><a href="<?php echo get_permalink($page_contato); ?>">FAÇA SUA RESERVA</a></div>
    </div>
    <div class="wrapper">
        <div class="grid-center">
            <div class="col-10 page-wrapper">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="item">
                        <div class="entry">
                            <?php echo the_field('page_subtitle'); ?>
                        </div>
                    </div>
                    <div class="page-text"><?php the_content(); ?></div>
                    <div class="page-extras">
                        <h2 class="extras-title">Serviços</h2>
                        <div class="extras-content">
                            <?php echo the_field('services_pousada') ?></div>
                        </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
    <div class="links-footer">
        <div class="grid-center">
            <div class="col-7 grid-spaceBetween">
               <?php include 'links-footer.php'?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
