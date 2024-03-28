<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Noroke maker</title>
</head>
<body>
<div id="phone">
    <div id="screen" class="">
    <h1 class="logo"><img src="img/logo.png" alt=""></h1>
        <div class="slide">
            <?php
                $f = fopen("data.csv", "r");
                //まずは... whileの中で4件でてる状態にする
                //オブジェクトの配列の作り方 htmlとjsでphpの変数の出力の仕方
                //echoを変数に変える タグをいれるための変数を作ってwhile文をまわして終わってから作った変数をhtml出力をする
                while($line = fgetcsv($f)){
                    print '<div class="man">'; //echoとprint_rは使い方が違う var_dumpとおんなじような使い方 確認するためのやつ
                    echo '<h1 class="name"><span>';
                    print_r($line[0]);
                    echo '</span></h1>';
                    echo '<div class="omoide baloon">';
                    echo '<h2>一番の思い出は?</h2>';
                    echo '<div class="text">';
                    print_r($line[1]);
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="sukinatokoro baloon">';
                    echo '<h2>好きなところは?</h2>';
                    echo '<div class="text">';
                    print_r($line[2]);
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="episode baloon">';
                    echo '<h2>おのろけエピソード</h2>';
                    echo '<div class="text">';
                    print_r($line[3]);
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                // echo $aryCsv;
            ?>
        </div>
    </div>
</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(document).ready(function(){
  $('.slide').slick();
  $(".slick-arrow").text("")

});
</script>
</body>
</html>
