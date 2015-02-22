<?php
if ($idioma == "pt") {
    $inicio = "Início";
    $sobre = "Sobre a Dauphin";
    $servicos = "Serviços";
    $portfolio = "Portfólio";
    $contato = "Contato";

    $marginEN = "socialPT";
} else {
    $inicio = "Home";
    $sobre = "About us";
    $servicos = "Services";
    $portfolio = "Portfolio";
    $contato = "Contact us";

    $marginEN = "socialEN";
}
?>

<header>
    <h1><a href="#!/inicio" id="logo">Dauphin</a></h1>
    <nav class="menu">
        <ul id="menu">   
            <li><a href="#!/inicio" class="botoes"><span class="mBotoes"><?php echo $inicio; ?></span></a></li>
            <li><a href="#!/sobre" class="botoes"><span class="mBotoes"><?php echo $sobre; ?></span></a></li>
            <li><a href="#!/servicos" class="botoes"><span class="mBotoes"><?php echo $servicos; ?></span></a></li>
            <li><a href="#!/portfolio" class="botoes"><span class="mBotoes"><?php echo $portfolio; ?></span></a></li>
            <li><a href="#!/contato" class="botoes"><span class="mBotoes"><?php echo $contato; ?></span></a></li>
        </ul>
    </nav>

</header>

<div class="fundoMenu"></div>
<div class="idioma">
    <?php
    if ($idioma == 'pt') {
        $classBR = "borda_idioma_sel";
        $classEN = "borda_idioma_nsel";
        $titleBR = "";
        $titleEN = "Change language to English";
    } else {
        $classBR = "borda_idioma_nsel";
        $classEN = "borda_idioma_sel";
        $titleBR = "Alterar o idioma para Português-BR";
        $titleEN = "";
    }
    $urlbr = '<img class="' . $classBR . '" src="' . base_url() . 'imagens/br.png" title="' . $titleBR . '"  alt=""/>';
    $urlen = '<img id="barra_idioma" class="' . $classEN . '" src="' . base_url() . 'imagens/en.png" title="' . $titleEN . '"  alt=""/>';

    echo anchor('site/pt/', $urlbr);
    echo anchor('site/en/', $urlen);
    ?> 

</div>
<div class="social" id="<?php echo $marginEN; ?>">
    
    <div class="fb-like" data-href="http://dauphin.cc/site/pt/" data-layout="button_count"></div> 
    <strong></strong>
    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://dauphin.cc/" data-lang="<?php echo $idioma; ?>" data-text="A Dauphin é uma empresa jovem e inovadora, formada por profissionais criativos e altamente capacitados na área de WEB -" data-counturl="http://dauphin.cc/site/pt/">Tweetar</a>
    <strong></strong>
    <div class="g-plusone" data-size="medium" data-href="http://dauphin.cc"></div>
</div>
<div class="bordaMenu">
</div>