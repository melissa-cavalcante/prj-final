<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="cadastro.css">
    <title>cadastro</title>
</head>
<body>

    <div class="main-login">
        <div class="left-login">
            <h2>entre para o nosso time!</h2>
            <img src="./img/poke-bowl-animate.svg" class="left-login-image">
        </div>
        <div class="rigth-login">
            <div class="card-login">
                <h2>CADASTRO</h2>
                <div class="textfield">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" placeholder="digite seu nome">                    
                </div>
                <div class="textfield">
                    <label for="email">Email</label>
                    <input type="" name="email" placeholder="alguem@exemplo.com">                    
                </div>
                <div class="textfield">
                    <label for="telefone">Telefone</label>
                    <input type="number" name="tel" placeholder="11 11111-1111" 
                    pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}">
                </div>
                <div class="textfield">
                    <label for="log">Endereço</label>
                    <input type="text" name="log" placeholder="digite seu endereço">                    
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="digite sua senha">                    
                </div>
                <div class="textfield">
                    <label for="senhaConfirma">Confirme sua senha</label>
                    <input type="password" name="senhaConfirma" placeholder="confirma sua senha">                    
                </div>
                <button class="btn-login">cadastro</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>