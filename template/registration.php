<!DOCTYPE html>
<html lang="en">
<?php include "../template/head.php"?>
<body>
<?php include "../template/header.php"?>

<form class="form-aut reg-form">
    <h2>реєстрація</h2>
    <label for="username">Ім’я</label>
    <div class="input-container">
        <input class="user-name" placeholder="Ім’я або e-mail" required="" id="username" type="text" >
    </div>
    <label for="email">E-mail</label>
    <div class="input-container">
        <input class="mail" placeholder="E-mail" required="" id="email" type="email">
    </div>
    <label for="number">Номер телефону</label>
    <div class="input-container">
        <input class="tel" placeholder="+380509494497" required="" id="number" type="tel">
    </div>
    <label for="password">Пароль</label>
    <div class="input-container">
        <input class="pass" placeholder="Пароль" required="" id="password" type="password">
    </div>
    <label for="password">Підтвердити пароль</label>
    <div class="input-container">
        <input class="pass" placeholder="Пароль" required="" id="password" type="password">
    </div>
<!--    <input class="button" value="ЗАреєструватися" type="submit">-->
    <button type="submit">ЗАреєструватися</button>
    <p class="align-center">Вже маєте обліковий запис?<a class="border" href="#">Увійти</a></p>
</form>
<div class="background-pic"></div>


<script src="../js/custom.js"></script>
</body>
</html>

