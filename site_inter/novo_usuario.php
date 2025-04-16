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
    <h1>Novo Usuário</h1>
    <form action="salvar_usuario.php" method="POST">
      <input type="hidden" name="acao" value="cadastrar">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Senha:</label>
         <input type="password"  name="senha" required>

         <label>Data de Nacimento:</label>
         <input type="date"  name="data_nasc" required>
         <button type="submit">Enviar</button>
       

        </form>
        
        
      
     </div>
   
    
  </main>
</div>
</body>
</html>
