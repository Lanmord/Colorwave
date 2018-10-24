<div class="wrapper">
    <div class="menu-left-mobile">
    <div class="menu-left-mob-btn"></div>
      <div class="menu-left-mob">
        <a href="#"> <img src="img/logo_horizontal.png" alt="logo"></a>
          <li><span class="first_sub">
            Заправка и восстановление картриджей 
            <i class="lnr lnr-chevron-right first_arrow"></i>
          </span>
            <ul class="first_ul">
             <li><a href="services2.php">Заправка картриджей HP</a></li>
             <li><a href="">Заправка картриджей Canon</a></li>
             <li><a href="">Заправка картриджей Samsung</a></li>
             <li><a href="">Заправка картриджей Xerox</a></li>
             <li><a href="">Заправка картриджей Brother</a></li>
             <li><a href="">Заправка картриджей Panasonic</a></li>
             <li><a href="">Заправка картриджей Pantum</a></li>
             <li><a href="">Заправка лазерных картриджей</a></li>
             <li><a href="">Заправка струйных картриджей</a></li>
             <li><a href="">Восстановление и ремонт картриджей</a></li>
            </ul>
          </li>
            <li><a href="#">Ремонт и обслуживание принтеров</a></li>
          </li>
          <li>
            <span class="second_sub">
            Ремонт ПК, ноутбуков и планшетов
            <i class="lnr lnr-chevron-right second_arrow"></i>
          </span>
            <ul class="second_ul">
                <li><a href="">Цена на ремонт техники</a></li>
                <li><a href="">Ремонт ноутбуков</a></li>
                <li><a href="">Ремонт ПК</a></li>
            </ul>
          </li>
          <li><a href="#" class="borderbotom">Стоимость диагностики</a></li>
        </div>
      </div>
  <div class="menu-left-wrapper">
    <div class="menu-left">
      <li><span class="first_sub">
        Заправка и восстановление картриджей 
        <i class="lnr lnr-chevron-right first_arrow"></i>
      </span>
        <ul class="first_ul">
         <li><a href="services2.php">Заправка картриджей HP</a></li>
         <li><a href="">Заправка картриджей Canon</a></li>
         <li><a href="">Заправка картриджей Samsung</a></li>
         <li><a href="">Заправка картриджей Xerox</a></li>
         <li><a href="">Заправка картриджей Brother</a></li>
         <li><a href="">Заправка картриджей Panasonic</a></li>
         <li><a href="">Заправка картриджей Pantum</a></li>
         <li><a href="">Заправка лазерных картриджей</a></li>
         <li><a href="">Заправка струйных картриджей</a></li>
         <li><a href="">Восстановление и ремонт картриджей</a></li>
        </ul>
      </li>
        <li><a href="#">Ремонт и обслуживание принтеров</a></li>
      </li>
      <li>
        <span class="second_sub">
        Ремонт ПК, ноутбуков и планшетов
        <i class="lnr lnr-chevron-right second_arrow"></i>
      </span>
        <ul class="second_ul">
            <li><a href="">Цена на ремонт техники</a></li>
            <li><a href="">Ремонт ноутбуков</a></li>
            <li><a href="">Ремонт ПК</a></li>
        </ul>
      </li>
      <li><a href="#" class="borderbotom">Стоимость диагностики</a></li>
    </div>
    
  </div>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>
   $(document).ready(function() {
	 $(".menu-left ul").hide();
	 $(".menu-left li span").click(function() {
			 $(".menu-left ul:visible").slideUp("normal");
			 if (($(this).next().is("ul")) && (!$(this).next().is(":visible"))) {
					 $(this).next().slideDown("normal");
			 }
	 });
	 });

		$(document).ready(function() {
	 $(".menu-left-mob ul").hide();
	 $(".menu-left-mob li span").click(function() {
			 $(".menu-left-mob ul:visible").slideUp("normal");
			 if (($(this).next().is("ul")) && (!$(this).next().is(":visible"))) {
					 $(this).next().slideDown("normal");
			 }
	 });
   });
   
  </script>