<?php
//  require_once('configuracoes/config.php');
//     require_once('bd/conexao.php');
//     // require_once(SRC.'bd/listarCategorias.php');
//     conexaoMysql();

//     require_once('controles/exibirDadosCategorias.php');




    session_start();

    $nome = (string) null;
    $id = (int) 0;
    $modo = (string) "Enviar";
    $celular = (string) null;
    $email = (string) null;

    require_once('Admin/configuracoes/config.php');

    require_once('Admin/bd/conexao.php');
    conexaoMysql();

    require_once(SRC. 'controles/exibirDadosContatos.php');

    if(isset( $_SESSION['contato'])){
        $id = $_SESSION['contato']['idcontato'];
        $nome = $_SESSION['contato']['nome'];
        $celular = $_SESSION['contato']['celular'];
        $email = $_SESSION['contato']['email'];
        $modo = "enviar";

        unset($_SESSION['contato']);
    }
    // var_dump($_SESSION['contato']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <script src="https://kit.fontawesome.com/1e592b5726.js" crossorigin="anonymous"></script>
    <title>Hamburguer</title>
</head>
<body>
    <header>
        

        <div class="center"> 
            <ul id="logo">
                    <h1>
                        MAFIA BURGUER
                    </h1>
                <li>
                    <a href="#sobre">
                        A EMPRESA 
                    </a>
                </li>
                <li> 
                    <a href="#secaoPromocao">
                        PROMOÇÕES 
                    </a>
                </li>
                <li> 
                    <a href="#secaoDestaques">
                        DESTAQUES 
                    </a>
                </li>
                <li> 
                    <a href="#secaoInformacoes">
                        CONTATOS 
                    </a>
                </li>
            </ul>
            <div id="redessocial">
                <img class="imgSociais" src="img/facebook.png" alt="">
                <img class="imgSociais" src="img/instagram.png" alt="">
                <img class="imgSociais" src="img/twitter.png" alt="">
                </div>
        </div>
</header>

        <!--ANIMACÃO DE IMAGENS-->
    <div class="paislider">
    <div id="slider">
        <img class="selected" src="img/imagem..jpg">
        <img src="img/imagem1.jpg">
        <img src="img/imagem2.jpg">
        <!-- <img src="img/imagem3.jpg"> -->
    </div>
    </div>
  <!--MENU-->
 <div class="menu2">
  <div id="menu">
    <div id="menu-bar" onclick="menuOnClick()">
      <div id="bar1" class="bar"></div>
      <div id="bar2" class="bar"></div>
      <div id="bar3" class="bar"></div>
    </div>
    <nav class="nav" id="nav">
      <ul>
        <li><a href="#">Cardapio</a></li>
        <li><a href="#">Á Empresa</a></li>
        <li><a href="#">Nossas Promoções</a></li>
        <li><a href="#">Destaques Da Loja</a></li>
      </ul>
    </nav> 
  </div>
  <div class="menu-bg" id="menu-bg"></div>
          
 </div> 
<div class="pesquisa">
    <form action="#" method="post">
        <input type="text" name="search" id="pesquisa" placeholder="Faça sua Busca" required>
        <button type="submit"><i class="fas fa-search"></i></button>
    </form> 
