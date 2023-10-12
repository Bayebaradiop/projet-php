<?php
    require_once("bd.php");
    function getEmploye(){
        global $connexion;
        $sql="SELECT * FROM utilisateur,profil WHERE idProfilF=idProfil";
        return $connexion->query($sql)->fetchAll();
    }
    function addEmploye($prenom,$nom,$tel,$email,$login,$mdp,$adresse,$ficherCV,$idProfil){
        global $connexion;
        $sql="INSERT INTO utilisateur(prenom,nom,tel,email,login,mdp,adresse,ficherCV,idProfilF) values(:prenom,:nom,:tel,:email,:login,:mdp,:adresse,:ficherCV,:idProfilF)";
        $state=$connexion->prepare($sql);
        $state->bindValue("prenom",$prenom,PDO::PARAM_STR);
        $state->bindValue("nom",$nom,PDO::PARAM_STR);
        $state->bindValue("tel",$tel,PDO::PARAM_STR);
        $state->bindValue("email",$email,PDO::PARAM_STR);
        $state->bindValue("login",$login,PDO::PARAM_STR);
        $state->bindValue("mdp",$mdp,PDO::PARAM_STR);
        $state->bindValue("adresse",$adresse,PDO::PARAM_STR);
        $state->bindValue("idProfilF",$idProfil,PDO::PARAM_INT);
        $state->bindValue("ficherCV",$ficherCV,PDO::PARAM_STR);
        $state->execute();
        return findUserByLogin($login, $mdp);
    }
    function findUserByLogin($login,$mdp){
        global $connexion;
        $sql="SELECT * FROM utilisateur,profil WHERE login='$login'and mdp='$mdp' and etatUser=1 and idProfilF=idProfil";
        $state=$connexion->prepare($sql);
        $state->execute();
        return $state->fetch();
    }

    function findUserByLog($login){
        global $connexion;
        $sql="SELECT * FROM utilisateur WHERE login='$login' ";
        $state=$connexion->prepare($sql);
        $state->execute();
        return $state->fetch();
    }
function getCandidat() {
        global $connexion;
        $sql="SELECT * FROM utilisateur ,profil , candidature  WHERE idProfilF=idProfil AND lower(nomProfil)='Candidat' AND idUserF=idUser";
      return $connexion->query($sql)->fetchAll();
    }
    function pres($id) {
        global $connexion;
        $sql="SELECT * FROM utilisateur ,profil , candidature  WHERE idProfilF=idProfil AND lower(nomProfil)='Candidat' AND idUserF=idUser and idUserF='$id'";
      return $connexion->query($sql)->fetch();
    }
    function updateCV($fileName,$id){
        global $connexion;
        $sql = "UPDATE utilisateur SET ficherCV=:nom WHERE idUser=$id";
        $state=$connexion->prepare($sql);
        $state->bindValue("nom",$fileName,PDO::PARAM_STR);
        return  $state->execute();
    }
    function valider(){
        global $connexion;
        $sql="SELECT *FROM utilisateur,profil,candidature,offre WHERE etatC=1 and idProfil=idProfilF and idOffre=idOffreF and idUser=idUserF and nomProfil='candidat'";
        return $connexion->query($sql)->fetchAll();

    }
    function entente(){
        global $connexion;
        $sql="SELECT *FROM utilisateur,profil,candidature,offre WHERE etatC=-1 and idProfil=idProfilF and idOffre=idOffreF and idUser=idUserF and nomProfil='candidat'";
        return $connexion->query($sql)->fetchAll();

    }
    function refuser(){
        global $connexion;
        $sql="SELECT *FROM utilisateur,profil,candidature,offre WHERE etatC=0 and idProfil=idProfilF and idProfil=idProfilF  and idUser=idUserF and nomProfil='candidat'";
        return $connexion->query($sql)->fetchAll();

    }
?>