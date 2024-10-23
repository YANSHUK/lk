<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/vars.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Формы регистрации и авторизации</title>
</head>
<body>

<section class="form">
    <div class="container">
        <div id="registration-form" class="form-wrap">
            <form name="registration-form" action="" method="POST" class="registration-form" novalidate="novalidate">
                <h2 class="form-title">Регистрация</h2>

                <div class="input-wrap">
                    <label class="label-form">Имя пользователя</label>
                    <input type="text" name="your-name" value="" class="input-form" placeholder="Имя пользователя">
                </div>

                <div class="input-wrap">
                    <label class="label-form">Электронная почта</label>
                    <input type="email" name="your-email" value="" class="input-form" placeholder="Электронная почта"
                           required>
                </div>

                <div class="input-wrap">
                    <label class="label-form">Пароль</label>
                    <input type="password" name="your-password" value="" class="input-form" placeholder="Пароль"
                           required>
                </div>

                <button class="btn btn-submit" data-action="register">Зарегистрироваться</button>
                <div class="form-toggle">Уже есть аккаунт? <a id="login" href="">Войти</a></div>
            </form>
        </div>


        <div id="login-form" class="form-wrap" style="display: none;">
            <form name="login-form" action="" method="POST" class="login-form" novalidate="novalidate">
                <h2 class="form-title">Вход</h2>

                <div class="input-wrap">
                    <label class="label-form">Электронная почта</label>
                    <input type="email" name="login-email" value="" class="input-form" placeholder="Электронная почта"
                           required>
                </div>

                <div class="input-wrap">
                    <label class="label-form">Пароль</label>
                    <input type="password" name="login-password" value="" class="input-form" placeholder="Пароль"
                           required>
                </div>

                <button class="btn btn-submit" data-action="login">Войти</button>
                <div class="form-toggle">Нет аккаунта? <a id="registration" href="">Зарегистрироваться</a></div>
            </form>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>