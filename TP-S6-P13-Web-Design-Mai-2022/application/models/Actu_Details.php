<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

    class Actu_Details extends CI_Model{
        private $id;
        private $titre;
        private $descript;
        private $contenus;
        private $nom_theme;
        private $nom_photo;
        private $daty;

        public function getAllActu(){      
            $requete='select * from actu_details';
            $query=$this->db->query($requete);
            $result=array();
            foreach($query->result_array() as $row)
            {
                $result[]=$row;		
            }	
            return $result;
        }

        public function getActu($id){
            $requete=sprintf("select * from actu_details where id=%d",$id);
            $query=$this->db->query($requete);
            return $query->row_array();
        }

        function inserer_produit(){
            $cat =''.$this->getIdCategorie().'';
            $name = ''.$this->getNom().'';
            $qtt = ''.$this->getQuantite().'';
            $pri = ''.$this->getPrix().'';
            $im = ''.$this->getImg().'';
            $req=("INSERT into produit (id_categorie,designation,quantite,prix_unitaire,image) VALUES ('".$cat."','".$name."','".$qtt."','".$pri."','".$im."')");
            $this->db->query($req);
    }
    
         function modifier_produit(){
            $newPrice = $this->getPrix();
            $idd = ''.$this->getId().'';
            $req=("UPDATE produit set prix_unitaire=$newPrice where id_produit=$idd");
            $this->db->query($req);
    }
         function supprimer_produit(){
            $ta= ''.$this->getId().'';
            $query =$this->db->query("DELETE from produit where id_produit='".$ta."'");
            
    }
    



        public function insertActu($data){
            $this->db->insert('actu',$data);
            return true;
        }
    

        public function getId(){
            return $this->id;
        }

        public function setId($i){
            return $this->id=$i;
        }

        public function getDaty(){
            return $this->daty;
        }

        public function setDaty($i){
            return $this->daty=$i;
        }


        public function getTitre(){
            return $this->titre;
        }

        public function setTitre($i){
            return $this->titre=$i;
        }

        public function getDescript(){
            return $this->descript;
        }

        public function setDescript($i){
            return $this->descript=$i;
        }
        public function getContenus(){
            return $this->contenus;
        }

        public function setContenus($i){
            return $this->contenus=$i;
        }


        public function getTheme(){
            return $this->nom_theme;
        }

        public function setTheme($i){
            return $this->nom_theme=$i;
        }

        public function getPhoto(){
            return $this->nom_photo;
        }

        public function setPhoto($i){
            return $this->nom_photo=$i;
        }



    }

?>