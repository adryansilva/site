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
    </head>
    <body>
        <div id="container">
            <div id="header">
                <img src="img/banner_opcao5.jpg" alt="img_banner_ITSolution"/>
            </div>
            <div id="menu">
                <?php
                include 'menu.php';
                ?>
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
            <div id="footer">
                <br> <span>
                    <br>Todos os direitos reservados ITSOLUTION AND CIA - &copy; - 2016. <br>
                </span>
                 <div id=h4> ATENDIMENTO </div>
                <div id="h5"> Horário de atendimento: 09:00 às 19:00 de segunda à sexta-feira, <p>horário de Brasília (exceto feriados).</p>
                        Endereço: Rua Santa Cruz, 787 - L1 
                    <br>Centro - Limeira (SP) - CEP: 13480-041
                    <br>Central SAC: (19) 2114-4444
                    <br> E-mail: atendimento@itsolutionecia.com.br</div>
                <div id="fb-like">
                    <div id="frame"><iframe src="https://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com%2Faprendizageminformatica2016&width=240&height=250&colorscheme=light&show_faces=true&border_color=%23ffffff&stream=false&header=false&appId=1719850761605142" width="260" height="250" style="border:activeborder;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
                </div>
            </div>
        </div>
    </body>
</html>