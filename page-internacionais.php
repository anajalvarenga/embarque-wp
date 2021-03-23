<?php
// Template Name: Internacionais
?>

<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <main>
            <div id="banner-internacionais">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h1>Uma Viagem ao<br>Exterior está na<br>sua Lista?</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div id="continente">
                <div class="container">
                    <?php if(have_rows('continente')): while(have_rows('continente')) : the_row(); ?>
                        <div class="row">
                            <div class="col-12">
                                <h2><?php the_sub_field('nome_continente'); ?></h2>
                            </div>
                        </div>
                        <?php if(have_rows('fotos_continente')): while(have_rows('fotos_continente')) : the_row(); ?>
                            <div class="row">
                                <div class="col-4 p-0">
                                    <img src="<?php the_sub_field('foto_continente_1'); ?>" alt="<?php the_sub_field('nome_continente'); ?>" class="p-2">
                                </div>
                                <div class="col-4 p-0">
                                    <img src="<?php the_sub_field('foto_continente_2'); ?>" alt="<?php the_sub_field('nome_continente'); ?>" class="p-2">
                                </div>
                                <div class="col-4 p-0">
                                    <img src="<?php the_sub_field('foto_continente_3'); ?>" alt="<?php the_sub_field('nome_continente'); ?>" class="p-2">
                                </div>
                            </div>
                        <?php endwhile; else : endif; ?>
                    <?php endwhile; else : endif; ?>
                </div>
            </div>

        </main>
    <?php endwhile; else: endif; ?>
    
<?php get_footer(); ?>