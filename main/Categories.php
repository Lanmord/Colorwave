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
  <link rel="stylesheet" href="css/categories.css">
</head>
<body>

<?php include('elements/header/header.php');?>

  
 <div class="wrapper">
    <?php include('elements/left-menu_cate/left-menu_cate.php');?>
  <div class="content">
    <a href="#">
      <img src="img/cate1.png" alt="Лучшие товары">
      <div>
      <h3>Лучшие товары</h3>
      <span>от 6.00 р.</span>
      </div>
    </a>
    <a href="#">
      <img src="img/cate2.png" alt="Картриджи для струйного принтера">
      <div>
      <h3>Картриджи для струйного принтера</h3>
      <span>от 40.00 р.</span>
      </div>
    </a>
    <a href="#">
    <img src="img/cate3.png" alt="Картриджи для лазерного принтера">
      <div>
      <h3>Картриджи для лазерного принтера</h3>
      <span>от 00.00 р.</span>
      </div>
    </a>
    <a href="#">
    <img src="img/cate4.png" alt="Чернила для принтера">
      <div>
      <h3>Чернила</h3>
      <span>от 00.00 р.</span>
      </div>
    </a>
    <a href="#">
    <img src="img/cate5.png" alt="Матрица ноутбука">
    <div>
      <h3>Матрицы</h3>
      <span>от 00.00 р.</span>
      </div>
    </a>
    <a href="#">
    <img src="img/cate6.png" alt="Клавиатура ноутбука">
    <div>
      <h3>Клавиатуры</h3>
      <span>от 00.00 р.</span>
      </div>
    </a>
    <a href="#">
    <img src="img/cate7.png" alt="Бумага офисная">
    <div>
      <h3>Бумага офисная</h3>
      <span>от 00.00 р.</span>
      </div>
    </a>
    <a href="#">
    <img src="img/cate8.png" alt="Фотобумага">
    <div>
      <h3>Фотобумага</h3>
      <span>от 00.00 р.</span>
      </div>
    </a>

  </div>
 </div>


 
  <?php include('elements/footer/footer.php');?>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="scripts/jquery.maskedinput.min.js"></script>
  <script src="scripts/wow.min.js"></script>
  <script src="scripts/main.js"></script>
  <script>
    new WOW().init();
  </script>
</body>
</html>