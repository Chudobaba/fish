<!DOCTYPE html>
<html lang="en">
<?php include "../template/head.php"?>
<body>
<div class="wrapper">
    <?php include "../template/header.php"?>

    <form id="registrationFoDelivery" class="step-form form-aut" action="#">
        <h2 class="title-form">Оформлення замовлення</h2>
        <div>
            <h3>Доставка</h3>
            <section class="one-step">
                <div class="item">
                    <label for="username">Ім’я</label>
                    <div class="input-container">
                        <input class="user-name" autocomplete="off" placeholder="Ім’я або e-mail" required="" id="username" type="text" >
                    </div>
                </div>
                <div class="item">
                    <label for="email">E-mail</label>
                    <div class="input-container">
                        <input class="mail" autocomplete="off" placeholder="E-mail" id="email" type="email">
                    </div>
                </div>
                <div class="item">
                    <label for="number">Номер телефону</label>
                    <div class="input-container">
                        <input class="tel" autocomplete="off" placeholder="+380509494497" required="" id="number" type="tel">
                    </div>
                </div>
                <div class="item">
                    <label for="number">Місто</label>
                    <div class="input-container">
                        <input class="tel" autocomplete="off" placeholder="Чернівці" required id="city" type="text">
                    </div>
                </div>
                <h3 class="title-step">Доставка</h3>
                <div class="radio-container">
                    <div class="radio">
                        <input name="delivery" checked class="radio-input required" id="delivery" required type="radio">
                        <label for="delivery" class="custom-style-radio">
                            <span class="label-text">Адресна доставка по всій території України</span>
                        </label>
                    </div>
                    <div class="radio">
                        <input name="delivery" class="radio-input required" id="driveway" required type="radio">
                        <label for="driveway" class="custom-style-radio">
                            <span class="label-text">Самовивіз</span>
                        </label>
                    </div>
                </div>
            </section>
            <h3>Підтвердження</h3>
            <section class="delivery-and-total-order">
                <div class="total-order">
                    <h2 class="title-section">Сумарне замовлення</h2>
                    <table class="tablet">
                        <thead>
                        <tr>
                            <th>Продукт</th>
                            <th>Кількість</th>
                            <th class="align-center">Ціна</th>
                        </tr>
                        </thead>
                        <tr>
                            <td>
                                <h4 class="title-product">Скумбрія середньосолена без голови патрана кг</h4>
                            </td>
                            <td>
                                <p class="amount">2</p>
                            </td>
                            <td>
                                <p class="price">300 грн</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="title-product">Кілька в гострій заливці з часником та зеленню</h4>
                            </td>
                            <td>
                                <p class="amount">2</p>
                            </td>
                            <td>
                                <p class="price">300 грн</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="title-product">Скумбрія середньосолена без голови патрана кг</h4>
                            </td>
                            <td>
                                <p class="amount">2</p>
                            </td>
                            <td>
                                <p class="price">300 грн</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="delivery">
                    <h2 class="title-section">Доставка</h2>
                </div>
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
                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                <label for="acceptTerms">I agree with the Terms and Conditions.</label>
            </section>
        </div>
    </form>

    <img src="../img/star-img.png" alt="star" class="star-img">
</div>

<?php include "../template/scripts.php"?>
</body>
</html>