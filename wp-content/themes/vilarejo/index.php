<?php
get_header();

$page_comfort =  new WP_Query('page_id=9');
$page_visit = new WP_Query('page_id=27');
$page_localization = new WP_Query('page_id=12');

$args = array(
    'cat' => 3,
    'order' => 'ASC',
    'showposts' => '1'
);

$chale = new WP_Query($args);

?>
<body <?php body_class(); ?>>
<?php get_template_part('content-header'); ?>
<section id="main" class="clearfix">
    <div class="carousel">
        <?php if( function_exists('bxslider') ) bxslider('slider-home'); ?>
    </div>
    <div class="wrapper">
        <div class="grid-center main-menu">
            <div class="col-12 grid-spaceAround">
                <div class="col-3 item">
                    <?php if ($page_comfort->have_posts()):
                        while ($page_comfort->have_posts()):$page_comfort->the_post();?>
                            <figure>
                                <a href="<?php the_permalink() ?>">
                                    <img src="<?php echo the_field('page_image') ?>"/>
                                </a>
                            </figure>
                            <a href="<?php the_permalink() ?>">
                                <h2 class="page-title acomodacoes">
                                    <?php the_title(); ?>
                                </h2>
                                <div class="entry">
                                    <?php echo the_field('page_subtitle') ?>
                                </div>
                            </a>
                        <?php endwhile; endif; ?>
                </div>
                <div class="col-3 item">
                    <?php if ($page_visit->have_posts()):
                        while ($page_visit->have_posts()):$page_visit->the_post(); ?>
                            <figure>
                                <a href="<?php the_permalink() ?>">
                                    <img src="<?php echo the_field('page_image') ?>"/>
                                </a>
                            </figure>
                            <a href="<?php the_permalink() ?>">
                                <h2 class="page-title visite">
                                    <?php the_title(); ?>
                                </h2>
                                <div class="entry">
                                    <?php echo the_field('page_subtitle') ?>
                                </div>
                            </a>
                        <?php endwhile; endif; ?>
                </div>
                <div class="col-3 item ">
                    <?php if ($page_localization->have_posts()):
                        while ($page_localization->have_posts()):$page_localization->the_post();?>
                            <figure>
                                <a href="<?php the_permalink() ?>">
                                    <img src="<?php echo the_field('page_image') ?>"/>
                                </a>
                            </figure>
                            <a href="<?php the_permalink() ?>">
                                <h2 class="page-title localizacao">
                                    <?php the_title(); ?>
                                </h2>
                                <div class="entry">
                                    <?php echo the_field('page_subtitle') ?>
                                </div>
                            </a>
                        <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
        <div class="grid-center extras">
            <div class="col-9">
                <div class="grid-spaceAround block comodidades">
                    <?php if ($chale->have_posts()):
                        while ($chale->have_posts()):$chale->the_post();?>
                            <div class="col-5">
                                <figure>
                                    <a href="<?php the_permalink() ?>">
                                        <img src="<?php echo the_field('chale_image_1') ?>"/>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-6">
                                <h2 class="title">Comodidades do Chalés</h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/comodidades-chale.png">
                                <div class="list">
                                    <?php echo the_field('comodidades') ?>
                                </div>
                                <a href="<?php the_permalink() ?>" class="more">MAIS INFORMAÇÃO</a>
                            </div>
                        <?php endwhile; endif; ?>
                </div>
                <div class="grid-spaceAround block visite">
                    <?php if ($page_visit->have_posts()):
                        while ($page_visit->have_posts()):$page_visit->the_post();?>
                            <div class="col-5">
                                <figure>
                                    <a href="<?php the_permalink() ?>">
                                        <img src="<?php echo the_field('page_image') ?>"/>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-6">
                                <h2 class="title">Fique no coração de Maresias</h2>

                                <div class="list">
                                    <?php echo the_content() ?>
                                </div>
                                <a href="<?php the_permalink() ?>" class="more">MAIS INFORMAÇÃO</a>
                            </div>
                        <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="col-3 facebook" ></div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
