<?php
include_once 'includes/header.php'
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="multimidia/icones/Planta.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 97vh;
            margin: 0;
        }

        #login #tableLogin {
            border: solid 2px #F6A507;
            margin-top: 5%;
            margin-bottom: 5%;
            border-radius: 5px;
            width: 400px;
        }

        #login #conteiner #titulo {
            border: 2px solid #F6A507;
            border-top: 0;
            border-right: 0;
            border-left: 0;
            background-color: #FCDCB7;
            text-align: center;
            padding: 12px;
            font-size: 15px;
            border-radius: 6px;
            font-family: Arial, Helvetica, sans-serif;
        }

        #login #conteiner td {
            padding: 5px;
            letter-spacing: .03em;
            font-size: 14px;
            text-align: justify;
        }

        #login #conteiner input[type="email"],
        #login #conteiner input[type="password"] {
            width: 70%;
            padding: 8px;
            margin: 5px 12%;
            margin-top: 20px;
            margin-bottom: -50px;
            border: 1px solid #000;
            border-radius: 25px;
            
        }

        #login #conteiner .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        #login #conteiner a {
            text-decoration: none;
            color: #0112B0;
            font-size: 0.9em;
            margin: 15px 5%;
        }

        #login #conteiner button {
            padding: 5px 10px;
            margin: 15px 5%;
            background-color: #FCDCB7;
            border: 2px solid #F6A507;
            border-radius: 4px;
            color: #000;
            font-size: 0.9em;
            cursor: pointer;
        }

        #login #conteiner button:hover {
            background-color: #F6A507;
        }

        #login #conteiner strong {
            font-size: 110%;
        }
    </style>
</head>

<body id="login">
    <div id="conteiner">
        <table cellspacing="0" id="tableLogin">
            <th id="titulo">Faça Login e Nós Deixe Te Ajudarmos</th>

            <tr>
                <td>
                    <form>
                        <input type="email" placeholder="Email" required>
                        <input type="password" placeholder="Senha" required>
                        <div class="options">
                            <a href="#"><strong>Esqueceu a senha?</strong></a>
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>

<?php
include_once 'includes/footer.php';
?>