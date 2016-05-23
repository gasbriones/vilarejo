<?php
/*
Template Name: Localizacao
*/
get_header();

$page_contato = 14;

?>
<body <?php body_class(); ?>>
<?php get_template_part('content-header'); ?>
<section id="main" class="clearfix location">
    <div class="wrapper">
        <div class="grid map-wrapper">
            <div class="col-6_xs-12">
                <figure>
                    <img src="<?php echo the_field('page_image') ?>"/>
                </figure>
            </div>
            <div class="col-6_xs-12">
                <?php if (have_posts()) : while (have_posts()) : the_post();
                    $location = get_field('map_location');
                    ?>
                    <div class="acf-map">
                        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="grid-center">
            <div class="col-10 page-wrapper">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="item">
                        <h2 class="page-title localizacao">
                            <?php echo the_title(); ?>
                        </h2>
                        <div class="entry">
                            <?php echo the_field('page_subtitle'); ?>
                        </div>
                    </div>
                    <div class="page-text"><?php the_content(); ?></div>
                    <div class="grid-center page-extras">
                        <div class="col-5_xs-12">
                            <div class="address">
                                Rua Olimpio Romão César, 189<br>
                                Maresias São Sebastião, CEP 11600-000, São Paulo - Brasil.
                            </div>
                            <div class="distances">
                                <h2>Distâncias a Vilarejo Chalé: </h2>
                                <ul>
                                    <li>A 250m da Praia de Maresias</li>
                                    <li>Aeroporto 153 km</li>
                                    <li>Rodoviária Tiete São Paulo 168 km</li>
                                    <li>Paúba 4,4 km</li>
                                    <li>São Sebastião 25 km</li>
                                    <li>Ilha Bela 25 km + Ferry 15 minutos</li>
                                </ul>
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
