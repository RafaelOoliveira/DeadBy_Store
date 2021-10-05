<!DOCTYPE html>
<html lang="pt-br"> <!--Determinei a linguagem padrão do site-->
  <head>
    <meta charset="utf-8">
    <link href="css/contato.css" rel="stylesheet"> <!--Tag que liga o arquivo css ao html, podendo alterar o estilo da página-->
     <div>
       <!--Tag de vinculação para utilizar fonte externa, permitindo utilizalá no ambiente html-->
       <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Secular+One&display=swap" rel="stylesheet">
     </div>

     <title>DeadBy - Contatos</title>

  </head>

  <body>
    <!-- Separei o código em divs, para facilitar as estilizações e interações que aconteceram em conjunto-->
    <header>
      <div id="cabeçalho">
        <img id="logotipo" src="assents/imagem/marca/LOGOTIPO SITE.jpg" alt="LogoTipo DeadBy Store">
        </div>
        </header>

    <div id="barra_menu">
       <input type="checkbox" id="check"> <!--A TAG input estará ligada ao label através do atributo for que liga o label ao input checkbox -->
       <label id="label_img_menu" for="check">
          <img id="img_menu" src="assents/imagem/icons/menu_icon.png" alt="Ícone da Barra de Menu - Três Linhas Paralelas">
        </label>
       <nav id="cont_menu">
         <ul id="menu">
           <li><a id="link_menu" href="MainSite.php">Home</a></li>
           <li><a id="link_menu" href="pagebrincos.php">Brincos</a></li>
           <li><a id="link_menu" href="pagebonés.php">Bonés</a></li>
           <li><a id="link_menu" href="pagepulseiras.php">Pulseiras</a></li>
           <li><a id="link_menu" href="#">Contato</a></li>
         </ul>
       </nav>
    </div>

        <br>
         <br>
          <br>
           <br>

      <h2 id="text">Central de Atendimento</h2>

      <br>
       <br>

      <div id="central_atendi">
        <img id="atend" src="assents/imagem/marca/contate-nos_branco.jpg">

        <br>
         <br>

         <p id="info">Depois de enviar sua mensagem, você receberá no seu email um #ticket de atendimento</p>
           <br>
          <p id="info">Os email são respondidos em até 72hrs de segunda a sexta das 9:00 as 18:00</p>


        <br>
         <br>

        <form action="https://api.staticforms.xyz/submit" method="post" class="card">
          <input type="hidden" name="accessKey" value="772ee92b-b682-4414-aa40-7e589de0d762">
          <input type="hidden" name="redirectTo" value="https://www.google.com.br">

          <label for="inputNome">Nome</label>
          <input type="text" id="inputNome" name="name" required maxlength="30" minlength="2">

          <label for="inputEmail">Endereço de Email</label>
          <input type="email" id="inputEmail" name="email" required maxlength="50">

          <label for="textAreaDúvida">Dúvida</label>
          <textarea name="message" id="textAreaDúvida" required maxlength="200"></textarea>

          <button>Enviar Dúvida</button>
        </form>
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
 <script src="js/"></script>
</html>
