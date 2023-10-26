<?php
include_once("helpers/url.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Cinema - Categorias de Filmes</title>
  <link rel="stylesheet" href="<?= $BASE_URL ?>/styles.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    #logo {
  position: absolute;
  top: 10px;
  left: 9.5%;
}

#logo img {
  width: 50px;
}

#navbar {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #161616;
  padding: 20px;
  text-transform: uppercase;
  list-style: none;
}

#navbar li {
  margin: 0 10px;
  padding: 5px;
}

#navbar .nav-link {
  color: #FFF;
  text-decoration: none;
  transition: .5s;
  font-size: 14px;
}

#navbar .nav-link:hover {
  color: #ff0000;
}
    main {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: white;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .category-list {
      list-style: none;
      padding: 0;
    }

    .category-list li {
      font-size: 18px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <header>
    <a href="<?= $BASE_URL ?>" id="logo">
      <img src="<?= $BASE_URL ?>/img/logocine.png" alt="Blog Codar">
    </a>
    <nav>
      <ul id="navbar">
        <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
        <li><a href="<?= $BASE_URL ?>categorias1.php" class="nav-link">Categorias</a></li>
        <li><a href="<?= $BASE_URL ?>sobre.php" class="nav-link">Sobre</a></li>
        <li><a href="<?= $BASE_URL ?>contato.php" class="nav-link">Contato</a></li>
      </ul>
    </nav>
  </header>
  
  <main>
    <h1>Categorias de Filmes</h1>
    <ul class="category-list">
      <li>Ação</li>
      <li>Aventura</li>
      <li>Comédia</li>
      <li>Drama</li>
      <li>Ficção Científica</li>
      <li>Terror</li>
      <li>Romance</li>
    </ul>
  </main>
  
  <?php
  include_once("templates/footer.php");
  ?>
</body>
</html>
