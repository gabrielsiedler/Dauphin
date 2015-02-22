<?php

if($idioma == 'pt'){
    $mais = "ler mais";
    
    $Stitulo = "Serviços";
    
    $STituloA = "Websites";
    $STextoA = "Desenvolvemos ou reformulamos o web site de sua empresa, criando um espaço virtual em que seus clientes poderão obter informações sobre...";
    
    $STituloC = "Desenvolvimento de Sistemas";
    $STextoC = "Um sistema bem organizado é sinônimo de uma empresa bem organizada. Desenvolvemos sistemas web ou locais, para cadastro...";
    
    $STituloB = "Comércio Eletrônico";
    $STextoB = "Tornamos a sua empresa mais acessível, criando um web site de vendas personalizado, que permite aos clientes que conheçam e comprem...";
    
    $STituloD = "Mídias Socias";
    $STextoD = "Aproveitamos todo o potencial de marketing existente nas redes sociais com a criação de uma identidade...";
    
    $SF1 = "Faça um";
    $SF2 = "orçamento gratuito";
}else{
    $mais = "read more";
    
    $Stitulo = "Services";
    
    $STituloA = "Websites";
    $STextoA = "We develop or redesign the web site of your business, creating a virtual space where customers can get information about products...";
    
    $STituloC = "System Development";
    $STextoC = "A well-organized system is synonymous to a well organized company. We develop web or local systems for customer registration...";
    
    $STituloB = "E-Commerce";
    $STextoB = "We make your business more accessible by creating a custom sale web site, which allows customers to learn about and purchase...";
    
    $STituloD = "Social medias";
    $STextoD = "We take advantage of the marketing potential that exists on social networks by creating an identity...";
    
    $SF1 = "Make a";
    $SF2 = "free quote";
}
?>

<div class="limitador">
    <section class="fundo_conteudo">
        <article class="colSobre">
            <h2 class="centro padbot"><?php echo $Stitulo;?></h2>
        </article>
        <article class="colServ1 divisao">

            <h2 class="icones">A.</h2>
            <p class="icones_titulo"><?php echo $STituloA;?></p>
            <p class="icones_desc"><?php echo $STextoA;?> [<a href="#!/websites"><?php echo $mais;?></a>]</p>
            <h2 class="icones">B.</h2>
            <p class="icones_titulo icones_margem"><?php echo $STituloB;?></p>
            <p class="icones_desc"><?php echo $STextoB;?> [<a href="#!/ecommerce"><?php echo $mais;?></a>]</p>
        </article> 
        <article class="colServ2">
            <h2 class="icones">C.</h2>
            <p class="icones_titulo"><?php echo $STituloC;?></p>
            <p class="icones_desc"><?php echo $STextoC;?> [<a href="#!/sistemas"><?php echo $mais;?></a>]</p>

            <h2 class="icones">D.</h2>
            <p class="icones_titulo icones_margem"><?php echo $STituloD;?></p>
            <p class="icones_desc"><?php echo $STextoD;?> [<a href="#!/redessociais"><?php echo $mais;?></a>]</p>
        </article> 
        <p class="esp"><br/><?php echo $SF1;?> <strong><a href="#!/contato"><?php echo $SF2;?></a></strong>!</p>
    </section>
</div>