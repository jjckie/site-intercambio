<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lista.css">
    <title>Lista de Usuários - Turtur</title>
</head>
<body>
<?php include 'navbar.php'; ?>

<main>
<div class="contact-container">
    <h1>Listar Usuários</h1>
    <?php 
        $sql = "SELECT * FROM usuarios";

        $res = $conn->query($sql);

        $qtd = $res->num_rows;

        
        if($qtd > 0){
            print "<table>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Data de Nascimento</th>";
            print "<th>Ações</th>";
            print "</tr>";
            

            while($row = $res->fetch_object()){
                print "<tr>";
                print "<td>" . $row->id . "</td>";
                print "<td>" . $row->nome . "</td>";
                print "<td>" . $row->email . "</td>";
                print "<td>" . $row->data_nasc . "</td>";
                print "<td> <button onclick=\"location.href='editar_usuario.php?id=" . $row->id . 
                "';\" class='btn btn-success'>Editar</button> 
                
               <button onclick=\"if(confirm('Tem certeza que deseja excluir?')) 
               {location.href='salvar_usuario.php?acao=excluir&id=".$row->id. "';} else {false;}\" 
               class='btn btn-danger'>Excluir</button>
               </td>";

               print "</tr>";
                
            }
          
        } else {
            print "<p class='alert alert-danger'>Não encontrou resultados! </p>";
        }
       
   ?>
</div>
</main>
</body>
</html>
