<?php
require_once 'dao/DaoSite.php';
$DaoSite = DaoSite::getInstance();
$listar_servico = $DaoSite->listar_servico();
?>
<!DOCTYPE html>
<html>
    <style>
        input[type=text], select {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 40%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .formulario{
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        textarea {
            width: 60%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 10px;
            background-color: #f8f8f8;
            font-size: 16px;
            resize: none;
        }
    </style>
    <body>

        <div id="formulario">
            <center>
                <br>
                <form method="post"> 
                    <label for="fname">Nome Completo:</label><br>
                    <input type="text" id="fname" name="firstname" required=""><br>

                    <label for="lname">Cidade:</label><br>
                    <input type="text" id="lname" name="lastname" required=""><br>

                    <label for="country">Serviço (OPCIONAL):</label><br>
                    <select name="tipo_servico">
                <option value="">Selecione o tipo de serviço</option>
                <?php
                foreach ($listar_servico as $servico) {
                        ?>
                        <option value="<?= $servico["id"] ?>"><?= $servico["tipo"] ?></option>
                        <?php
                    }
                ?>
            </select>
                    <br>
                    <br>
                    <label for="mensagem">Mensagem (OPCIONAL):</label><br>
                    <br><textarea>Digite sua mensagem....</textarea><br>

                    <button type="submit" name="botao" class="btn btn-info btn-lg"> <span class="glyphicon glyphicon-ok"></span><b> Enviar </b></button><br>
                </form><br><br>
            </center>
        </div>
    </body>
</html>
<?php
if (isset($_POST["botao"])) {
        echo "<script type='text/javascript'>"
        . " alert('Mensagem De contato Enviada com Sucesso! Obrigado! Entraremos em contato o mais rápido possivel! !');"
        . "location.href='?pg=home';"
        . "</script>;";
    
    }