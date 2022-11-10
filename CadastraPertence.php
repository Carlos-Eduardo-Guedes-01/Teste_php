<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de pertence</title>
    </head>
    <body>
        <form action="models/CadastraPertence.php" method="POST">
            <label>Nome:<input type="text" placeholder="Nome do pertence"></label>
            <label>Cor:<input type="text" placeholder="Cor do pertence"></label>
            <label>Tipo de Pertence:<input type="text" placeholder="Tipo do pertence"></label>
            <label>Local onde foi encontrado:<input type="text" placeholder="Local"></label>
            <button type="submit">Cadastrar</button>
        </form>
        <?php
        
        ?>
    </body>
</html>
