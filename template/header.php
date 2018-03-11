<header>
    <div class="search-form-container">
        <form action="index.php" method="post" class="search-form msearch2 wrapper-form"
              enctype="multipart/form-data">
            <input type="text" name="query" placeholder="Пошук..." value=""
                   class="ui-autocomplete-input" autocomplete="off">
            <button class="search-cross">
                <img src="../img/svg-icons/cancel.svg" alt="cancel">
            </button>
        </form>
    </div>
    <div class="registration-wrap">
        <div class="width-container">
            <div class="phone-container">
                <a class="phone" href="tel:+38 (0372) 54 27 44">
                    <img src="../img/call.png" alt="call-icon" class="phone-icon">+38 (0372) 54 27 44
                </a>
            </div>
            <div class="form-register">
                <a class="link-sign" href="#">зареЄструватися/ </a>
                <a class="link-sign" href="#">Увійти</a>
            </div>
        </div>
    </div>
    <div class="menu-container">
        <div class="logo">
            <img src="../img/Logo.png" alt="logo">
        </div>
        <div class="menu">
            <ul class="nav">
                <li class="item-menu"><a class="link-menu" href="#">продукція </a></li>
                <li class="item-menu"><a class="link-menu" href="#">про компанію</a></li>
                <li class="item-menu"><a class="link-menu" href="#">співпраця</a></li>
                <li class="item-menu"><a class="link-menu" href="#">вакансії</a></li>
                <li class="item-menu"><a class="link-menu" href="#">блог</a></li>
                <li class="item-menu"><a class="link-menu" href="#">контакти</a></li>
                <li class="item-menu"><a class="link-menu" href="#">часті питання</a></li>
            </ul>
        </div>
        <div class="toggle-menu"><span class="close"></span></div>
        <div class="search-shopping-wrap">
            <button class="show-search">
                <img class="icon" src="../img/svg-icons/search.svg" alt="search">
            </button>
            <button class="favourites-icon">
                <img class="icon" src="../img/svg-icons/favorite-heart-button.svg" alt="heart">
                <span class="count-favourites flex-container">0</span>
            </button>
            <button class="shopping-icon">
                <img class="icon" src="../img/svg-icons/shopping-store-cart-.svg" alt="">
                <span class="count-orders flex-container">2</span>
            </button>
        </div>
        <select title="change-lang" name="change-lan" class="language-switcher">
            <option value="uk">УКР</option>
            <option value="rus">РОС</option>
        </select>
    </div>
</header>