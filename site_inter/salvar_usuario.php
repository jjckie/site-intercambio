<?php

include 'config.php';
    switch ($_REQUEST["acao"]) {
        case 'cadastrar' :
           $nome = $_POST["nome"];
           $email = $_POST["email"];
           $senha = $_POST["senha"];
           $data_nasc = $_POST["data_nasc"];

           $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', 
           '{$email}', '{$senha}', '{$data_nasc}')";

           $res = $conn ->query($sql);

           if($res==true) {
              print "<script>alert('Cadastro com sucesso'); </script>";
              print "<script>location.href='lista_usuarios.php'; </script>";
           }
           else  {
            print "<script>alert('Cadastro não realizado'); </script>";
            print "<script>location.href='lista_usuarios.php'; </script>";
         }

            break;
        
         case 'editar' :
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET nome='{$nome}', 
                                        email='{$email}',
                                        senha='{$senha}',
                                        data_nasc='{$data_nasc}'
                                        WHERE 
                                            id=".$_REQUEST["id"];

            $res = $conn ->query($sql);

            if($res==true) {
               print "<script>alert('Editado com sucesso'); </script>";
               print "<script>location.href='lista_usuarios.php'; </script>";
            }
            else  {
             print "<script>alert('Não foi possível editar'); </script>";
             print "<script>location.href='lista_usuarios.php'; </script>";
          }
 
            break;
        
         case 'excluir' :
            
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
            $res = $conn ->query($sql);

            if($res==true) {
               print "<script>alert('Excluído com sucesso'); </script>";
               print "<script>location.href='lista_usuarios.php'; </script>";
            }
            else  {
             print "<script>alert('Não foi possível excluir'); </script>";
             print "<script>location.href='lista_usuarios.php'; </script>";
          }

            break;
    }