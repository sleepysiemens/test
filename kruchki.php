
<!doctype html>
<html lang="ru">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/0a007e12dc.js" crossorigin="anonymous"></script>
</head>
<?php
$id = '1oIIbY8WCZ4BkCweR0DVbfm0t3HuMmthP8pKVv_zAxFc';
$gid = '0';

$gid = '0';
$start_L='A';
$start_N=910;
$fin_L='L';
$fin_N=976;
$range = $start_L.$start_N.':'.$fin_L.$fin_N;

$csv = file_get_contents('https://docs.google.com/spreadsheets/d/' . $id . '/export?format=csv&gid=' . $gid . '&range=' . $range);
$csv = explode("\r\n", $csv);
$array = array_map('str_getcsv', $csv);
?>
<body style="margin: auto">
<header class="m-header">
    <div class="m-header1">
        <a href=""><img src="logo_big.png"></a>
        <div class="m-header11">
        &nbsp;&nbsp;&nbsp;
        <a class="h-link1" href="">о компании</a> &nbsp; <hr class="h-link-split" style="background-color: #00aec6"> &nbsp;
        <a class="h-link1" href="">новости</a> &nbsp; <hr class="h-link-split" style="background-color: #00aec6"> &nbsp;
        <a class="h-link1" href="">полезное</a> &nbsp; <hr class="h-link-split" style="background-color: #00aec6"> &nbsp;
        <a class="h-link1" href="">контакты</a>
        </div>
        <div style="height: 50%; margin-top: auto; margin-bottom: auto">
            <a class="h-link1" href="" style="color: rgb(88, 89, 90)!important;" >войти</a>
        </div>
    </div>
    <div  class="m-header2">
        <div style="display: flex; margin-top: auto;margin-bottom: auto">
        &nbsp;
        <a class="h-link">доставка</a> &nbsp; <hr class="h-link-split" style="background-color: white"> &nbsp;
        <a class="h-link">доп. условия</a> &nbsp; <hr class="h-link-split" style="background-color: white"> &nbsp;
        <a class="h-link">+7 (999) 999-99-99</a>
        </div>
        <div class="search-bar">
            <i class="fas fa-search"></i>
            <input id="input-74" class="search" placeholder="Введите часть Артикула или Наименования..." type="text" autocomplete="off">
        </div>
        <div>
            <i class="fas fa-shopping-cart" style="font-size: 1.4rem; color: white"></i>
            &nbsp;&nbsp;
        </div>
    </div>

</header>

        <div class="row-h">
            <a href="">Дом</a>
            <p class="menu-link">&nbsp; > &nbsp;</p>
            <a href="">Крючки и РУЧКИ мебельные</a>
            <p class="menu-link">&nbsp; > &nbsp;</p>
            <a href="">Крючки мебельные</a>
        </div>
        <br>
        <br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<section style="width: 60vw; margin-left: auto; margin-right: auto;">

    <h3 class="mb-2" align="center"><b>МЕБЕЛЬНЫЕ КРЮЧКИ</b></h3>
    <h3 align="center">НЕПРИМЕТНЫЙ, НО ОТ ЭТОГО НЕ МЕНЕЕ<br>НУЖНЫЙ ЭЛЕМЕНТ ВАШЕГО ГАРДЕРОБА</h3>
<div class="toggle">
    <div class="container">

        <img src="https://www.newfurnitura.ru/upload/site_imgs/kruchky_kollaz.jpg" alt="крючки мебельные двухрожковые трехрожковые"  class="mt-2 ml-4" style="float: right;  max-height: 380px; background: #DCDCDC; padding: 10px;  >

	<p align="justify">
        Крючки для одежды становятся незаменимым элементом интерьера.
        Популярность этой фурнитуры связана с ее несомненными преимуществами:
        <br><br>
        <ul type="square">

            <li><b>КОМПАКТНОСТЬ.</b> Крючки – подходящее решение <br>для миниатюрных помещений, так как не каждая прихожая <br>способна вместить в себя много мебели. </li><br>
            <li><b>ФУНКЦИОНАЛЬНОСТЬ.</b> Крепкие крючки с легкостью <br>выдерживают даже тяжелую верхнюю одежду.</li><br>
            <li><b>БЫСТРАЯ УСТАНОВКА.</b><br> С креплением крючков не возникнет трудностей.</li><br>
            <li><b>БОЛЬШОЙ ВЫБОР.</b> Каждый найдет  изделия, <br>которые оптимально впишутся в дизайн вашего интерьера.</li><br>
            <li><b>ДОСТУПНАЯ ЦЕНА.</b> Если вы находитесь в поисках прочных и красивых крючков, то вы сможете найти их у нас в каталоге.</li>
        </ul>
    </div>

    <br><br>
        <br>
        <h3 align="center">Технологии и Функциональность</h3>
        <br>
        <div style="display: flex; justify-content: space-around">

            <img src="https://newfurnitura.ru/upload/site_imgs/10943_600x600.jpg" alt="крючок трехрожковый черный матовый" width="" class="mt-4 mr-4" style=" max-height:  250px; border: solid 2px #DCDCDC">
            <img src="https://newfurnitura.ru/upload/site_imgs/10808_600x600.jpg" itemprop="contentUrl"
                 alt="крючок трехрожковый матовый хром" width="" class="mt-4 ml-4" style="margin: 0; max-height:  250px; border: solid 2px #DCDCDC">
        </div>
        <p style="margin: 0">Как и раньше, львиную долю из представленных на рынке крючков составляют различные вариации металлических цветов – это хром, матовый хром, золото, никель. На фото справа - наш новый крючок трехрожковый матовый хром.</p>
        <br>
        <br>
        <br>
        <div style="display: flex; justify-content: space-around">
            <img src="https://newfurnitura.ru/upload/site_imgs/7209_600x600.jpg" alt="крючок двухрожковый матовый никель" width="" class="mt-4 mr-4" style="margin:0; max-height:  250px; border: solid 2px #DCDCDC">
            <img src="https://newfurnitura.ru/upload/site_imgs/9738_600x600.jpg" alt="крючок двухрожковый матовый хром" width=""class="mt-4 mr-4" style="margin:0; max-height:  250px; border: solid 2px #DCDCDC">
            <img src="https://newfurnitura.ru/upload/site_imgs/10812_600x600.jpg" alt="крючок R15 двухрожковый матовый никель" width="" class="mt-4 ml-4" style=" margin:0; max-height: 250px; border: solid 2px #DCDCDC">
        </div>
        <p>Наш ассортимент крючков постоянно обновляется. Следите за последними новостями и поставками на нашем сайте в соответствующем разделе.</p>
