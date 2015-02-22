<?php
if($idioma == 'pt'){
    $RSVoltar = "Voltar";
    $RSTitulo = "Mídias Socias";
    $RSTexto = "Aproveitamos todo o potencial de marketing existente nas redes sociais com a criação de uma identidade para a sua empresa nesse meio, seja essa uma página do facebook ou um perfil do facebook, twitter, Google+, etc.";
}else{
    $RSVoltar = "Back";
    $RSTitulo = "Social medias";
    $RSTexto = "We take advantage of the marketing potential that exists on social networks by creating an identity for your company in this environment, be it a Facebook page or a profile on Facebook, Twitter, Google+ and so on.";
}
?>

<div class="limitador">
    <section class="fundo_conteudo">
        <article class="colSobre">
            <h2 class="centro padbot"><?php echo $RSTitulo; ?></h2>
            <p><?php echo $RSTexto; ?></p>

            <p class="espl"><br/><strong><a href="#!/servicos"><?php echo $RSVoltar; ?></a></strong></p>
        </article>
    </section>
</div>