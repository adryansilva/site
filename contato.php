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
                <form action="action_page.php">
                    <label for="fname">Nome Completo:</label><br>
                    <input type="text" id="fname" name="firstname"><br>

                    <label for="lname">Cidade:</label><br>
                    <input type="text" id="lname" name="lastname"><br>

                    <label for="country">Serviço:</label><br>
                    <select id="country" name="country"><br>
                        <option value="limpeza">Limpeza</option><br>
                        <option value="manutenção">manutenção</option><br>
                        <option value="compra">compra</option><br>
                        <option value="Formatação">Formatação</option><br>
                    </select>
                    <br>
                    <br>
                    <label for="mensagem">Mensagem (OPCIONAL):</label><br>
                    <br><textarea>Digite sua mensagem....</textarea><br>

                    <input type="submit" value="Enviar"><br>
                </form><br><br>
            </center>
        </div>
    </body>
</html>