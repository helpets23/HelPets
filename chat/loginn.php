<!DOCTYPE html>
<html  lang =" pt-br " >
<head>
    <meta  charset =" UTF-8 " >
    <meta  name =" janela de visualização " content =" largura=largura do dispositivo, escala inicial=1,0 " >
        <meta  http-equiv =" X-UA-Compatible " content =" ie=edge " >
  <título></título>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link  rel =" folha de estilo " href =" font-family: 'Roboto Slab', serif; " >
</head >
<?php

session_start();

?>
<body >
    <div  class ="wrapper">
        <section class ="form login"> <!--formulario de login-->
            <form action="#">
                <div class="error-text"></div>  <!--caso tenha algo errado no login-->
                <div  class ="field input">
                    <label>e-mail</label>
                    <input type="email" name="email" placeholder ="Informe seu e-mail">
                </div> 
                <div  class ="field input">
                    <label>Senha</label >
                    <input type="password" name="password" placeholder ="Informe sua senha">
            <i class="fas fa-eye"></i>
                </div> 
                <div class ="field button">
                    <input  type ="submit" value ="Entrar">
                </div> 
            </form> 
            <div  class="link">Não está cadastrado?<a href="index.php">Cadastrar agora</a></div>
        </section >
    </div>
    <script src="js/loginn.js"></script>
    <script src="js/escondersenha.js"></script>
</body>
</html>