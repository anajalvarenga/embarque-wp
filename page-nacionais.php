<?php
// Template Name: Nacionais
?>

<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <main>
            <div id="banner-nacionais">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h1>Conheça o Brasil<br>de Norte a Sul</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div id="norte">
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-md-6 norte-text">
                            <h2>Norte</h2>
                            <p>Viajar pelo Norte do Brasil é uma experiência inesquecível para os turistas. Tanto suas belezas naturais quanto a diversidade cultural e gastronômica são os principais atrativos da região.
                            </p>
                            <p>Motivos não faltam para visitar o Norte do Brasil. Por exemplo, você sabia que uma praia de água doce está entre as mais bonitas do mundo e ela é brasileira? Isso mesmo! Alter do Chão, no Pará, é destaque em jornais internacionais como o “Caribe da Amazônia”.
                            </p>
                            <p>Fantástico, não? Entre em contato e vamos apresentar os benefícios de visitar a região Norte do país, principais destinos e qual a melhor época para viajar. </p>
                        </div>
                        <div class="col-md-6">
                            <img src="img/foto-norte.jpg" alt="Norte">
                        </div>
                    </div>
                </div>
            </div>
            <div id="nordeste">
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-md-6 nordeste-text">
                            <h2>Nordeste</h2>
                            <p>Possuindo um clima quente na maior parte do ano, atingindo facilmente mais de 30ºC no verão, o clima tropical é muito difundido. Encontrado na região litorânea da região com chuvas bem definidas. Além de possuir de possuir belíssimas praias naturais
                            </p>
                            <p>Além disso, povo nordestino é conhecido pela sua simplicidade, alegria, receptividade com todos, muito otimismo e disposição para trabalhar duro.
                            </p>
                            <p>A soma desses fatores faz com que uma viagem para o Nordeste seja completamente inesquecível.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="img/foto-nordeste.jpg" alt="Nordeste">
                        </div>
                    </div>
                </div>
            </div>
            <div id="centro-oeste">
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-md-6 centro-oeste-text">
                            <h2>Centro-Oeste</h2>
                            <p>De cachoeiras paradisíacas a projetos arquitetônicos de tirar o fôlego, o coração do Brasil é privilegiado. A área formada pelos estados de Mato Grosso, Goiás, Mato Grosso do Sul e Distrito Federal oferece uma infinidade de passeios para todos os gostos.
                            </p>
                            <p>A região encanta os turistas devido a sua exuberante e inesquecível natureza, pelas diversas opções de passeio para adultos e crianças, sua arquitetura moderna e seus parques com fauna e flora impressionantes
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="img/foto-centro-oeste.jpg" alt="Centro-Oeste">
                        </div>
                    </div>
                </div>
            </div>
            <div id="sudeste">
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-md-6 sudeste-text">
                            <h2>Sudeste</h2>
                            <p>Para quem quer conhecer a região sudeste, alguns pontos turísticos são imperdíveis. No Rio de Janeiro o Cristo Redentor aguarda os visitantes de braços abertos para ver de perto.
                            </p>
                            <p>Em São Paulo, localizado na capital do estado na Avenida Paulista, onde estão guardadas mais de 8 mil obras de artes de vários períodos e países.
                            </p>
                            <p>Em Minas Gerais podemos citar a Praça da Liberdade que detém o magnífico conjunto arquitetônico Palácio da Liberdade, que sediou grandes eventos históricos.
                            </p>
                            <p>No Espírito Santo é possível se aventurar pelas dunas de Itaúnas, que chegam a 30 metros de altura.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="img/foto-sudeste.jpg" alt="Sudeste">
                        </div>
                    </div>
                </div>
            </div>
            <div id="sul">
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-md-6 sul-text">
                            <h2>Sul</h2>
                            <p>Com diversas misturas de culturas, natureza, culinária, entre outras coisas, fazem desse lugar um Brasil à parte, diferente de tudo o que você já viu em outras regiões.
                            </p>
                            <p>Localizada quase inteiramente na região temperada, o Sul possuí um clima diferenciado do resto do país. O que normalmente atraí os turistas em busca de frio, neve, geada e paisagens que lembram um pouco a Europa.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="img/foto-sul.jpg" alt="Sul">
                        </div>
                    </div>
                </div>
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