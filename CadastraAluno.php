<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Aluno</title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <form action="models/CadastraAluno.php" method="POST">
            <label>Matricula:<input type="text" placeholder="Digite a matricula" name="matricula"></label>
            <label>Nome:<input type="text" placeholder="Digite a matricula" name="nome"></label>
            <label>Data de nascimento:<input type="date" placeholder="Digite a matricula" name="dataNasc"></label>
            <label>Curso:
                <select name="cursos" id="cursos" name="curso">
                <option value="Tecnólogo em Análise e Desenvolvimento de Sistemas">Tecnólogo em Análise e Desenvolvimento de Sistemas</option>
                <option value="Tecnólogo em Gestão Ambiental">Tecnólogo em Gestão Ambiental</option>
                <option value="Licenciatura Plena em Gestão Ambiental">Licenciatura Plena em Gestão Ambiental</option>
                <option value="Licenciatura Plena em Matemática">Licenciatura Plena em Matemática</option>
              </select>
            </label>
            <label>Responsável:<input type="text" placeholder="Digite o responsável" name="responsavel"></label>
            <label>Senha:<input type="text" placeholder="Digite a senha" name="senha"></label>
            <button type="submit">Cadastrar</button>
        </form>
    </body>
</html>
