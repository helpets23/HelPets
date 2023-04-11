<!DOCTYPE html>
<html  lang =" pt-br " >
<head>
    <meta  charset =" UTF-8 " >
    <meta  name =" janela de visualização " content =" largura=largura do dispositivo, escala inicial=1,0 " >
    <meta  http-equiv =" X-UA-Compatible " content =" ie=edge " >
    <título></título>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link  rel =" folha de estilo " href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <?php
    session_start();
    if (!isset($_SESSION['unique_id'])) {
        header('location: loginn.php');
    }
?>
        <?php include_once "head.php" ?>
         <body>
        <section class="wrapper">
        <section class ="user"> <!---->
           <header>
           <?php
                    include_once "php/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM user
                                                WHERE unique_id = {$_SESSION['unique_id']}");
                    if (mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
            <div class="content"> <!--puxa do banco de dados e salva os dados do usúario que aparecerá no chat-->
                <?php
                $img = $row ["img"];
                echo "<img src='./php/images/$img'alt=''>"; ?>
                <div class="details">
                <span><?php echo $row ["fname"] ." " . $row ['lname'];?></span>
                <p><?php echo $row ["status"]; ?> </p>
            </div>
            </div>
          
            <a href="php\logout.php" class ="logout">Sair</a> <!--sair do chat-->
            <a href="../inicial.html" class ="pag">Página Inicial</a> 
           </header>
           <form method="POST" classe ="search">
            <span  class ="text">Selecione o usuário para iniciar o chat</span>
                <input name="searchTerm" type ="text" placeholder ="Nome do usuário para buscar" width="100px" height="14px" id="search-input">
                <button><i class="button"></i><svg fill="#000000" width="15px" height="14px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
    <path d="M12.027 9.92L16 13.95 14 16l-4.075-3.976A6.465 6.465 0 0 1 6.5 13C2.91 13 0 10.083 0 6.5 0 2.91 2.917 0 6.5 0 10.09 0 13 2.917 13 6.5a6.463 6.463 0 0 1-.973 3.42zM1.997 6.452c0 2.48 2.014 4.5 4.5 4.5 2.48 0 4.5-2.015 4.5-4.5 0-2.48-2.015-4.5-4.5-4.5-2.48 0-4.5 2.014-4.5 4.5z" fill-rule="evenodd"/>
</svg></button>
                </form>
                <div class="user-list">
               <?php
               error_reporting(0);
               $a = $_POST['searchTerm'] == '';
               if($a !== 1){
                include"./php/search.php";
               }
               if ($a == 1){
               include"./php/save.php";
               } ?>
            </div>
            
        </section>
    </div>
    <script src="js/user.js"></script>
</body>
</html>