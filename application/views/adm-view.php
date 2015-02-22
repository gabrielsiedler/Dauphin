<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8"/>
        <link rel="shortcut icon" href="http://dauphin.cc/imagens/favicon.png" type="image"/>
        <title>Área restrita</title>
        <style type="text/css">

            ::selection{ background-color: #E13300; color: white; }
            ::moz-selection{ background-color: #E13300; color: white; }
            ::webkit-selection{ background-color: #E13300; color: white; }

            body {

                background-size: 100%;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
            }

            a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
            }

            h1 {
                color: #444;
                background-color: transparent;
                border-bottom: 1px solid #D0D0D0;
                font-size: 19px;
                font-weight: normal;
                margin: 0 0 14px 0;
                padding: 14px 15px 10px 15px;
            }

            code {
                font-family: Consolas, Monaco, Courier New, Courier, monospace;
                font-size: 12px;
                background-color: #f9f9f9;
                border: 1px solid #D0D0D0;
                color: #002166;
                display: block;
                margin: 14px 0 14px 0;
                padding: 12px 10px 12px 10px;
            }

            #container {
                padding: 20px;

                margin: 10px;
                border: 1px solid #D0D0D0;
                -webkit-box-shadow: 0 0 8px #D0D0D0;
                background:url(http://dauphin.cc/imagens/content-pad.png) repeat;
            }

            p {
                margin: 12px 15px 12px 15px;
            }
        </style>
    </head>
    <body background="http://dauphin.cc/imagens/mar.jpg">

        <div id="container">

            <h1>Contatos</h1>

            <?php
            foreach ($resposta as $linha) {
                echo '<ul>
            <li><b>Nome:</b> ' . $linha->nome . '</li>
            <li><b>E-mail:</b> ' . $linha->email . '</li>
            <li><b>Data:</b> ' . $linha->data . '</li>
            <li><b>Mensagem:</b> ' . $linha->mensagem . '</li>
            </ul>';
            }
            ?>
        </div>

    </body>
</html>