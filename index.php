<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
   
    <title>Document</title>
</head>
<body>
<?php
    require('components\navmenu.html');
    ?>
    <section class="section1">
    
        <div class="content">
            <strong><h1>Свежие продукты</h1></strong>
            <strong><p>Кондитерскеи изделия</p>
        </div></strong> 
    </section>
    <section class="section2">
    <div class="image-box" data-reveal="left">
    <img src="https://img.freepik.com/premium-photo/turkish-baklava-dessert_127657-21789.jpg?w=2000" alt="" class="img">
  </div>
  <div class="content-box">
    <h2 class="title" data-reveal="left">
      Baklava
    </h2>
    <p class="text" data-reveal="left">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Id laborum iste doloremque ab facere unde alias sit commodi accusamus? Eius ut molestiae nemo perspiciatis, pariatur numquam accusamus voluptatem libero sint.
      
    </p>
   
  </div>
  <div class="content-box">
    <h2 class="title" data-reveal="left">
      Lokum
    </h2>
    <p class="text" data-reveal="left">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Id laborum iste doloremque ab facere unde alias sit commodi accusamus? Eius ut molestiae nemo perspiciatis, pariatur numquam accusamus voluptatem libero sint.
    </p>
  </div>
  <div class="image-box" data-reveal="left">
    <img src="https://i.pinimg.com/originals/7a/62/1f/7a621fabe6f0b95a4aedea6fb7347888.jpg" alt="" class="img">
  </div>
  <div class="image-box" data-reveal="left">
    <img src="https://img.freepik.com/premium-photo/turkish-baklava-dessert_127657-21789.jpg?w=2000" alt="" class="img">
  </div>
  <div class="content-box">
    <h2 class="title" data-reveal="left">
      Baklava
    </h2>
    <p class="text" data-reveal="left">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Id laborum iste doloremque ab facere unde alias sit commodi accusamus? Eius ut molestiae nemo perspiciatis, pariatur numquam accusamus voluptatem libero sint.
    </p>
  </div>
</section>
      <?php
      require('components\footer.html');
    ?>
    <script src="script.js"></script>
</body>
</html>