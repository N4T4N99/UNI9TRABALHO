<?php
include ("../../conexao.php");
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Lançamentos</title>

  <!-- Favicons -->
  
  <!-- end Favicons -->

  <!-- Css -->
  <link rel="stylesheet" href="../../stylegeral2.css">
  <link rel="stylesheet" href="../../style_catalogo.css">
  

<style>
  
 
  </style>
</head>

<body>

<div id="superior"> 
     <img id="logo"src="../../imgs/logomark.png" alt="logo"> <a href="../../paglogin.php"><input class="buttonlogin"type="button" value="Login"></a><a href="../../pagregistrar.php"><input class="buttonregister"type="button" value="Registrar"></a>
     <div id="dentrodiv"> <img src="../../imgs/lupa.png" class="lupa"><input class="pesquisabar"><a href="../../index.php"> <span id="cabecalhoinicial"> Inicial </span> </a>
     <a href="../../index.php"><span id="cabecalho"> Plataformas &#9660; <span> </a>
     <a href="paglancamentos.php"> <span id="cabecalho2"> Lançamentos <span> </a><a href="../PROMOCOES/pagpromocoes.php"> <span id="cabecalho3"> Promoçoes <span> </a>
     <a href="../../pagsuporte.php"> <span id="cabecalho4"> Suporte <span> </a>
    </div> 

    <div class="divimgplataforma">  <div class="txtimgplataforma">LANÇAMENTOS </div> </div>

  <!-- menu do site -->
  

          <!-- submenu -->
          

        <!-- lista de itens -->
        
      </ul>
      <!-- menu -->
    </section>
    <!-- end container -->
  </nav>
  <!-- end menu do site -->

  <!-- main -->

 <?php 
 
 $sqlcode = "SELECT * FROM jogos  ";
$sql_query = $mysqli->query($sqlcode) or die ("ERRO Codigo Banco De Dados ". $mysqli->error );
$i = 0;
while($dados = $sql_query->fetch_assoc()){
 ?>



    <!-- container produtos -->
    <section class="container produtos">

      <nav aria-label="breadcrumb">
        
      </nav>

      <!-- title -->
      
      <!-- listagem dos produtos -->
      <article class="row">

        <!-- produtos -->
        <a href="produtos/" class="produtos-container col-md-3"> 
          <!-- imagem do produto -->
          
           <img src="../../jogos/<?php echo $dados['ID'];  ?>.jpg" class="img-fluid">

          <!-- itens do produto -->
          <article class="produtos-itens">
            <!-- title produto -->
            <h2><a href="../../detalhes/<?php echo $dados['ID']; ?>.php"><?php echo $dados['NOME']; ?></a> </h2>

      

            <!-- preco -->
            <strong class="produtos-preco">
              Plataforma: <?PHP echo $dados['PLATAFORMA'];?><br>
              Genero: <?PHP echo $dados['GENERO'];?><br>
              Ano De Lançamento: <?PHP echo $dados['ANO'];?>
              <br><br><br><br><br>
              R$:<?PHP echo $dados['PRECO'];?>,00
            </strong>
           
          </article>
          <!-- end itens do produto -->
        </a>
        <!-- end produtos -->

        <?php ++$i;}; while($dados = $sql_query->fetch_assoc() AND $i<=30 )
        {?>
          <!-- title -->
      
      <!-- listagem dos produtos -->
      <article class="row">

        <!-- produtos -->
        <a href="produtos/" class="produtos-container col-md-3"> 
          <!-- imagem do produto -->
          
           <img src="../../jogos/<?php echo $dados['ID'];  ?>.jpg" class="img-fluid">

          <!-- itens do produto -->
          <article class="produtos-itens">
            <!-- title produto -->
            <h2><a href="../../detalhes/<?php echo $dados['ID']; ?>.php"><?php echo $dados['NOME']; ?></a> </h2>

      

            <!-- preco -->
            <strong class="produtos-preco">
              Plataforma: <?PHP echo $dados['PLATAFORMA'];?><br>
              Genero: <?PHP echo $dados['GENERO'];?><br>
              Ano De Lançamento: <?PHP echo $dados['ANO'];?>
              <br><br><br><br><br>
              R$:<?PHP echo $dados['PRECO'];?>,00
            </strong>
           
          </article>
          <!-- end itens do produto -->
        </a>
        <!-- end produtos -->
          
<?php }?>


        
        <!-- CONTINUARIA ... produtos -->
        
            

      
      <!-- listagem dos produtos -->
      <!-- end container produtos -->
  
  <!-- end main -->

  

  <footer class="rodapepag"> <p> Loja Virtual TrueGaming<sup>&reg;</sup> </p>
Todos Os Direitos Reservados. 
</footer>
  <!-- Footer -->
  
    <!-- end container -->

  
  <!-- end Footer-->

  <!-- Arquivos Bootstrap -->
  <script src="./assets/js/jquery.js"></script>
  <script src="./assets/js/popper.js"></script>
  <script src="./assets/js/bootstrap.js"></script>
</body>

</html>