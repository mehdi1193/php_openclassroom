<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>

    <body>
        <?php
        if (isset($_POST['password']) && $_POST['password'] != "kangourou") {
            ?>
            <form action="tponepage.php" method="post">
                <label>Login: </label>
                <input type="text" name="login"></input></br>
                <label>Password: </label>
                <input type="password" name="password"></input>
                <input type="submit" name="send">  
                <?php echo '</br>Mot de passe erronnée !' ?>
            </form>
        <?php
        } else {
            echo 'Bienvenue à la page secrète</br>';
            echo 'Les codes Nasa sont : 87FGF256 - 2556DSDS - 1515SDCV';
        }
        //print_r($_POST);
        ?>

    </body>
</html>