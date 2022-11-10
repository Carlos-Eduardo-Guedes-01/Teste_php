<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Achados e perdidos</title>
    </head>
    <body>
        <h1>Achados e perdidos</h1><br>
         Login IFPI<br>
         <form action="search/busca.php" method="POST">
         <label>Usuário:</label><input type="text" placeholder="Digite sua matrícula"><br>
         <label>Senha:</label><input type="password" placeholder="Digite a senha"><br>
         <!-- simbulo para mostrar a senha ao lado do campo de digitar a senha -->Exibir a senha<br>
         <a href="recovery/recuperacao.php">Esqueceu ou deseja alterar sua senha?</a><br>
         <button type="submit">Acessar</button>
         </form>
        <?php
        
        ?>
    </body>
</html>
