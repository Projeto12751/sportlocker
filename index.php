<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" type="image/x-icon" href="IMG/logo2.png">

    <title> Sports Locker </title>

</head>

<body>

    <header>

        <div id="menu">
            <a href="index.php" id="top" style="text-decoration: none; color: black">Sports Locker <sup>&copy;</sub></a>
        </div>



        <nav class="navbar navbar-expand-md" id="navega">
            <div class="col-xs-1 col-sm-2 col-md-2 col-lg-3">
                <a href="index.php"><img id="logo" src="IMG/logo.png" alt="logo"></a>
            </div>
            <div class="d-none d-md-block col-sm-7 col-md-7 col-lg-6">
                <p id="nomemenu2">
                    <a href="vendahomem.html" id="link4">HOMEM</a>
                    <a href="vendamulher.html" id="link5">MULHER</a>
                    <a href="vendatenis.html" id="link6">Infantil</a>
                </p>
            </div>
            <div class="col-xs-7 col-sm-3 col-md-3 col-lg-3" id="botaonavegation">
                <a href=""><img src="IMG/gostar.png" alt="Favoritos" id="gostar"></a>
                <a href="testelogin.php"><img src="IMG/perfil-de-usuario.png" alt="Usuario" id="usuario"></a>
                <a href=""><img src="IMG/carrinho-de-compras.png" alt="Carrinho" id="carrinho"></a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <img id="botaomenu" src="IMG/barra-de-menu.png" alt="index.html" style="width: 40px;">
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">

                <div class="d-md-none">
                    <p id="nomemenu">
                        <a href="vendahomem.html" id="link1">HOMEM</a>
                    </p>
                    <p id="nomemenu">
                        <a href="vendamulher.html" id="link2">MULHER</a>
                    </p>
                    <p id="nomemenu">
                        <a href="vendatenis.html" id="link3">homo</a>
                    </p>

                </div>

            </div>
        </nav>



        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>


    </header>

    <main>


        
        <form action="" method="GET" id="pesquisar">
            <input type="text" placeholder="Pesquisar Produto" id="inputpesquisa">
            <button type="submit" id="botaopesquisa">Pesquisar</button>
        </form>


        <br>


        <div class="container" id="corosel">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="IMG/pexels-photo-4219181.png" alt="Los Angeles" style="width: 100%;">
                    </div>

                    <div class="item">
                        <img src="IMG/pexels-photo-4563870.png" alt="Chicago" style="width: 100%;">
                    </div>

                    <div class="item">
                        <img src="IMG/pexels-photo-5369418.png" alt="New york" style="width: 100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>



        <div class="container" id="containeritens">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="itens">
                <a href="vendaskates.html" id="botaoitem">
                    <img src="IMG/skate.png" alt="skate" class="imageitens">
                    <p class="nome_itens">Skates</p>
                </a>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="itens">
                <a href="vendabasquete.html" id="botaoitem">
                    <img src="IMG/kitbasquete.png" alt="basq" class="imageitens">
                    <p class="nome_itens">Basquete</p>
                </a>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="itens">
                <a href="views/produto/vendatenis.php" id="botaoitem">
                    <img src="IMG/jordan.png" alt="tenis" class="imageitens">
                    <p class="nome_itens">Tenis </p>
                </a>
            </div>
        </div>


    <br>
    <br>



    </main>

    
    <footer class="text-center text-lg-start bg-black text-muted" id="footerprin">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block" id="footer">
                <span>Entre em contato através das nossas redes sociais:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div id="footer">
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"><img src="IMG/facebook.png" alt="facebook" style="width: 30px;"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"><img src="IMG/twitter.png" style="width: 30px;" alt="twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"><img src="IMG/google.png" alt="google" style="width: 30px;"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"><img src="IMG/instagram.png" alt="instagram" style="width: 30px;"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"><img src="IMG/linkedin.png" alt="linkedin" style="width: 30px;"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"><img src="IMG/git.png" alt="github" style="width: 30px;"></i>
                </a>
                <a id="final" href="#top" class="me-4 text-reset">
                    <i class="fab fa-github"><img src="IMG/pra-cima.png" alt="Cima" style="width: 30px;"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5" id="footer">
                <!-- Grid row -->
                <div class="row mt-3" id="footer">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" id="footer">
                        <!-- Content -->
                        <h1 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i> Sports Locker <sup>&copy;</sub>
                        </h1>
                        <p>
                            Somos uma empresa de produtos esportivos com o intuito de levar o esporte a todas as pessoas
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" id="footer">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Produtos
                        </h6>
                        <p>
                            <a href="#" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset">Laravel</a>
                        </p>
                    </div>


                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" id="footer">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Links
                        </h6>
                        <p>
                            <a href="#" class="text-reset">Preços</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset">Configurações</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset">Pedidos</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset">Ajuda</a>
                        </p>
                    </div>


                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" id="footer">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contato
                        </h6>
                        <p><i class="fas fa-home me-3"></i> Nova Iguaçu, RJ SENAC, BR</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 55 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 55 234 567 89</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);" id="footer">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">JJ Geral junto</a>
        </div>
    </footer>

</body>

</html>

