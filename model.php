<?php 


function open_database_connection()
{
      $bdd = new PDO('mysql:host=localhost;dbname=mesnews;charset=utf8', 'root', 'password');

      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $bdd;
      $news = $bdd->query('select * from T_NEWS order by CAT_ID desc');
}

function close_database($bdd)
{
      $bdd = null;
}

function getNews()
{
      $bdd = open_database_connection();

      $sql = "SELECT * FROM T_NEWS ORDER BY CAT_ID DESC";
      $result = $bdd->query($sql);

      $news = array();

      while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $news[] = $row;
      }
      close_database($bdd);
      return $news;
}
