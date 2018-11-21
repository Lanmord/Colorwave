<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="elements/header/header.css">
  <link rel="stylesheet" href="elements/footer/footer.css">
  <link rel="stylesheet" href="elements/left-menu/left-menu.css">
  <link rel="stylesheet" href="css/contacts.css">
</head>
<body>

<?php include('elements/header/header.php');?>

  
 <div class="wrapper">
   
   
      <h2>Контакты</h2>
    <div class="line_black"></div>
    <div class="item_of_contact">
      <div  id="first_cont_info" class="contacts_info">
        <span><span style="color:rgb(238, 34, 29);" > Адрес:</span>&nbsp;&nbsp;Лобанка, 14 (пом. 9-Н)</span>
        <span style="margin-top: 10px !important; display:inline-block;" ><span style="color:rgb(238, 34, 29);" > E-mail:</span>&nbsp;&nbsp;Example@yandex.by</span>
        <span style="color:rgb(238, 34, 29); margin-top: 10px !important; display:inline-block;" >Телефоны:</span>
        <span>+375 29 560 25 25 <img onselectstart="return false" onmousedown="return false"  style="margin-left:5px;"src="img/mts.png" alt="mts" width="15px"></span> 
        <span>+375 44 560 25 25 <img onselectstart="return false" onmousedown="return false"  style="margin-left:5px;"src="img/velcom.png" alt="velcom" width="15px"></span> 
        <span>+375 17 343 39 62 <img onselectstart="return false" onmousedown="return false"  style="margin-left:5px;"src="img/city.png" alt="city" width="15px"></span> 
        <span style="color:rgb(238, 34, 29); margin-top: 10px !important; display:inline-block;" >Время работы:</span>
        <span>ПН - ПТ : с 09.00 до 19.00</span> 
        <span>СБ : с 11.00 до 17.00</span> 
        <span>ВС : выходной</span> 
        
      </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2350.518915146017!2d27.433673808202695!3d53.90475426618466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd5a29f3b06c7e8cf!2z0JfQsNC_0YDQsNCy0LrQsCDQutCw0YDRgtGA0LjQtNC20LXQuS4g0KDQtdC80L7QvdGCINC60L7QvNC_0YzRjtGC0LXRgNC-0LIsINC90L7Rg9GC0LHRg9C60L7Qsi4gQ29sb3IgV2F2ZQ!5e0!3m2!1sen!2sby!4v1542747042531"  frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <span class="span_info">
      Мы находимся в 150 метрах от станции метро Каменная Горка
      </span>
      <img src="img/map2.jpg" alt="Адрес Колор Вэйв">
      <div class="line_black"></div>
      <div class="item_of_contact">
      <div id="second_cont_info" class="contacts_info">
        <span><span style="color:rgb(238, 34, 29);" > Адрес:</span>&nbsp;&nbsp;ТЦ Глобо (ул.Уманская, 54) </span>
        <span style="margin-top: 10px !important; display:inline-block;" ><span style="color:rgb(238, 34, 29);" > E-mail:</span>&nbsp;&nbsp;Example@yandex.by</span>
        <span style="color:rgb(238, 34, 29); margin-top: 10px !important; display:inline-block;" >Телефоны:</span>
        <span>+375 44 77 99 710 <img onselectstart="return false" onmousedown="return false"  style="margin-left:5px;"src="img/mts.png" alt="mts" width="15px"></span> 
        <span>+375 29 77 99 710 <img onselectstart="return false" onmousedown="return false"  style="margin-left:5px;"src="img/velcom.png" alt="velcom" width="15px"></span> 
        
        <span style="color:rgb(238, 34, 29); margin-top: 10px !important; display:inline-block;" >Время работы:</span>
        <span>ПН - ПТ : с 11.00 до 18.00</span> 
        <span>СБ - ВС : выходной</span> 
        
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2352.1837600808153!2d27.497865!3d53.875161!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbedc814f7069fb9!2sZapravka+Kartridzhey+Remont+Printerov%2C+Komp&#39;yuterov%2C+Noutbukov%2C+Planshetov+.+Ooo+%22Kolor+Veyv%22!5e0!3m2!1sen!2sby!4v1542754304052" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="line_black"></div>
      <div class="cont_inner">
      <div class="cont_btn">Заказать звонок</div>
    </div>
 </div>


 
  <?php include('elements/footer/footer.php');?>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="scripts/jquery.maskedinput.min.js"></script>
  <script src="scripts/wow.min.js"></script>
  <script src="scripts/main.js"></script>
  <script>
  var accordion = function(){
  var data = $('.accordion').attr('data-accordion')
  
  $('.accordion-header').on('click', function(){
    $(this).next('.accordion-body').not(':animated').slideToggle()
  })
}

accordion();
  </script>
  <script>
    new WOW().init();
  </script>
</body>
</html>