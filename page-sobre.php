<?php
// Template Name: Sobre
?>

<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <main>
            <div id="banner-sobre">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h1>Conheça a<br>Embarque</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mvv-sobre">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <h2>Sobre Nós</h2>
                            <?php the_field('sobre_texto'); ?>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php the_field('sobre_foto'); ?>" alt="Sobre">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3 p-2">
                            <img src="<?php the_field('logo_sobre'); ?>" alt="Logo Embarque">
                        </div>
                        <div class="col-6 col-md-3 p-2">
                            <div class="about-box p-2">
                                <h5>Missão</h5>
                                <p>Ofertar as melhores experiências aos nossos clientes com segurança, agilidade e conhecimento.</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 p-2">
                            <div class="about-box p-2">
                                <h5>Visão</h5>
                                <p>Ser reconhecida pelos nossos clientes, equipe e fornecedores como agência de viagens de tradição que busca sempre a inovação.</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 p-2">
                            <div class="about-box p-2">
                                <h5>Valores</h5>
                                <p>Comprometimento com os nossos clientes, equipe e parceiros.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="team-sobre">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Nossa Equipe</h2>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12">
                            <img src="<?php the_field('nossa_equipe'); ?>" alt="Nossa Equipe">
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php endwhile; else: endif; ?>

<?php get_footer(); ?>