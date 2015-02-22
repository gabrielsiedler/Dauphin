<?php
if($idioma == 'pt'){
    $ECVoltar = "Voltar";
    $ECTitulo = "Comércio Eletrônico";
    $ECTexto = "Tornamos a sua empresa mais acessível, criando um web site de vendas personalizado, que permite aos clientes que conheçam e comprem seus produtos de forma fácil e segura, sem precisar sair de casa.";
    
}else{
    $ECVoltar = "Back";
    $ECTitulo = "E-Commerce";
    $ECTexto = "We make your business more accessible by creating a custom sale web site, which allows customers to learn about and purchase your products easily and securely, without leaving home.";
}
?>

<div class="limitador">
    <section class="fundo_conteudo">
        <article class="colSobre">
            <h2 class="centro padbot"><?php echo $ECTitulo; ?></h2>
            <p><?php echo $ECTexto; ?></p>

            <p class="espl"><br/><strong><a href="#!/servicos"><?php echo $ECVoltar; ?></a></strong></p>
        </article>
    </section>
</div>