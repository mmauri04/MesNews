/*
*
*
*/
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <link href="mesnews.css" rel="stylesheet" />
    <title>Mes news - Home</title>
</head>
<body>
    <header>
        <h1>Mes News</h1>
    </header>
    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=mesnews;charset=utf8', 'mesnews_user', 'secret');
    $news = $bdd->query('select * from T_NEWS order by CAT_ID desc');
    foreach ($news as $new): ?>
    <article>
        <h2><?php echo $new['NEWS_TITRE'] ?></h2>
        <p><?php echo $new['NEWS_CONTENU'] ?></p>
    </article>
    <?php endforeach ?>
    <footer class="footer">
        <a href="https://www.github.com/mmauri04/MesNews">Mes News</a> est une petite activité réalisée dans le cadre de mon apprentissage du langage PHP.
    </footer>
</body>
</html>
