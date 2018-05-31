<html lang="en">
<head>
    <title>RoyalWood</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/i/logo_main.png" type="image/png">
    <!-- Latest compiled and minified CSS -->
<!--    <link rel="stylesheet" href="css/style.css">-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="assets/css/style.css">

<!--  //  <link rel="stylesheet" href="css/Footer-with-button-logo.css">-->

    <!-- Optional theme -->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <!-- Latest compiled and minified JavaScript -->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
    <script src="assets/js/main.js"></script>
</head>
<body>

<!--Навигация с корзиной и лого-->
<nav class="navbar navbar-expand-md navbar-dark bg-secondary fixed-top h4" style="font-family: cheltenham">

    <a class="navbar-brand h1" href="index.php">
        <img src="assets/i/logo_red.png"  height="60" class="d-inline-block align-top" style="opacity: 0.5" alt="">
    </a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a  href="aboutus.php" class="nav-link"><h3>О нас</h3></a>
            </li>
            <li class="nav-item">
                <a  href="catalog.php" class="nav-link"><h3>Каталог</h3></a>
            </li>
            <li class="nav-item">
                <a  href="delivery.php" class="nav-link"><h3>Доставка</h3></a>
            </li>
            <li class="nav-item">
                <a  href="howtobuy.php" class="nav-link"><h3>Как купить?</h3></a>
            </li>
            <li class="nav-item">
                <a href="contacts.php" class="nav-link"><h3>Контакты</h3></a>
            </li>
        </ul>

    </div>
    <div class="container" id="secondNavbar">
        <div class="collapse navbar-collapse" id="contactNavbar">
            <ul class="nav navbar-nav navbar-left">
                <li> <a id="contacts" href="contact.php"><h3>Контакты:</h3></a> </li>
                <li> <a id="contacts" href="contact.php"><h3>8(921)327-62-18</h3></a></li>
                <li> <a id="contacts" href="contact.php"><h3>8(812)725-55-72</h3></a></li>
                <li><a id="contacts" href="mailto:info@royalwood.pw"><h3> info@royalwood.pw</h3></a></li>
            </ul>
        </div>
    </div>
</nav>

<!--Слайдер для показа новинок-->
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/i/bereza%20estestvennoj%20vlagnosti.jpg" alt="Chania">
                <div class="carousel-caption">
                    <h3> </h3>
                    <p> </p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assets/i/bereza%20suhaja.jpg" alt="Chicago">
                <div class="carousel-caption">
                    <h3> </h3>
                    <p> </p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assets/i/sosna%20suhaja%20-%20slider.jpg" alt="New York">
                <div class="carousel-caption">
                    <h3></h3>
                    <p> </p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</div>
<!--Основная часть - категории-->
<div class="container text-center">
<div class="row text">
    <div class="col-3">
        <div class="card">
            <img class="card-img-top rounded-circle" src="assets/i/bird.jpg" alt="product_image">
            <div class="card-footer card-img-overlay">
                <div href="#" class="btn-lg btn-secondary btn-block">Евровагонка</div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card">
            <img class="card-img-top rounded-circle" src="assets/i/bird.jpg" alt="product_image">
            <div class="card-footer card-img-overlay">
                <div href="#" class="btn-lg btn-secondary btn-block">Вагонка "Штиль"</div>
            </div>
        </div>

    </div>
    <div class="col-3">
        <div class="card">
            <img class="card-img-top rounded-circle" src="assets/i/bird.jpg" alt="product_image">
            <div class="card-footer card-img-overlay">
                <div href="#" class="btn-lg btn-secondary btn-block">Пагонаж</div>
            </div>
        </div>

    </div>
    <div class="col-3">
        <div class="card">
            <img class="card-img-top rounded-circle" src="assets/i/bird.jpg" alt="product_image">
            <div class="card-footer card-img-overlay">
                <div href="#" class="btn-lg btn-secondary btn-block">Имитация бруса</div>
            </div>
        </div>

    </div>

</div>
<div class="row">
    <div class="col-3">
        <div class="card">
            <img class="card-img-top rounded-circle" src="assets/i/bird.jpg" alt="product_image">
            <div class="card-footer card-img-overlay">
                <div href="#" class="btn-lg btn-secondary btn-block">Блок-хаус</div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card">
            <img class="card-img-top rounded-circle" src="assets/i/bird.jpg" alt="product_image">
            <div class="card-footer card-img-overlay">
                <div href="#" class="btn-lg btn-secondary btn-block">Доска для пола</div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card">
            <img class="card-img-top rounded-circle" src="assets/i/bird.jpg" alt="product_image">
            <div class="card-footer card-img-overlay">
                <div href="#" class="btn-lg btn-secondary btn-block">Доска, брус</div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card">
            <img class="card-img-top rounded-circle" src="assets/i/bird.jpg" alt="product_image">
            <div class="card-footer card-img-overlay">
                <div href="#" class="btn-lg btn-secondary btn-block">Террасная доска</div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-3">
        <div class="card">
        <img class="card-img-top rounded-circle" src="assets/i/bird.jpg" alt="product_image">
        <div class="card-footer card-img-overlay">
            <div href="#" class="btn-lg btn-secondary btn-block">Погонаж</div>
        </div>
    </div>
    </div>
    <div class="col-3">
        <div class="card">
        <img class="card-img-top rounded-circle" src="assets/i/bird.jpg" alt="product_image">
        <div class="card-footer card-img-overlay">
            <div href="#" class="btn-lg btn-secondary btn-block">Брусок-рейка</div>
        </div>
    </div>
    </div>
    <div class="col-3">
        <div class="card">
        <img class="card-img-top rounded-circle" src="assets/i/bird.jpg" alt="product_image">
        <div class="card-footer card-img-overlay">
            <div href="#" class="btn-lg btn-secondary btn-block">Осина для сауны</div>
        </div>
    </div>
    </div>
    <div class="col-3">
        <div class="card">
        <img class="card-img-top rounded-circle" src="assets/i/bird.jpg" alt="product_image">
        <div class="card-footer card-img-overlay">
            <div href="#" class="btn-lg btn-secondary btn-block">Фанера, плиты OSB</div>
        </div>
    </div>
    </div>
</div>






</div>
<!--Подвал с основной информацией-->
<div class="footer text-center bg-secondary">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <a href="#"> <img src="assets/i/logo_main.png" class="logo" style="width:150px; padding-top:10px" "></img> </a>
                </div>
                <div class="col-sm-2">
                    <h5>Информация</h5>
                    <ul>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Сотрудники</a></li>
                        <li><a href="#">Фото</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Услуги</h5>
                    <ul>
                        <li><a href="#">Доставка</a></li>
                        <li><a href="#">Партнёры</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Полезно знать</h5>
                    <ul>
                        <li><a href="#">Условия приобретения</a></li>
                        <li><a href="#">Прайс-лист</a></li>
                        <li><a href="#">Статьи</a></li>
                    </ul>
                </div>
                <div class="col-sm-2" style="vertical-align: middle" >
                    <!-- <div class="social-networks">
                         <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                         <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                         <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                     </div>-->
                    <button type="button" class="btn">Связаться с нами</button>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2016 Alex Morris </p>
        </div>

</div>


</body>
</html>