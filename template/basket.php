<!doctype html>
<html lang="en">
<?php include "../template/head.php"?>
<body>
<div class="wrapper">
    <?php include "../template/header.php"?>
    <div class="basket">
        <div class="horizontal-scroll">
            <h2 class="title-basket">корзина</h2>
            <table class="tablet">
                <tr>
                    <th>Продукт</th>
                    <th class="align-center">Ціна</th>
                    <th>Кількість</th>
                    <th class="align-right">Загальна вартість</th>
                    <th></th>
                </tr>
                <tr>
                    <td>
                        <h4 class="title-product">Скумбрія середньосолена без голови патрана кг</h4>
                        <h6 class="sub-title-product">Риба соленого та пряного посолу</h6>
                    </td>
                    <td>
                        <p class="price">300 грн</p>
                    </td>
                    <td>
                        <div class="count-product-container">
                            <button class="minus"><img src="../img/minus.png" alt="minus"></button>
                            <input placeholder="0" class="count-product" value="0">
                            <button class="plus"><img src="../img/plus.png" alt="plus"></button>
                        </div>
                    </td>
                    <td class="align-right">
                        <h4 class="all-price">600 грн</h4>
                    </td>
                    <td class="align-right">
                        <button class="delete">
                            <img src="../img/delete.png" alt="delete">
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="title-product">Скумбрія середньосолена без голови патрана кг</h4>
                        <h6 class="sub-title-product">Риба соленого та пряного посолу</h6>
                    </td>
                    <td>
                        <p class="price">300 грн</p>
                    </td>
                    <td>
                        <div class="count-product-container">
                            <button class="minus"><img src="../img/minus.png" alt="minus"></button>
                            <input placeholder="0" class="count-product" value="0">
                            <button class="plus"><img src="../img/plus.png" alt="plus"></button>
                        </div>
                    </td>
                    <td class="align-right">
                        <h4 class="all-price">600 грн</h4>
                    </td>
                    <td class="align-right">
                        <button class="delete">
                            <img src="../img/delete.png" alt="delete">
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="title-product">Скумбрія середньосолена без голови патрана кг</h4>
                        <h6 class="sub-title-product">Риба соленого та пряного посолу</h6>
                    </td>
                    <td>
                        <p class="price">300 грн</p>
                    </td>
                    <td>
                        <div class="count-product-container">
                            <button class="minus"><img src="../img/minus.png" alt="minus"></button>
                            <input placeholder="0" class="count-product" value="0">
                            <button class="plus"><img src="../img/plus.png" alt="plus"></button>
                        </div>
                    </td>
                    <td class="align-right">
                        <h4 class="all-price">600 грн</h4>
                    </td>
                    <td class="align-right">
                        <button class="delete">
                            <img src="../img/delete.png" alt="delete">
                        </button>
                    </td>
                </tr>
            </table>
            <div class="align-right price-and-order">
                <div>
                    <span class="all-price-all-product">Загальна сума:</span><span class="price"> 970 грн</span>
                </div>
                <div>
                    <button class="to-order">Оформити замолення</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "../template/scripts.php"?>
</body>
</html>