<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>área admistrador</title>
    <!--link css do css-->
    <link rel="stylesheet" href="../css's/adm.css">
    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
</head>

<body>
    <div class="side-menu">
        <header>

            <div class="logo">
                <img src="../img/logo2.svg" alt="">
            </div>

        </header>
        <ul>

            <li>
                <lord-icon src="https://cdn.lordicon.com/tbfrtmlu.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;dashboard
            </li>

            <li>
                <lord-icon src="https://cdn.lordicon.com/hursldrn.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;categoria
            </li>

            <li>
                <lord-icon src="https://cdn.lordicon.com/zdiigbly.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;produtos
            </li>

            <li>
                <lord-icon src="https://cdn.lordicon.com/mjmrmyzg.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;clientes
            </li>

            <li>
                <lord-icon src="https://cdn.lordicon.com/wbtzvepm.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;vendas
            </li>

        </ul>
    </div>
    <div class="container">
        <div class="head">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Procurar...">
                    <button type="submit">
                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="hover" colors="primary:#121331,secondary:#e74c4c" style="width:20px;height:20px"></lord-icon>
                    </button>
                </div>
                <div class="user">
                    <button id="sair">Sair</button>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>50</h1>
                        <h3>Categorias</h3>
                    </div>
                    <div class="icon-case">
                        <lord-icon src="https://cdn.lordicon.com/hursldrn.json" trigger="hover" colors="primary:#e74c4c,secondary:#e74c4c" style="width:80px;height:80px"></lord-icon>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>24</h1>
                        <h3>Produtos</h3>
                    </div>
                    <div class="icon-case">
                        <lord-icon src="https://cdn.lordicon.com/zdiigbly.json" trigger="hover" colors="primary:#e74c4c,secondary:#e74c4c" style="width:80px;height:80px"></lord-icon>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>1000</h1>
                        <h3>Clientes</h3>
                    </div>
                    <div class="icon-case">
                        <lord-icon src="https://cdn.lordicon.com/mjmrmyzg.json" trigger="hover" colors="primary:#e74c4c,secondary:#e74c4c" style="width:80px;height:80px"></lord-icon>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Vendas</h3>
                    </div>
                    <div class="icon-case">
                        <lord-icon src="https://cdn.lordicon.com/wbtzvepm.json" trigger="hover" colors="primary:#e74c4c,secondary:#e74c4c" style="width:80px;height:80px"></lord-icon>
                    </div>
                </div>
            </div>                
            <div class="content-2">
                <div class="pagamentos-recentes"></div>
                <div class="novos-clientes"></div>
            </div>
        </div>
    </div>

</body>

</html>