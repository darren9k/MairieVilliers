<?php

    class Model{

        private $pdo; 
        private $table; 

        public function __construct($server, $dbname, $user, $mdp){
        	$this->pdo = null; 
            try {
                $this->pdo = new PDO("mysql:host=".$server.";dbname=".$dbname,$user,$mdp);
            }catch(PDOException $exp){
                echo "Erreur de connexion à la base de donnée : ".$exp; 
            }
        }



    
		public function countPrestation(){
			$this->pdo = new PDO('mysql:host=localhost;dbname=villierbdd', 'root','');
			$sql = "select * from prestation"; 
			$requete = $this->pdo->prepare($sql); 
			$requete->execute(); 
			
			$countPrestation = $requete->rowCount(); 

			return $countPrestation; 
		}




		public function getUserPrestation($id){
			//$this->pdo = new PDO('mysql:host=localhost;dbname=villierbdd', 'root','');
			$sql = "select * from prestation where idfamille = '".$id."';";
			$requete = $this->pdo->prepare($sql); 
			$requete->execute(); 

			if($requete->rowCount() < 1)
				return "Aucune prestation."; 

			return $requete->fetchAll(); 
		}



		public function getUserEvent($id){
			//$this->pdo = new PDO('mysql:host=localhost;dbname=villierbdd', 'root','');
			$sql = "select * from evenement where idfamille = '".$id."';";
			$requete = $this->pdo->prepare($sql); 
			$requete->execute(); 

			if($requete->rowCount() < 1)
				return "Aucun event."; 

			return $requete->fetchAll(); 
		}

		//insert into evenement values (null,'1', 'discours du maire', 200, 'Rue de l'hotel de ville', '2022-05-18', '15:00:00', 2);

		public function insertEvent01($id){
			$sql = "insert into evenement values (null,'".$id."', 'discours du maire', 200, 'Rue de l hotel de ville', '2022-05-18', '15:00:00', 2);";
			$output = $this->pdo->prepare($sql); 
			$output->execute();  
		}

		public function insertEvent02($id){
			$sql = "insert into evenement values (null,'".$id."', 'concert de booba', 500, 'Rue de l hotel de ville', '2022-07-18', '20:00:00', 1);";
			$output = $this->pdo->prepare($sql); 
			$output->execute();  
		}

		//Fonction pour savoir si l'utilisateur est inscrit a la prestation suivante 
		public function is_registred2($id, $event){
			$sql = "select * from evenement where idfamille = '".$id."' and nomevent = '".$event."';";
			$requete = $this->pdo->prepare($sql); 
			$requete->execute(); 

			if($requete->rowCount() < 1)
				return 0;//l'user nest pas inscrit a la prestation 

			return 1; //user inscrit 
		}


///////////////// Prestation ///////////
		public function insertPrestation01($id){
				$sql = "insert into prestation values (null, 'La petite enfance', 50, 3, '".$id."');"; 
				//insert into prestation values(null,'La petite enfance',  50 ,3,'5');
				$output = $this->pdo->prepare($sql); 
				$output->execute(); 
		}

		public function insertPrestation02($id){
				$sql = "insert into prestation values (null, 'Ecole ecole elementaire Albert Camus', 50, 2, '".$id."');"; 
				$output = $this->pdo->prepare($sql); 
				$output->execute(); 
		}

		public function insertPrestation03($id){
				$sql = "insert into prestation values (null, 'Bien manger c est le debut du bonheur', 50, 3, '".$id."');"; 
				$output = $this->pdo->prepare($sql); 
				$output->execute(); 
		}

		//Fonction pour savoir si l'utilisateur est inscrit a la prestation suivante 
		public function is_registred($id, $prestation){
			$sql = "select * from prestation where idfamille = '".$id."' and libellepresta = '".$prestation."';";
			$requete = $this->pdo->prepare($sql); 
			$requete->execute(); 

			if($requete->rowCount() < 1)
				return 0;//l'user nest pas inscrit a la prestation 

			return 1; //user inscrit 
		}

	

		public function connection2($email, $mdp){
			//On instancie de nouveau PDO car bug 
			//$this->pdo = new PDO('mysql:host=localhost;dbname=villierbdd', 'root',''); 
			$sql = "SELECT * from famille where email = '".$email."' and mdp = '".$mdp."';";
			$output = $this->pdo->prepare($sql); 
			echo $sql;

			$output->execute(); 
			if($output->rowCount() > 0){ 
				return true;  
			}else 
				return false; 

		}


		public function connection3($email, $mdp){
			//On instancie de nouveau PDO car bug 
			//$this->pdo = new PDO('mysql:host=localhost;dbname=villierbdd', 'root',''); 
			$sql = "SELECT * from famille where email = :email and mdp = MD5(':mdp');";
			$select = $this->pdo->prepare($sql); 
			$donnees = array(":email"=>$email, ":mdp"=>$mdp); 
			$select->execute($donnees); 
			if($output->rowCount() > 0){ 
				return true;  
			}else 
				return false; 

		}

		//Faire un trigger qui empeche de s'inscrire avec  email similaire 
		public function getUserData($email){
			//$this->pdo = new PDO('mysql:host=localhost;dbname=villierbdd', 'root',''); 
			$sql = "SELECT * from famille where email = '".$email."'";
			$output = $this->pdo->prepare($sql); 
			$output->execute(); 
			return $output->fetchAll(); //retourne une ligne 
		}

		// insert into famille values (null, 'kemi', 'seba', '1 rue rivolie', 'paris','k@hotmail.com',md5('test'),'0699177846',3200,5, DATE '2022-04-17', 'homme', '');

		//insert un nouvelle utilisateur dans la base de données. 
		//provisoire 


		//ajout du sexe de l'user dans la fonction
		public function insertFamille($nom, $prenom, $adresse, $num, $ville, $email, $mdp, $nombreEnfant,  $revenuImposable, $dateInscription, $sexe):void{
			//$this->pdo = new PDO('mysql:host=localhost;dbname=villierbdd', 'root',''); 
			$sql = "INSERT INTO famille VALUES (null,'".$nom."','".$prenom."','".$adresse."','".$ville."','".$email."', MD5('".$mdp."'),'".$num."',".$revenuImposable.",".$nombreEnfant.", DATE '".$dateInscription."', '".$sexe."', '');";

			$request = $this->pdo->prepare($sql); 
			$request->execute(); 
			
		}

		//update famille set photo = '' where idfamille = 12; 

		public function insertImgKey ($id, $key){
			$sql = "UPDATE famille SET photo = '".$key."' where idfamille = '".$id."';";
			$request = $this->pdo->prepare($sql); 
			$request->execute();
		}


		public function selectPrestation(){
			//$this->pdo = new PDO('mysql:host=localhost;dbname=villierbdd', 'root','');
			$sql = "select * from prestation"; 
			$requete = $this->pdo->query($sql); 
			return $requete->fetchAll(); 
	
		}

		
        public function delete ($where)
		{
			$champs = array(); 
			$donnees = array(); 
			foreach ($where as $cle=>$valeur)
			{
				$champs[] = $cle." = :".$cle; 
				$donnees[":".$cle]= $valeur; 
			}
			$chaine = implode("  and  ", $champs);

			$requete ="delete from   ".$this->uneTable."  where ".$chaine ;
			$delete = $this->pdo->prepare($requete); 
			$delete->execute($donnees);
		}

        public function selectWhere ($chaine, $where)
		{
			$champs = array(); 
			$donnees = array(); 
			foreach ($where as $cle=>$valeur)
			{
				$champs[] = $cle . "= :".$cle; 
				$donnees[":".$cle]= $valeur; 
			}
			$chaineWhere = implode("  and ", $champs);
			$requete ="select ".$chaine." from  ".$this->uneTable." where ".$chaineWhere;

			echo $requete; 
			var_dump($donnees);

			$select = $this->pdo->prepare ($requete); 
			$select->execute($donnees); 
			return $select->fetch();
		}

        public function selectAll ()
		{
		$requete = "select * from  ".$this->uneTable;
			$select = $this->pdo->prepare ($requete); 
			$select->execute(); 
			return $select->fetchAll();  
		}

		
      

    }




?>