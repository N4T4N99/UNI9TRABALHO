<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> TrueGaming</title>
<link rel="stylesheet" href="stylegeral.css"> 
<style>
.divlogin{background:white; width:900px; height:890px; position:relative; left:1%;; 
    display: flex; justify-content: center;align-items: center; color:black;}
.bluediv{background:RGB(14,75,239); width:100%; height:900px; display: flex; justify-content: center;align-items: center; position:relative; top:190px;}
.txtlogin{background:white; width:100%; height:250px; position:relative; top:200px; color:black; font-size:80px; display: flex; justify-content: center;align-items: center;
font-family:Andale Mono, monospace;}
.barralogin{background:rgb(18,10,143); width:100%;display: flex; justify-content: center;align-items: center; color:white;}
.nome{font-size:28px; position:relative; bottom:400px;left:84%;font-family:Gill Sans, sans-serif;}
.nomeinput{border-radius:10%; height:17px; width: 361%;position:relative; bottom:4px; }
.sobrenome{font-size:28px;position:relative; bottom:300px; left:75%;font-family:Gill Sans, sans-serif;}
.inputsobrenome{border-radius:10%; height:17px;width:195%;position:relative; right:1px; bottom:2px;}
.data {font-size:28px;position:relative; bottom:180px;left:58%; font-family:Gill Sans, sans-serif;}
.inputdata{border-radius:10%;height:17px;width:130px;}
.cpf{font-size:28px;position:relative; bottom:60px; left:41%;font-family:Gill Sans, sans-serif;}
.inputcpf{border-radius:10%;height:17px;width:300px;}
.fone{font-size:28px;position:relative; top:50px; left:6%;font-family:Gill Sans, sans-serif;}
.inputfone{border-radius:10%;height:17px;width:308px;}
.email{font-size:28px;position:relative; top:160px; right:29%;font-family:Gill Sans, sans-serif;}
.inputemail{border-radius:10%;height:17px;width:306px;}
.senha{font-size:28px;position:relative; top:280px; right:74%;font-family:Gill Sans, sans-serif;}
.inputsenha{border-radius:10%;height:17px;width:300px;}
.confirmarsenha{font-size:28px;position:relative; top:279px; right:60%;font-family:Gill Sans, sans-serif;}
.inputconfirmarsenha{border-radius:10%;height:17px;width:300px;}


.botaoOK{color:white;background:blue; font-size:23px; border-radius:50%; height:60px; width:130px; border:0px;
position:relative;top: 380px; right:107%; }
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

<div class="txtlogin"><div class="barralogin"> REGISTRAR </div></div>
<div class="bluediv"> <div class="divlogin"><p class="nome"> Nome: <input class="nomeinput"></p><p class="sobrenome">Sobrenome: <input class="inputsobrenome"></p>
<p class="data"> Data De Nascimento <input type="date" class="inputdata"> </p>
<p class="cpf"> CPF <input type="number" class="inputcpf"> </p>
<p class="fone"> Telefone <input type="number" class="inputfone"> </p>
<p class="email"> Email <input class="inputemail"> </p>
<p class="senha"> Senha <input type="password" class="inputsenha"> </p>
<p class="confirmarsenha"> Confirmar Senha <input type="password"class="inputconfirmarsenha"> </p>


<input type="button" value="Registrar" class="botaoOK"> </div> 

</div>
<?php
echo "TesteASAS"
?>
<footer class="rodapepag"> <p> Loja Virtual TrueGaming<sup>&reg;</sup> </p>
Todos Os Direitos Reservados. 
</footer>
</body>

</html>

