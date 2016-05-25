<?php
/*
Template Name: Contato
*/

session_start();
include("ajax/simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();

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
            <div class="col-8_sm-10 page-wrapper">
                <div class="grid">
                    <div class="col-6_xs-12">
                        <h2 class="title">VILAREJO CHALÉ</h2>
                        <h3 class="subtitle">FAÇA SUA RESERVA</h3>
                        <ul class="contact-data">
                            <li class="gps">Rua Olimpio Romão César, 189<br>
                                Maresias, São Sebastião CEP 11600-000<br>
                                São Paulo - Brasil.<br><br>
                                <b>Lat:</b> -23.787911,  <b>Lng:</b> -45.565767<br>
                                <b>Google Map:</b> 23°47'16.5"S 45°33'56.8"W
                            </li>
                            <li class="mobile"> +55 12 99653-6063</li>
                            <li class="phone">+55 12 3865-6639</li>
                            <li class="mail"><a href="mailto:contato@vilarejomaresias.com.br">contato@vilarejomaresias.com.br</a></li>
                        </ul>
                    </div>
                    <div class="col-6_xs-12 form-wrapper">
                        <h2 class="title">CONTATO</h2>
                        <h3 class="subtitle">FAÇA SUA RESERVA</h3>
                        <form id="reserve" action="<?php echo get_template_directory_uri(); ?>/ajax/contacto.php">
                            <div class="grid-spaceBetween">
                                <div class="col-5">
                                    <label>*Nome</label>
                                    <input type="text" name="name" required tabindex="1" />
                                    <label>Telefone</label>
                                    <input type="tel" name="phone" required tabindex="3"/>
                                    <label>Check-In</label>
                                    <input type="text"  name="check-in" tabindex="5"/>
                                </div>
                                <div class="col-5">
                                    <label>*Sobrenome</label>
                                    <input type="text" name="lastname" required tabindex="2" />
                                    <label>*E-mail</label>
                                    <input type="email" name="email" required tabindex="4"/>
                                    <label>Check-Out</label>
                                    <input type="text" name="check-out" tabindex="6"/>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="col">
                                    <div>
                                        <label>Mensagem</label>
                                        <textarea name="message" tabindex="7"></textarea>
                                        </br> </br>
                                    </div>
                                    <div class="clearfix">
                                        <label>Codigo</label>
                                        <img class="captcha-img" src="<?php echo $_SESSION['captcha']['image_src']?>" width="100">
                                        <input type="text" id="verify" class="code" name="captcha" value="" required/>
                                        <input type="hidden" id="cap-code" name="code" value="<?php echo $_SESSION['captcha']['code']?>"/>
                                    </div>
                                    <div id="msg"></div>
                                    <div>
                                        <input type="submit" value="ENVIAR" class="right" />
                                    </div>

                                </div>
                            </div>
                            <div class="grid">

                            </div>
                        </form>
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
</body>
</html>
