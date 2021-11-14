<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> TrueGaming</title>
<link rel="stylesheet" href="stylegeral.css"> 
<style>
.divsuporte{background:white; width:1200px; height:899px; position:relative; left:1%; 
    display: flex; justify-content: center;align-items: center; color:black;}
.bluediv{background:RGB(14,75,239); width:100%; height:900px; display: flex; justify-content: center;align-items: center; position:relative; top:190px;}
.divsup{background:white; width:100%; height:250px; position:relative; top:200px; color:black; font-size:80px; display: flex; justify-content: center;align-items: center;
font-family:Andale Mono, monospace;}
.txttitlesup{font-family:Futura, Trebuchet MS, Arial, sans-serif ;font-size:42px; color:blue;
position: absolute; top:21px; left:27px;
}
.contato{background:rgb(150,150,150); width:100%; height:160px; position:absolute; top:200px; color:white;}
.txtdivcontato{font-size:38px; font-family:Futura, Trebuchet MS, Arial, sans-serif; position:absolute; left:50px; top:-20px;}
.botaologin{color:white;background:blue; font-size:23px; border-radius:50%; height:60px; width:90px; border:0px;
 position:absolute; right:118px; bottom:90px; }
.txtdivcontato2{font-familiy:Gill Sans, sans-serif; font-size:28px; position:absolute; top:95px; left:230px;}
.txtmandarmsg{font-family:Futura, Trebuchet MS, Arial, sans-serif; font-size:40px; position:absolute; left:30px; }
.emailinput{width:500px; height:25px; position:absolute; right:100px; top:410px; font-size:25px;}
.inputrelatorio{position: absolute; top:510px; width:800px; height:350px; right:350px; font-size:22px;}


@media only screen and (max-width: 1200px){
    .txtdivcontato{font-size:28px;}
    .txtdivcontato2{font-size:21px; position: absolute; left:50px;}
    .txtmandarmsg{font-size:28px;}
    .emailinput{width:350px; position: absolute; right:30px; top:415px;}
    .inputrelatorio{width:450px; position: absolute; left:80px;}
    
}
</style>
</head>
<body>
<div id="superior"> 
     <img id="logo"src="imgs/logomark.png" alt="logo"> <a href="paglogin.php"><input class="buttonlogin"type="button" value="Login"></a><a href="pagregistrar.php"><input class="buttonregister"type="button" value="Registrar"></a>
     <div id="dentrodiv"> <img src="imgs/lupa.png" class="lupa"><input class="pesquisabar"><a href="index.php"> <span id="cabecalhoinicial"> Inicial </span> </a>
     <a href="index.php"><span id="cabecalho"> Plataformas &#9660; <span> </a>
     <a href="PLATAFORMAS/LANCAMENTOS/paglancamentos.php"> <span id="cabecalho2"> Lançamentos <span> </a><a href="PLATAFORMAS/PROMOCOES/pagpromocoes.php"> <span id="cabecalho3"> Promoçoes <span> </a>
     <a href="pagsuporte.php"> <span id="cabecalho4"> Suporte <span> </a>
    </div>  
</div>

<div class="divsup"><div class="barralogin"> SUPORTE </div></div>

<div class="bluediv"> <div class="divsuporte"> <p class="txttitlesup"> Esta tendo algum Problema ou Duvida em relação a loja ou a um produto específico? </p>
<div class="contato"><p class="txtdivcontato">Entre em contato com nossos canais via Email, <br> por audio chamada, ou mensagem via WhatsApp</p> 
<p class="txtdivcontato2">Email: shoptrgame@gmail.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel: (11) 96314-2543</p></div>
    <p class="txtmandarmsg"> Ou se preferir insira seu Email: <br> e descreva sua questão no campo abaixo</p>
    <p class="email">  <input class="emailinput"></p>
    <textarea class="inputrelatorio"> </textarea> 

<input type="button" value="Enviar" class="botaologin"> </div> 

</div>
<?php
echo "TesteASAS"
?>
<footer class="rodapepag"> <p> Loja Virtual TrueGaming<sup>&reg;</sup> </p>
Todos Os Direitos Reservados. 
</footer>
</body>

</html>