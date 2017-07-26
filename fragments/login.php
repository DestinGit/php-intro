<div class="col-md-6 col-md-offset-3">
<!--<form method="post" class="form-inline">-->
<form method="post" class="">
    <div class="col-md-12"><?= $error ?></div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email" class="form-control">
    </div>
    <div class="form-group">
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" placeholder="Mot de passe" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">Connexion</button>
    </div>
</form>
</div>