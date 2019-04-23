<?php
// définir un cookie qui sera envoyé 
if(!empty($_POST['login'])){
    setcookie('login', $_POST['login'], time() + (60*60*24*30), '/','phpp8') ;
}
  if(!empty($_POST['password'])) {
    setcookie('password', $_POST['password'], time() + (60*60*24*30), '/','phpp8');
  }
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <link rel="stylesheet" href="style.css" />
     <title>PHP Partie 8 Exercice 3</title>
   </head>
   <body>
         <form action="index.php" method="POST">
            <label for="login">Identifiant</label>
            <input type="text" name="login" id="login" placeholder="Identifiant" />
            <label for="password">Mot de passe</label>
            <input type="text" name="password" id="password" placeholder="Mot de passe" />
            <input type="submit" name="submit" value="Valider" />
</form>
   </body>
</html>