<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="style.css" />
      <title>PHP Exercice 8 Exercice 1</title>
   </head>
   <body>
      <?php /* $_SERVER est une variable superglobale. C'est un tableau qui comporte plusieurs infos.' 
       * $_SERVER HTTP USER AGENT affiche l'user agent de l'utilisateur 
       */ ?>
      <p><?= $_SERVER['HTTP_USER_AGENT']; ?></p>
      <?php // $_SERVER REMOTE ADDR affiche l'IP du visiteur. ATTENTION ne pas confondre avec $_SERVER SERVER ADDR  ?>
      <p><?= $_SERVER['REMOTE_ADDR']; ?></p>
      <?php // $_SERVER SERVER NAME affiche le nom du serveur. Ici, le nom du Vhost.  ?>
      <p><?= $_SERVER['SERVER_NAME']; ?></p>
   </body>
</html>
