<?php
session_start();

/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.07.2018
 * Time: 10:02
 */

require_once 'kapchaimagemaker.php';
$kapcha = false;
$kapchaArr = null;
$arraydata = kapchaimagemaker();
ob_start();
imagePng($arraydata['image']);
$image = ob_get_contents();
ob_end_clean();

if (empty($_SESSION['textarr'])) {
    $_SESSION['textarr'] = $arraydata['array'];
}
$kapchaArr = $_POST['kapcha'] ?? false;
$kapchaArray = str_split($kapchaArr);

if (isset($_POST['submit']) && empty($_POST['kapcha']) || $kapchaArray != $_SESSION['textarr']) {

    $_SESSION['textarr'] = $arraydata['array'];
}

if (isset($_POST['submit'])) {

    if ($kapchaArray == $_SESSION['textarr']) {
        $kapcha = true;
    }

}

?>
<?php if ($kapcha) : ?>
    <?php unset($_SESSION['textarr']); ?>
    <div class="col-12 d-flex justify-content-center">
        <div class="form-group form-inline">
            <p>Вы не робот</p>
            <a href='index.php?f=logout'>Назад</a>
        </div>
    </div>
<?php else : ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="/bootstrap-4.1.1/dist/css/bootstrap.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <div class="container h-100">
        <div class="row justify-content-center">
            <div class="col-4">
                <form class="form-control-range row align-items-center d-flex" style="height: 600px" method="post"
                      action="index.php">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <p>Введите код с картинки</p>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <?= '<img src="data:image/png;base64,' . base64_encode($image) . '" />' ?>
                        </div>
                        <div class="col-12 p-2 d-flex justify-content-center">
                            <div class="form-group form-inline">
                                <input class="form-control" style="width: 100px" maxlength="4" type="text"
                                       name="kapcha">
                                <button class="btn btn-secondary" name="submit">Отправить</button>
                            </div>
                        </div>
                        <div class="col-12 p-2 d-flex justify-content-center">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
    </html>
<?php endif; ?>