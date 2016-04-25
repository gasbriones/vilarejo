<?php
get_header();

$page_comfort = query_posts('page_id=9');
$page_visit = query_posts('page_id=27');
$page_localization = query_posts('page_id=12');

?>
<body <?php body_class(); ?>>
<?php get_template_part('content-header'); ?>
<section id="main" class="clearfix">
    <div class="carousel">
        <?php if( function_exists('bxslider') ) bxslider('slider-home'); ?>
    </div>
    <div class="grid-spaceAround">
        <div class="col-3">
            <?php if ($query->have_posts()):
                while ($query->have_posts()):$query->the_post();?>
                    <h4 class="page-title  wow bounceInDown">
                        <?php the_title(); ?>
                    </h4>
                <?php endwhile; endif; ?>
        </div>
        <div class="col-3">2</div>
        <div class="col-3">3</div>
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
