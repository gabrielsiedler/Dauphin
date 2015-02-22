<?php
if($idioma == 'pt'){
    $WBvoltar = "Voltar";
    $WBtexto1 = "Desenvolvemos ou reformulamos o web site de sua empresa, criando um espaço virtual em que seus clientes poderão obter informações sobre produtos e/ou serviços de forma fácil, rápida e eficiente. Cientes de que cada cliente possui diferentes desejos e necessidades, oferecemos um serviço personalizado que melhor atenda a cada um.";
    $WBtexto2 = "Após criar seu site, tratamos de sua hospedagem, cuidando para lhe oferecer o plano que melhor se encaixe na sua necessidade. Também verificamos a disponibilidade e registramos o domínio de sua empresa. É importante que a sua empresa possua um domínio próprio, que seja simples e fácil de lembrar, facilitando assim o acesso de seus clientes.";
}else{
    $WBvoltar = "Back";
    $WBtexto1 = "Dauphin is a young and innovative company formed by creative and highly skilled professionals in the field of WEB. Our main goal is to offer each of our clients the solution that best matches the needs of their business.";
    $WBtexto2 = "Given the technological world we live in, creating a web site is essential for the expansion of any company. Besides being a modern and powerful marketing tool that makes your business more visible to potential customers, a site meets the need of your company to serve its customers in quick and efficient way.";
}
?>


<div class="limitador">
    <section class="fundo_conteudo">
        <article class="colSobre">
            <h2 class="centro padbot">WebSites</h2>
            <p><?php echo $WBtexto1;?></p>

            <p><?php echo $WBtexto2;?></p>
            <p class="espl"><br/><strong><a href="#!/servicos"><?php echo $WBvoltar;?></a></strong></p>
        </article>
    </section>
</div>