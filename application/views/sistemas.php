<?php
if ($idioma == 'pt') {
    $SISVoltar = "Voltar";
    $SISTitulo = "Desenvolvimento de Sistemas";
    $SISTexto = "Um sistema bem organizado é sinônimo de uma empresa bem organizada. Desenvolvemos sistemas web ou locais, para cadastro de clientes, relatórios, emissão de documentos, controle de estoque, etc.";
} else {
    $SISVoltar = "Back";
    $SISTitulo = "System Development";
    $SISTexto = "A well-organized system is synonymous to a well organized company. We develop web or local systems for customer registration, reporting, document issuance, inventory control and so on.";
}
?>

<div class="limitador">
    <section class="fundo_conteudo">
        <article class="colSobre">
            <h2 class="centro padbot"><?php echo $SISTitulo; ?></h2>
            <p><?php echo $SISTexto; ?></p>
            <p class="espl"><br/><strong><a href="#!/servicos"><?php echo $SISVoltar; ?></a></strong></p>
        </article>
    </section>
</div>