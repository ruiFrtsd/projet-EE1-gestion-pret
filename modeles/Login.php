<?php 
class Login {
    private $pseudo;
    private $password;

	public function getPseudo()
    {
    return $this->pseudo;
    }
    public function getPassword()
    {
    return $this->password;
    }

    public function setPseudo(string $pseudo) : self
    {
    $this->pseudo = $pseudo;

    return $this;
    }
    public function setPassword(string $password) : self
    {
    $this->password = $password;

    return $this;
    }


    
    public static function findUsersAndPasswords()
    {
        $texteReq="SELECT * FROM user";

        $req = MonPdo::getInstance()->prepare($texteReq);
        $req->execute();
        $res = $req->fetch();
        return $res;
    }

    public static function connexion(Login $user)
    {
        $req = MonPdo::getInstance()->query('SELECT pseudo, password from user');
        $req->fetchAll();
        $req->execute();

        foreach ($req as $row) {
            if ($row['pseudo'] == $user->getPseudo() && $row['passwd'] == $user->getPassword()) {
                return true;
            }
        }
        return false;
    }
    public static function CreateUser($utilisateur, $password) : int
    {
        $req=MonPdo::getInstance()->prepare("INSERT INTO blogged.user (pseudo, password) VALUES ('$utilisateur', '$password'");

        
        $nb=$req->execute();
        return $nb;  
    }
}