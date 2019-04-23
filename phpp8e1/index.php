
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>phpp8e1</title>
    </head>
    <body>

        <p>IP Adress : <?php print_r($_SERVER['REMOTE_ADDR']);?></p>
        <p>User Agent : <?php print_r($_SERVER['HTTP_USER_AGENT']);?></p>
        <p>Server name : <?php print_r($_SERVER['SERVER_NAME']);?></p>

    </body>
</html>
