<footer id="footer">
    <div class="wrapper grid">

        <div class="col-3" push-left="off-1">
            <h2 class="title">NEWSLETTER </h2>
            <form>
                <span>Nome</span><br>
                <input type="text" /><br>
                <span>E-mail</span><br>
                <input type="email" />
                <input type="submit" value="ENVIAR" />
            </form>
        </div>
        <div class="col-7" push-left="off-1">
            <h2 class="title contacto">CONTATO</h2>
            <ul class="phones">
                <li class="wtsp"><img src="<?php echo get_template_directory_uri(); ?>/images/wtsp-icon.png">+55 12 99653-6063</li>
                <li class="cel">+55 12 3865-6639</li>
            </ul>
            <ul class="social">
                <li class="fb"><a href="https://www.facebook.com/vilarejo.maresias" target="_blank"></a></li>
                <li class="inst"></li>
                <li class="trip"></li>
            </ul>
            <div class="copy">
                <div>Rua Olimpio Romão Cesar, 189, Maresias, CEP 11600-000, São Paulo - Brasil.<br>Todos os dereitos reservados ®</div>
            </div>
        </div>
    </div>



    <?php wp_footer(); ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/bxslider.css" rel="stylesheet" type="text/css">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
</footer>
