<?php

require_once("Model/model.php"); 

class Controller {

    private $model; 
    public function __construct($server, $db, $user, $mdp){
        $this->model = new Model($server, $db, $user,$mdp); 
    }

    public function insert($tab){
        $this->model->insert($tab); 
    }

    public function update($tab, $where){
        $this->model->update($tab, $where); 
    }

    public function delete($tab){
        $this->model->delete($tab); 
    }

    public function searchData($tab, $mot){
        return $this->model->selectSearch($tab, $mot); 
    }

    public function selectAll(){
        $this->model->selectAll(); 
    }

    public function selectWhere($chaine, $where){
        return $this->model->selectWhere($chaine, $where); 
    }

    public function connection2($email, $mdp){
        if($this->model->connection2($email, $mdp))
            return true; 
         else 
            return false; 
        
    }

    public function connection3($email, $mdp){
        if($this->model->connection3($email, $mdp))
            return true; 
         else 
            return false; 
        
    }



    public function signIn($nom, $prenom, $adresse, $num, $ville, $email, $mdp, $nombreEnfant, $revenuImposable,  $dateInscription, $sexe){
        
        $this->model->insertFamille($nom, $prenom, $adresse, $num, $ville, $email, $mdp, $nombreEnfant, $revenuImposable,  $dateInscription, $sexe); 

    }

    public function selectPrestation(){
        return $this->model->selectPrestation();         
    }
    public function getUserPrestation($id){
        return $this->model->getUserPrestation($id); 
    }

    public function countPrestation(){
        return $this->model->countPrestation(); 
    }


    public function is_registred($id, $prestation){
        return $this->model->is_registred($id, $prestation);
    }

    //
     public function is_registred2($id, $event){
        return $this->model->is_registred2($id, $event);
    }


    public function getUserData($email){
        return $this->model->getUserData($email);
    }

    public function getUserEvent($id){
        return $this->model->getUserEvent($id);
    }


    public function insertEvent01($id){
        return $this->model->insertEvent01($id); 
    }
    public function insertEvent02($id){
        return $this->model->insertEvent02($id); 
    }

    public function insertPrestation01($id){
        return $this->model->insertPrestation01($id); 
    }

    public function insertPrestation02($id){
        return $this->model->insertPrestation02($id); 
    }

    public function insertPrestation03($id){
        return $this->model->insertPrestation03($id); 
    }


    //Algorithme qui permet de générer des clés de 8 caractères 
    public function generateCodeImg(){
        $code = 'azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789@_'; 
        $taille = count($code) - 1;
        $tableau2 = array(); 
        for($i = 0; $i < 8; $i++){
            $n = rand(0, $taille);
            $tableau2 = $code[$n]; 
        } 

        

        return implode($tableau2);

    }


    public function insertImgKey ($id, $key){
        $this->model->insertImgKey($id, $key); 
    }

    public function generateKey(){
    $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); 
    $combLen = strlen($comb) - 1 ; 

    for ($i = 0; $i < 8; $i++) {
     $n = rand(0, $combLen);
     $pass[] = $comb[$n];

    }

    $key = implode($pass); 
    return $key; //retourne un tableau
}

  /*  function generateCodeImg(){
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_';
                    $longueurMax = strlen($caracteres);
                    $chaineAleatoire = '';
                    for ($i = 0; $i < 8; $i++)
                        {
                            $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
                        }
                    return $chaineAleatoire;
                }
*/
}


?>