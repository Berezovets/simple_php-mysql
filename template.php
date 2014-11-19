<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?=$title?></title>
<link href="style.css" rel="stylesheet" type="text/css">
<script src="jquery.js"></script>
</head>
<body>
<div class="container">
  <header>
    <a href="index.html"><img src="" alt="Место для логотипа" width="180" height="90" id="Insert_logo" style="background: #C6D580; display:block;"></a>
  </header>
  <div class="sidebar1">
    <nav>
      <ul>
        <li><a href="index.html">Главная</a></li>
        <li><a href="about.html">О нас</a></li> 
        <li><a href="contacts.html">Контакты</a></li>
        <li><a href="gallery.html">Галерея</a></li>
      </ul>
    </nav>
  <aside>
     <h1>Левая колонка</h1>
  </aside>
  <!-- end .sidebar1 --></div>
  <article class="content">
    <h1>Центральная часть</h1>
    <section>
		<?=$component?>
    </section>
  <!-- end .content --></article>
  <aside>
    <h4>Правая колонка</h4>
  </aside>
  <footer>
  <address>
      Содержимое адреса
      
  </address>
  </footer>
<!-- end .container --></div>
</body>
</html>
