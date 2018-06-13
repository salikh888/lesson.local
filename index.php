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
$login = 'admin';
$password = '202cb962ac59075b964b07152d234b70';
$login2 = 'moderator';
$password2 = 'caf1a3dfb505ffed0d024130f58c5cfa';

$auth = false;
$iss = isset($_SESSION['login']) && isset($_SESSION['password']);
if ($iss && $_SESSION['login'] === $login && $_SESSION['password'] === $password) {
    $auth = true;
    $error = false;
}
?>
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
<form method="post" name="auth" action="index.php">
    <div class="form-group col-10">
        <label for="exampleInputEmail1">Логин:</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="login">
    </div>
    <div class="form-group col-10">
        <label for="exampleInputPassword1">Пароль:</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <input type="submit" class="btn btn-primary col-10" name="auth" value="Войти">
</form>


</body>
</html>