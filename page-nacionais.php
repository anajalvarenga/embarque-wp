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

            <div id="regiao">
                <div class="container">
                    <?php if(have_rows('regiao')): while(have_rows('regiao')) : the_row(); ?>
                    <div class="row mb-3">
                        <div class="col-md-1"></div>
                        <div class="col-md-6 norte-text">
                            <h2><?php the_sub_field('nome_regiao'); ?></h2>
                            <?php the_sub_field('texto_regiao'); ?>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php the_sub_field('foto_regiao'); ?>" alt="<?php the_sub_field('nome_regiao'); ?>">
                        </div>
                    </div>
                    <?php endwhile; else : endif; ?>
                </div>
            </div>

        </main>
    <?php endwhile; else: endif; ?>

<?php get_footer(); ?>