<!DOCTYPE html>
<html lang="en">
<?php include "../template/head.php"?>
<body>
<?php include "../template/header.php"?>

<form class="form-aut">
    <h2>Авторизація</h2>
    <label for="username">Ім’я або e-mail</label>
    <div class="input-container">
        <input class="user-name" placeholder="Ім’я або e-mail" required="" id="username" type="text" >
    </div>
    <label for="password">E-mail</label>
    <div class="input-container">
        <input class="pass" placeholder="Пароль" required="" id="password" type="password">
    </div>
    <input id='rememberMe' name='rememberMe' type='checkbox'> <label>Запам’ятати мене</label>
    <a href="#">Забули пароль?</a>
<!--    <input class="button" value="Увійти" type="submit">-->
    <button type="submit">Увійти</button>
    <p>Не зареєстровані?<a href="#"> Зареєструватися</a></p>
</form>

<script src="../js/custom.js"></script>
</body>
</html>
