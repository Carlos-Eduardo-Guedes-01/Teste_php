<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        ?>
        <form action="models/CadastraCurso.php" method="POST">
            <label>Área do Curso:<input type="text" placeholder="Ex.: Tecnólogo, Licenciatura, etc"></label>
            <label>Nome do curso:<input type="text" placeholder="Ex.: Análise e Desenvolvimento de Sistemas, etc"></label>
            <label>Turno:<select name="turnos" id="turnos">
                <option value="Matutino">Matutino</option>
                <option value="Vespertino">Vespertino</option>
                <option value="Noturno">Noturno</option>
                </select>
            </label>
            <button type="submit">Cadastrar</button>
        </form>
    </body>
</html>
