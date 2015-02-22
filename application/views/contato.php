<?php
if ($idioma == 'pt') {
    $f1 = "Localização:";
    $f2 = "Pelotas / RS / Brasil";
    $f3 = "Contato:";
    $f4 = "Telefone: (53) 81159309";
    $f5 = "E-mail: contato@dauphin.cc";
    $f6 = "Nome ou empresa";
    $f7 = "E-mail";
    $f8 = "Mensagem";
    $f9 = "enviar";
} else {
    $idioma = 'en';
    $f1 = "Location:";
    $f2 = "Pelotas / RS / Brazil";
    $f3 = "Contact:";
    $f4 = "Phone: +55 (53) 81159309";
    $f5 = "E-mail: contato@dauphin.cc";
    $f6 = "Name or Company";
    $f7 = "E-mail";
    $f8 = "Message";
    $f9 = "send";
}
?>

<div class="limitador">
    <section class="fundo_conteudo">
        <article class="colContato1 divisao">
            <h2><?php echo $f1; ?></h2>
            <h3><?php echo $f2; ?></h3>
            <div id="map"><figure class="google_map"></figure></div>
        </article> 
        <article class="colContato2">
            <h2><?php echo $f3; ?></h2>
            <h3><?php /* <!--?php echo $f4; ?><br/!-- */ ?><?php echo $f5; ?></h3>

            <?php
            $atform = array('id' => 'formulario');
            $hidden = array('idioma' => $idioma);
            echo form_open('site/contato', $atform, $hidden);

            $formNome = array(
                'name' => 'nome',
                'id' => 'nome',
                'value' => $f6,
                'onfocus' => "if (this.value == '" . $f6 . "') {this.value = '';}",
                'onblur' => "if (this.value == '') {this.value = '" . $f6 . "';}",
                'maxlength' => '50',
                'class' => 'input',
            );

            $formEmail = array(
                'name' => 'email',
                'id' => 'email',
                'onfocus' => "if (this.value == '" . $f7 . "') {this.value = '';}",
                'onblur' => "if (this.value == '') {this.value = '" . $f7 . "';}",
                'value' => $f7,
                'maxlength' => '50',
                'class' => 'input',
            );

            $formMensagem = array(
                'name' => 'mensagem',
                'id' => 'mensagem',
                'value' => $f8,
                'onfocus' => "if (this.value == '" . $f8 . "') {this.value = '';}",
                'onblur' => "if (this.value == '') {this.value = '" . $f8 . "';}",
                'rows' => '1',
                'cols' => '2',
            );

            $submit = Array("name" => "submit", "value" => $f9, "class" => "enviar");

            echo '<label>';
            echo form_input($formNome);
            echo '</label>';
            echo '<label>';
            echo form_input($formEmail);
            echo '</label>';
            echo '<label>';
            echo form_textarea($formMensagem);
            echo '</label>';
           
            echo form_submit($submit);
            echo form_close();
            ?>
        </article> 
    </section>
</div>