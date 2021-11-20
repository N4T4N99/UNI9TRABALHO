<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> TrueGaming</title>
<link rel="stylesheet" href="stylegeral.css"> 
<style>
.divlogin{background:white; width:1200px; height:810px; position:relative; left:1%; border-radius:50%; 
    display: flex; justify-content: center;align-items: center; color:black;}
.bluediv{background:RGB(14,75,239); width:100%; height:900px; display: flex; justify-content: center;align-items: center; position:relative; top:190px;}
.txtlogin{background:white; width:100%; height:250px; position:relative; top:200px; color:black; font-size:80px; display: flex; justify-content: center;align-items: center;
font-family:Andale Mono, monospace;}
.barralogin{background:rgb(18,10,143); width:100%;display: flex; justify-content: center;align-items: center; color:white;}
.email{font-size:28px; position:relative; bottom:30px;left:220px;font-family:Gill Sans, sans-serif;}
.emailinput{border-radius:10%; height:17px;position:relative; bottom:4px;}
.senha{font-size:28px;position:relative; top:20px; right:52px;font-family:Gill Sans, sans-serif;}
.inputsenha{border-radius:10%; height:17px;position:relative; right:1px; bottom:2px;}
.exibirsenhatxt{font-size:15px;}
.botaologin{color:white;background:blue; font-size:23px; border-radius:50%; height:60px; width:90px; border:0px;
position:absolute;top: 500px; left:center; }
.divemail{position:absolute; left:200px; top:350px;}
.divsenha{position:absolute; left:461px; top:center;}
</style>
</head>
<body>
<div id="superior"> 
     <img id="logo"src="imgs/logomark.png" alt="logo"> <a href="paglogin.php"><input class="buttonlogin"type="button" value="Login"></a><a href="pagregistrar.php"><input class="buttonregister"type="button" value="Registrar"></a>
     <div id="dentrodiv"> <form action="PLATAFORMAS/SEARCH/search.php" method="GET">  <input type="image"  src="imgs/lupa.png"  class="lupa" alt="submit"><input name="searchgame" type="text" class="pesquisabar" id="search"><a href="index.php"> <span id="cabecalhoinicial"> Inicial </span> </a>
     <a href="index.php"><span id="cabecalho"> Plataformas &#9660; <span> </a>
     <a href="PLATAFORMAS/LANCAMENTOS/paglancamentos.php"> <span id="cabecalho2"> Lançamentos <span> </a><a href="PLATAFORMAS/PROMOCOES/pagpromocoes.php"> <span id="cabecalho3"> Promoçoes <span> </a>
     <a href="pagsuporte.php"> <span id="cabecalho4"> Suporte <span> </a></form>
    </div>  
</div>

<div class="txtlogin"><div class="barralogin"> LOGIN </div></div>
<div class="bluediv"> <div class="divlogin"> <div class="divemail"> <p class="email"> Email: <input class="emailinput" id="emailinputid"></p></div><div class="divsenha"><p class="senha">Senha: <input class="inputsenha" id="inputsenhaid" type="password">
<span class="exibirsenhatxt"> exibir </span><input type="checkbox"></p></div>
<input type="button" value="Entrar" class="botaologin" onclick="vipacess()"> </div> 

</div>
<?php
echo "TesteASAS"
?>
<footer class="rodapepag"> <p> Loja Virtual TrueGaming<sup>&reg;</sup> </p>
Todos Os Direitos Reservados. 
</footer>

<script>
   
    function vipacess(){ 
       
        var email = document.getElementById("emailinputid").value;
        var senha = document.getElementById("inputsenhaid").value;
        if (email=="nta21@gmail.com" && senha =="1234567") {
            window.alert("Logado!")
            window.open( 'http://localhost/aula_php/Arquivos-Site_CHANGE/index.php' );
        }else{window.alert("Email Ou Senha Invalidos!");}
        

    }
    
</script>
</body>

</html>

