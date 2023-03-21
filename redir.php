<?php
if(isset($_GET['lnk']) and file_exists("links/".bin2hex(hex2bin(str_replace("/","",$_GET['lnk'])))) and is_dir("links/".bin2hex(hex2bin(str_replace("/","",$_GET['lnk']))))==false){
    header("Location: ".file_get_contents("links/".bin2hex(hex2bin(str_replace("/","",$_GET['lnk'])))));
    exit();
}
if($_GET['lnk']!=='/'):
?>

<html>
    <head>
        <title> Страница не найдена </title>
        <meta charset="utf8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <div class="container-fluid text-center mt-3">
            <h1>Ссылка не найдена</h1>
            <h3>Вот возможные для этого причины:</h3>
            <div>
                <li>Ссылка удалена (самое вероятное)</li>
                <li>Ссылка существует, но запрещена к чтению</li>
                <li>Ошибка сервера</li>
                <hr>
                <b><p>Если это происходит не в первый раз, пожалуйста сообщите об этом по <a href="mailto:admin@mrcheat.org">E-mail</a></p></b>
                <i>Приносим свои извинения, <a href="/">А.pw</a>.</i>
            </div>
        </div>
    </body>
</html>
<?php 

else:
?>

<html>
    <head>
        <title> А.pw - Сервис сокращения ссылок </title>
        <meta charset="utf8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <div class="container-fluid text-center mt-3">
            <h1>Сокращаем ваши ссылки до пары символов</h1>
            <h3>Сервис сокращения ссылок А.pw</h3>
            <b>Уже сокращено: <?php echo strval(count(scandir("links"))); ?> ссылок</b>
            <br>
            <hr>
            <i>Сокращатель ссылок <a href="/">А.pw</a>.</i>
            <br><br>
            <p><a href="https://mrcheat.org/dmca.html">Вопрос по DMCA?</a><br>
            <a href="mailto:admin@mrcheat.org">E-mail</a> для правовых вопросов</p>
        </div>
    </body>
</html>

<?php
endif;
?>