</div>
 <a name="cardapio" href="secaoEmpra"></a>
 <div class="cardapio_titulo" >
    <h3><strong>CARDÁPIO</strong></h3>
  </div>
  <div class="cardapio">
      <div class="cards">
          <img src="img/bicMac.jpg" width="100%">
          <div class="inner">
              <h4>Big Mac</h4>
              <p>Não existe nada igual! Dois hambúrgueres, alface, queijo e molho especial, cebola e picles num pão com gergelim. O sabor de McDonald’s duplamente delicioso. Com dois hambúrgueres de carne 100% bovina, queijo cheddar derretido, cebola, picles e o incrível molho Big Mac.</p>
              <div class="coluna1"><a href="#">R$ 40,00</a></div>
          </div>
      </div>
      <div class="cards">
          <img src="img/cheddarMcMelt.jpg" width="100%">
          <div class="inner">
              <h4>Cheddar McMelt</h4>
              <p>Sem palavras para descrever. Feito com carne bovina, delicioso queijo tipo cheddar derretido, cebola grelhada ao molho shoyu e para completar um pão escuro com gergelim.</p>
              <div class="coluna2"><a href="#">R$ 42,00</a></div>
          </div>
      </div>
      <div class="cards">
          <img src="img/quarteraoComQueijo.jpg" width="100%">
          <div class="inner">
              <h4>Quarterão Com Queijo</h4>
              <p> Um hambúrguer feito com pura carne bovina, envolvida por duas fatias de queijo cheddar, cebola, picles e molhos ketchup e mostarda.</p>
              <div class="coluna3"><a href="#">R$ 45,00</a></div>
          </div>
      </div>
      <div class="cards">
          <img src="img/mcChicken.jpg" width="100%">
          <div class="inner">
              <h4>McChicken</h4>
              <p>O sabor que você adora. Frango empanado e dourado com molho suave e cremoso, acompanhado de alface crocante num pão com gergelim.</p>
              <div class="coluna4"><a href="#">R$ 38,00</a></div>
          </div>
      </div>
      <div class="cards">
          <img src="img/mcNificoBacon.webp" width="100%">
          <div class="inner">
              <h4>McNifico Bacon</h4>
              <p>São 2 saborosas fatias de bacon, alface, cebola, hambúrguer de 120 gramas de carne bovina, queijo derretido, tomate e um trio de delícias: maionese, ketchup e mostarda.</p>
              <div class="coluna5"><a href="#">R$ 47,00</a></div>
          </div>
      </div>
      <div class="cards">
          <img src="img/xbaconDuploo.jpg" width="100%" height="310px">
          <div class="inner">
              <h4>xBacon Duplo</h4>
              <p>Pra quem ama Bacon! Dois deliciosos hambúrgueres de carne 100% bovina, queijo cheddar derretido, cebola, irresistíveis fatias de bacon e molhos ketchup e mostarda.</p>
              <div class="coluna6"><a href="#">R$ 42,00</a></div>
          </div>
         </div>
          <div class="cards">
             <img src="img/triploBurger.jpg" width="100%" height="310px">
             <div class="inner">
                 <h4>Triple Burger</h4>
                 <p>O sabor de McDonald’s triplamente delicioso: com três hambúrgueres de carne 100% bovina, queijo derretido, cebola, picles, ketchup e mostarda.</p>
                 <div class="coluna7"><a href="#">R$ 50,00</a></div>
             </div>
         </div>
         <div class="cards">
             <img src="img/chickenBurger.jpg" width="100%" height="310px">
             <div class="inner">
                 <h4>Chicken Burguer</h4>
                 <p>Pão tipo brioche + Catupiry + Cebola Frita + Queijo Cheddar + Molho Especial + Carne de Frango</p>
                <div class="coluna8"> <a href="#">R$ 45,00</a></div>
             </div>
         </div>


         
         

   </div>

<!--SOBRE-->
<a href="sobre"></a>
<div class="secaoEmpresa" >
    <div class="organizarSecao">
        <div class="descricaoEmpresa">
            <h2 id="tituloEmpresa">Mafia Burguer</h2>
            <p class="textoEmpresa">
                A Hamburgueria Mafia Burguer surgiu em 2019, quando o fundador Carlos Gabriel decidiu colocar seu don de culinaria em pratica para o publico 
            </p>
            <p class="textoEmpresa"> 
                Depois de falar com seus pais sobre a ideia de criar uma Hamburgueria para estar completamente no meio do seu hobby preferido,
            </p>
            <p class="textoEmpresa">
                E receber o apoio deles, Carlos resolveu por em pratica e investir neste sonho.
            </p>
            <p class="imagenempresa">
                <img src="img/Hamburgaria.jpg" height="250px" width="250px">
            </p>
        </div>
    </div>
