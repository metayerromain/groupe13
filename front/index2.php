<?php

require_once ('../helpers/database.php');

$stmt = $conn->prepare("SELECT * FROM `articles-table`");
$stmt->execute();
?>
<!-- Header -->

<?php include 'templates/header.php'?>

  <!-- caroussel -->

  <section class="caroussel">
    <div class="slide">

      <a href=""><div class="slide1 slide2">
        <img class="slide3" src="/front/img/ferrari.jpg" alt="">
        <div class="abosulute-text1">
        <p class="textCarousel1">Perferendis dolor adipisci</p>
        <p class="textCarousel2">Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
           consectetur, adipisci velit, voluptatem.
            Ut enim ad minima veniam, quis nostrum exercitationem ex ea commodi consequatur?</p>
           <p class="textCarousel3">Posté aujourd'hui à 11h.</p></div></div></a>

      <a href=""><div class="slide2">
        <img class="slide3" src="/front/img/mercedes.jpg" alt="">
        <div class="abosulute-text1">
        <p class="textCarousel1">Ipsum adipisicing elit.</p>
        <p class="textCarousel2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora sequi ipsam harum accusamus
          quod sapiente corporis enim, perferendis dolor adipisci commodi asperiores optio placeat.
           Deleniti ad rerum ipsa magnam distinctio!</p>
           <p class="textCarousel3">Posté aujourd'hui à 17h.</p></div></div></a>

      <a href=""><div class="slide2">
        <img class="slide3" src="/front/img/photo.jpg" alt="">
        <div class="abosulute-text1">
        <p class="textCarousel1">Adipisci commodi asperiores.</p>
        <p class="textCarousel2">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
        consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
           <p class="textCarousel3">Posté aujourd'hui à 16h.</p></div></div></a>
    </div>
    </section>

  <!-- Articles -->

  <p class="textArticle">Derniers Articles</p>

  <div class="articleContainer">

      <?php
      while($row = $stmt->fetch()) {
          $id = $row["id"];
          $title = $row["title"];
          $author = $row["author"];
          $date = $row["date"];
          $img = $row["images"];

          echo "
            <a href=\"article.php?id=$id\">
      <div class=\"Articles\">
      <div class=\"ArticleTitle\">$title</div>
      <img class=\"img-article\" src=\"$img\" alt=\"\">
    </div>
      </a>
      ";
      }
?>
  </div>

<!-- Footer -->

<?php include 'templates/footer.php'?>


<script>
var slides = document.querySelectorAll(' .slide2');
var currentSlide = 0;
nextSlide();
var slideInterval = setInterval(nextSlide, 5500);

function nextSlide() {
  slides[currentSlide].className = 'slide2';
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].className = 'slide1';
}
</script>