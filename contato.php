<?php
    function enviarEmail() {
  if(isset($_POST['enviar'])) {
        $to = 'luizfelipe01700@gmail.com';
        $subject = 'Formulário de contato';
        $message = 'Nome: ' . $_POST['nome'] . "\r\n\r\n";
        $message .= 'E-mail: ' . $_POST['email'] . "\r\n\r\n";
        $message .= 'Mensagem: ' . $_POST['descricao'];

        $headers = 'From: ' . $_POST['email'];

        if(mail($to, $subject, $message, $headers)) {
            echo '<p>E-mail enviado com sucesso!</p>';
        } else {
            echo '<p>Erro ao enviar e-mail. Por favor, tente novamente mais tarde.</p>';
        }
    }}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Luiz Felipe</title>
    <meta charset="UTF-8">
    <meta name="description" content="Veja os meus projetos e os meus templates" />
    <link rel="short cut icon" href="img/logo.jpg" />
    <link rel="stylesheet" href="css/estilo.css" />
</head>
<body>
    <header id="header">
        <nav id="nav">
            <input type="checkbox" id="checkbox" checked></input>
            <label for="checkbox" class="box-img"><img src="img/menu2.jpg" id="img-menu"></label>
            <ul id="menu">
                <li><a href="index.html"><b>INICIO</b></a></li>
                <li><a href="templates.html"><b>TEMPLATES</b></a></li>
                <li><a href="sobre.html"><b>SOBRE</b></a></li>
                <li><a href="contato.html"><b>CONTATO</b></a></li>
                <li><a href="https://github.com/XT07" target="_blank"><img src="img/github.jpg" style="width: 150px; margin: 0; padding: 0;"></a></li>
                <li><a href=""><img src="img/linkedin2.png" style="width: 150px; margin: 0; padding: 0;"></a></li>
            </ul>
        </nav>
    </header>
    <nav>
        <div class="nav-itens">
            <div class="nav-box">
                <div class="topo">
                    <ul class="topo-ul">
                        <li class="inline"><a href="index.html"><img src="img/logo.jpg" class="logo"></a></li>
                        <li class="inline" style="height: 100%;">
                            <p class="titulo-img">
                                WEB
                                <p class="titulo-img-sub">DEVOLOPER</p>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="menu">
                    <ul class="txtMenu">
                        <li style="margin-right: 5px;"><a href="index.html" class="iten-menu1"><b>INICIO</b></a></li>
                        <li style="margin-right: 5px; margin-left: 5px;"><a href="templates.html"
                                class="iten-menu2"><b>TEMPLATES</b></a></li>
                        <li style="margin-right: 5px; margin-left: 5px;"><a href="sobre.html"
                                class="iten-menu3"><b>SOBRE</b></a></li>
                        <li style="margin-left: 5px;"><a href="contato.html" class="iten-menu4"><b>CONTATO</b></a></li>
                        <li style="margin-right: 5px; margin-left: 5px;"><a href="https://github.com/XT07" target="_blank"><img src="img/github.png" style="width: 20px; margin-left: 20px; padding: 0;"></a></li>
                        <li style="margin-left: 5px;"><a href=""><img src="img/linkedin.png" style="width: 20px; margin-left: 5px; padding: 0;"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <form method="POST" action="">
            <fieldset>
                <legend>CONTATO VIA E-MAIL</legend>
                <label for="nome" class="labelForm">Nome:</label><br>
                <input type="text" class="inputForm" id="nome" name="nome"><br><br>

                <label for="email" class="labelForm">E-mail:</label><br>
                <input type="email" class="inputForm" id="email" name="email"><br><br>

                <label for="descricao" class="labelForm">Descrição:</label><br>
                <textarea id="descricao" class="descricaoForm" name="descricao"></textarea><br><br>

                <input type="submit" class="btnEnviar" value="enviar" name="enviar" onClick="enviarEmail()">
            </fieldset>
        </form>
    </div>
</body>

</html>