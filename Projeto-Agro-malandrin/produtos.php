<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="shortcut icon" href="multimidia/icones/Planta.png" type="image/x-icon">
</head>
<style>
    .dropbtn {
        background-color: #03740E;
        color: white;
        padding: 12px;
        font-size: 14px;
        border: none;
        cursor: pointer;
        border-radius: 7px;
        padding-right: 25px;
    }

    .dropbtn img {
        width: 13px;
        height: 10px;
        vertical-align: middle;
        margin-right: 4px;
        margin-bottom: 2px;
    }

    .icon {
        width: 20px;
        height: 20px;
        margin-right: 5px;
        filter: invert(0); /* Branco */
        transition: filter 0.1; /* Animação suave */
    }

    .dropbtn:focus .icon, /* Quando o botão é clicado */
    .dropbtn:hover .icon {  /* Ou quando passa o mouse */
        filter: invert(1); /* Preto */
    }

    .dropdown {
        position: relative;
        display: inline-block;
        margin-left: 5px;
        margin-top: 30px;
        border-radius: 10px;
        border: #034F0A;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        border-radius: 7px;
        border-color: #000;
        padding-right: 50px;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        font-family: Arial;
        border-color: #000;
    }

    .dropdown-content a:hover {
        background-color: #FCDCB7;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #FCDCB7;
        border-color: #000;
        color: black;
    }
</style>

<body>

    <div class="dropdown">
        <button class="dropbtn">
            <strong>
                <img src="multimidia/icones/Menu.png" alt="Ícone Menu" class="icon">
                Departamentos
            </strong>
        </button>
        <div class="dropdown-content">
            <a href="#">Rações</a>
            <a href="#">Ferramentas</a>
            <a href="#">Vestimentos</a>
            <a href="#">Remédios</a>
            <a href="#">Jardinagem</a>
            <a href="#">Sal Bovino</a>
            <a href="#">Adubos / Terras</a>
        </div>
    </div>

</body>
</html>