<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--meta property for sharing social networks-->
        <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Your Website Title" />
        <meta property="og:description"   content="Your description" />
        <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
        <!--<link rel="stylesheet" href="./css/bootstrap.min.css">-->
        <link rel="stylesheet" href="./css/main.css">
        <script src="https://kit.fontawesome.com/6cfa4c0aa7.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="wrap">
            <div class="container">
                <!--<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; opacity: .8">-->
                <nav class="navbar navbar-expand-lg navbar-light background">
                    <a class="navbar-brand mx-2" href="./">
                        <!--<img src="./img/logo_car.png" width="200" height="57" alt="">-->
                        <div class="lead text-dark">
                            <div>Language school</div> 
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav font-weight-bold ml-10">
                            <!--<a class="nav-item nav-link active url" href="./index.php">Главная <span class="sr-only">(current)</span></a>-->
                            <a class="nav-item nav-link url" href="?activities">Scheduled activities</a>
                            <a class="nav-item nav-link url" href="?team">Our team</a>
                            <a class="nav-item nav-link url" href="./news">News</a>
                            <!--<a class="nav-item nav-link url" href="#">Отзывы</a>-->
                            <!--<a class="nav-item nav-link url" href="#">Галерея</a>-->
                            <!--<a class="nav-item nav-link url" href="?order">Подать заявку</a>-->
                            <!--<a class="nav-item nav-link url" href="?shop">Магазин</a>-->
                        </div>  
                    </div>
                </nav>
                <?php // if (sign_up()): ?>
                <!--                    <div class="alert alert-success" role="alert">
                                        Отлично! Регистрация успешно завершена. Теперь Вы можете пользоваться всеми возможностями сайта!
                                    </div>-->
                <?php // endif; ?>
                <?php // if ($_SESSION['orderIsDone'] == true): ?>
                <!--                    <div class="alert alert-success" role="alert">
                                        Поздравляем! Запись оформлена. Ждем Вас,  <?php // htmlout($_SESSION['firstName'] . ', на ' . $_SESSION['vehicle'] . ' ' . $_SESSION['date']);                                                         ?>
                                    </div>-->
                <?php // endif; ?>
                <div class="row">
                    <div class="col-2 ml-5 ">
                        <div class="mt-1">
                            <a class="fab fa-vk" href="//vk.com/share.php?url=https://valid.url&amp;title=text"></a>
                            <a class="fab fa-telegram" href="tg://msg_url?url=https://valid.url&amp;text=text"></a>
                            <a class="fab fa-whatsapp" href="whatsapp://send?text=text%20https://valid.url"></a>
                            <a class="fab fa-facebook" href="//www.facebook.com/sharer/sharer.php?u=https://valid.url&amp;quote=text"></a>
                        <!--<p class="fab fa-viber">        </p>-->
                        </div>
                    </div>
                </div>

                <div class="row text-light">
                    <div class="col-2 ml-5 ">
                        <h3>
                            Earth is round!
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="./js/jquery-3.3.1.slim.min.js"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
        <script src="./js/bootstrap.min.js"></script>

    </body>
</html>