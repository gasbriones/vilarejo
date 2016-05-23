<?php
get_header();

$page_comfort =  new WP_Query('page_id=9');
$page_visit = new WP_Query('page_id=27');
$page_localization = new WP_Query('page_id=12');
$page_contato = 14;
$page_acomodacoes = 9;

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
    <div class="carousel home-slider">
        <?php if( function_exists('bxslider') ) bxslider('slider-home'); ?>
        <div class="reserve"><a href="<?php echo get_permalink($page_contato); ?>">FAÇA SUA RESERVA</a></div>
    </div>
    <div class="wrapper">
        <div class="grid-center main-menu">
            <div class="col-12 grid-center">
                <div class="col-3_xs-9  item">
                    <?php if ($page_comfort->have_posts()):
                        while ($page_comfort->have_posts()):$page_comfort->the_post();?>
                            <a href="<?php the_permalink() ?>">
                                <figure>
                                    <img src="<?php echo the_field('page_image') ?>"/>
                                </figure>
                                <h2 class="page-title acomodacoes">
                                    <?php the_title(); ?>
                                </h2>
                                <div class="entry">
                                    <?php echo the_field('page_subtitle') ?>
                                </div>
                            </a>
                        <?php endwhile; endif; ?>
                </div>
                <div class="col-3_xs-9  item">
                    <?php if ($page_visit->have_posts()):
                        while ($page_visit->have_posts()):$page_visit->the_post(); ?>
                            <a href="<?php the_permalink() ?>">
                                <figure>
                                    <img src="<?php echo the_field('page_image') ?>"/>
                                </figure>
                                <h2 class="page-title visite">
                                    <?php the_title(); ?>
                                </h2>
                                <div class="entry">
                                    <?php echo the_field('page_subtitle') ?>
                                </div>
                            </a>
                        <?php endwhile; endif; ?>
                </div>
                <div class="col-3_xs-9  item">
                    <?php if ($page_localization->have_posts()):
                        while ($page_localization->have_posts()):$page_localization->the_post();?>
                            <a href="<?php the_permalink() ?>">
                                <figure>
                                    <img src="<?php echo the_field('page_image') ?>"/>
                                </figure>
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
            <div class="col-8_sm-12">
                <div class="grid-spaceAround block comodidades">
                    <?php if ($chale->have_posts()):
                        while ($chale->have_posts()):$chale->the_post();?>
                            <div class="col-5_xs-9">
                                <figure>
                                    <a href="<?php echo get_permalink($page_acomodacoes); ?>">
                                        <img src="<?php echo the_field('chale_image_1') ?>"/>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-6_xs-9">
                                <h2 class="title">Comodidades dos Chalés</h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/comodidades-chale.png">
                                <div class="list">
                                    <?php echo the_field('comodidades') ?>
                                </div>
                                <a href="<?php echo get_permalink($page_acomodacoes); ?>" class="more">MAIS INFORMAÇÃO</a>
                            </div>
                        <?php endwhile; endif; ?>
                </div>
                <div class="grid-spaceAround block visite">
                    <?php if ($page_visit->have_posts()):
                        while ($page_visit->have_posts()):$page_visit->the_post();?>
                            <div class="col-5_xs-9">
                                <figure>
                                    <a href="<?php the_permalink() ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/maresias-2.jpg"/>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-6_xs-9">
                                <h2 class="title">Fique no coração de Maresias</h2>
                                <div class="list">
                                    <p>
                                        Conhecida internacionalmente, a praia de Maresias fica
                                        apenas 170km da cidade de São Paulo. E 25km do centro
                                        histórico de São Sebastião.
                                        Cidade natal do campeão mundial de surf, Gabriel Medina,
                                        Maresias, possue uma linda praia para momentos agradáveis
                                        em família, além de ser uma ótima opção para a prática do surf.
                                    </p>
                                </div>
                                <a href="<?php the_permalink() ?>" class="more">MAIS INFORMAÇÃO</a>
                            </div>
                        <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="col-3_sm-12 facebook">
                <h2 class="fb-title">VILAREJO CHALÉ NO FACEBOOK</h2>
                <div class="fb-page" data-href="https://www.facebook.com/Vilarejo-Maresias-294535930575850/" data-tabs="timeline"  data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                <div class="trip">
                    <div id="TA_cdsratingsonlynarrow320" class="TA_cdsratingsonlynarrow left"><ul id="zg3UBLGft" class="TA_links Bul0fgk7N5md"><li id="s94BFhJ" class="9sISU3FT"><a target="_blank" href="https://www.tripadvisor.com.br/"><img src="https://www.tripadvisor.com.br/img/cdsi/img2/branding/tripadvisor_logo_transp_340x80-18034-2.png" alt="TripAdvisor"/></a></li></ul></div><script src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=320&amp;locationId=2513445&amp;lang=pt&amp;border=true&amp;shadow=false&amp;display_version=2"></script>
                    <div id="TA_excellent481" class="TA_excellent right"><ul id="FL7zgou" class="TA_links obUgwlFepkt"><li id="xgrV24LYJ" class="Onc5dC7AvY"><a target="_blank" href="https://www.tripadvisor.com.br/"><img src="https://static.tacdn.com/img2/widget/tripadvisor_logo_115x18.gif" alt="TripAdvisor" class="widEXCIMG" id="CDSWIDEXCLOGO"/></a></li></ul></div><script src="https://www.jscache.com/wejs?wtype=excellent&amp;uniq=481&amp;locationId=2513445&amp;lang=pt&amp;display_version=2"></script>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
