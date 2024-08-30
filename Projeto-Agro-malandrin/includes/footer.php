<body>
    <footer> <!-- footer das paginas -->
        <div id="perguntas"> <!-- sessão de ajuda -->
            <h1 id="titulo">Duvidas Frequentes</h1>
            <ul>
                <a href="ajuda.php" id="links"> <li>Vocês vendem no site?        </li> </a>
                <br>
                <a href="ajuda.php" id="links"> <li>Quais são nossos produtos?</li> </a>
                <br>
                <a href="ajuda.php" id="links"> <li>Porque deveria nós avaliar?         </li> </a>
            </ul>

        </div>

        <div id="logo"><!-- a logo que fica no footer -->
        <img src="multimidia/Logo_Foo.png" alt="logo da agro malandrin" >
        </div>

        <div id="linksfora">  <!-- os links de fora (para outros sites) --> 
            <h1 id="titulo">Contate-nos</h1>
            <table>
                <tr>
                    <td > <a href="https://www.facebook.com/agromalandrin/" target="_blank" id="linkfoo"> <li id="facefoo"> FaceBook </li> </a> </td>

                    <td> <a href="https://www.instagram.com/agromalandrin/" target="_blank" id="linkfoo"> <li id="instfoo"> Instagram </li> </a> </td>                    
                </tr>
                <tr>
                    <td> <a href="https://wa.me/551938431393"  target="_blank" id="linkfoo"> <li id="whatfoo"> Whatsapp </li> </a> </td>
                    
                    <td>
                        <button onclick="copiarTexto()" id="Emailbotum"> <li id="Emailfoo"> Email </li></button>

                        <script>
                        function copiarTexto() {
                                var email = "Agromalandrin"; // Texto a ser copiado
                                // Tenta usar o método clipboard para copiar
                                navigator.clipboard.writeText(email)
                                .then(() => {
                                    alert("Email copiado");
                                })
                                .catch(err => { 
                                    alert("Erro encontrado, Tente novamente mais tarde");   
                                });
                            }
                        </script>
                    </td>
                </tr>
            </table>
        </div>
    </footer>
</body>
</html>

