<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--FONTS GOOGLE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--FIM FONTS GOOGLE-->
    <link rel="stylesheet" href="assets/style.css?<?= rand() ?>">
    <title>Portifólio</title>
</head>

<body>

    <div class="inicio">
        <header>
            <div class="interface">
                <div class="logo">
                    <a href="index.html"><i class="bi bi-code-slash"></i> Mateus</a>
                </div>
                <nav class="menu-desktop">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Especialidades</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Projetos</a></li>
                    </ul>
                </nav>
                <div class="btn-contato">
                    <a href="#"><button>CONTATO</button></a>
                </div>
            </div>
        </header>


        <section class="topo-site">
            <div class="interface">
                <div class="txt-topo-site">
                    <p>Olá, o meu nome é </p>
                    <h1>MATEUS SOUSA</h1>
                    <div class="maquina-escrever">
                        <h2>Desenvolvedor Front-end</h2>
                    </div>
                    <a href="#"><button>PROJETOS <i class="bi bi-arrow-right"></i></button></a>
                    <div class="icons-button">
                        <a href="#"><button><img src="assets/github.png" alt=""></button></a>
                        <a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile"><button><img src="assets/linkedin.png" alt=""></button></a>
                        <a href="#"><button><img src="assets/instagram.png" alt=""></button></a>
                    </div>
                </div>
                <div class="img-topo-site">
                    <img src="assets/img-topo-site.png" alt="">
                </div>
            </div>
        </section>
    </div>


    <section class="sobre">
        <div class="interface">
            <h1>Sobre mim</h1>
            <div class="especialidades">
                <div class="img-especialidade">
                    <img src="assets/img-sobre.png" alt="">
                </div>
                <div class="txt-especialidades">
                    <h1>Mateus Sousa</h1>
                    <p>Me chamo Vitor Markis e eu amo tecnologia e programação. Quando era mais jovem, programei em Java, C# e Visual Basic, criando jogos e programas.</p>
                    <p>Em 2022, decidi retomar meus estudos em programação, dessa vez focando em Javascript para a área de Web.</p>
                    <p>Escolhi Javascript devido à sua grande comunidade, grande potencial de crescimento e possibilidade de reutilização de conhecimentos na web, mobile e backend, através de React e Node.</p>
                    <p>Disponível para freelance e busco oportunidade para trabalhar na área.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/script.js?<?= rand() ?>"></script>
</body>

</html>