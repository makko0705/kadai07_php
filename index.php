<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=”icon” type=”image/png” href=“/img/favicon.png”>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <title>Noroke maker</title>
</head>
<body>
<div id="phone">
    <div id="screen" class="" style="padding: 34px 12px 24px 24px;">
        <h1 class="logo"><img src="img/logo.png" alt=""></h1>
        <div class="scroll_bar">
            <div id="output">
                <form action="write.php" method="post">
                    <span class="q">パートナーの名前</span>
                    <input class="a" type="text" name="name"><br>
                    <span class="q">一番の思い出は?</span>
                    <textarea class="a" name="omoide" cols="30" rows="4"></textarea>

                    <br>
                    <span class="q">好きなところは?</span>
                    <textarea class="a" name="sukinatokoro" cols="30" rows="4"></textarea>
                    <span class="q">おのろけエピソード</span>
                    <textarea class="a" name="episode" cols="30" rows="5"></textarea>
                    <button class="btn_submit" type="submit">送信する</button>
                </form>
            </div>             
        </div>
    </div>
</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>   
</body>
</html>