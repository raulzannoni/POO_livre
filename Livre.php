<?php

//creation de la class livre
class Livre{

    //attributs privées de la class livre
    private string $_titre;
    private int $_pages;
    private string $_date_parution;
    private float $_prix;
    private Auteur $_auteur;

    //setter pour chaque attribute
    public function setTitre($titre)
        {
            $this->_titre = $titre;
        }
    public function setPages($pages)
        {
            $this->_pages = $pages;
        }
    public function setDate_Parution($date_parution)
        {
            $this->_date_parution = $date_parution;
        }
    public function setPrix($prix)
        {
            $this->_prix = $prix;
        }
    public function setAuteur($auteur)
        {
            $this->_auteur = $auteur;
        }

    
    //getter pour chaque attribute
    public function getTitre()
        {
            return $this->_titre;
        }
    public function getPages()
        {
            return $this->_pages;
        }
    public function getDate_Parution()
        {
            return $this->_date_parution;
        }
    public function getPrix()
        {
            return $this->_prix;
        }
    public function getAuteur()
        {
            return $this->_auteur;
        }

    //creation de le constructor livre
    public function __construct(string $titre, int $pages, string $date_parution, float $prix, Auteur $auteur)
    {
        //definition de la liste de le constructor
        $this->_titre = $titre;
        $this->_pages = $pages;
        $this->_date_parution = $date_parution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        //methode pour ajouter les livre dans l'array de livre l'auteur 
        $this->_auteur->ajouteLivre($this);
    }


    



}









?>