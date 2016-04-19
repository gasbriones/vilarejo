<?php
get_header();
?>
<body <?php body_class(); ?>>
<?php get_template_part('content-header'); ?>
<section id="main" class="clearfix">
    <div class="carousel">
        <?php if( function_exists('bxslider') ) bxslider('slider-home'); ?>
    </div>
    <div class="grid">
        <div class="col">
            asdasd
        </div>
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
