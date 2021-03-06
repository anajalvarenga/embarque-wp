<?php
// Template Name: Home
?>

<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <main>
            <div id="banner-home">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h1>Sua Jornada<br>Começa Aqui</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div id="about-area">
                <div class="container">
                    <div class="row my-3">
                        <div class="col-12 col-md-6 text-about">
                            <h2>Sobre Nós</h2>
                            <?php the_field('sobre_texto_home'); ?>
                        </div>
                        <div class="col-12 col-md-6">
                            <img src="<?php the_field('sobre_foto_home'); ?>" alt="Foto sobre">
                        </div>
                    </div>
                </div>
            </div>
            <div id="service-area" class="mb-5">
                <div class="container">
                    <div class="row m-0">
                        <div class="col-sm-6 col-lg-3 p-2">
                            <div class="service-box">
                                <i class="fa fa-ship" aria-hidden="true"></i>
                                <h3>Cruzeiros</h3>
                                <p>
                                    Oferecemos cruzeiros para todos e providenciaremos voos, traslados, hotéis e até mesmo ajudaremos a reservar excursões em terra.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 p-2">
                            <div class="service-box">
                                <i class="fa fa-bicycle" aria-hidden="true"></i>
                                <h3>Passeios</h3>
                                <p>
                                    Se você gostaria de viajar para um lugar distante em um ambiente seguro e confortável para grupos, podemos encontrar a excursão em grupo perfeita.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 p-2">
                            <div class="service-box">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                <h3>Pacotes</h3>
                                <p>
                                    Sabemos onde encontrar os destinos mais divertidos, vibrantes, do tudo ou do nada!
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 p-2">
                            <div class="service-box">
                                <i class="fa fa-building" aria-hidden="true"></i>
                                <h3>Resorts</h3>
                                <p>
                                    Com todas as informações e avaliações na internet, pesquisar resorts pode ser confuso, estamos preparados para encontrar a melhor opção para você.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="travels-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Existe Um Mundo de Possibilidades Lá Fora</h2>
                            <p>Aqui estão apenas algumas ideias de possibilidades para você começar</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 p-0">
                            <img src="<?php the_field('viagens_1_1'); ?>" alt="Pontos Turisticos" class="p-1">
                        </div>
                        <div class="col-4 p-0">
                            <img src="<?php the_field('viagens_1_2'); ?>" alt="Festivais" class="p-1">
                        </div>
                        <div class="col-4 p-0">
                            <img src="<?php the_field('viagens_1_3'); ?>" alt="Bebidas Regionais" class="p-1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 p-0">
                            <img src="<?php the_field('viagens_2_1'); ?>" alt="Passeios" class="p-1">
                        </div>
                        <div class="col-4 p-0">
                            <h4 class="h4-travels">Nossas<br>Viagens</h3>
                        </div>
                        <div class="col-4 p-0">
                            <img src="<?php the_field('viagens_2_3'); ?>" alt="Música" class="p-1">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-4 p-0">
                            <img src="<?php the_field('viagens_3_1'); ?>" alt="Cultura" class="p-1">
                        </div>
                        <div class="col-4 p-0">
                            <img src="<?php the_field('viagens_3_2'); ?>" alt="Museu" class="p-1">
                        </div>
                        <div class="col-4 p-0">
                            <img src="<?php the_field('viagens_3_3'); ?>" alt="Esportes" class="p-1">
                        </div>
                    </div>
                </div>
            </div>
            <div id="nacionais-area">
                <div class="container-fluid py-4">
                    <div class="row m-3">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <h2>Aonde Você Quer Ir?</h2>
                            <p>O Brasil tem mais de 8 milhões de quilômetros quadrados de beleza e diversidade. Nesse cenário de dimensões continentais, você vai encontrar ilhas e as mais lindas praias do mundo, cachoeiras e matas fechadas, rica gastronomia, parques, milhares de rios, cidades históricas e muita modernidade.</p>
                            <p class="d-none d-sm-block">Com tanta variedade, existe no Brasil um destino certo para cada perfil de viajante. Tudo isso unido a uma alegria contagiante que enche a alma de quem passa por essas terras.</p>
                            <a href="nacionais.html" class="btn btn-primary">Destinos Nacionais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="internacionais-area">
                <div class="container-fluid py-4">
                    <div class="row m-3">
                        <div class="col-md-6"></div>
                        <div class="col-md-4">
                            <h2>Explore o Mundo Conosco</h2>
                            <p>Explorar novos lugares é uma excelente forma de construir boas memórias e ver a vida de outras maneiras. Só essas possibilidades já mostram que não faltam bons motivos para viajar com mais frequência, seja para destinos nacionais, seja para os internacionais.</p>
                            <p class="d-none d-sm-block">Sabia que tanto os espaços inusitados quanto os pontos turísticos reconhecidos mundialmente podem enriquecer suas experiências? Por apresentarem diferentes realidades, ajudam qualquer visitante a exercitar a empatia com o próximo e a respeitar outras culturas.</p>
                            <a href="internacionais.html" class="btn btn-primary">Destinos Internacionais</a>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
            <div id="clientSlider" class="carousel slide my-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#clientSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#clientSlider" data-slide-to="1"></li>
                    <li data-target="#clientSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php the_field('cliente_1_foto'); ?>" class="d-block w-100" alt="Maria Souza">
                        <div class="carousel-caption d-md-block">
                            <h4><?php the_field('cliente_1_nome'); ?></h4>
                            <p><?php the_field('cliente_1_texto'); ?></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php the_field('cliente_2_foto'); ?>" class="d-block w-100" alt="João da Silva">
                        <div class="carousel-caption d-md-block">
                            <h4><?php the_field('cliente_2_nome'); ?></h4>
                            <p><?php the_field('cliente_2_texto'); ?></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php the_field('cliente_3_foto'); ?>" class="d-block w-100" alt="Carlos Augusto">
                        <div class="carousel-caption d-md-block">
                            <h4><?php the_field('cliente_3_nome'); ?></h4>
                            <p><?php the_field('cliente_3_texto'); ?></p>
                        </div>
                    </div>
                </div>
                <a href="#clientSlider" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#clientSlider" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div id="contact-area">
                <div class="container-fluid p-5">
                    <div class="row mb-5">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 col-md-6 col-xl-4 contact-box">
                            <h2>Contate-nos</h2>
                            <form action="">
                                <input type="text" class="form-control" placeholder="Nome" name="name">
                                <input type="email" class="form-control" placeholder="E-mail" name="email">
                                <textarea class="form-control" rows="3" placeholder="Escreva aqui sua mensagem" name="massage"></textarea>
                                <input type="submit" class="btn btn-primary" value="Enviar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php endwhile; else: endif; ?>

<?php get_footer(); ?>