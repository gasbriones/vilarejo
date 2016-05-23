<?php
/*
Template Name: Praia Maresias
*/

get_header();
$page_contato = 14;

?>
<body <?php body_class(); ?>>
<?php get_template_part('content-header'); ?>
<section id="main" class="clearfix maresias">
    <div class="carousel home-slider">
        <?php if( function_exists('bxslider') ) bxslider('slider-maresias'); ?>
        <div class="reserve"><a href="<?php echo get_permalink($page_contato); ?>">FAÇA SUA RESERVA</a></div>
    </div>
    <div class="wrapper">
        <div class="grid-center">
            <div class="col-10 page-wrapper">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="item">
                        <h2 class="page-title visite">
                            <?php echo the_title(); ?>
                        </h2>
                        <div class="entry">
                            <?php echo the_field('page_subtitle'); ?>
                        </div>
                    </div>
                    <div class="page-text"><?php the_content(); ?></div>
                    <div class="page-extras">
                        <div class="grid">
                            <div class="col-6_xs-12">
                                <h2 class="extras-title">Atividades Esportivas</h2>
                                <div class="extras-content">
                                    <?php echo the_field('sports_activity_maresias') ?>
                                </div>
                            </div>
                            <div class="col-6_xs-12">
                                <h2 class="extras-title">Os melhores Restaurantes</h2>
                                <div class="extras-content">
                                    <?php echo the_field('best_restaurants_maresias') ?>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
    <div class="links-footer">
        <?php include 'links-footer.php'?>
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
