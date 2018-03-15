<!DOCTYPE html>
<html lang="en">
<?php include "../template/head.php" ?>
<body>
<div class="wrapper">
<?php include "../template/header.php" ?>
    <div id="example-vertical" class="cabinet-steps">
        <h3 class="hidden">Особисті дані</h3>
        <section class="first-cabinet-step">
            <div class="item-container">
            <div class="item">
                <label class="label-width" for="username">Ім’я:</label>
                <div class="input-container label-width edit">
                    <input readonly class="border-bottom user-name" autocomplete="off" placeholder="Ім’я або e-mail" required=""
                           id="username" type="text">
                    <button class="edit-button edit-user"><img src="../img/edition.png" alt="edit"></button>
                </div>
            </div>
            <div class="item">
                <label class="label-width" for="email">Електронна пошта:</label>
                <div class="input-container label-width edit">
                    <input readonly class="border-bottom mail" autocomplete="off" placeholder="E-mail" id="email" type="email">
                     <button class="edit-button edit-email"><img src="../img/edition.png" alt="edit"></button>
                </div>
            </div>
            <div class="item">
                <label class="label-width"  for="delivery-address">Адреса для доставок:</label>
                <div class="input-container label-width edit">
                    <input readonly class="border-bottom address" autocomplete="off" placeholder="Чернівці, Чернівецька обл." required="" id="delivery-address"
                           type="text">
                     <button class="edit-button edit-user"><img src="../img/edition.png" alt="edit"></button>
                </div>
            </div>
            <div class="item">
                <label class="label-width" for="number">Телефон:</label>
                <div class="input-container label-width edit">
                    <input readonly="readonly" class="border-bottom tel" autocomplete="off" placeholder="+380509494497" required="" id="number"
                           type="tel">
                     <button class="edit-button edit-tel"><img src="../img/edition.png" alt="edit"></button>
                </div>
            </div>
            <div class="item">
                <label class="label-width" for="birth-date">Дата народження:</label>
                <div class="input-container label-width edit">
                    <input readonly class="border-bottom birthday" autocomplete="off" placeholder="" required="" id="birth-date"
                           type="date">
                     <button class="edit-button edit-birthday"><img src="../img/edition.png" alt="edit"></button>
                </div>
            </div>

    </div>
        </section>
        <h3 class="hidden">Історія замовлень</h3>
        <section class="delivery-history">
            <table class="tablet-delivery-history">
                <tr>
                    <th class="title-table align-left product">Продукт</th>
                    <th class="title-table align-center">Ціна</th>
                    <th class="title-table">Дата замовлення </th>
                    <th class="title-table align-center">Статус</th>
                </tr>
                <tr>
                    <td>
                        <h4 class="title-product">Скумбрія середньосолена без голови патрана кг</h4>
                    </td>
                    <td>
                        <p class="align-center price">300 грн</p>
                    </td>
                    <td>
                        <p class="align-center order-date">14.02.18</p>
                    </td>
                    <td>
                        <div class="align-center status active"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="title-product">Скумбрія середньосолена без голови патрана кг</h4>
                    </td>
                    <td>
                        <p class="align-center price">300 грн</p>
                    </td>
                    <td>
                        <p class="align-center order-date">14.02.18</p>
                    </td>
                    <td>
                        <div class="align-center status"></div>
                    </td>
                </tr>
            </table>

        </section>
        <h3 class="hidden">Вийти</h3>
        <section>
            <p>The next and previous buttons help you to navigate through your content.</p>
        </section>
    </div>
</div>


<?php include "../template/scripts.php" ?>
</body>
</html>
