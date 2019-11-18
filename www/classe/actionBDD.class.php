<?php
	
	class AppBDD{
		
		private $conBDD ;
		public function __construct($connexion){
			$this->conBDD = $connexion;
		}
		
		public function enregistrementUtilisateur($nomUtilisateur,$pays,$email,$motdePasse,$code){
			try{
			$req = $this -> conBDD -> prepare("INSERT INTO utilisateur (id_utilisateur,noms_utilisateur,pays_utilisateur,email_utilisateur,monDePasse_utilisateur,code_confirmation) VALUES ('',?,?,?,?,?)");
			$req -> execute(array($nomUtilisateur,$pays,$email,$motdePasse,$code));
			
			}catch(exception $er){
				echo "erreur ici".$er->getMessage();
			}
		}
		
		
	}
