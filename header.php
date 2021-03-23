<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cd0f2fa033.js" crossorigin="anonymous"></script>
    <!-- Progress Bar -->
    <script src="js/progressbar.min.js"></script>
    <!-- Parallax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Header wordpress-->
    <?php wp_head(); ?>
    <!-- Fecha header wordpress-->

</head>

<body>

    <header>
        <div class="container" id="nav-container">
            <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top px-3 py-0">
                <a href="index.html" class="navbar-brand">
                    <img src="./img/logo.svg" alt="Logo Embarque Turismo" class="logo">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Nossas Viagens</a>
                            <div class="dropdown-menu">
                                <a href="nacionais.html" class="dropdown-item">Nacionais</a>
                                <a href="internacionais.html" class="dropdown-item">Internacionais</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="sobre.html" class="nav-link">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a href="contato.html" class="nav-link">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>