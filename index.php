<!DOCTYPE html>
<?php
    define('BASE','http://localhost/workserieshtml5/');
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Work Series - HTML5 do Jeito Certo</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/boot.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
    <![endif]-->

</head>
<body>
    <header class="container bg-gray">
        <div class="content">
            <h1 class="main_logo fl-left fontzero">
                <a class="radius" title="WS HTML5 | Home" href="<?= BASE; ?>">Work Series - HTML5 do Jeito Certo</a>
            </h1>
            <ul class="main_nav fl-right">
                <li><a title="HTML5 Semantico" href="<?= BASE;?>/html5-semantico">Semântica</a></li>
                <li><a title="Estilo Produtivo com OOCSS" href="<?= BASE;?>/estilo-com-oocss">OOCSS</a></li>
                <li><a title="Formulários com HTML5" href="<?= BASE;?>/formularios-com-html5">Forms</a></li>
                <li><a title="Áudio e Vídeo na Web" href="<?= BASE;?>/audio-e-video">Midia</a></li>
                <li><a title="Geolocation e HTML Storage" href="<?= BASE;?>/geolocation-e-storage">API's</a></li>
                <li><a title="Distribuição com Micro Dados" href="<?= BASE;?>/micro-dados">Micro Dados</a></li>
                <li><a class="btn btn-green radius boxshadow" title="Comprar Curso" target="_blank" href="http://francisvalcs.com/">Comprar</a></li>
            </ul>
            <div class="clear"></div>
        </div>
    </header>

    <!--conteúdo-->
    <!--Bloco do video-->
    <article class="container">
        <div class="content">
            <header class="sectiontitle">
                    <h1>Conheça o curso WS HTML5!</h1>
                    <p class="tagline">Veja o que o tutor do curso <mark>Robson V. Leite</mark> tem a dizer!</p>
            </header>
            <!--Video
            <div class="video video-large main_video">
                <iframe src="https://www.youtube.com/embed/7h205Uh2wL8" controls width="400" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>-->
            <video class="video video-large main_video" src="midias/presents.mp4" controls width="400"></video>
            <aside class="al-center">
                <h1>Pronto para <a class="btn btn-yellow radius" title="Comprar Curso WS HTML5 Agora!" target="_blank" href="http://francisvalcs.com/">comprar o WS HTML5</a> e Aprender de Verdade!</h1>
            </aside>
            <div class="clear"></div>
        </div>
        <footer class="bg-bluelight">
            <section class="content main_videos" style="padding-bottom: 10px;">
                <h1>Veja algumas aulas do curso WS HTML5!</h1>
                <article class="box box-small">
                    <div class="thumb">
                        <div class="video_play"></div>
                        <img title="Entenda o HTML5" alt="Entenda o HTML5" src="img/entendendo-o-html5.jpg">
                    </div>
                    <h1 class="box_video_title">Entenda o HTML5</h1>
                </article>

                <article class="box box-small">
                    <div class="thumb">
                        <div class="video_play"></div>
                        <img title="Entenda o HTML5" alt="Entenda o HTML5" src="img/entendendo-o-html5.jpg">
                    </div>
                    <h1 class="box_video_title">Entenda o HTML5</h1>
                </article>

                <article class="box box-small">
                    <div class="thumb">
                        <div class="video_play"></div>
                        <img title="Entenda o HTML5" alt="Entenda o HTML5" src="img/entendendo-o-html5.jpg">
                    </div>
                    <h1 class="box_video_title">Entenda o HTML5</h1>
                </article>

                <article class="box box-small last">
                    <div class="thumb">
                        <div class="video_play"></div>
                        <img title="Entenda o HTML5" alt="Entenda o HTML5" src="img/entendendo-o-html5.jpg">
                    </div>
                    <h1 class="box_video_title">Entenda o HTML5</h1>
                </article>

                <div class="clear"></div>
            </section>
        </footer>
    </article>
    <!--Seção relacional-->
    <section class="container bg-orange">
        <!--Container do title-->
        <div class="content sectiontitle sectiontitle-nomargin">
                <h1>Conheça as tecnologias apresentadas:</h1>
                <p class="tagline">O Curso WS HTML5 apresenta técnicas com foco em produção e otimização de conteúdo para internet!</p>
            <div class="clear"></div>
        </div>

        <!--Container dos artigos-->
        <div class="container bg-body">
            <div class="content" style="padding-bottom: 10px;">
                <article class="main_tec_item box box-small al-center radius">
                   <img src="img/tec_semantic.png" alt="HTML5 Semântico" title="Módulo de HTML5 Semântico">
                    <h1>HTML5 Semântico</h1>
                    <p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet auctor ipsum.</p>
                </article>
                <article class="main_tec_item box box-small al-center radius">
                    <img src="img/tec_drycss.png" alt="CSS produtivo com OOCSS" title="Módulo de CSS produtivo com OOCSS">
                    <h1>CSS produtivo com OOCSS</h1>
                    <p class="tagline">DesLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet auctor ipsum.</p>
                </article>
                <article class="main_tec_item box box-small al-center radius">
                    <img src="img/tec_forms.png" alt="Formulários com HTML5" title="Módulo de Formulários com HTML5">
                    <h1>Formulários com HTML5</h1>
                    <p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet auctor ipsum.</p>
                </article>
                <article class="main_tec_item box box-small al-center last radius">
                    <img src="img/tec_midia.png" alt="Áudio e Vídeo na Web" title="Módulo de Áudio e Vídeo na Web">
                    <h1>Áudio e Vídeo na Web</h1>
                    <p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet auctor ipsum.</p>
                </article>

                <div class="box-line"></div>

                <article class="main_tec_item box box-small al-center radius">
                    <img src="img/tec_geo.png" alt="Geolocation e HTML5 Storage" title="Módulo de Geolocation e HTML5 Storage">
                    <h1>Geolocation e HTML5 Storage</h1>
                    <p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet auctor ipsum.</p>
                </article>
                <article class="main_tec_item box box-small al-center radius">
                    <img src="img/tec_microdados.png" alt="Distribuição com Micro Dados" title="Módulo de Distribuição com Micro Dados">
                    <h1>Distribuição com Micro Dados</h1>
                    <p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet auctor ipsum.</p>
                </article>
                <div class="clear"></div>
            </div>
        </div>
    </section>
    <!--Seção temática-->
    <section class="container bg-bluelight">
        <div class="content">
            <div class="sectiontitle">
                <h1 class="shoticon shoticon-config shoticon-sectiontitle ds-inblock">Ficha Técnica</h1>
                <p class="tagline">Saiba mais sobre o conteúdo do curso WS HTML5!</p>
            </div>
            <article class="main_info box box-small"><h1>Tempo em Aula: <b>23h</b></h1></article>
            <article class="main_info box box-small"><h1>Certificado de: <b>230h</b></h1></article>
            <article class="main_info box box-small"><h1>Módulos: <b>8</b></h1></article>
            <article class="main_info box box-small last"><h1>Vídeo aulas: <b>50</b></h1></article>
            <div class="clear"></div>
        </div>
    </section>
    <!--Retorno e conversão-->
    <article class="container bg-blue">
        <div class="content content-page al-center">
            <header class="sectiontitle">
                    <h1>Faça Parte da Turma WS HTML5, Matricule-se!</h1>
                    <p class="tagline">Começe agora mesmo. O curso é <mark>100% em vídeo aulas</mark>, </mark>online</mark> e </mark>on demand!</mark></p>
            </header>
            <a  class="btn btn-green btn-big radius" title="Quero me matricular ao curso WS HTML5 agora!" target="_blank" href="http://www.francisvalcs.com">Comprar WS HTML5</a>
            <footer>
                <div class="main_chamada al-center">
                    Você estuda quando e onde quiser na melhor plataforma EAD. Com suporte diretamento com o tutor disponível para download!
                </div>
            </footer>
            <div class="clear"></div>
        </div>
    </article>
    <!--conteúdo-->

    <!--content visual-->
    <div class="container">
        <div class="content content-page al-center fontsize2 font-light">
            UpInside treinamentos. Os melhores e mais completos cursos de desenvolvimento WEB e TI do mercado.
            <div class="clear"></div>
        </div>
    </div>


    <footer class="container bg-light">
        <section class="main_footer content">
            <h1 class="fontzero">Sobre a UpInside Treinamentos</h1>
            <nav class="box box-medium">
                <h1 class="title font-bold"> Mais sobre o WS HTML5:</h1>
                <ul>
                    <li><a class="shoticon shoticon-section" title="Assista o video de apresentação" href="#apresentacao">Assista o vídeo</a></li>
                    <li><a class="shoticon shoticon-section" title="Você vai aprender no curso" href="#apresentacao">Você vai aprender</a></li>
                </ul>
            </nav>
            <article class="box box-medium">
                <h1 class="title font-bold">UpInside nas redes sociais:</h1>
                <ul>
                    <li><a class="shoticon shoticon-facebook" target="_blank" rel="nofollow" title="UpInside Treinamentos no Facebook" href="https://www.facebook.com/civalcs">Facebook</a></li>
                    <li><a class="shoticon shoticon-twitter" target="_blank" rel="nofollow" title="UpInside Treinamentos no Twitter" href="https://twitter.com/TICivas">Twitter</a></li>
                </ul>
            </article>
            <article class="main_ead box box-medium last">
                <h1 class="fontzero">Plataforma UpInside</h1>
                <p class="shoticon shoticon-config"><b>Plataforma EAD:</b> <a title="Plataforma EAD da UpInside" href="http://www.upinside.com.br">www.upinside.com.br</a></p>
                <p class="shoticon shoticon-mail"><b>E-Mail:</b> <a title="Envie um e-mail" href="mailto:cursos@upinside.com.br">cursos@upinside.com.br</a></p>
                <hr>
                <p class="p_last">&copy; <?= date('Y');?> - UpInside Treinamentos, Todos os direitos reservados!</p>
            </article>
            <div class="clear"></div>
        </section>
    </footer>
</body>
</html>