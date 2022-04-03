<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Rokkitt&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <link rel="stylesheet" type="text/css" href="./css/home.css">
    <link rel="stylesheet" type="text/css" href="./css/highlights.css">
    <link rel="stylesheet" type="text/css" href="./css/promotions-catalogue.css">
    <link rel="stylesheet" type="text/css" href="./css/modal.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script type="module" src="js/slider/index.js"></script>
    <script src="js/home/home.js" defer></script>
    <title>Bookery Studio</title>
</head>

<body>
    <header>
        <ul class="header-items">
            <li class="dropdown-items hover">
                <a href="#" class="dropdown-link" id="dropdown-link">Compre</a>
                <div class="dropdown-content">
                    <div class="items-hover">
                        <a href="#">biografia</a>
                        <a href="#">crime scene</a>
                        <a href="#">distopias</a>
                        <a href="#">fantasia</a>
                        <a href="#">ficção</a>
                        <a href="#">gótico</a>
                        <a href="#">horror</a>
                        <a href="#">sobrenatural</a>
                        <a href="#">thriller e suspense</a>
                        <a href="#">magia e bruxaria</a>
                    </div>
                </div>
            </li>
            <li><a href="#promotions">Promoções</a></li>
            <li><a href="#highlights">Destaques</a></li>
        </ul>
        <div class="header-title">
            <h1>BOOKERY</h1>
            <h2>LIBRARY</h2>
        </div>
        <ul class="header-items">
            <li><a href="#footer">Sobre</a></li>
            <li><a href="#footer">Contate-nos</a></li>
        </ul>
        <div class="search-area">
            <input type="search" placeholder="buscar" class="search">
            <button type="submit" class="header-button">ok</button>
        </div>
    </header>

    <div class="header-line"></div>

    <section id="home">
        <div class="home">
            <img src="./img/background-home.png" alt="livros">
            <div class="container-home-items">
                <h3>bookery studio&reg;</h3>
                <h2>construa sua mente.</h2>
                <div class="shop-button"><a href="#catalogue">comprar</a></div>
            </div>
        </div>
    </section>

    <div class="separator"></div>

    <section id="highlights">
        <h1>destaques</h1>

        <div id="highlight-cards-container">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./img/frankstein.png" alt="livro destaque">
                        <span class="card-description">frankstein</span>
                    </div>
                    <div class="swiper-slide">
                        <img src="./img/ted-bundy.png" alt="livro destaque">
                        <span class="card-description">ted bundy - um estranho ao meu lado</span>
                    </div>
                    <div class="swiper-slide">
                        <img src="./img/livro-sangue.png" alt="livro destaque">
                        <span class="card-description">livros de sangue - volume 1</span>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-scrollbar grey"></div>

            </div>
        </div>
    </section>

    <div class="separator"></div>

    <section id="promotions">
        <h1>promoções</h1>

        <div class="promotions-cards-container">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="promotion-card">
                            <div class="product">
                                <img src="./img/menino-que-desenhava-monstros.png"
                                    alt="o menino que desenhava monstros">
                            </div>
                            <div class="description">
                                <span class="title">o menino que desenhava monstros</span>
                                <span class="old-price">R$ 56,63</span>
                                <span class="new-price">R$ 48,30</span>
                                <div class="see-more">
                                    <div class="line"></div>
                                    <a href="#" class="details">ver detalhes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="promotion-card">
                            <div class="product">
                                <img src="./img/demonologistas.png" alt="Ed & Lorraine Warren - demonologistas">
                            </div>
                            <div class="description">
                                <span class="title">ed & lorraine warren - demonologistas</span>
                                <span class="old-price">R$ 39,20</span>
                                <span class="new-price">R$ 27,44</span>
                                <div class="see-more">
                                    <div class="line"></div>
                                    <a href="#" class="details">ver detalhes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="promotion-card">
                            <div class="product">
                                <img src="./img/amityville.png" alt="amityville">
                            </div>
                            <div class="description">
                                <span class="title">amityville</span>
                                <span class="old-price">R$ 74,99</span>
                                <span class="new-price">R$ 69,99</span>
                                <div class="see-more">
                                    <div class="line"></div>
                                    <a href="#" class="details">ver detalhes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-scrollbar"></div>

            </div>
        </div>
    </section>

    <div class="separator"></div>

    <section id="catalogue">
        <h1>catálogo</h1>

        <article id="session"></article>
    </section>

    <div class="footer-separator first"></div>

    <section id="footer">
        <div class="footer-description">
            <img src="./img/background-footer.png" alt="">
            <h1>A BOOKERY STUDIO</h1>
            <div class="footer-line"></div>
            <span class="footer-text">tornando páginas uma experiência exótica.</span>
        </div>

        <div class="footer-separator second"></div>

        <div class="footer-data">
            <div class="contact">
                <span>bookery studio&reg;</span>
                <span>bookeryinc@getbook.com</span>
                <div class="social-area">
                    <img src="img/facebook.png" alt="" class="social">
                    <img src="img/sinal-do-twitter.png" alt="" class="social">
                    <img src="img/instagram.png" alt="" class="social">
                </div> 
            </div>
            <div class="copyright">
                <span>Projeto estritamente para fins estudantis</span>
                <span>Carolina Vitória</span>
            </div>

        
            <form name="frmCadastro" method="post" action="cms/router.php?component=contatos&action=enviar">
                <div class="form">
                    <span>fale com a gente.</span>
                    <input id="placeholder-email" type="email" name="txtEmail" placeholder="seuemail@gmail.com"
                        class="email">
                    <input id="placeholder-nome" type="text" name="txtNome" placeholder="seu nome"
                        class="nome">
                    <textarea id="placeholder-obs" name="txtObs" placeholder="seu feedback é importante para nós"
                        class="txtArea"></textarea>
                    <input type="submit" name="btnEnviar" value="enviar" class="btnEnviar">
                </div>
            </form>
        </div>
    </section>

    <div id="modal-content"></div>
</body>

</html>