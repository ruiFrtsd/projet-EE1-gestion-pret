<?php
    include('modeles/monPDO.php');
    include('modeles/funcCrypterMDP.php');
    $pseudo = filter_input(INPUT_POST, 'pseudo');
    $password = filter_input(INPUT_POST, 'password');
    $validate = filter_input(INPUT_POST, 'valider');

    if ($validate != null) {
        if ($pseudo != ""  && $password != "") {
            $passHash = Crypter($password);
            // On check si l'utilisateur existe
            $reponse = $bdd->query('SELECT idUtilisateur, user, password FROM t_users');
            while ($donnees = $reponse->fetch()) {
                if ($donnees['user'] == $pseudo && $donnees['password'] == MD5($password)) {
                    $_SESSION['connected'] = true;
                    $_SESSION['idUser'] = $donnees['idUtilisateur'];
                    header("Location:index.php?uc=accueil");
                } else {
                    echo "utilisateur ou mot de passe incorrect";
                }
            }
        }
    }
    ?>
<div class="container mt-5">
    <form>
        <section class="container-fluid">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-3">
                    <form method="POST" action="#" class="form-container ">
                        <h1>Login</h1>
                        <div class="form-group">
                            <label for="pseudo">pseudo</label>
                            <input type="text" name="pseudo" class="form-control" id="pseudo" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <input type="submit" name="valider" class="btn btn-success btn-block" value="Login">
                    </form>
                </section>
            </section>
        </section>
    </form>
</div>