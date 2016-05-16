<?php
/*
Template Name: Contato
*/
get_header();

$page_contato = 14;

?>
<body <?php body_class(); ?>>
<?php get_template_part('content-header'); ?>
<section id="main" class="contato clearfix">
    <div class="home-img">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <img src="<?php echo the_field('page_image') ?>"/>
        <?php endwhile; endif; ?>
    </div>
    <div class="wrapper">
        <div class="grid-center">
            <div class="col-8 page-wrapper">
                <div class="grid">
                    <div class="col">
                        <h2 class="title">VILAREJO CHALÉ</h2>
                        <h3 class="subtitle">FAÇA SUA RESERVA</h3>
                        <ul class="contact-data">
                            <li class="gps">Rua Olimpio Romão César, 189<br>
                                Maresias, CEP 11600-000<br>
                                São Paulo - Brasil.</li>
                            <li class="mobile"> +55 12 99653-6063</li>
                            <li class="phone">+55 12 3865-6639</li>
                            <li class="mail"><a href="mailto:contato@vilarejomaresias.com.br">contato@vilarejomaresias.com.br</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h2 class="title">CONTATO</h2>
                        <h3 class="subtitle">FAÇA SUA RESERVA</h3>
                        <form>
                            <div class="grid-spaceBetween">
                                <div class="col-5">
                                    <label>*Nome</label>
                                    <input type="text" />
                                    <label>Telefone</label>
                                    <input type="text" />
                                    <label>Check-In</label>
                                    <input type="text" />
                                </div>
                                <div class="col-5">
                                    <label>*Sobrenome</label>
                                    <input type="text" />
                                    <label>*E-mail</label>
                                    <input type="text" />
                                    <label>Check-Out</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="grid">
                                <div class="col">
                                    <label>Mensagem</label>
                                    <textarea></textarea>
                                    <input type="submit" value="ENVIAR" class="right" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
