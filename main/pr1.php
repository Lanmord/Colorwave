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
  <link rel="stylesheet" href="css/pr.css">
</head>
<body>

<?php include('elements/header/header.php');?>

  
 <div class="wrapper">
    <?php include('elements/left-menu_cate/left-menu_cate.php');?>
  <div class="content">
    <h2>Лучшие товары</h2>
    <div class="line-pr"></div>

    <div class="product">
      <div class="img-pr"><img src="img/good1.jpg" alt="Офисная бумага Svetocopy"></div>
      <div class="text_pr">
        <h3>Офисная бумага Svetocopy</h3>
        <span>
            <p>Офисная бумага многоцелевого назначения формата А4, плотность 80 г/м, в пачке 500 листов.<br />Сегодня бумага офисная &laquo;SvetoCopy&raquo; является наиболее популярным видом бумаги для принтера. Основную роль в этом сыграли невысокая цена, общая доступность и прекрасные характеристики материала. Бумага офисная &laquo;Светокопи&raquo; используется практически на любой множительной копировальной технике.<br />Обладая повышенной жесткостью, офисная бумага Светокопи, обеспечивает слаженную работу всех устройств, не допуская поломок, перебоев и простоя копировальной техники. Именно эти свойства позволяют бумаге находить своих поклонников. Офисная бумага светокопи используется в офисе практически любой фирмы, доказывая на деле свою практичность.<br />Компания &laquo;Альфа-формат&raquo;, реализующая канцелярские товары, дает возможность приобрести офисную бумагу, Светокопи оптом и в розницу по заманчивым ценам.<br />Бумага офисная светокопи &ndash; это высокая жесткость листа, белоснежный цвет, отсутствие пылевого отделения, идеально ровная форма.<br />Характеристики офисной бумаги &laquo;Светокопи&raquo;:</p>
            <ul>
            <li>класс бумаги: &laquo;С&raquo;</li>
            <li>формат листов: А4</li>
            <li>плотность 2, г/кв.м: 80</li>
            <li>белизна, %: 146</li>
            <li>яркость бумаги, %: 94</li>
            <li>листов в пачке: 500</li>
            </ul>
        </span>
      </div>
      <div class="btn_product">
        <span>9.00 р.</span>
        <div class="btn_pr">
              Позвонить 
          <div class="btn_pr_inner">+375 17 343 39 62</div>
         </div>
      </div>
    </div>

  </div>
 </div>


 
  <?php include('elements/footer/footer.php');?>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="scripts/jquery.maskedinput.min.js"></script>
  <script src="scripts/wow.min.js"></script>
  <script src="scripts/main.js"></script>
  <script>
    $(".btn_pr").click(function() {
	 
     $(".btn_pr_inner").toggleClass("active");
    
   });
  </script>
  <script>
    new WOW().init();
  </script>
</body>
</html>