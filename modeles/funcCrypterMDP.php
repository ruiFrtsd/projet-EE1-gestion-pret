<!-- permet de crypté le mot de passe-->
<?php
function Crypter($mdpclair){
    return MD5($mdpclair);
}
?>