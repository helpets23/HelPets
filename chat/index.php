<!DOCTYPE html>
<html  lang =" pt-br " >
<head>
    <meta  charset =" UTF-8 " >
    <meta  name =" janela de visualização " content =" largura=largura do dispositivo, escala inicial=1,0 " >
    <meta  http-equiv =" X-UA-Compatible " content =" ie=edge " >
    <título></título>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link  rel =" folha de estilo " href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" > <!--fonte do google-->
</head >
<?php

?>
<body >

    <div  class ="wrapper">
        <section class ="form signup"> <!--formulario do cadastro-->
            <form action="#" enctype="multipart/form-dat">
                <div class="error-text"></div> <!--mensagem de erro-->
                <div class ="name-details">
                    <div class ="field input">
                        <label>Nome</label > <!--formulario-->
                        <input type =" text " name="fname" placeholder ="Seu nome " require>
                    </div> 
                    <div class ="field input">
                        <label>Sobrenome</label>
                        <input type ="text" name="lname" placeholder ="Seu sobrenome" require>
                    </div> 
                </div> 
                <div  class ="field input">
                    <label>e-mail</label>
                    <input type="email" name="email" placeholder ="Seu e-mail" require>
                </div> 
                <div  class ="field input">
                    <label>Senha</label >
                    <input type="password" name="password" placeholder ="Informe uma senha" require>
                    <i class="fas fa-eye"></i>
                </div> 
                <div class ="field image"> <!--para o usuario escolher um arquivo de imagem-->
                    <input  type ="file" name="image" require>
                </div> 
                <div class ="field button"> <!-- para o usuario cadastrar-->
                    <input  type ="submit" value ="Cadastrar">
                    
                </div> 
            </form> <!--caso o usuario ja tenha cadastro ele será redirecionado para a pagina de login ao clicar-->
            <div  class="link">Já está cadastrado?<a href="loginn.php">Entrar agora</a></div>
        </section >
    </div>
    <script src="js/escondersenha.js"></script>
    <script src="js/signup.js"></script>
</body>
</html>