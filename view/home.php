<?php
session_start()
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animes Chats</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/plyr.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/cadastroTema.css">
    <link rel="icon" href="../img/favicon.png" type="image/x-icon">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php require_once './menu.php' ?>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>BEM VINDO AO ANIMES-CHATS</h2>
                                <p>Leia, comente e avalie sobre seus temas favoritos</p>
                                <p></p>
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>AQUI VOCÊ PODE CONHECER NOVAS PESSOAS E CONVERSAR SOBRE DIVERSOS TEMAS</h2>
                                <p>Não perca tempo e participe de uma comunidade </p>
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Animes Populares</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="./pesquisarTema.php?type=anime&page=1" class="primary-btn">Ver mais <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <?php
                            require_once '../model/DAO/temaDAO.php';
                            $temaConn = new temaDAO();
                            $temas = $temaConn->popularesTema();
                            foreach ($temas as $tema) {
                            ?>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <a href="./tema.php?id=<?= $tema['idtema'] ?>">
                                            <div class="product__item__pic set-bg" data-setbg="<?= $tema['fototema'] ?>">
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li><?= $tema['genero'] ?></li>
                                                </ul>
                                                <h5><a href="./tema.php?id=<?= $tema['idtema'] ?>"><?= $tema['nome'] ?></a></h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Comunidades Recentes</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="./homeComunidade.php?page=1" class="primary-btn">Ver mais <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            require_once '../model/DAO/comunidadeDAO.php';
                            $comunidadeConn = new comunidadeDAO();
                            $comunidades = $comunidadeConn->comunidadeRecente();
                            foreach ($comunidades as $comunidade) {
                            ?>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <a href="./comunidade.php?id=<?= $comunidade["idcomunidade"] ?>">
                                            <div class="product__item__pic set-bg" data-setbg="<?= $comunidade["foto"] ?>">
                                            </div>
                                        </a>
                                        <div class="product__item__text">
                                            <ul>
                                                <li><?= $comunidade["nome_tema"] ?></li>
                                            </ul>
                                            <h5><a href="./comunidade.php?id=<?= $comunidade["idcomunidade"] ?>"><?= $comunidade["nome"] ?></a></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Tópicos recentes</h5>
                            </div>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years" data-setbg="../img/sidebar/tv-1.jpg">
                                    <h5><a href="./tema.php?id=2">Boruto: Naruto next generations</a></h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix month week" data-setbg="../img/sidebar/tv-2.jpg">
                                    <h5><a href="./tema.php?id=4">ID: INVADED</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="product__sidebar__comment">
                            <div class="section-title">
                                <h5>Os mais comentados</h5>
                            </div>
                            <?php
                            $temas = $temaConn->comentadosTema();
                            foreach ($temas as $tema) {
                            ?>
                                <div class="product__sidebar__comment__item">
                                    <a href="./tema.php?id=<?= $tema['idtema'] ?>">
                                        <div class="product__sidebar__comment__item__pic">
                                            <img src="<?= $tema['fototema'] ?>" alt="<?= $tema['nome'] ?>" style="max-width: 80px;height: auto;">
                                        </div>
                                    </a>
                                    <div class="product__sidebar__comment__item__text">
                                        <ul>
                                            <li><?= $tema['genero'] ?></li>
                                        </ul>
                                        <h5><a href="./tema.php?id=<?= $tema['idtema'] ?>"><?= $tema['nome'] ?></a></h5>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Product Section End -->

    <?php require_once './footer.php' ?>
</body>

</html>