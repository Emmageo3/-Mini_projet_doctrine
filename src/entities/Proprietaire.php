<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="proprietaire")
 */
    class Proprietaire
    {
           /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
        private $id_proprietaire;
         /**
     * @ORM\Column(type="string")
     */
        private $prenom;
        
         /**
     * @ORM\Column(type="string")
     */
        private $nom;
                
                
         /**
     * @ORM\Column(type="string")
     */
        private $lieuNaissance;
                
         /**
     * @ORM\Column(type="integer")
     */
        private $cni;
                
         /**
     * @ORM\Column(type="string")
     */
        private $adresse;
                
         /**
     * @ORM\Column(type="string")
     */
        private $contact;
        
     /**
     * @ORM\Column(type="string")
     */
        private $email;
        
         
        public function __construct(){

        }

        
        
        public  function getId_proprietaire(){
            return $this->id_proprietaire;
        }
        public  function setId_proprietaire($id_proprietaire){
            $this->id_proprietaire=$id_proprietaire;
        }

        public  function getPrenom(){
            return $this->prenom;
        }
        public  function setPrenom($prenom){
            $this->prenom=$prenom;
        }

        public  function getNom(){
            return $this->nom;
        }
        public  function setNom($nom){
            $this->nom=$nom;
        }

        public  function getLieuNaissance(){
            return $this->lieuNaissance;
        }
        public  function setLieuNaissance($lieuNaissance){
            $this->lieuNaissance=$lieuNaissance;
        }

        public  function getCni(){
            return $this->cni;
        }
        public  function setCni($cni){
            $this->cni=$cni;
        }

        public  function getAdresse(){
            return $this->adresse;
        }
        public  function setAdresse($adresse){
            $this->adresse=$adresse;
        }


        public  function getContact(){
            return $this->contact;
        }
        public  function setContact($contact){
            $this->contact=$contact;
        }

        public  function getEmail(){
            return $this->email;
        }
        public  function setEmail($email){
            $this->email=$email;
        }


    }
    

?>