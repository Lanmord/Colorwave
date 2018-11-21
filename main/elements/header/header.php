<div class="logo_panel flex">
      <div class="logo_panel_inner">
        <div class="logo flex">
          <a href="index.php" class="img_logo"></a>
          <span>
            Диагностика, ремонт и <br>
            обслуживание техники.
          </span>
        </div>
        <div class="phone_and_btn flex">
          <div class="contact_wrap">
            <div class="contact">
              <span id="main_addres">Лобанка, 14</span>
              <span>+375 29 560 25 25 <img onselectstart="return false" onmousedown="return false" class="padding" src="img/mts.png" alt="mts" width="15px"></span>
              <span>+375 44 560 25 25 <img onselectstart="return false" onmousedown="return false" class="padding" src="img/velcom.png" alt="mts" width="16px"></span>
              <span>+375 17 343 39 62 <img onselectstart="return false" onmousedown="return false" class="padding" src="img/city.png" alt="mts" width="15px"></span>
            </div>
            <div class="contact">
              <span id="main_addres">ТЦ Глобо (ул.Уманская, 54)</span>
              <span>+375 29 77 99 710 <img onselectstart="return false" onmousedown="return false" class="padding" src="img/mts.png" alt="mts" width="15px"></span>
              <span>+375 44 77 99 710 <img onselectstart="return false" onmousedown="return false" class="padding" src="img/velcom.png" alt="mts" width="16px"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="flex">
      <div class="nav_inner flex">

        <ul class="menu flex">

          <li><a class="red_line" href="index.php">Главная</a></li>

          <li class="menu_list">
            <ul class="menu_drop">
              <li><span class="lnr lnr-chevron-right colorArrow"></span><a href="services1.php">Заправка и восстановление
                  картриджей</a></li>
              <li><span class="lnr lnr-chevron-right colorArrow"></span><a href="services12.php">Ремонт и обслуживание принтеров</a></li>
              <li><span class="lnr lnr-chevron-right colorArrow"></span><a href="services21.php">Ремонт ПК, ноутбуков, планшетов</a></li>
              <li><span class="lnr lnr-chevron-right colorArrow"></span><a href="services13.php">Стоимость диагностики</a></li>
            </ul>
            <a class="main_btn">
           
              Цены на услуги
 
            </a>
            <span class="lnr lnr-chevron-down"></span>
          </li>

          <li><a class="red_line" href="Categories.php">Продукция</a></li>
          <li><a class="red_line" href="AboutUs.php">О нас</a></li>
          <li><a class="red_line" href="art.php">Статьи</a></li>
          <li><a class="red_line" href="Contacts.php">Контакты</a></li>
          <li><a class="red_line" href="#" id="feedback">Заказать звонок</a></li>
        </ul>

      </div>
      <!-- BURGER MENU  -->
      <div class="menu-mobile">
        <ul>
          <li> <a href="index.php"> Главная</a></li>
          <li class="mob_btn sub_menu">
            <a href="#">Цены на услуги</a><span class="lnr lnr-chevron-right"></span>
          </li>
          <ul class="drop-menu">
            <li><a href="services1.php">Заправка и восстановление картриджей</a></li>
            <li><a href="services12.php">Ремонт и обслуживание принтеров</a></li>
            <li><a href="services21.php">Ремонт, ПК, ноутбуков, планшетов</a></li>
            <li><a href="services13.php">Стоимость диагноститки</a></li>
          </ul>
          <li><a href="Categories.php">Продукция</a></li>
          <li><a href="AboutUs.php">О нас</a></li>
          <li><a href="art.php">Статьи</a></li>
          <li><a href="Contacts.php">Контакты</a></li>
        </ul>
      </div>
      <div class="toggle-menu">

        <svg class="ham ham6" viewBox="0 0 100 100" width="70" onclick="this.classList.toggle('active')">
          <path class="line top" d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272" />
          <path class="line middle" d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272" />
          <path class="line bottom" d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272" />
        </svg>

      </div>

      <!-- BURGER MENU END -->
    </nav>
    <!-- МОДАЛЬНОЕ ОКНО -->
    <div id="modal-panel" class="modal">
      <div class="modal-wrap" >
        <div class="red_tape flex">
          <h2>Заказать звонок</h2>
        </div>
        <div class="modal-content">
          <span class="closeBtn lnr lnr-cross"></span>
          <span class="info-modal">Здесь вы можете нам сообщить ваши вопросы</span>
          <form class="form" id="form" name="form">
            <textarea name="text" maxlength="380" required rows="8" wrap="hard" placeholder="Здраствуйте, меня зовут..."
              name="message"></textarea>
            <input maxlength="30" type="text" name="name" required placeholder="Имя:" class="form-name">
            <div class="places">
              <input name="email" type="email" maxlength="30" required placeholder="Email:" class="form-mail" name="email">
              <input type="text" class="form-phone" placeholder="+375 (    )       -     -" required id="phone-place"
                name="phone">
            </div>
            <button class="modal_btn" type="submit">Отправить</button>
          </form>
        </div>
      </div>
    </div>

    <div class="overlay js-overlay-thank-you">
      <div class="popup js-thank-you">
        <h2>Спасибо за заявку</h2>
        <div class="close-popup js-close-thank-you"></div>
      </div>
    </div>