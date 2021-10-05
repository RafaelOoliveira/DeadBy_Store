<?php                   /* Quando estamos trabalhando com informações percistentes */
   session_start();   /*Após o fechamento da página permita que mantenha no navegador as informações geradas */
?>

<!DOCTYPE html>
<html lang="pt-br"> <!--Determinei a linguagem padrão do site-->
  <head>
    <meta charset="utf-8">
    <link href="css/MainCSS.css" rel="stylesheet"> <!--Tag que liga o arquivo css ao html, podendo alterar o estilo da página-->
     <div>
       <!--Tag de vinculação para utilizar fonte externa, permitindo utilizalá no ambiente html-->
       <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Secular+One&display=swap" rel="stylesheet">
     </div>

     <title>DeadBy - Brincos</title>

  </head>

  <body>
    <!-- Separei o código em divs, para facilitar as estilizações e interações que aconteceram em conjunto-->

    <div id="cabeçalho">
       <img id="logotipo" src="assents/imagem/marca/LOGOTIPO SITE.jpg" alt="LogoTipo DeadBy Store">
    </div>

    <div id="barra_menu">
       <input type="checkbox" id="check"> <!--A TAG input estará ligada ao label através do atributo for que liga o label ao input checkbox -->
       <label id="label_img_menu" for="check">
          <img id="img_menu" src="assents/imagem/icons/menu_icon.png" alt="Ícone da Barra de Menu - Três Linhas Paralelas">
        </label>
       <nav id="cont_menu">
         <ul id="menu">
           <li><a id="link_menu" href="MainSite.php">Home</a></li>
           <li><a id="link_menu" href="#">Brincos</a></li>
           <li><a id="link_menu" href="pagebonés.php">Bonés</a></li>
           <li><a id="link_menu" href="pagepulseiras.php">Pulseiras</a></li>
           <li><a id="link_menu" href="pagecontatos.php">Contato</a></li>
         </ul>
       </nav>
    </div>

    <br>
     <br>
      <br>

    <div id="slider">
        <img class="selected" src="assents/banner/1.jpg" alt="Image1">
        <img src="assents/banner/2.jpg" alt="Image2">
        <img src="assents/banner/3.jpg" alt="Image3">
        <img src="assents/banner/4.jpg" alt="Image4">
    </div>

        <br>
         <br>
          <br>
           <br>

    <h2 id="text">Brincos</h2>

    <div class="vitrine">
    <?php

          $items = array(
            ['nome'=>'Brinco Argola - DeadBy','imagem'=>'assents/brincos/Brinco DeadBy Argola.jpg','preco'=>'10'],
            ['nome'=>'Brinco Cruz - DeadBy','imagem'=>'assents/brincos/Brinco DeadBy Cruz.jpg','preco'=>'10'],
            ['nome'=>'Brinco Penas - DeadBy','imagem'=>'assents/brincos/Brinco DeadBy Penas.jpg','preco'=>'10']);

          foreach ($items as $key => $value) {

    ?>

          <div class="produtos">
            <img src="<?php echo $value['imagem'] ?>">
            <p><?php echo $value['nome'] ?></p>
            <p>R$<?php echo $value['preco'] ?></p>
            <a href="?adicionar=<?php echo $key ?>">Adicionar ao carrinho!</a>

           </div>

    <?php
        }
    ?>
        </div>

        <?php
            if(isset($_GET['adicionar'])){ /*Se o meu set  get adicionar ele vai adicionar ao carrinho e pegar o id do produto*/
              $idProduto = (int) $_GET['adicionar'];
              if(isset($items[$idProduto])){
                if(isset($_SESSION['carrinho'][$idProduto])){
                  $_SESSION['carrinho'][$idProduto]['quantidade']++;
                }else{
                  $_SESSION['carrinho'][$idProduto] = array('quantidade'=>1,'nome'=>$items[$idProduto]['nome'],'preco'=>$items[$idProduto][
                    'preco']);
                }
                echo '<script>alert("Item adicionado ao carrinho!");</script>';
              }else{
                die('Você não pode adicionar um item que não existe.');
              }
            }
        ?>

      <h2 id="text">Carrinho</h2>

      <?php
          foreach ($_SESSION['carrinho'] as $key => $value) {
            //Nome
            //Quantidade
            //Preço
            echo '<div class="carrinho-item">';
            echo '<p>Produto: '.$value['nome'].' | Quantidade: '.$value['quantidade'].' | Preço: '.($value['quantidade']*$value['preco']).'</p>';
            echo '</div>';
          }
      ?>

    </div>

    </body>

  <footer>

      <a href="https://www.instagram.com/deadbystore/">
        <img id="icon_instagram" src="assents/imagem/rede_social/Instagram.png">
      </a>

      <img id="logo" src="assents/imagem/marca/logodeadby.jpg">

  </footer>

     <br>

   <p id="direitos"><strong>Ananindeua / PA - Ícui-Guajará / Paar</strong></p>
  <p id="direitos"><strong>© 2020 DeadBy Store - Todos os direitos reservados</strong></p>
 <script src="js/MainJavaScript.js"></script>
</html>
