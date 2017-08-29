<?php
/**
 * Created by PhpStorm.
 * User: lafer
 * Date: 26-08-17
 * Time: 16:51
 */

class RestaurantsDB extends Model
{
    public function insertRestaurant($resto){
        $q = $this->db->prepare('CALL addutilisateurs(:idregion,:nom,:prenom,:email,:mdp');
        $q->bindParam(':idregion' , $user['region']);
        $q->bindParam(':nom' , $user['nom']);
        $q->bindParam(':prenom' , $user['prenom']);
        $q->bindParam(':mdp' , $user['mdp']);
        $q->execute();
        return $q->rowCount();
    }
    public function selectAll()
    {
        $q = $this->db->query('SELECT * FROM restaurants');
        return $q->fetchAll(PDO::FETCH_OBJ);
    }

    function selectAllByProvince($province)
    {
        $q = $this->db->prepare('CALl afficher_restaurant_region(:idregion)');
        $q->bindParam(':idregion',$province);
        $q->execute();
        $restos = $q->fetchAll(PDO::FETCH_OBJ);
        return $restos;
    }

    function selectRegion($idregion)
    {
        $q = $this->db->prepare('SELECT NOM FROM REGIONS WHERE IDREGION = :idregion');
        $q->bindParam(':idregion',$idregion);
        $q->execute();
        $reg = $q->fetch(PDO::FETCH_OBJ);
        return $reg;
    }

    function selectAllRegion(){

    }
    function selectInfoRestaurant($idrestaurant){
        $q = $this->db->prepare('SELECT * FROM RESTAURANTS WHERE IDRESTAURANT = :idrestaurant');
        $q->bindParam(':idrestaurant',$idrestaurant);
        $q ->execute();
        return $q->fetch(PDO::FETCH_OBJ);
    }

    function selectPlatsRestaurant($idrestaurant){
        $q = $this->db->prepare('SELECT * FROM PLATS WHERE idrestaurant = :idrestaurant');
        $q->bindParam(':idrestaur
        ant',$idrestaurant);
        $q ->execute();
        return $q->fetch(PDO::FETCH_OBJ);
    }
    function selectCommentaireRestaurant($idrestaurant){

    }

    function insertCommentaire($idrestaurant){

    }

    function updateCommentaire($idcommentaire){

    }

    function deleteCommentaire($id){

    }
}