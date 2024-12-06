<?php
include 'controle/InscricacaoDAO.php';
$dao = new CategoriaDAO();
$dados = $dao->listarTodos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if (count($dados) < 1) { ?>
            <h3>Não existem registros cadastrados</h3>
        <?php } else {  ?>
            <h3>Inscrição Cadastrada</h3>
            <table border='1' class="align-middle mb-0 table table-borderless table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>numero_pessoas_residencia</th>
                        <th>telefone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dados as $dado) { ?>
                    <tr>
                        <td><?php echo $dado['ID_insricao']; ?></td>
                        <td><?php echo $dado['numero_pessoas_residencia']; ?></td>
                        <td><?php echo $dado['telefone']; ?></td>
                    </tr>
                    <?php } ?>    
                </tbody>
            </table>            
        <?php } ?>

</body>
</html>
