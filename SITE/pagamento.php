<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
    <style> 
    body{background:rgb(220, 220, 220);}
    .lema{Position:absolute;top:1800px; left:45%;}
    .divprincipal{background:white; width:1200px; height:1500px;position:absolute; top:150px; bottom:160px; left:center;}
    .nomediv{background-color: rgb(220, 220, 220); width:310px; height:80px; border-radius: 10%;position:absolute; top:30px; left:150px;}
    .nome{background-color: rgb(220, 220, 220); width:300px; height:30px;}
    .sobrendiv{background-color: rgb(220, 220, 220); width:310px; height:80px; border-radius: 10%;position:absolute; top:30px; left:680px;}
    .sobre{background-color: rgb(220, 220, 220); width:300px; height:30px;}
    .enddiv{background-color: rgb(220, 220, 220); width:770px; height:80px; border-radius: 10%;position:absolute; top:160px; left:150px;}
    .end{background-color: rgb(220, 220, 220); width:750px; height:30px;}
    .teldiv{background-color: rgb(220, 220, 220); width:310px; height:80px; border-radius: 10%;position:absolute; top:320px; left:150px;}
    .tel{background-color: rgb(220, 220, 220); width:300px; height:30px;}
    .cartão{position:absolute; top:590px; left:45%;}
    .ncarddiv{background-color: rgb(220, 220, 220); width:310px; height:80px; border-radius: 10%;position:absolute; top:720px; left:150px;}
    .ncard{background-color: rgb(220, 220, 220); width:300px; height:30px;}
    .nomecarddiv{background-color: rgb(220, 220, 220); width:310px; height:80px; border-radius: 10%;position:absolute; top:720px; right:150px;}
    .nomecard{background-color: rgb(220, 220, 220); width:300px; height:30px;}
    .codediv{background-color: rgb(220, 220, 220); width:310px; height:80px; border-radius: 10%;position:absolute; top:870px; left:150px;}
    .code{background-color: rgb(220, 220, 220); width:300px; height:30px;}
    .bandeiradiv{background-color: rgb(220, 220, 220); width:310px; height:40px; border-radius: 10%;position:absolute; top:890px; right:150px;}
    .botão{font-size:20px;position:absolute; bottom:-400px;border-radius: 50%; background:red; width:150px; height:60px;right:340px;}
   </style>

</head>


<body>

    <form action="pagamento2.php" method="post">
<div class="divprincipal">
<div class="nomediv">
Nome:<input class="nome"type="text" required placeholder="Digite Seu Nome" name="firtsn">
</div>
<div class="sobrendiv">
    Sobrenome:<input class="sobre"type="text" required required placeholder="Digite Seu Sobrenome" name="sn">
    </div>   
    <div class="enddiv">
       Endereço:<input class="end"type="text" required required placeholder="Digite Seu Endereço" name="end">
        </div> 
        <div class="teldiv">
            Telefone:<input class="tel"type="number" required required placeholder="Digite Telefone" name="tel">
             </div> 
             
            <h1 class="cartão">-Cartão-</h1>

            <div class="ncarddiv">
                Numero Do Cartão:<input class="ncard"type="number" required required placeholder="Digite o numero do Cartão" name="numcd">
                 </div> 
                 <div class="nomecarddiv">
                    Nome Titular:<input class="nomecard"type="text" required required placeholder="Nome do Titular do Cartão" name="ncd">
                     </div> 
                     <div class="codediv">
                        Codigo de Segurança:<input class="code"type="number" required required placeholder="Codigo Segurança (atrás)" name="codback">
                         </div> 
                         <div class="bandeiradiv" name="flag">
                            Selecione a Bandeira :<select>
                                <option value="SP">  Visa </option>
                  <option value="RJ">  MasterCard </option>
                  <option value="MG">  Hipercard </option>
                  <option value="RS">  Maestro </option>
                            </select>

                            <input type="submit" value="Confirmar" class="botão"> 
 
</div>
</form>
<span class="lema">True Gaming Direitos Reservados<br> </span>
</body>
</html>