<footer id="footer">
    <div class="wrapper grid">

        <div class="col-3_xs-10 newsletter" push-left="off-1">
            <h2 class="title">NEWSLETTER </h2>
            <form id="news" action="<?php echo get_template_directory_uri(); ?>/ajax/newsletter.php">
                <span>Nome</span><br>
                <input type="text" name="name" /><br>
                <span>E-mail</span><br>
                <input type="email"  name="email" />
                <input type="submit" value="ENVIAR" />
            </form>
            <div id="newsmsg"></div>
        </div>
        <div class="col-7_xs-10 contact" push-left="off-1">
            <h2 class="title contacto">CONTATO</h2>
            <ul class="phones">
                <li class="wtsp"><img src="<?php echo get_template_directory_uri(); ?>/images/wtsp-icon.png">+55 12 99653-6063</li>
                <li class="cel">+55 12 3865-6639</li>
            </ul>
            <ul class="social">
                <li class="fb"><a href="https://www.facebook.com/Vilarejo-Maresias-294535930575850/" target="_blank"></a></li>
                <li class="inst"></li>
                <li class="trip"><a href="https://www.tripadvisor.com.br/Hotel_Review-g1219730-d2513445-Reviews-Vilarejo_Chale-Maresias_Sao_Sebastiao_State_of_Sao_Paulo.html" target="_blank"></a></li>
            </ul>
            <div class="copy">
                <div>Rua Olimpio Romão Cesar, 189, Maresias, São Sebastião, CEP 11600-000, São Paulo - Brasil <br>Todos os dereitos reservados ®</div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
</footer>
