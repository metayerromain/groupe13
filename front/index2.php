<?php

require_once ('../helpers/database.php');

$stmt = $conn->prepare("SELECT * FROM `articles-table`");
$stmt->execute();

$stmt2 = $conn->prepare("SELECT * FROM `articles-table` WHERE first = 1");
$stmt2->execute();
?>
<!-- Header -->

<?php include 'templates/header.php'?>

  <!-- caroussel -->

  <section class="caroussel">
    <div class="slide">

        <?php
        $i = 0;
        while($row = $stmt2->fetch()) {
            $id = $row["id"];
            $title = $row["title"];
            $author = $row["author"];
            $date = $row["date"];
            $img = $row["images"];
            $dateformat = DateTime::createFromFormat('Y-m-d', $date);
            $content = substr(strip_tags($row["content"]), 2, 180);
            if($i == 0) $firstslide = "slide1";
                else $firstslide = "";
            echo '
             <a href="">
                 <div class="'.$firstslide.' slide2">
                    <img class="slide3" src="'.$img.'" alt="" style="height: 100vh; width: 100%; object-fit: cover;">
                    <div class="abosulute-text1" style="background-color: #00000069; padding: 30px;">
                        <p class="textCarousel1" style="">'.$title.'</p>
                        <p class="textCarousel2" style="width: 1000px !important;">'.$content.'...</p>
                        <p class="textCarousel3" style="margin-left: 30px;">Ajouté le '.$dateformat->format('d/m/Y').'</p></div></div></a>
            ';
            $i++;
        }
        ?>
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