</div>
<!-- PROMOÇAO -->
<div id="secaoPromocao"> 
    <h2> PROMOÇÕES DE SKINS </h2>
    <div class="itemSkin4">
        <div class="imgSkin">
            <img src="img/MR.BACON.webp" alt="">
        </div>
        <p class="nomeSkin">MR.BACON</p>
        <p class="descricaoSkin">Pão brioche ou australiano, hambúrguer 150gr, maionese temperada, cheddar, sauted onion, smoked bacon e barbecue.</p>
        <div class="saibaSkin"> SAIBA MAIS </div>
        <div class="precoPromocao"> 
            <p class="precoAntigo"> R$ 27,50 </p>
            <p class="precoAtual"> R$ 22,90 </p>
        </div>
    </div>
    
    <div class="itemSkin5">
        <div class="imgSkin">
            <img src="img/MR.BURGER.webp" alt="">
        </div>
        <p class="nomeSkin">MR.BURGER</p>
        <p class="descricaoSkin">Pão brioche ou australiano, hambúrguer 150g, maionese temperada e queijo.</p>
        <div class="saibaSkin"> SAIBA MAIS </div>
        <div class="precoPromocao"> 
            <p class="precoAntigo"> R$ 25,00 </p>
            <p class="precoAtual"> R$ 20,00 </p>
        </div>
    </div>
    
    <div class="itemSkin6">
        <div class="imgSkin">
            <img src="img/MR.MIKE.webp" alt="">
        </div>
        <p class="nomeSkin">MR.MIKE</p>
        <p class="descricaoSkin">Pão brioche ou australiano, hambúrguer 150gr, maionese temperada, smoked bacon, calabresa, ovo, cheddar, mussarela, tomate, rúcula ou alface, sauted onion.</p>
        <div class="saibaSkin"> SAIBA MAIS </div>
        <div class="precoPromocao"> 
            <p class="precoAntigo"> R$ 43,50 </p>
            <p class="precoAtual"> R$ 39,00 </p>
        </div>
    </div>
</div>


    <!-- destaques -->
    <div id="secaoDestaques"> 
        <div class="destaquesdaloja">
            <h3><strong>DESTAQUES DA LOJA</strong></h3>
          </div>
        <div id="organizarDestaques">
            <div class="imgDestaque"> <img src="img/bicMac.jpg" alt=""> </div>
            <div class="imgDestaque2"> <img src="img/cheddarMcMelt.jpg" alt=""> </div>
            <div class="imgDestaque3"> <img src="img/mcChicken.jpg" alt=""> </div>
            <div class="imgDestaque4"> <img src="img/quarteraoComQueijo.jpg" alt=""> </div>
        </div>
    </div>
    
    <div id="secaoInformacoes">
        <div id="organizarInfo">
	    <div id="lojasInfo">  
        <h3 class="tituloInfo"> NOSSA LOJA </h3>
            <h4> Jandira</h4>
            <div class="lojas"> 
                <img id="imgLoja" src="img/localizacao.png">
                <div id="iconeLoja">
                    <img src="img/localizacao.png">
                     <img src="img/telefone-velho.png">
                </div>
                
                <div id="textoLoja">
                    <p>Rua Elton Silva, 905</p>
                    <p> (11) 4772-4700</p>
                </div>
            </div>
        </div>
        
        <div id="contatosInfo">
        <H3> ENTRE EM CONTATO </H3>
            <div id="contatosLabel"> 
                <div class="label">
                     <label> Nome: </label>
                </div>
               
                <div class="label">
                    <label> Email: </label>
                </div>
                
                <div class="label">
                    <label> Celular: </label>
                </div>
            </div>
            <form action="Admin/controles/recebeContatos.php?modo=<?=$modo?>&id=<?=$id?>" name="frmCadastro" method="post" >
            <div id="contatosInput"> 
                <input type="text" name="nome" value="<?=$nome?>" maxlength="100"> 
                <input type="text" name="email" value="<?=$email?>" maxlength="100"> 
                <input type="text" name="celular" value="<?=$celular?>"maxlength="20"> 
            </div>
           <input id="btnSalvar" type="submit" name="btnSalvar" value="<?=$modo?>"> 
			</form>
        </div>
	</div>
    
    </div>

    <footer>
    <span> Copyright &copy; 2021 | Carlos Gabriel</span>
    </footer>
    
</body>
</html>