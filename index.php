<?php
// Ваш токен бота
$botToken = '7319529033:AAGcHybbogTReLPN_rJNXcIVEj_Z18Lvmfs';
// Ваш Chat ID
$chatId = '-1002244273745';

// Сообщение для отправки
$message = 'На сайт зашли! IP: ' . $_SERVER['REMOTE_ADDR'];

// URL для отправки сообщения
$sendMessageUrl = "https://api.telegram.org/bot$botToken/sendMessage";

// Параметры POST запроса
$postFields = array(
    'chat_id' => $chatId,
    'text' => $message
);

// Инициализация cURL
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $sendMessageUrl); 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Выполнение запроса и получение ответа
$response = curl_exec($ch); 

// Проверка на ошибки
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

// Закрытие cURL
curl_close($ch); 

// Для отладки, можете вывести ответ от Telegram API
// echo $response;
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>Любимая</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <body>
        <header class="header navbar-fixed-top">
            <nav class="navbar" role="navigation">
                <div class="container">
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        

                    </div>

                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">    
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child">Я тебя очень сильно люблю!</a></li>
                            </ul>
                        </div>
                    </div>
                 
                </div>
            </nav>

        </header>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">

                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="img/1920x1080/01.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">Тольятти</h1>
                                <p class="color-white fweight-700">Тольятти - очень интересный город если бы не он, то <br/> я бы вряд ли познакомился с тобой :(</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="img/1920x1080/02.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">Тольятти</h1>
                                <p class="color-white fweight-700">Тольятти - очень интересный город если бы не он, то<br/> я бы вряд ли познакомился с тобой :(</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!-- Promo Section -->
        <div class="promo-section overflow-h">
            <div class="container">
                <div class="clearfix">
                    <div class="ver-center">
                        <div class="ver-center-aligned">
                            <div class="promo-section-col">
                                <h2>Спасибо за все!</h2>
                                <p>Ты очень красивая, добрая, великолепная, и хочу из-за всех пройти все сложности в жизни и, наконец-то, приехать к тебе!</p>
                                <p>А также большое спасибо твоим родителям за то, что они привезли тебя в Беларусь и предоставили возможность встретиться с тобой!</p>
                                <p>Я решил сделать такой сайт-альбом, в котором будет все фотографии с нашей прогулки и просто твои. Это тебе подарок на память.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-section-img-right">
                <img class="img-responsive" src="img/970x970/01.jpg" alt="Content Image">
            </div>
        </div>
        <!-- End Promo Section -->

        <!-- Work -->
        <div class="bg-color-sky-light overflow-h">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Память..</h2>
                        <p>Я не забуду нашу первую встречу и момент наших обнимашек!</p>
                    </div>
                </div>
                <!--// end row -->

                <!-- Masonry Grid -->
                <div class="masonry-grid">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/800x400/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Желание</h3>
                                <p class="color-white margin-b-0">Я еще тогда загадал желание, чтобы мы вновь встретились</p>
                            </div>
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Фанаты?</h3>
                                <p class="color-white margin-b-0">Как-нибудь зайдем туда, приобретем что-нибудь)</p>
                            </div>
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Кинотеатр</h3>
                                <p class="color-white margin-b-0">Как же хорошо мы посидели в кинотеатре, мне очень понравилось! Хороший фильм выбрала! Люблю тебя!</p>
                            </div>
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/02.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Первая Встреча</h3>
                                <p class="color-white margin-b-0">Я очень боялся встретится, а когда мы встретились и я понял, что я влюбился... </p>
                            </div>
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".5s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/03.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">The End</h3>
                                <p class="color-white margin-b-0">Мне было очень сложно расставаться с тобой в тот промежуток времени, ведь я очень сильно привязался к тебе за 2 дня...  </p>
                            </div>
                            
                        </div>
                        <!-- End Work -->
                    </div>
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
        <div class="bg-color-sky-light overflow-h">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Мини-история</h2>
                        <p>Первое наше сообщение было написано 9 июля 2022 года!</p>
                        <p>А там и понеслось!</p>
                    </div>
                </div>
                <!--// end row -->

                <!-- Masonry Grid -->
                <div class="masonry-grid">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/800x400/03.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Знакомство</h3>
                                <p class="color-white margin-b-0">Я в тот день, влюбился в тебя с первого взгляда</p>
                            </div>
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/02.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Мечта всей жизни</h3>
                                <p class="color-white margin-b-0">Я всегда мечтал найти ту саму, с которой хочу провести всю жизнь</p>
                            </div>
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/03.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Судьба</h3>
                                <p class="color-white margin-b-0">Но каким-то чудесным образом я нашель тебя, и я понял что я влюбился!</p>
                            </div>
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/04.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Дискорд</h3>
                                <p class="color-white margin-b-0">Иногда сидели по вечерам в войсах, общались по душам, и смотрели фильмы</p>
                            </div>
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/05.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Общение</h3>
                                <p class="color-white margin-b-0">Спустя какое-то время наше общение стало угасать, а позже вообще погасло...</p>
                            </div>
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/06.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Встреча</h3>
                                <p class="color-white margin-b-0">И вот, наступил тот самый момент встречи. И когда при встрече я увидел тебя в живую, я понял, что буду тебя добиваться любыми способами!</p>
                            </div>
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
        <div class="bg-color-sky-light overflow-h">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Галерея</h2>
                    </div>
                </div>
                <!--// end row -->

                <!-- Masonry Grid -->
                <div class="masonry-grid">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/07.jpg" alt="Portfolio Image">
                            </div>
                           
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/08.jpg" alt="Portfolio Image">
                            </div>
                           
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/09.jpg" alt="Portfolio Image">
                            </div>
                          
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/10.jpg" alt="Portfolio Image">
                            </div>
                           
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/11.jpg" alt="Portfolio Image">
                            </div>
                            
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/12.jpg" alt="Portfolio Image">
                            </div>
                           
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/13.jpg" alt="Portfolio Image">
                            </div>
                            
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/14.jpg" alt="Portfolio Image">
                            </div>
                            
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/15.jpg" alt="Portfolio Image">
                            </div>
                
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/16.jpg" alt="Portfolio Image">
                            </div>
                
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/17.jpg" alt="Portfolio Image">
                            </div>
                
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/18.jpg" alt="Portfolio Image">
                            </div>
                
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/19.jpg" alt="Portfolio Image">
                            </div>
                
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/20.jpg" alt="Portfolio Image">
                            </div>
                
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/21.jpg" alt="Portfolio Image">
                            </div>
                
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/22.jpg" alt="Portfolio Image">
                            </div>
                
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/23.jpg" alt="Portfolio Image">
                            </div>
                
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/24.jpg" alt="Portfolio Image">
                            </div>
                
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/25.jpg" alt="Portfolio Image">
                            </div>
                
                            
                        </div>
                        <!-- End Work -->
                    </div>
                    
                    
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
        
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">

                        <div class="col-sm-4 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a class="footer-list-link" href="https://t.me/lightwolf">Creator</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="https://t.me/p_aleksandraaaa_p">Telegram</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="https://t.me/P_Aleksandra_15">Telegram Channel</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="https://www.youtube.com/@Kiwi7">YouTube</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="color-base fweight-700" href="https://t.me/lightwolf">LightWolf</a> очень сильно любит <a class="color-base fweight-700" href="https://t.me/p_aleksandraaaa_p">Kiwi</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>