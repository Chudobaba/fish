<!DOCTYPE html>
<html lang="en">
<?php include "../template/head.php" ?>
<body>
<div class="wrapper">
<?php include "../template/header.php" ?>
    <div id="example-vertical" class="cabinet-steps">
        <h2 class="title-form">Мій кабінет</h2>
        <h3>Особисті дані</h3>
        <section class="first-cabinet-step">
            <div class="item">
                <label for="username">Ім’я</label>
                <div class="input-container">
                    <span class="value-input value-user-name"></span>
                    <input class="user-name" autocomplete="off" placeholder="Ім’я або e-mail" required=""
                           id="username" type="text">
                </div>
            </div>
            <div class="item">
                <label for="email">Електронна пошта:</label>
                <div class="input-container">
                    <input class="mail" autocomplete="off" placeholder="E-mail" id="email" type="email">
                </div>
            </div>
            <div class="item">
                <label for="delivery-address">Адреса для доставок:</label>
                <div class="input-container">
                    <input class="address" autocomplete="off" placeholder="" required="" id="delivery-address"
                           type="text">
                </div>
            </div>
            <div class="item">
                <label for="number">Телефон:</label>
                <div class="input-container">
                    <input class="tel" autocomplete="off" placeholder="+380509494497" required="" id="number"
                           type="tel">
                </div>
            </div>
            <div class="item">
                <label for="birth-date">Дата народження:</label>
                <div class="input-container">
                    <input class="birthday" autocomplete="off" placeholder="" required="" id="birth-date"
                           type="date">
                </div>
            </div>
        </section>
        <h3>Історія замовлень</h3>
        <section class="delivery-history">
            <table class="tablet tablet-delivery-history">
                <tr>
                    <th>Продукт</th>
                    <th class="align-center">Ціна</th>
                    <th>Дата замовлення </th>
                    <th class="align-right">Статус</th>
                    <th></th>
                </tr>
                <tr>
                    <td>
                        <h4 class="title-product">Скумбрія середньосолена без голови патрана кг</h4>
                    </td>
                    <td>
                        <p class="price">300 грн</p>
                    </td>
                    <td>
                        <div class="order-date">

                        </div>
                    </td>
                    <td>
                        <div class="status">

                        </div>
                    </td>
                </tr>
            </table>

        </section>
        <h3>Вийти</h3>
        <section>
            <p>The next and previous buttons help you to navigate through your content.</p>
        </section>
    </div>



<?php include "../template/scripts.php" ?>
</body>
</html>
