<?php
/**
 * Created by PhpStorm.
 * User: Flo Leroux
 * Date: 14/03/2017
 * Time: 09:58
 */
?>

<html>
    <head>
        <title>Login</title>
        <link href="../../public/css/login.css"/>
        <script src="../../public/js/css_dynamique.js"></script>
    </head>

    <body>
        <div id="form_div">
            <form action = "../app/Login.php" method="post">
                <h1>Lapalette</h1>
                <h2>Administrateur</h2> <br>
                <label>Identifiant </label>
                <input type="text" name="login" class="box"/> <br/><br/>
                <label>Mot de passe </label>
                <input type="password" name="mdp" class="box" /><br/><br/>
                <button type="submit" value="Submit">Envoyer</button><br/>
            </form>
        </div>
    </body>
</html>