<?php
if ($idioma == "pt") {
    $frasesobre = "Portfólio";
    $frasesobretop = "Você não tem acesso ao portfólio :(";
    $fraseSobreB = "Por favor, para solicitar acesso ao portfólio entre em ";
    $fraseSobreC = "contato";
    $fraseSobreD = " com a empresa.";
} else {
    $frasesobre = "Portfolio";
    $frasesobretop = "You do not have access to our portfolio :(";
    $fraseSobreB = "Please, to gain access to our portfolio, ";
    $fraseSobreC = "contact us";
    $fraseSobreD = ".";
}
?>

<div class="limitador">
    <section class="fundo_conteudo">
        <article class="colSobre">
            <h2 class="centro"><?php echo $frasesobre;?></h2>
            <br/><br/>
            <p class="centro"><?php echo $frasesobretop; ?></p>
            <br/>
            <figure class="imagemC"><img src="<?php echo base_url(); ?>imagens/fail-dauphin.png"  alt=""></figure>
            <p class="centro"><?php echo $fraseSobreB; ?><a href="#!/contato"><?php echo $fraseSobreC; ?></a><?php echo $fraseSobreD; ?></p>
        </article>
    </section>
</div>