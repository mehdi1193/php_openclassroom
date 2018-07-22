<html>
    <title>Formulaire Nasa codes </title>



    <?php if (! isset($_POST['password']) || $_POST['password'] != 'kangourou') : ?>
        <form action="formulaireloin.php" method="post">
            <label>Password :</label>
            <input type="password" name="password"/>
            <input type="submit" name="Valider"/>    
        </form>
        <strong> le code est éronné </strong>
    <?php else: ?>
        <h2>Bienvenue amigo</h2>
        <strong> le code est: mehdi </strong>
    <?php endif; ?>

