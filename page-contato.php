<?php
// Template Name: Contato
?>

<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <main>
            <div id="banner-contato">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h1>Está progamando<br>Uma Nova Viagem?</h1>
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
            <div id="localizacao-contato">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Localização</h2>
                            <p>Estamos esperando ansiosamente a sua visita.</p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12">
                            <img src="img/localizacao.jpg" alt="Localização">
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php endwhile; else: endif; ?>
    
<?php get_footer(); ?>