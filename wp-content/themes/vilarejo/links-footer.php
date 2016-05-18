<?php

$page_comfort = 9;
$page_visit = 27;
$page_localization = 12;
$page_contato = 14;

?>
<div class="grid-center">
    <div class="col-7_sm-11 grid-spaceBetween">
        <div class="col-3_sm-4_xs-12 item">
            <a href="<?php echo get_permalink($page_comfort); ?>">
                <h2 class="page-title acomodacoes">
                    ACOMODAÇÕES
                </h2>

                <div class="entry">
                    VILAREJO CHALÉ
                </div>
            </a>

        </div>
        <div class="col-3_sm-4_xs-12 item">
            <a href="<?php echo get_permalink($page_visit); ?>">
                <h2 class="page-title visite">
                    VISITE
                </h2>

                <div class="entry">
                    PRAIA MARESIAS
                </div>
            </a>
        </div>
        <div class="col-3_sm-4_xs-12 item">
            <a href="<?php echo get_permalink($page_localization); ?>">
                <h2 class="page-title localizacao">
                    LOCALIZAÇÃO
                </h2>

                <div class="entry">
                    COMO CHEGAR
                </div>
            </a>
        </div>
    </div>
</div>