<?php

//creation de la class auteur
class Auteur
    {
        //attributes privées de la class auteur: prenom, nom et livres
        private string $_prenom;
        private string $_nom;
        private array $_livres;

        //setter pour chaque attribute
        public function setPrenom($prenom)
            {
                $this->_prenom = $prenom;
            }
        public function setNom($nom)
            {
                $this->_nom = $nom;
            }
        public function setLivres($livres)
            {
                $this->_livres = $livres;
            }

        //getter pour chaque attribute
        public function getPrenom()
            {
                return $this->_prenom;
            }
        public function getNom()
            {
                return $this->_nom;
            }
        public function getLivres()
            {
                return $this->_livres;
            }

        //creation de le constructor auteur
        public function __construct(string $prenom, string $nom)
            {
                //definition de la liste de le constructor
                $this->_prenom = $prenom;
                $this->_nom = $nom;
                $this->_livres = [];
            }
        
        //creation de une fonctionne qui permettra d'ajouter un livre pour l'auteur
        public function ajouteLivre(Livre $new_livre)
            {
                $this->_livres[] = $new_livre;
            }
        
        public function countLivres()
            {
                echo count($this->_livres);
            }

        //creation de le methode __toString() pour afficher les informations de l'objet
        public function __toString()
        {
                return  "<br>L'auteur dont il s'agit est ".$this->getPrenom()." ".$this->getNom().".<br>
                        Aujourd'hui nous avons".strval(count($this->getLivres()))." de ses livres!<br>";
        }    

        
        //methode pour afficher la bibliographie complet de l'auteur
        public function afficherBibliographie()
            {
                $result = "<h3>Livres de ".$this->_prenom." ".$this->_nom."</h3>";
                //Informations pour chaque livre
                foreach($this->_livres as $livre)
                    {
                        $result .= $livre->getTitre()." (".$livre->getDate_Parution().") : ".strval($livre->getPages())." pages / ".strval($livre->getPrix())." € <br>";
                    }
                //imprime de la bibliographie
                echo $result;
            }

    }
?>