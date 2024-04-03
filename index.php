<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--FONTS GOOGLE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--FIM FONTS GOOGLE-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <link rel="stylesheet" href="assets/css/style.css?<?= rand() ?>">
    <title>Portifólio</title>
</head>

<body>
    <section class="home">
        <!--<div class="banner">
                <img class="banner-img" src="" alt="">
            </div>-->
        <nav class="menu-mobile">

            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Especialidades</a></li>
            </ul>
            <div class="icons-menu-mobile">
                <i class="bi bi-github"></i>
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-whatsapp"></i>
            </div>
        </nav>

        <div class="interface">
            <header class="cabecalho flex">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/logo3.png" alt="">
                    </a>
                </div>
                <div class="btn-menu">
                    <span><i class="bi bi-list"></i></span>
                </div>
                <nav class="menu-desktop">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Projetos</a></li>
                        <li><a href="#">Especialidades</a></li>
                    </ul>
                </nav>

                <div class="btn-contato">
                    <a href="#"><button>CONTATO</button></a>
                </div>
            </header>

            <div class="txt-img">
                <div class="img-topo">
                    <img src="assets/img-topo-site.png" alt="">
                </div>


                <div class="txt-topo">
                    <p>Olá, o meu nome é </p>
                    <h1>MATEUS FRANÇA</h1>
                    <div class="maquina-escrever">
                        <h2>Desenvolvedor Front-end</h2>
                    </div>
                    <div class="buttons">
                        <div class="btn-git">
                            <a href=""><i class="bi bi-github"></i> GitHub</a>
                        </div>
                        <div class="btn-li">
                            <a href=""><i class="bi bi-linkedin"></i> Linkedin</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="interface">
        <div class="header">
            <p class="txt_p">conheça mais</p>
            <h2 class="title">Sobre mim</h2>
        </div>
        <div class="sobre-content">
            <div class="txt-img-sobre">
                <div class="img-sobre">
                    <img src="assets/img-sobre.png" alt="">
                </div>
                <div class="txt-sobre">
                    <h1>Mateus França</h1>
                    <p>Desenvolvendo interfaces e APIs com Javascript/Typescript desde 2021.</p>
                    <p>Tecnólogo Análise e Desenvolvimento de Sistemas.</p>
                    <p>Interesse em desenvolvimento front end e back end.</p>
                    <div class="btn-cv">
                        <button>Baixar CV <i class="bi bi-download"></i></button>
                    </div>
                </div>
            </div>
            <div>
                <ul class="timeline interface">
                    <li>
                        <div>
                            <span class="timeline-box">
                                2022
                            </span>
                            <span class="timeline-border">
                            </span>
                            <span class="timeline-text">Dando meus primeiros passos no mundo da programação, me aprofundando na linguagem Javascript e conhecendo melhor sobre o front end com React e o back end com Node.</span>
                    </li>
                    <li>
                        <span class="timeline-box">
                            2023
                        </span>
                        <span class="timeline-border">
                        </span>
                        <span class="timeline-text">Desenvolvendo projetos pessoais com TDD e arquitetura limpa, estudando microserviços e um pouco de Devops.</span>
                    </li>
                    <li>
                        <span class="timeline-box">
                            Atualmente
                        </span>
                        <span class="timeline-border">
                        </span>
                        <span class="timeline-text">Atuando no desenvolvimento e suporte ao cliente na Greenchat

                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="header">
            <p class="txt_p">Explorar meus</p>
            <h2 class="title">Projetos</h2>
        </div>
        <div class="projetos interface">
            <div class="conteiner">
                <h3>Tela de Login - ADTR</h3>
                <p>Tela de login que cadastras usuario e toda a parte de autenticação.</p>
                <div class="icons-tech">
                    <div class="icon">
                        <img title="PHP" src="assets/php.png" alt="icone php">
                    </div>
                    <div class="icon">
                        <img title="MYSQL" src="assets/mysql.png" alt="icone mysql">
                    </div>
                    <div class="icon">
                        <img title="HTML" src="assets/html.png" alt="icone Html">
                    </div>
                    <div class="icon">
                        <img title="CSS" src="assets/css.png" alt="icone css">
                    </div>
                </div>
                <div class="contente-project">
                    <img src="assets/one-piece.jpeg" alt="">
                </div>
                <div class="btn-project">
                    <button>GitHub <i class="bi bi-github"></i></button>
                    <button>Ver Demo</button>
                </div>
            </div>
            <div class="conteiner">
                <h3>Tela de Login - ADTR</h3>
                <p>Tela de login que cadastras usuario e toda a parte de autenticação.</p>
                <div class="icons-tech">
                    <div class="icon">
                        <img src="assets/php.png" alt="">
                    </div>
                    <div class="icon">
                        <img src="assets/mysql.png" alt="">
                    </div>
                    <div class="icon">
                        <img src="assets/html.png" alt="">
                    </div>
                    <div class="icon">
                        <img src="assets/css.png" alt="">
                    </div>
                </div>
                <div class="contente-project">
                    <img src="assets/one-piece.jpeg" alt="">
                </div>
                <div class="btn-project">
                    <button>GitHub <i class="bi bi-github"></i></button>
                    <button>Ver Demo</button>
                </div>
            </div>
            <div class="conteiner">
                <h3>Tela de Login - ADTR</h3>
                <p>Tela de login que cadastras usuario e toda a parte de autenticação.</p>
                <div class="icons-tech">
                    <div class="icon">
                        <img src="assets/php.png" alt="">
                    </div>
                    <div class="icon">
                        <img src="assets/mysql.png" alt="">
                    </div>
                    <div class="icon">
                        <img src="assets/html.png" alt="">
                    </div>
                    <div class="icon">
                        <img src="assets/css.png" alt="">
                    </div>
                </div>
                <div class="contente-project">
                    <img src="assets/one-piece.jpeg" alt="">
                </div>
                <div class="btn-project">
                    <button>GitHub <i class="bi bi-github"></i></button>
                    <button>Ver Demo</button>
                </div>
            </div>
            <div class="conteiner">
                <h3>Tela de Login - ADTR</h3>
                <p>Tela de login que cadastras usuario e toda a parte de autenticação.</p>
                <div class="icons-tech">
                    <div class="icon">
                        <img src="assets/php.png" alt="">
                    </div>
                    <div class="icon">
                        <img src="assets/mysql.png" alt="">
                    </div>
                    <div class="icon">
                        <img src="assets/html.png" alt="">
                    </div>
                    <div class="icon">
                        <img src="assets/css.png" alt="">
                    </div>
                </div>
                <div class="contente-project">
                    <img src="assets/one-piece.jpeg" alt="">
                </div>
                <div class="btn-project">
                    <button>GitHub <i class="bi bi-github"></i></button>
                    <button>Ver Demo</button>
                </div>
            </div>
            <div class="conteiner">
                <h3>Tela de Login - ADTR</h3>
                <p>Tela de login que cadastras usuario e toda a parte de autenticação.</p>
                <div class="icons-tech">
                    <div class="icon">
                        <img src="assets/php.png" alt="">
                    </div>
                    <div class="icon">
                        <img src="assets/mysql.png" alt="">
                    </div>
                    <div class="icon">
                        <img src="assets/html.png" alt="">
                    </div>
                    <div class="icon">
                        <img src="assets/css.png" alt="">
                    </div>
                </div>
                <div class="contente-project">
                    <img src="assets/one-piece.jpeg" alt="">
                </div>
                <div class="btn-project">
                    <button>GitHub <i class="bi bi-github"></i></button>
                    <button>Ver Demo</button>
                </div>
            </div>
            <div class="conteiner">
                <h3>Tela de Login - ADTR</h3>
                <p>Tela de login que cadastras usuario e toda a parte de autenticação.</p>
                <div class="icons-tech">
                    <div class="icon">
                        <img src="assets/php.png" alt="">
                    </div>
                    <div class="icon">
                        <img src="assets/mysql.png" alt="">
                    </div>
                    <div class="icon">
                        <img src="assets/html.png" alt="">
                    </div>
                    <div class="icon">
                        <img src="assets/css.png" alt="">
                    </div>
                </div>
                <div class="contente-project">
                    <img src="assets/one-piece.jpeg" alt="">
                </div>
                <div class="btn-project">
                    <button>GitHub <i class="bi bi-github"></i></button>
                    <button>Ver Demo</button>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="header">
            <p class="txt_p">Entre em</p>
            <h2 class="title">Contato</h2>
        </div>
        <div class="links">
            <div class="links-ctt interface">
                <div class="contato whatsapp">
                    <i class="bi bi-whatsapp"></i>
                    <div class="txt-contato">
                        <p>86-98144-2421</p>
                    </div>
                </div>
            </div>
            <div class="links-ctt">
                <div class="contato linkedin">
                    <i class="bi bi-linkedin"></i>
                    <div class="txt-contato">
                        <p>Linked in</p>
                    </div>
                </div>
            </div>
            <div class="links-ctt">
                <div class="contato email">
                    <i class="bi bi-envelope"></i>
                    <div class="txt-contato">
                        <p>Mateusfj8144@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer">
                <div class="footer-nav">
                    <h2>Navegue</h2>
                    <ul>
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Sobre</a></li>
                        <li><a href="">Projetos</a></li>
                        <li><a href="">Especialidades</a></li>
                    </ul>
                </div>
                <div class="footer-nav">
                    <h2>Projetos</h2>
                    <ul>
                        <li><a href="#"><i class="bi bi-window-fullscreen"></i> <span>Tela de login</span></a></li>
                        <li><a href="#"><i class="bi bi-window-fullscreen"></i> <span>Tela de login</span></a></li>
                        <li><a href="#"><i class="bi bi-window-fullscreen"></i> <span>Tela de login</span></a></li>
                        <li><a href="#"><i class="bi bi-window-fullscreen"></i> <span>Tela de login</span></a></li>
                    </ul>
                </div>
                <div class="footer-contato">
                    <h2>Contato</h2>
                    <div class="ctt-footer">
                        <i class="bi bi-whatsapp"></i>
                        <div class="txt-contato">
                            <p>86-98144-2421</p>
                        </div>
                    </div>
                    <div class="ctt-footer">
                        <i class="bi bi-linkedin"></i>
                        <div class="txt-contato">
                            <p>Linked in</p>
                        </div>
                    </div>
                    <div class="ctt-footer">
                        <i class="bi bi-envelope"></i>
                        <div class="txt-contato">
                            <p>Mateusfj8144@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>

    <script src="assets/script.js?<?= rand() ?>"></script>
</body>

</html>