<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/cart.css">
    <title>Carrinho - DynoTurtle</title>
</head>

<body>
    <!---------- Header ---------->
    <header>
        <section id="headerspace">

            <a href="home.php">
                <div id="icon" alt="Ícone da empresa DynoTurtle"></div>
            </a>
            <input id="searchbar" placeholder="Deseja comprar algo mais?">
            </div>


            <div id="userarea">
                <a href="index.php">
                    <div id="profile" alt="Ícone de boneco, símbolo de usuário"></div>
                </a>
                <a href="cart.php">
                    <div id="car" alt="Ícone de carrinho"></div>
                </a>
            </div>
        </section>
    </header>

    <!---------- Conteúdo ---------->

    <div class="titles">
        <h2>Itens no seu carrinho</h2>
    </div>

    <section id="cart">
        <div class="cart_item">
            <div id="i1" class="item" alt="Imagem de um smartphone de marca Xiaomi modelo 12 Lite 5G 128GB"></div>
            <div class="description">
                <h2>Xiaomi 12 Lite 5G 128GB</h2>
                <h3>R$ 3.999,00</h3>
                <div class="menu_parcelar">
                    <form action="cart.php" method="post">
                        <select class="parcelas">
                            <option value="Parcelas" disabled selected>Quantidade de parcelas</option>
                            <option value="1x">1x de R$ 3.999,00</option>
                            <option value="2x">2x de R$ 1.999,50</option>
                            <option value="3x">3x de R$ 1.333,00</option>
                            <option value="4x">4x de R$ 999,75</option>
                            <option value="5x">5x de R$ 799,80</option>
                            <option value="6x">6x de R$ 666,50</option>
                            <option value="7x">7x de R$ 571,28</option>
                            <option value="8x">8x de R$ 499,87</option>
                            <option value="9x">9x de R$ 444,33</option>
                            <option value="10x">10x de R$ 399,90</option>
                            <option value="11x">11x de R$ 363,54</option>
                            <option value="12x">12x de R$ 333,25</option>
                        </select>
                    </form>
                </div>
            </div>


        </div>

        <div class="cart_item">
            <div id="i2" class="item" alt="Imagem de um fone Bluetooth de marca Xiaomi modelo Mi True Wireless"></div>
            <div class="description">
                <h2>Fone Bluetooth Mi True Wireless</h2>
                <h3>R$ 399,99</h3>
                <div class="menu_parcelar">
                    <form action="cart.php" method="post">
                        <select class="parcelas">
                            <option value="Parcelas" disabled selected>Quantidade de parcelas</option>
                            <option value="1x">1x de R$ 399,99</option>
                            <option value="2x">2x de R$ 199,99</option>
                            <option value="3x">3x de R$ 133,33</option>
                            <option value="4x">4x de R$ 99,99</option>
                            <option value="5x">5x de R$ 79,99</option>
                            <option value="6x">6x de R$ 66,66</option>
                            <option value="7x">7x de R$ 57,14</option>
                            <option value="8x">8x de R$ 49,99</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>

        <div class="cart_item">
            <div id="i3" class="item" alt="Imagem de um aparelho de mídia de marca Google modelo Chromecast 3"></div>
            <div class="description">
                <h2>Google Chromecast 3</h2>
                <h3>R$ 277,76</h3>
                <div class="menu_parcelar">
                    <form action="cart.php" method="post">
                        <select class="parcelas">
                            <option value="Parcelas" disabled selected>Quantidade de parcelas</option>
                            <option value="1x">1x de R$ 277,76</option>
                            <option value="2x">2x de R$ 138,88</option>
                            <option value="3x">3x de R$ 92,58</option>
                            <option value="4x">4x de R$ 69,44</option>
                            <option value="5x">5x de R$ 55,55</option>
                            <option value="6x">6x de R$ 46,29</option>
                            <option value="7x">7x de R$ 39,68</option>
                            <option value="8x">8x de R$ 34,72</option>
                        </select>
                    </form>
                </div>
            </div>
    </section>

    <section id="cart_end">
        <div id="total">Total: R$ 4.676,75</div>
        <div id="buy">Comprar</div>
    </section>

    <!-- Footer -->

    <footer>
        <section id="aboutus">
            <div id="dynoturtle" alt="Ícone da empresa DynoTurtle">
                <h3>DynoTurtle</h3>
                <div id="logo"></div>
            </div>

            <div id="redes">
                <h3>Redes Sociais</h3>
                <div class="social">
                    <div id="instagram" alt="Ícone da rede social Instagram"></div>
                    <div>DynoTurtle</div>
                </div>
                <br>
                <div class="social">
                    <div id="twitter" alt="Ícone da rede social Twitter"></div>
                    <div>DynoTurtle</div>
                </div>
            </div>

            <div id="contato">
                <h3>Contato</h3>
                <div>Rua Vergueiro, 235 - Liberdade, São Paulo, SP
                    <p>dynoturtle@gmail.sac
                    <p>(11) 9 1234-5678
                </div>
            </div>
        </section>
        <div id="ending">
            <p>© DynoTurtle Brasil S.A. (CNPJ: 01.234.567/0001-00) - Todos os direitos reservados</p>
        </div>
    </footer>
</body>

</html>