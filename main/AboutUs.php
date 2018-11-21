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
  <link rel="stylesheet" href="elements/button_pr/button_pr.css">
  <link rel="stylesheet" href="css/aboutus.css">
</head>

<body>

  <?php include('elements/header/header.php');?>

<div class="wrapper">
  <div class="content">
    <h2 class="main_h2" >О нас</h2>
    <div class="line-red-ab"></div>
    <h3>Доверьтесь профессионалам!</h3>
    <p>Мы молоды и амбициозны! Мы знаем свое дело! Мы &mdash; одни из лучших специалистов в своей области! Мы делаем ставку на качество! Мы &mdash; команда ООО &laquo;Колор Вэйв&raquo;!</p>
    <p>ООО &laquo;Колор Вэйв&raquo; работает в сфере ремонта и обслуживания оргтехники с 2011 года. Для работы в фирме были собраны самые квалифицированные и опытные мастера своего дела. Опыт работы каждого мастера от 7 до 11 лет в сфере ремонта оргтехники. А это значит, что ваша техника, поступая к нам, попадает к людям, досконально знающим свое дело!<br />В &laquo;Колор Вэйв&raquo; ведется обслуживание как физических, так и юридических лиц. Многие организации, доверившие нам свою технику, являются нашими клиентами на постоянной основе. Среди них сети супермаркетов, банки, проектные и строительные организации, организации здравоохранения, страховые и юридические фирмы, турагентсва, транспортные фирмы, городские и районные администации.<br /><br />Обратившись к нам, вы сразу оцените добросовестность и честность в нашей работе. Ни одна деталь, ни одна работа не производится без вашего согласия и нашей аргументации необходимости. Мы всегда ставим перед собой целью экономию вашего бюджета, и выполняем только те работы, которые действительно необходимы, не &laquo;накручивая счета&raquo;. Это, пожалуй, наше самое большое отличие и самая большая ценность. За это нас ценят, и этим мы не поступимся!<br />Познакомьтесь с нашей командой прямо сейчас!</p>
   
</div>
</div>
 



  <?php include('elements/footer/footer.php');?>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="scripts/jquery.maskedinput.min.js"></script>
  <script src="scripts/wow.min.js"></script>
  <script src="scripts/main.js"></script>
  <script>
    $(".btn_pr_inner").click(function () {

      $(this).toggleClass("active");

    });
  </script>
  <script>
    new WOW().init();
  </script>
</body>

</html>