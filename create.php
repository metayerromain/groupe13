<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>create</title>
</head>
  <body>
    <div id="header" class="header">
      <div class="container1">
        <div class="flex">
          <a class="headerLogo" href=""><img class="headerLogoimg" src="img/Logo.png" alt=""></a>

          <ul class="mainNavigation">
            <li class="listItem"><a class="listItem-link" href="/about.html">Actualités</a></li>
            <li class="listItem"><a class="listItem-link" href="/blog.html">Innovations</a></li>
            <li class="listItem"><a class="listItem-link" href="/podcast.html">Marques</a></li>
            <li class="listItem"><a class="listItem-link" href="/reading.html">Recherche</a></li>
            <a class="Search" href=""><img class="searchLogoimg" src="img/searchlogo.png" alt=""></a>
          </ul>
          </nav>
        </div>
      </div>
    </div>

    <section class="create">
      <div class="create_left">
      <p class="create_title">Créer votre article</p>

        <input class="input_container_title" type="text" placeholder="Titre de l'article">
        <div class="floatRight"><input class="input_container_date" type="date" placeholder="Titre de l'article"></div>

      </div>
      <textarea class="input_container_text"placeholder="Contenu de l'article"name="name" rows="8" cols="80"></textarea>
      <div class="create_two">
        <input class="input_container_imported"type="button" name="" value="Importer des images/vidéos ...">
        <input class="input_container_saved"type="submit" name="" value="Enregistrer">
      </div>
    </section>
  </body>
</html>