</div>
    </section>
<div style="display: flex; justify-content: end; width: 70vw">
    <button type="button" class="toggle-btn" data-show="true" id="1">Читать полностью</button>
    <script>
        $( ".toggle" ).slideToggle("fast");
        $( "#1" ).click(function() {
            $( ".toggle" ).slideToggle( "slow" );
        });
        $('.toggle-btn').click(function () {
            if($(this).attr('data-show') === "true") {
                $(this).text("Свернуть");
                $(this).attr('data-show', "false");
            }
            else {
                $(this).text("Читать полностью");
                $(this).attr('data-show', "true");
            }
        });
    </script>
</div>


<div class="page-wrapper">
    <div class="catalog">
        <div class="row-h">
            <hr class="ml-4" style="height: 2px; background-color: rgb(86, 86, 86); width: 150px;">
            <h1>Крючки мебельные</h1>
            <hr class="ml-4" style="height: 2px; background-color: rgb(86, 86, 86); width: 150px;">
        </div>
        <div class="row-h1">
            <div style="width: 15vw; display: flex; justify-content: space-between">
            <p>Вид каталога:</p>
            <i class="fas fa-th" style="margin-top: auto;margin-bottom: auto"></i>
            <i class="fas fa-list" style="margin-top: auto;margin-bottom: auto; color: #00aec6"></i>
            <i class="fas fa-bars" style="margin-top: auto;margin-bottom: auto"></i>
            </div>
        </div>
        <section class="catalog-wrapper">
            <?php
            $n=1;
            for($i=0;$i<=($fin_N-$start_N);$i++)
            //for($i=0;$i<1;$i++)
            {
                echo '<div class="row">';

                echo '<div class="col">';
                echo '<img src="./kruchki-img/'.$array[$i][1].'.jpg">';
                echo '</div>';

                echo '<div class="col" style="width:60%;">';
                echo '<a class="catalog-link" href="">'.$array[$i][0].'</a>';
                echo '<p class="art">артикул: '.$array[$i][1].'</p>';
                if(($array[$i][11])!=NULL)
                    echo '<p style="margin-left: 20px;" class="description"><b>'.$array[$i][11].'</b></p>';
                if(($array[$i][8])!=NULL)
                    echo '<p style="margin-left: 20px;" class="description"> Ширина (см) - '.$array[$i][8].'</p>';
                if(($array[$i][9])!=NULL)
                    echo '<p style="margin-left: 20px;" class="description"> Глубина (см) - '.$array[$i][9].'</p>';
                if(($array[$i][10])!=NULL)
                    echo '<p style="margin-left: 20px;" class="description"> Высота (см) - '.$array[$i][10].'</p>';
                if(($array[$i][6])!=NULL)
                    echo '<p style="margin-left: 20px;" class="description"> Цвет - '.$array[$i][6].'</p>';
                if(($array[$i][7])!=NULL)
                    echo '<p style="margin-left: 20px;" class="description"> Вес брутто кг., '.$array[$i][7].'</p>';
                echo '</div>';

                echo '<div class="col"  style="min-width:150px;">';
                echo '';
                echo '<p style="white-space: pre-wrap;">';
                echo '<i class="far fa-question-circle" title="Цена мелкой опт: '.$array[$i][4].'Цена кр. опт:'.$array[$i][5].'"></i> ';
                echo $array[$i][3].' руб./шт. </p>';
                echo '<div class="input-div">';
                echo '<input type="number" value="0" class="input">';
                echo '<button class="input-btn"><i class="fas fa-shopping-cart" style="font-size: 1.4rem; color: white"></i></button>';
                echo '</div>';

                echo '</div>';

                echo '</div>';
            }
            ?>
        </section>
    </div>
</div>
</body>
</html>