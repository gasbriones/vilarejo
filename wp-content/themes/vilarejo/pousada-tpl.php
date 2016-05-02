<?php
/*
Template Name: Pousada
*/

get_header();

$page_comfort = 9;
$page_visit = 27;
$page_localization =12;
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
            <div class="col-10 page-wrapper">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h1 class="page-title"><?php echo the_field('page_subtitle'); ?></h1>
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
                <div class="col-3 item">
                    <a href="<?php echo get_permalink($page_comfort); ?>">
                        <h2 class="page-title acomodacoes">
                            ACOMODAÇÕES
                        </h2>
                        <div class="entry">
                            VILAREJO CHALÉ
                        </div>
                    </a>

                </div>
                <div class="col-3 item">
                    <a href="<?php echo get_permalink($page_visit); ?>">
                        <h2 class="page-title visite">
                            VISITE
                        </h2>
                        <div class="entry">
                            PRAIA MARESIAS
                        </div>
                    </a>
                </div>
                <div class="col-3 item">
                    <a href="<?php echo get_permalink($page_localization); ?>">
                        <h2 class="page-title localizacao">
                            LOCALIZAÇÃO
                        </h2>
                        <div class="entry">
                            COMO CHEGAR
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
