<!DOCTYPE html>
<html lang="en">
<?php include "../template/head.php"?>
<body>
<?php include "../template/header.php"?>

<form id="registrationFoDelivery" class="step-form form-aut" action="#">
    <h2 class="title-form">Оформлення замовлення</h2>
    <div>
        <h3>Доставка</h3>
        <section class="one-step">
            <div class="item">
                <label for="username">Ім’я</label>
                <div class="input-container">
                    <input class="user-name" placeholder="Ім’я або e-mail" required="" id="username" type="text" >
                </div>
            </div>
            <div class="item">
                <label for="email">E-mail</label>
                <div class="input-container">
                    <input class="mail" placeholder="E-mail" id="email" type="email">
                </div>
            </div>
            <div class="item">
                <label for="number">Номер телефону</label>
                <div class="input-container">
                    <input class="tel" placeholder="+380509494497" required="" id="number" type="tel">
                </div>
            </div>
            <div class="item">
                <label for="number">Місто</label>
                <div class="input-container">
                    <input class="tel" placeholder="Чернівці" required id="city" type="text">
                </div>
            </div>

            <h3 class="title-step">Доставка</h3>

            <div class="radio-container">
                <div class="radio">
                    <input name="delivery" checked class="radio-input" id="delivery" type="radio">
                    <label for="delivery" class="custom-style-radio">
                        <span class="label-text">Адресна доставка по всій території України</span>
                    </label>
                </div>
                <div class="radio">
                    <input name="delivery" class="radio-input" id="driveway" type="radio">
                    <label for="driveway" class="custom-style-radio">
                        <span class="label-text">Самовивіз</span>
                    </label>
                </div>
            </div>
        </section>
        <h3>Підтвердження</h3>
        <section>
            <label for="name">First name *</label>
            <input id="name" name="name" type="text" class="required">
            <label for="surname">Last name *</label>
            <input id="surname" name="surname" type="text" class="required">
            <label for="email">Email *</label>
            <input id="email" name="email" type="text" class="required email">
            <label for="address">Address</label>
            <input id="address" name="address" type="text">
            <p>(*) Mandatory</p>
        </section>
        <h3>Оплата</h3>
        <section>
            <ul>
                <li>Foo</li>
                <li>Bar</li>
                <li>Foobar</li>
            </ul>
        </section>
        <h3>Завершення</h3>
        <section>
            <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
        </section>
    </div>
</form>

<?php include "../template/scripts.php"?>
</body>
</html>