<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/22/17
 * Time: 9:32 AM
 */

class UsersDB extends Model
{
    public function selectAll(){
        $q = $this->db->query('SELECT * FROM utilisateurs');
        return $q->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($user){
        $q = $this->db->prepare('CALL addutilisateurs(:idregion,:nom,:prenom,:email,:mdp');
        $q->bindParam(':idregion' , $user['region']);
        $q->bindParam(':nom' , $user['nom']);
        $q->bindParam(':prenom' , $user['prenom']);
        $q->bindParam(':mdp' , $user['mdp']);
        $q->execute();
        return $q->rowCount();
    }

    public function update($user){
        $q = $this->db->prepare('CALL updateutilisateurs(:idutilisateur,:idregion,:nom,:prenom,:email,:mdp');

        $q->bindParam(':idutilisateur' , $user['iduser']);
        $q->bindParam(':idregion' , $user['region']);
        $q->bindParam(':nom' , $user['nom']);
        $q->bindParam(':prenom' , $user['prenom']);
        $q->bindParam(':mdp' , $user['mdp']);

        $q->execute();
        return $q->rowCount();
    }
}