<?php
/*
Template Name: Acomodacoes
*/
get_header();

$page_contato = 14;

$args = array(
    'cat' => 3,
    'order' => 'ASC'
);

$chale = new WP_Query($args);

?>
<body <?php body_class(); ?>>
<?php get_template_part('content-header'); ?>
<section id="main" class="clearfix">
    <div class="carousel home-slider">
        <?php if( function_exists('bxslider') ) bxslider('slider-acomodacoes'); ?>
        <div class="reserve"><a href="<?php echo get_permalink($page_contato); ?>">FAÇA SUA RESERVA</a></div>
    </div>
    <div class="wrapper">
        <div class="grid-center">
            <div class="col-10 page-wrapper">
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
                <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="grid-center extras">
            <div class="col-10">
                <div class="grid-spaceAround block comodidades">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="col-4_sm-12">
                            <h2 class="title">Comodidades do Chalés</h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/comodidades-chale.png">
                            <div class="list">
                                <?php echo the_field('comodidades_dos_chales') ?>
                            </div>
                            <div class="horarios">
                                Check-In: <?php echo the_field('check-in') ?> <br>
                                Check-Out: <?php echo the_field('check-out') ?>
                            </div>
                            <div class="reserve"><a href="<?php echo get_permalink($page_contato); ?>">RESERVAR</a></div>
                        </div>
                    <?php endwhile; endif; ?>
                        <div class="col-8_sm-12 grid">
                            <?php if ($chale->have_posts()):
                                while ($chale->have_posts()):$chale->the_post(); $i++;?>
                                    <div class="col-5_xs-12 gallery">
                                        <h1 class="title-unit"><span>CHALÉ <b>#<?php echo the_field('chele_code') ?></b></span><span class="units"><?php the_content(); ?></span></h1>
                                        <figure class="img-principal">
                                            <img src="<?php echo the_field('chale_image_1') ?>"/>
                                        </figure>

                                        <div class="grid-spaceAround thumbnail ">
                                            <?php if( get_field('chale_image_1') ): ?>
                                                <div class="col-2">
                                                    <figure>
                                                        <img class="gallery-<?php echo $i ?>" src="<?php echo the_field('chale_image_1') ?>"/>
                                                    </figure>
                                                </div>
                                            <?php endif; ?>
                                            <?php if( get_field('chale_image_2') ): ?>
                                                <div class="col-2">
                                                    <figure>
                                                        <img class="gallery-<?php echo $i ?>" src="<?php echo the_field('chale_image_2') ?>"/>
                                                    </figure>
                                                </div>
                                            <?php endif; ?>
                                            <?php if( get_field('chale_image_3') ): ?>
                                                <div class="col-2">
                                                    <figure>
                                                        <img class="gallery-<?php echo $i ?>" src="<?php echo the_field('chale_image_3') ?>"/>
                                                    </figure>
                                                </div>
                                            <?php endif; ?>
                                            <?php if( get_field('chale_image_4') ): ?>
                                                <div class="col-2">
                                                    <figure>
                                                        <img class="gallery-<?php echo $i ?>" src="<?php echo the_field('chale_image_4') ?>"/>
                                                    </figure>
                                                </div>
                                            <?php endif; ?>
                                            <?php if( get_field('chale_image_5') ): ?>
                                                <div class="col-2">
                                                    <figure>
                                                        <img class="gallery-<?php echo $i ?>" src="<?php echo the_field('chale_image_5') ?>"/>
                                                    </figure>
                                                </div>
                                            <?php endif; ?>
                                            <?php if( get_field('chale_image_6') ): ?>
                                                <div class="col-2">
                                                    <figure>
                                                        <img class="gallery-<?php echo $i ?>" src="<?php echo the_field('chale_image_6') ?>"/>
                                                    </figure>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endwhile; endif; ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="links-footer">
        <?php include 'links-footer.php'?>
    </div>
</section>
<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
    (function($){
        $(document).ready(function(){
            $('.gallery').each(function () {
                var self = $(this),
                    imgArray =[],
                    container = $(this).find('.img-principal img');

                self.find('.thumbnail').find('img').each(function () {
                    imgArray.push($(this).attr('src'))
                });

                $(this).find('.thumbnail figure img').click(function(){
                    var src = $(this).attr('src');
                    container.parent().attr('href',src);
                    container.attr('src',src)
                });

                container.click(function(e){
                    e.preventDefault();
                    var orderArray = [];
                    var position = [];
                    var initialPic = $(this).attr('src');

                    for(var i=0; i < imgArray.length; i++){
                        if(imgArray[i] == initialPic){
                            orderArray.unshift(imgArray[i])
                            position.unshift(i);
                        }else{
                            orderArray.push(imgArray[i])
                            position.push(i);
                        }
                    }
                    console.log(position);
                    $.fancybox(orderArray);
                });
            });


        });
    })(jQuery);
</script>
</body>
</html>
