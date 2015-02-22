<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Dauphin - Creative Company</title>
        <meta charset="utf-8"/>

        <meta property="og:title" content="Dauphin - Creative Company"/>
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="<? echo base_url(); ?>imagens/og2.png"/>
        <meta property="og:site_name" content="Dauphin - Creative Company"/>
        <meta property="og:description" content="A Dauphin é uma empresa jovem e inovadora, formada por profissionais criativos e altamente capacitados na área de WEB."/>
        <meta property="fb:admins" content="100002160897556" />
        
        
        <!--[if lt IE 8]>
            <meta http-equiv="REFRESH" content="0;url=<?php echo base_url() ?>site/nav/">
        <![endif]-->
              
        <?php $this->load->view('includes'); ?>
    </head>
    <body>
        <?php
        if (isset($erro)) {
            echo '<div class="aviso centro">';
            if ($erro) {
                echo '<p class="Cerro">' . $msgR . '</p>';
            } else {
                echo '<p class="Cok">' . $msgR . '</p>';
            }
            echo '</div>';
        }
        ?>

        <div class="tudo">
            <div class="carregador"></div>
            <div id="fundo">
                <img src="<?php echo base_url(); ?>imagens/mar.jpg" alt="" />
            </div>
            <div class="main">

                <?php $this->load->view('menu', $idioma); ?>

                <article id="conteudo">
                    <ul>

                        <li id="inicio">

                        </li>

                        <li id="sobre" class="borda_conteudo">

                            <?php $this->load->view('sobre', $idioma); ?>

                        </li>

                        <li id="servicos" class="borda_conteudo">

                            <?php $this->load->view('servicos', $idioma); ?>

                        </li>

                        <li id="portfolio" class="borda_conteudo">

                            <?php $this->load->view('portfolio', $idioma); ?>

                        </li>

                        <li id="contato" class="borda_conteudo">

                            <?php $this->load->view('contato', $idioma); ?>

                        </li>

                        <li id="websites" class="borda_conteudo">

                            <?php $this->load->view('websites', $idioma); ?>

                        </li>

                        <li id="sistemas" class="borda_conteudo">

                            <?php $this->load->view('sistemas', $idioma); ?>

                        </li>

                        <li id="ecommerce" class="borda_conteudo">

                            <?php $this->load->view('ecommerce', $idioma); ?>

                        </li>

                        <li id="redessociais" class="borda_conteudo">

                            <?php $this->load->view('redessociais', $idioma); ?>

                        </li>

                    </ul>
                </article>

            </div>
        </div>

        <footer>

            <?php $this->load->view('footer', $idioma); ?>

        </footer>

        <?php $this->load->view('jsSocial', $idioma); ?>

    </body>

</html>