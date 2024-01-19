<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  

  <title>Бронирование номеров</title>
</head>

<header>
    <div class="logo">
        <img src="logo.jpg" alt="Логотип">
    </div>
    <div class="header-buttons">
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="bron.php">Номера</a></li>
                <li><a href="uslugi.php">Услуги</a></li>

            </ul>
        </nav>
        
    </div>
</header>

<body>

  <div class="room" id="room1">
    <h2>Номер "Комфорт ++"</h2>
    <div class="image-gallery">
      <img src="n1.jpg" alt="Номер 1">
      <img src="n11.jpg" alt="Номер 1">
      <img src="n111.jpg" alt="Номер 1">
      <img src="n1111.jpg" alt="Номер 1">
      
    </div>
    <section class="room-details">
    <ul>
        <li><strong>Ванная комната:</strong> Большая ванна с прозрачной дверью</li>
        <li><strong>Кровать:</strong> Кинг-сайз</li>
        <li><strong>Включено в стоимость:</strong></li>
        <ul>
            <li>Завтрак в ресторане SakuraZen</li>
            <li>Wi-Fi</li>
            <li>Ежедневная уборка</li>
            <li>Кондиционер</li>
 
        </ul>
        <li><strong>Дополнительные удобства:</strong></li>
        <ul>
            <li>Телевизор с плоским экраном</li>
            <li>Мини-бар</li>
            <li>Фен</li>
            
        </ul>
    </ul>
    </section>
    <p class="description">Номер премиального класса с завтраком в нашем ресторане.</p>
    <p class="price">Цена за сутки: 7500 рублей</p>
    <button class="br" onclick="reserveRoom('Комфорт ++', 7500)">Забронировать</button>
  </div>

  <div class="room" id="room1">
    <h2>Номер "Комфорт +"</h2>
    <div class="image-gallery2" data-lightbox="gallery">
  <img src="n2.jpg" alt="Номер 2">
  <img src="n22.jpg" alt="Номер 2">
  <img src="n222.jpg" alt="Номер 2">
<img src="n2222.jpg" alt="Номер 2">
    </div>

    <section class="room-details">
    <ul>
        <li><strong>Ванная комната:</strong> Душевая кабина</li>
        <li><strong>Кровать:</strong> Двуспальная</li>
        <li><strong>Включено в стоимость:</strong></li>
        <ul>
            <li>Wi-Fi</li>
            <li>Ежедневная уборка</li>
            <li>Кондиционер</li>
       
        </ul>
        <li><strong>Дополнительные удобства:</strong></li>
        <ul>
            <li>Телевизор с плоским экраном</li>
            <li>Мини-бар</li>
            <li>Фен</li>
           
        </ul>
    </ul>
</section>
    <p class="description">Уютный номер со всеми удобствами.</p>
    <p class="price">Цена за сутки: 5000 рублей</p>
    <button class="br" onclick="reserveRoom('Комфорт +', 5000)">Забронировать</button>
  </div>

  <script src="script.js"></script>
</body>

</html>
