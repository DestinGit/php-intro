<!doctype html>

<html>

<head>
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
</head>

<body>
    <form method="post" action="valid-form.php">
        <fieldset>
            <legend>Inscription</legend>
            <label for="email">Email</label>
            <div>
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <label for="mdp">Mode de passe</label>
            <div>
                <input type="password" name="mdp" id="mdp" placeholder="Mot de passe">
            </div>
            <label for="mdp-confirm">Confirmation Mot de Passe</label>
            <div>
                <input type="password" name="mdp-confirm" id="mdp-confirm" placeholder="Confirmation">
            </div>
        </fieldset>
        <button type="submit">Incription</button>
    </form>
</body>

</html>
