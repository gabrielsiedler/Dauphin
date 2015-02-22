<?php
if ($idioma == 'pt') {
    $SobreTitulo = "Bem vindo à Dauphin!";
    $SobreSub = "Modernize seu negócio";
    $Sobre1 = "A Dauphin é uma empresa jovem e inovadora, formada por profissionais criativos e altamente capacitados na área de WEB. Nosso principal objetivo é oferecer a cada um de nossos clientes a solução que mais combine com a necessidade do seu negócio.";
    $Sobre2 = "Tendo em vista o mundo tecnológico em que vivemos, a criação de um web site é essencial para a expansão de qualquer empresa. Além de ser uma poderosa e moderna ferramenta de marketing que torna seu negócio mais visível a clientes em potencial, um site vai ao encontro à necessidade de sua empresa de atender seus clientes de forma rápida e eficiente.";
    $Sobre3 = "Conheça nossos";
    $Sobre4 = "serviços";
}else{
    $SobreTitulo = "Welcome to Dauphin!";
    $SobreSub = "Improve your business";
    $Sobre1 = "Dauphin is a young and innovative company formed by creative and highly skilled professionals in the field of WEB. Our main goal is to offer each of our clients the solution that best matches the needs of their business.";
    $Sobre2 = "Given the technological world we live in, creating a website is essential for the expansion of any company. Besides being a modern and powerful marketing tool that makes your business more visible to potential customers, a website meets the need of your company to serve its customers in a quick and efficient way.";
    $Sobre3 = "Meet our";
    $Sobre4 = "services";
}
?>


<div class="limitador">
    <section class="fundo_conteudo">
        <article class="colSobre">
            <h2 class="centro"><?php echo $SobreTitulo; ?></h2>
            <h3 class="centro"><?php echo $SobreSub; ?></h3>
            <figure class="imagem"><img src="<?php echo base_url(); ?>imagens/sobre.png" alt=""/></figure>
            <p><?php echo $Sobre1; ?></p>
            <br/>
            <p><?php echo $Sobre2; ?></p>
            <br/>
            <p class="esp"><?php echo $Sobre3; ?> <strong><a href="#!/servicos"><?php echo $Sobre4; ?></a></strong>.</p>
        </article>
    </section>
</div>