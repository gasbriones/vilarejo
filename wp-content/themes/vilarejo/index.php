<?php
get_header();
?>
<body <?php body_class(); ?>>
  <?php include 'menu-tpl.php'?>
  <div class="wrapper clearfix">
    <?php get_template_part('content-header'); ?>
    <section id="main" class="clearfix">
      <div class="grid">
        <div class="col">
          <?php
            if ($query->have_posts()):
              while ($query->have_posts()):$query->the_post(); ?>
               
          <?php endwhile; endif;?>
        </div>
      </div>
    </section>
  </div>
  <?php get_footer();?>
</body>
</html>
