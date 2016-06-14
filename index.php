<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="utf-8" />
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../web/lib/materialize/materialize.min.css"  media="screen,projection"/>

      <link href="mesnews.css" rel="stylesheet" />

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Mes news - Home</title>
</head>

<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">Mes News</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#"><i class="material-icons">home</i></a></li>
        <li><a href="#"><i class="material-icons">group</i></a></li>
        <li><a href="#"><i class="material-icons">settings</i></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#"></a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
<div class="container">
      <?php foreach ($news as $new): ?>
            <article>
                  <header>
                        <h4><?php echo $new['NEWS_TITRE'] ?></h4>
                  </header>
                  <p>
                        <?php echo $new['NEWS_CONTENU'] ?>
                  </p>
            </article>
      <?php endforeach ?>
      <footer class="footer center">
            <a href="https://www.github.com/mmauri04/MesNews">Mes News</a> est une petite activité réalisée dans le cadre de mon apprentissage du langage PHP.
      </footer>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../web/lib/js/materialize/materialize.min.js"></script>
</body>
</html>
