<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Turtur</title>
  <link rel="stylesheet" href="css/usuarios.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
<?php include 'navbar.php'; ?>


  <main>
    <div class="edit-container">
    <h1>Editar Usuário</h1>
    <?php
        $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
        $row = $res->fetch_object();

    ?>
    <form action="salvar_usuario.php" method="POST">
      <input type="hidden" name="acao" value="editar">
      <input type="hidden" name="id" value="<?php print $row->id; ?>">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>">

        <label>Email:</label>
        <input type="email" name="email" value="<?php print $row->email; ?>">

        <label>Senha:</label>
         <input type="password"  name="senha"  required>

         <label>Data de Nacimento:</label>
         <input type="date"  name="data_nasc" value="<?php print $row->data_nasc; ?>">
         <button type="submit">Enviar</button>
       

        </form>
        
        
      
     </div>
   
    
  </main>
</div>
</body>
</html>
