<?
session_start();
$error = false;
if (isset($_POST['auth'])) {
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = md5($_POST['password']);
    $error = true;
}
if (isset($_GET['f']) && $_GET['f'] == 'logout') {
    unset($_SESSION['login']);
    unset($_SESSION['password']);
}
$data1 = ['admin', '202cb962ac59075b964b07152d234b70'];
$data2 = ['moderator', 'caf1a3dfb505ffed0d024130f58c5cfa'];
$admin = false;
$moder = false;
$auth = false;
$iss = isset($_SESSION['login']) && isset($_SESSION['password']);
if ($iss && $_SESSION['login'] === $data1[0] && $_SESSION['password'] === $data1[1]) {
    $auth = true;
    $error = false;
    $admin = true;
} elseif ($iss && $_SESSION['login'] === $data2[0] && $_SESSION['password'] === $data2[1]) {
    $auth = true;
    $error = false;
    $moder = true;
}
?>
<?php if ($error) { ?><p>Неверные логин и/или пароль!</p><?php } ?>
<?php if ($auth && $admin) { ?>
    <p>Здравствуйте, Администратор</p>
    <a href='lesson-7-4.php?f=logout'>Выход</a>
<?php } elseif ($auth && $moder) { ?>
    <p>Здравствуйте, Модератор</p>
    <a href='lesson-7-4.php?f=logout'>Выход</a>
<?php }
else { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-4.1.1/dist/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="w-25 align-items-center">
    <form method="post" name="auth" action="lesson-7-4.php">
        <div class="form-group col-5">
            <label for="exampleInputEmail1">Логин:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="login">
        </div>
        <div class="form-group col-5">
            <label for="exampleInputPassword1">Пароль:</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>

        <div class="form-group col-10">
            <input type="submit" class="btn btn-primary col-25" name="auth" value="Войти">
        </div>
    </form>
    <?php } ?>
</div>
</body>
</html>
