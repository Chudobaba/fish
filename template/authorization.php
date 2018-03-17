<!DOCTYPE html>
<html lang="en">
<?php include "../template/head.php"?>
<body>
<div class="wrapper">
<?php include "../template/header.php"?>

<form class="form-aut autho-form">
    <h2 class="heading">Авторизація</h2>
    <label for="username">Ім’я або e-mail</label>
    <div class="input-container">
        <input class="user-name" placeholder="Ім’я або e-mail" required="" id="username" type="text" >
    </div>
    <label for="pass">E-mail</label>
    <div class="input-container">
        <input class="pass" placeholder="Пароль" required="" id="pass" type="password">
    </div>
    <div class="checkbox-container">
        <div class="check-container">
            <div class="check">
                <input id='rememberMe' name='rememberMe' type='checkbox'>
                <label class="style-checked" for="rememberMe">
                    <span class="check-label">Запам’ятати мене</span>
                </label>
            </div>
        </div>
        <a class="border" href="#">Забули пароль?</a>
    </div>
    <button type="submit">Увійти</button>
    <p class="align-center">Не зареєстровані?<a class="border" href="#"> Зареєструватися</a></p>
</form>
</div>

<?php include "../template/scripts.php" ?>
</body>
</html>
