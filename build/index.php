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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</head>
<body>

<!--Навигация с корзиной и лого-->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <ul class="nav navbar-nav navbar-left">

                <a class="navbar-brand" href="index.php">
                    <img src="assets/i/logo_red.png" class="logo" style="width:300px; padding-top:10px" "></img>
                </a>

                <!--               <a class="navbar-brand" href="#"><h3>RoyalWood6</h3></a>-->

            </ul>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li id="hideNavbar"><a  href="contact.php"><h3>Контакты</h3></a></li>
                <li><a  href="aboutus.php"><h3>О нас</h3></a></li>
                <li><a  href="catalog.php"><h3>Каталог</h3></a></li>
                <li><a  href="delivery.php"><h3>Доставка</h3></a></li>
                <li><a  href="howtobuy.php"><h3>Как купить?</h3></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="basket_li"><a  href="#"><img id="royalnavbar" src="assets/i/c-basket_red.png" class="logo"> </img> </a></li>
            </ul>
        </div>
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
            <div class="item active">
                <img src="assets/i/bereza%20estestvennoj%20vlagnosti.jpg" alt="Chania">
                <div class="carousel-caption">
                    <h3> </h3>
                    <p> </p>
                </div>
            </div>

            <div class="item">
                <img src="assets/i/bereza%20suhaja.jpg" alt="Chicago">
                <div class="carousel-caption">
                    <h3> </h3>
                    <p> </p>
                </div>
            </div>

            <div class="item">
                <img src="assets/i/sosna%20suhaja%20-%20slider.jpg" alt="New York">
                <div class="carousel-caption">
                    <h3></h3>
                    <p> </p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Предыдущий</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Следующий</span>
        </a>
    </div>
</div>
<!--Основная часть - категории-->
<div class="row">
    <div class="container rightNavbar">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-4" >
                    <div class="product">
                        <div class="media">
                            <div class="media-middle">
                                <img src="assets/i/bird.jpg" class="img-circle center-block" alt="Cinque Terre" style="width:150px; padding-top:10px" ">
                            </div>
                        </div>
                        <div class="container productText">
                            <a href="Catalogpage/product1.php"><h4 class="media-heading ">Евровагонка</h4></a>
                            <p class="text-justify"></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media">
                        <div class="media-middle">
                            <img src="assets/i/bird.jpg" class="img-circle center-block" alt="Cinque Terre" style="width:150px; padding-top:10px" ">
                        </div>
                    </div>
                    <div class="container productText">
                        <h4 class="media-heading ">Вагонка "Штиль"</h4>
                        <p class="text-justify"></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media">
                        <div class="media-middle">
                            <img src="assets/i/bird.jpg" class="img-circle center-block" alt="Cinque Terre" style="width:150px; padding-top:10px" ">
                        </div>
                    </div>
                    <div class="container productText" >
                        <h4 class="media-heading ">Имитация бруса</h4>
                        <p class="text-justify"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="media">
                        <div class="media-middle">
                            <img src="assets/i/bird.jpg" class="img-circle center-block" alt="Cinque Terre" style="width:150px; padding-top:10px" ">
                        </div>
                    </div>
                    <div class="container productText" >
                        <h4 class="media-heading ">Блок-хаус</h4>
                        <p class="text-justify"></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media">
                        <div class="media-middle">
                            <img src="assets/i/bird.jpg" class="img-circle center-block" alt="Cinque Terre" style="width:150px; padding-top:10px" ">
                        </div>
                    </div>
                    <div class="container productText" >
                        <h4 class="media-heading ">Доска для пола</h4>
                        <p class="text-justify"></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media">
                        <div class="media-middle">
                            <img src="assets/i/bird.jpg" class="img-circle center-block" alt="Cinque Terre" style="width:150px; padding-top:10px" ">
                        </div>
                    </div>
                    <div class="container productText">
                        <h4 class="media-heading ">Доска, брус</h4>
                        <p class="text-justify"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="media">
                        <div class="media-middle">
                            <img src="assets/i/bird.jpg" class="img-circle center-block" alt="Cinque Terre" style="width:150px; padding-top:10px" >
                        </div>
                    </div>
                    <div class="container productText" >
                        <h4 class="media-heading ">Террасная доска</h4>
                        <p class="text-justify"></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media">
                        <div class="media-middle">
                            <img src="assets/i/bird.jpg" class="img-circle center-block" alt="Cinque Terre" style="width:150px; padding-top:10px">
                        </div>
                    </div>
                    <div class="container productText">
                        <h4 class="media-heading ">Погонаж</h4>
                        <p class="text-justify"></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media">
                        <div class="media-middle">
                            <img src="assets/i/bird.jpg" class="img-circle center-block" alt="Cinque Terre" style="width:150px; padding-top:10px" ">
                        </div>
                    </div>
                    <div class="container productText">
                        <h4 class="media-heading ">Брусок, рейка</h4>
                        <p class="text-justify"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="media">
                        <div class="media-middle">
                            <img src="assets/i/bird.jpg" class="img-circle center-block" alt="Cinque Terre" style="width:150px; padding-top:10px" ">
                        </div>
                    </div>
                    <div class="container productText" >
                        <h4 class="media-heading ">Осина для сауны</h4>
                        <p class="text-justify"></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media">
                        <div class="media-middle">
                            <img src="assets/i/bird.jpg" class="img-circle center-block" alt="Cinque Terre" style="width:150px; padding-top:10px" >
                        </div>
                    </div>
                    <div class="container productText">
                        <h4 class="media-heading ">Фанера, Плиты OSB</h4>
                        <p class="text-justify"></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media">
                        <div class="media-middle">
                            <img src="assets/i/bird.jpg" class="img-circle center-block" alt="Cinque Terre" style="width:150px; padding-top:10px" >
                        </div>
                    </div>
                    <div class="container productText">
                        <h4 class="media-heading ">Топливные брикеты</h4>
                        <p class="text-justify"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Подвал с основной информацией-->
<div class="row">
    <footer id="myFooter">
        <div class="container">
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
            <p>© 2016 Copyright Text </p>
        </div>
    </footer>
</div>


</body>
</html>