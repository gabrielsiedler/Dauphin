<?php
$topNav = "Desculpe. Seu navegador não suporta o nosso site :(";
$Nav = "Diferente da política utilizada nos sites dos nossos clientes, optamos por utilizar a ultima tecnologia em WEB para desenvolver o site da empresa. Por causa disso os navegadores mais antigos, ou desatualizados, não são capazes de exibir o nosso site apropriadamente.";
$Nav2 = "Aconselhamos que você <a href='http://www.internetexplorerbrasil.com/'>atualize</a> seu navegador ou faça o download de um <a href='https://www.google.com/intl/pt/chrome/browser/'>navegador mais moderno</a>.";
$Nav3 = "Para entrar em contato envie um e-mail para <b>contato@dauphin.cc</b>";
$Nav4 = "Nos desculpe pelo transtorno.";
?>

<!DOCTYPE html>
<html lang="pt-br" 
      xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">

    <head>
        <title>Dauphin - Creative Company</title>
        <meta charset="utf-8"/>

        <meta property="og:title" content="Dauphin - Creative Company"/>
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="<? echo base_url(); ?>imagens/og.png"/>
        <meta property="og:url" content="http://www.dauphin.cc"/>
        <meta property="og:description" content="A Dauphin é uma empresa jovem e inovadora, formada por profissionais criativos e altamente capacitados na área de WEB."/>

        <link rel="shortcut icon" href="<?php echo base_url(); ?>imagens/favicon.png" type="image"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/ie-min.css" type="text/css"/>

    </head>
    <body class="fundo">
        <div class="tudo">
            <div class="main">
                <article id="conteudo">
                    <ul>
                        <li id="nav" class="borda_conteudo">
                            <div class="limitador">
                                <section class="fundo_conteudo">
                                    <article class="colSobre">
                                        <center><h3 class="centro"><?php echo $topNav; ?></h3></center>
                                        <p><?php echo $Nav; ?></p>
                                        <br/>
                                        <p><?php echo $Nav2; ?></p>
                                        <br/><br/><br/>
                                        <center><p class="centro"><?php echo $Nav3; ?></p>
                                        <br/>
                                        <p class="centro"><?php echo $Nav4; ?></p></center>
                                    </article>
                                </section>
                            </div>
                        </li>
                    </ul>
                </article>
            </div>
        </div>
    </body>
</html>