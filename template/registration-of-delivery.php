<!DOCTYPE html>
<html lang="en">
<?php include "../template/head.php" ?>
<body>
<div class="wrapper">
    <?php include "../template/header.php" ?>

    <form id="registrationFoDelivery" class="step-form form-aut" action="#">
        <h2 class="title-form">Оформлення замовлення</h2>
        <div>
            <h3>Доставка</h3>
            <section class="one-step">
                <div class="item">
                    <label for="username">Ім’я</label>
                    <div class="input-container">
                        <input class="user-name" autocomplete="off" placeholder="Ім’я або e-mail" required=""
                               id="username" type="text">
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
                        <input class="tel" autocomplete="off" placeholder="+380509494497" required="" id="number"
                               type="tel">
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
                            <th class="title-table">Продукт</th>
                            <th class="title-table">Кількість</th>
                            <th  class="title-table">Ціна</th>
                        </tr>
                        </thead>
                        <tr>
                            <td>
                                <h4 class="title-product">Скумбрія середньосолена без голови патрана</h4>
                            </td>
                            <td>
                                <p class="amount">2</p>
                            </td>
                            <td>
                                <p class="price">600</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="title-product">Кілька в гострій заливці з часником та зеленню</h4>
                            </td>
                            <td>
                                <p class="amount">1</p>
                            </td>
                            <td>
                                <p class="price">170</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="title-product">Сьомга холодного копчення, філе</h4>
                            </td>
                            <td>
                                <p class="amount">1</p>
                            </td>
                            <td>
                                <p class="price">200</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="delivery">
                    <h2 class="title-section">Доставка</h2>
                    <table class="tablet-delivery tablet">
                        <tr>
                            <th class="title-table">Адреса</th>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="title-product">м. Чернівці, вул. Руська 205В, 2 пов.</h4>
                            </td>
                        </tr>
                        <tr>
                            <th class="title-table">Спосіб доставки</th>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="title-product">Доставка за адресою по всій
                                    території України</h4>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="sum">
                    <div class="max-width">
                        <h4 class="title-table">СУМА:</h4>
                        <h4 class="title-product">900 грн</h4>
                    </div>
                </div>
            </section>

            <h3>Оплата</h3>
            <section class="payment">
                <div class="payment-container">
                    <div class="pay-item">
                        <div class="img-container">
                            <img src="../img/liqpay-log.png" alt="liqpay">
                        </div>
                        <div class="radio">
                            <input name="delivery" class="radio-input required" id="driveway" required type="radio">
                            <label for="driveway" class="custom-style-radio">
                                <span class="label-text">Оплата через Приват 24 - Liqpay</span>
                            </label>
                        </div>
                    </div>
                    <div class="pay-item">
                        <div class="radio">
                            <input name="delivery" class="radio-input required" checked="checked" id="driveway2" required type="radio">
                            <label for="driveway2" class="custom-style-radio">
                                <span class="label-text">Оплата наложенным платежом</span>
                            </label>
                        </div>
                    </div>
                </div>
            </section>
            <h3>Завершення</h3>
            <section class="confirm">
<!--                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">-->
<!--                <label for="acceptTerms">I agree with the Terms and Conditions.</label>-->
                <div class="confirm-item">
                    <div class="img-container">
                        <img src="../img/fish.png" alt="fish">
                    </div>
                    <div class="confirm-description">
                        <h2>Дякуємо за замовлення!</h2>
                        <p>Незабаром наш менеджер зв’яжеться з Вами.</p>
                           <p>Також ми вислали лист з деталями на Вашу електронну пошту.</p>
                    </div>
                </div>
            </section>
        </div>
    </form>

    <img src="../img/star-img.png" alt="star" class="star-img">
</div>

<?php include "../template/scripts.php" ?>
</body>
</html>