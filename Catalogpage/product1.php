<html lang="en">
<head>
    <title>RoyalWood</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/image/logo_main.png" type="image/png">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="/css/Footer-with-button-logo.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <!-- Latest compiled and minified JavaScript -->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.min.js" ></script>
    <script src="/js/javascript.js"></script>
</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <ul class="nav navbar-nav navbar-left">

                <a class="navbar-brand" href="/index.php">
                    <img src="/image/logo_red.png" class="logo" style="width:300px; padding-top:10px" "></img>
                </a>

                <!--               <a class="navbar-brand" href="#"><h3>RoyalWood6</h3></a>-->

            </ul>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li id="hideNavbar"><a  href="/contact.php"><h3>Контакты</h3></a></li>
                <li><a  href="/aboutus.php"><h3>О нас</h3></a></li>
                <li><a  href="/catalog.php"><h3>Каталог</h3></a></li>
                <li><a  href="/delivery.php"><h3>Доставка</h3></a></li>
                <li><a  href="/howtobuy.php"><h3>Как купить?</h3></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="basket_li"><a  href="#"><img id="royalnavbar" src="/image/c-basket_red.png" class="logo"> </img> </a></li>
            </ul>
        </div>
    </div>
    <div class="container" id="secondNavbar">
        <div class="collapse navbar-collapse" id="contactNavbar">
            <ul class="nav navbar-nav navbar-left">
                <li> <a id="contacts" href="/contact.php"><h3>Контакты:</h3></a> </li>
                <li> <a id="contacts" href="/contact.php"><h3>8(921)327-62-18</h3></a></li>
                <li> <a id="contacts" href="/contact.php"><h3>8(812)725-55-72</h3></a></li>
                <li><a id="contacts" href="mailto:info@royalwood.pw"><h3> info@royalwood.pw</h3></a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="row">
    <div class="container equalHeight">
        <div class="col-sm-3 leftNavbar hidden-xs ">
            <div class="catalog-bg">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1">Каталог</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <ul class="list-group">
                                <li class="list-group-item">Евровагонка</li>
                                <li class="list-group-item">Вагонка "Штиль"</li>
                                <li class="list-group-item">Имитация бруса</li>
                                <li class="list-group-item">Блок-хаус</li>
                                <li class="list-group-item">Доска пола</li>
                                <li class="list-group-item">Доска, брус</li>
                                <li class="list-group-item">Террасная доска</li>
                                <li class="list-group-item">Пагонаж</li>
                                <li class="list-group-item">Брусок, рейка</li>
                                <li class="list-group-item">Осина для сауны</li>
                                <li class="list-group-item">Фанера, Плиты OSB</li>
                                <li class="list-group-item">Топливные брикеты</li>
                            </ul>
                            <!--<div class="panel-footer">Footer</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 rightNavbar">
            <div class="row">
                <div class="container">
                    <h2>Евровагонка</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7" >
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                        <div class="thumbnail">
                        <img src="/image/bird.jpg" style="width: 100%">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-xs-4">
                            <div class="thumbnail">
                            <img src="/image/bird.jpg">
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-4" >
                            <div class="thumbnail">
                           <img  src="/image/bird.jpg">
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-4" >
                            <div class="thumbnail">
                           <img src="/image/bird.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul>
                                <li><span>Цена за штуку:</span><input id="i1P" type="text" value="1"/><span>руб./шт</span></li>
                                <li><span>Кол-во:</span><input id="i1Q" type="text" value="1"/><span id="v1Q"></span><span>м3  |  </span><span id="a1Q"></span><span>м2</span></li>
                                <li> <span>Высота:</span><input id="i1H" type="text" value="1"/></li>
                                <li> <span>Ширина:</span><input id="i1W" type="text" value="1"/></li>
                                <li><span>Длинна:</span><input id="i1L" type="text" value="1"/></li>
                                <li><span>Объем:</span><span id="v1"> No value </span><span>м3</span></li>
                                <li><span>Объем:</span><span id="a1"> No value </span><span>м3</span></li>
                                <li><span>Цена за 1 м3:</span><span id="v1P"> No value </span><span>руб./м3</span> </li>
                                <li><span>Цена за 1 м2:</span><span id="a1P"> No value </span><span>руб./м2</span> </li>

                                <li><span>Цена итого:</span><span id="t1P"> No value </span><span> руб.</span></li>

                                <li><button id="reCalc" onclick="reCalcFunc()">Subbmit</button></li>
                            </ul>
                            <script>
                                var priseP=230;
                                var quantityQ=1;
                                var sliseS=1;
                                var widthW=36;
                                var heighH=136;
                                var lenghtL=3000;
                                var volumeV=1;
                                var areaA=1;
                                var volumePrice=1;
                                var areaPrice=1;
                                var totalPrice=1;

                                document.getElementById('i1H').value=heighH;
                                document.getElementById('i1W').value=widthW;
                                document.getElementById('i1L').value=lenghtL;
                                document.getElementById('i1P').value=priseP;
                                reCalcFunc();

                                function reCalcFunc() {
                                    heighH=document.getElementById('i1H').value;
                                    widthW=document.getElementById('i1W').value;
                                    lenghtL=document.getElementById('i1L').value;
                                    priseP=document.getElementById('i1P').value;
                                    quantityQ = document.getElementById('i1Q').value;

                                    volumeV=heighH*widthW*lenghtL/1000000000;
                                    areaA=widthW*lenghtL/1000000;

                                    volumePrice=(priseP/volumeV);
                                    areaPrice=(priseP/areaA);
                                    totalPrice=priseP*quantityQ;

                                    var v1Q=document.getElementById('v1Q');
                                    v1Q.innerHTML=(volumeV*quantityQ).toFixed(4);

                                    var a1Q=document.getElementById('a1Q');
                                    a1Q.innerHTML=(areaA*quantityQ).toFixed(4);

                                    //Volume
                                    var v1=document.getElementById('v1');
                                    v1.innerHTML = volumeV;
                                    //Area
                                    var a1=document.getElementById('a1');
                                    a1.innerHTML=areaA;
                                    //Volume price
                                    var v1P=document.getElementById('v1P');
                                    v1P.innerHTML=Math.round(volumePrice);
                                    //Area price
                                    var a1P=document.getElementById('a1P');
                                    a1P.innerHTML=Math.round(areaPrice);
                                    //Total price
                                    var t1P = document.getElementById('t1P');
                                    t1P.innerHTML=Math.round(totalPrice);

                                }

                            </script>
                            <form>
                            <div class="form-group">
                                <label for="sel1">Select list:</label>
                                <select class="form-control" id="sel1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>

                                <div class="form-group">
                                    <label for="sel2">Select list:</label>
                                    <select class="form-control" id="sel2">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h2>Dynamic Tabs</h2>
                    <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                        <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                        <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                        <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <h3>HOME</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <h3>Menu 1</h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <h3>Menu 3</h3>
                            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row">
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a href="#"> <img src="/image/logo_main.png" class="logo" style="width:150px; padding-top:10px" "></img> </a>
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