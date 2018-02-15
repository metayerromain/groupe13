<?php include 'templates/header.php'?>

<script type="text/javascript">
    //<![CDATA[
    var area1;
    bkLib.onDomLoaded(function() { area1 = new nicEditor({fullPanel : true}).panelInstance('area3',{hasPanel : true}); });

</script>

<body>

<form method="post" action="./?type=events/add">
  <section class="create">
    <div class="create_left">
      <p class="create_title">Créer votre article</p>

      <input class="input_container_title" type="text" name="title" placeholder="Titre de l'évènement">
      <div class="flex">
        <input class="input_container_place" type="text" name="place" placeholder="Lieux">
        <input class="input_container_date" type="date" name="date">
      </div>


    </div>
      <textarea class="input_container_text" style="background-color: white;" name="area3" id="area3" type="text" placeholder="Votre contenu" rows="8" cols="80"></textarea>
    <div class="create_two">
      <input class="input_container_imported" type="text" name="img" placeholder="URL de l'image">
      <input class="input_container_saved" type="submit" value="Valider">
    </div>
  </section>
</form>
</body>
</html>