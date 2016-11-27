<?php
require_once 'dao/Conexao.php';
require_once 'dao/DaoSite.php';
$DaoSite = DaoSite::getInstance();
$dadosProdutos = $DaoSite->listar_produto();
$listaCategorias = $DaoSite->listar_categoria();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ITSolution - A tecnologia a seu dispor</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="stylesheet" href="css/estilo.css" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body>
        <div id="container">
            <div id="header">
                <img src="img/banner_opcao5.jpg" alt="img_banner_ITSolution"/>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="?pg=home"><input type="button" value="Inicio" class="inicio"/></a></li>
                    <li class="dropdown">
                        <a href="?pg=produtos"><input type="button" value="Produtos" class="produtos"/></a>
                        <div class="dropdown-content">
                            <?php
                                foreach ($listaCategorias  as $rowCategoria) {
                                   echo "<a href='?pg=produtos&categoria={$rowCategoria["id"]}'>{$rowCategoria["descricao"]}</a>";
                                }
                            ?>
                        </div>
                    </li>
                    <li><a href="?pg=servicos"><input type="button" value="Serviços" class="servicos"/></a></li>
                    <li><a href="?pg=contato"><input type="button" value="Contato" class="contato"/></a></li>
                    <li><a href="?pg=sobre"><input type="button" value="Sobre" class="sobre"/></a></li>
                </ul>

            </div>

            <br>
            <br>
            <br>
            <div id="banner">
                <div class="w3-content w3-display-container" style="max-width:1100px">
                    <img class="mySlides" src="img/black_friday.jpg" style="width:100%;">
                    <img class="mySlides" src="img/black_friday.jpg" style="width:100%">
                    <img class="mySlides" src="img/black_friday.jpg" style="width:100%">
                    <div class="w3-center w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                        <div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                        <div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                    </div>
                </div>
            </div>
            <div id="content">
                <div id="content-main">
                    <?php
                    $pg = @$_GET["pg"];
                    if (!empty($pg)) {
                        include $pg . '.php';
                    } else {
                        include 'home.php';
                    }
                    ?>
                </div>
            </div>
            <br>
            <div id="footer">
                <br> <span>
                    <br>Todos os direitos reservados ITSOLUTION AND CIA - &copy; - 2016. <br>
                </span>
                <div id=h4> ATENDIMENTO </div>
                <div id="h5"> Horário de atendimento: 09:00 às 19:00 de segunda à sexta-feira, <p>horário de Brasília (exceto feriados).</p>
                    Endereço: Rua Santa Cruz, 787 - L1
                    <br>Centro - Limeira (SP) - CEP: 13480-041
                    <br>Central SAC: (47) 2114-4444
                    <br> E-mail: atendimento@itsolutionecia.com.br</div>
                <div id="fb-like">
                    <div id="frame"><iframe src="https://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com%2Faprendizageminformatica2016&width=240&height=250&colorscheme=light&show_faces=true&border_color=%23ffffff&stream=false&header=false&appId=1719850761605142" width="260" height="250" style="border:activeborder;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
                </div>
                <br><br><br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br> <span>
                    <br>Todos os direitos reservados ITSOLUTION AND CIA - &copy; - 2016. <br>
                </span>
            </div>
                        </div>
        <script type="text/javascript" src="js/slider.js"></script>
    </body>
</html>
