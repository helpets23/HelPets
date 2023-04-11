<!DOCTYPE html>
<html lang="pt-br" xmlns:mso="urn:schemas-microsoft-com:office:office"
  xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882">

<head>
  <script src="https://kit.fontawesome.com/359246911d.js" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Css/adotar.css">
  <title>Helpet</title>
</head>

<body>

  <header>

    <div class="ima">
      <img src="helpet-img-2.png">
    </div>
    <div id="divBusca">
      <input type="text" id="txtBusca" placeholder="Buscar..." />
      <div class="lupa">
        <img src="img/pesquisar.png">
      </div>
    </div>
    <nav>
      <ul class="topicos">
        <li><a href="inicial.html">Página Inicial</a></li>
        <li><a href="Adotar.html">Adotar</a></li>
        <li><a href="inicial.html">Doar</a></li>
        <li><a href="sobrenos.html">Sobre Nós</a></li>
        <li><a href="signup.html">Login/Cadastro</a></li>

      </ul>
    </nav>
  </header>
  <div id="List-Ani">
  
    <div class="animal1">
      <div class="imagem1">
        <img src="img/dog3.jpeg">
      </div>
      <div class="tipos1">
        <strong>Raça:</strong> de alguma coisa <br>
        <strong>Sexo: </strong> Masculino <br>
        <strong>Idade: </strong>1 ano <br>
        <strong>Peso: </strong>1,5Kg <br>
      </div>
      <div class="tipos2">
        <strong> Porte: </strong>Médio <br>
        <strong>Espécie: </strong>Cachorro <br>
        <strong> Local: </strong>Sete Lagoas <br>
  
      </div>
      
  
      <div class="tit">
        Historia do animal
      </div>
      <div class="hist">
        <div class="mes">
          historinhas klakakakasjdsadjhsakhndskhdjsbndjsbnjsbkabcjkbsadjbsdjkbksjd<br>bjkbsdvkjbsdvkjbsdvb
        </div>
  
      </div>
  
    </div>
  
    <div class="animal1">
      <div class="imagem1">
        <img src="img/gato3.jpeg">
      </div>
      <div class="tipos1">
        <strong>Raça:</strong> de alguma coisa <br>
        <strong>Sexo: </strong> Masculino <br>
        <strong>Idade: </strong>1 ano <br>
        <strong>Peso: </strong>1,5Kg <br>
      </div>
      <div class="tipos2">
        <strong> Porte: </strong>Médio <br>
        <strong>Espécie: </strong>Cachorro <br>
        <strong> Local: </strong>Sete Lagoas <br>
  
      </div>
  
      
  
      <div class="tit">
        Historia do animal
      </div>
      <div class="hist">
        <div class="mes">
          historinhas klakakakasjdsadjhsakhndskhdjsbndjsbnjsbkabcjkbsadjbsdjkbksjd<br>bjkbsdvkjbsdvkjbsdvb
        </div>
  
      </div>
  
    </div>
  


    <?php 
        include('./conexaohel.php');

        $sql = 'SELECT * FROM animaizinho ';
        $Data  = mysqli_query($conexao,$sql);

        while($data = mysqli_fetch_assoc($Data)){

          $Image = $data['img'];
          $Sexo = $data['sexo'];
          $idade = $data['idade'];
          $peso = $data['peso'];
          $local = $data['local'];

          echo("
        <div class='animal1'>
          <div class='imagem1'>
          <img src='./ImagensDoacao/$Image' />
          </div>
          <div class='tipos1'>
        <strong>Raça:</strong> de alguma coisa <br>
        <strong>Sexo: </strong> $Sexo <br>
        <strong>Idade: </strong>$idade anos <br>
        <strong>Peso: </strong>$peso <br>
      </div>
      <div class='tipos2'>
        <strong> Porte: </strong>Médio <br>
        <strong>Espécie: </strong>Cachorro <br>
        <strong> Local: </strong>$local<br>
  
      </div>
      
  
      <div class='tit'>
        Historia do animal
      </div>
      <div class='hist'>
        <div class='mes'>
          historinhas klakakakasjdsadjhsakhndskhdjsbndjsbnjsbkabcjkbsadjbsdjkbksjd<br>bjkbsdvkjbsdvkjbsdvb
        </div>
  
      </div>
        
        </div>");
        };
    ?>

  </div>
</body>
</html>