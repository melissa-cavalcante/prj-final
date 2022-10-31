<?php include "verifica-logado-adm.php"; ?>

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

            <div class="brand-name">
                <img src="../img/logo2.svg" alt="">
            </div>

        </header>

        <ul>
            <li>
                <lord-icon src="https://cdn.lordicon.com/tbfrtmlu.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;<span>dashboard</span>
            </li>
            <li>
                <lord-icon src="https://cdn.lordicon.com/hursldrn.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;<span>categoria</span>
            </li>
            <li>
                <lord-icon src="https://cdn.lordicon.com/zdiigbly.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;<span>produtos</span>
            </li>
            <li>
                <lord-icon src="https://cdn.lordicon.com/mjmrmyzg.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;<span>vendas</span>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit">
                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="hover" colors="primary:#121331,secondary:#e74c4c" style="width:20px;height:20px"></lord-icon>
                    </button>
                </div>
                <div class="user">
                    <button id="sair"><a href="logout-adm.php">Sair</a></button>
                    <div class="img-case">
                        <img src="../img/user.png" width="40px" height="40px" alt="">
                    </div>
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
                        <h1>53</h1>
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
                <div class="recent-payments">
                    <div class="title">
                        <h2>Pagamentos Recentes</h2>
                        <a href="#" class="btn">Ver Tudo</a>
                    </div>
                    <table>
                        <tr>
                            <th>Nome</th>
                            <th>Venda</th>
                            <th>Produto</th>
                            <th>Categoria</th>
                            <th>Preço</th>
                            <th>Opção</th>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>01</td>
                            <td>Hot Roll</td>
                            <td>Fritos</td>
                            <td>R$20,00</td>
                            <td><a href="#" class="btn">Veja</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>01</td>
                            <td>Hot Roll</td>
                            <td>Fritos</td>
                            <td>R$20,00</td>
                            <td><a href="#" class="btn">Veja</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>01</td>
                            <td>Hot Roll</td>
                            <td>Fritos</td>
                            <td>R$20,00</td>
                            <td><a href="#" class="btn">Veja</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>01</td>
                            <td>Hot Roll</td>
                            <td>Fritos</td>
                            <td>R$20,00</td>
                            <td><a href="#" class="btn">Veja</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>01</td>
                            <td>Hot Roll</td>
                            <td>Fritos</td>
                            <td>R$20,00</td>
                            <td><a href="#" class="btn">Veja</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>01</td>
                            <td>Hot Roll</td>
                            <td>Fritos</td>
                            <td>R$20,00</td>
                            <td><a href="#" class="btn">Veja</a></td>
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>Novos Clientes</h2>
                        <a href="#" class="btn">Veja Tudo</a>
                    </div>
                    <table>
                        <tr>
                            <th>Perfil</th>
                            <th>Nome</th>
                            <th>Opção</th>
                        </tr>
                        <tr>
                            <td><img src="../img/user.png" width="40px" height="40px" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="../img/info.png" width="40px" height="40px" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="../img/user.png" width="40px" height="40px" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="../img/info.png" width="40px" height="40px" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="../img/user.png" width="40px" height="40px" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="../img/info.png" width="40px" height="40px" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="../img/user.png" width="40px" height="40px" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="../img/info.png" width="40px" height="40px" alt=""></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>