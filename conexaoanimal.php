<?php

session_start();
include('./conexaohel.php');

error_reporting(0);

$Arquivo = $_FILES['imagem'];
$Name = $_FILES['imagem']['name'];
$Type = $_FILES['imagem']['type'];
$Tmp_Arquivo = $_FILES['imagem']['tmp_name'];

if(isset($Arquivo)){
        //diretorio dos arquivos
        $pasta_dir = "ImagensDoacao/";
        // Faz o upload da imagem
        $arquivo_nome = $pasta_dir . $Arquivo['name'] ;
        //salva no banco
        move_uploaded_file($Tmp_Arquivo,"ImagensDoacao/" . $Arquivo['name']);

        $Nome = $_POST['Nome'];
        $Raca = $_POST['Raça'];
        $Sexo = $_POST['Sexo'];
        $Idade = $_POST['Idade'];
        $Porte = $_POST['Porte'];
        $Peso = $_POST['Peso'];
        $Local = $_POST['Local'];
        $Vac = 'Sim';
        $Doen = 'sim';
        $Img = $Arquivo['name'];
        $Des = $_POST['ContatoS'];
        $id_user = $_SESSION['unique_id'];
        $sql = "INSERT INTO animaizinho (nome,sexo,idade,porte,peso,local,vacina_dia,doença,descrição,img,Raca,id_user) 
        VALUES ('$Nome','$Sexo','$Idade','$Porte','$Peso','$Local','$Vac','$Doen','$Des','$Img','$Raca','$id_user')";

        if(mysqli_query($conexao,$sql)){
                echo'Cadastrado com succeso';
        }
        else{
                echo('DEu erro');
        }
      };
?>