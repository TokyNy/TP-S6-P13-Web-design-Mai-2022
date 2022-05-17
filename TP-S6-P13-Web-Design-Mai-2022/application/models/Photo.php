<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

    class Photo extends CI_Model{
        private $id;
        private $nom;
       
        public function insertPhoto($data){
            $this->db->insert('Photo',$data);
            return true;
        }
        public function getAllPhoto(){      
            $requete='select * from photo';
            $query=$this->db->query($requete);
            $result=array();
            foreach($query->result_array() as $row)
            {
                $result[]=$row;		
            }	
            return $result;
        }

    

        public function getId(){
            return $this->id;
        }

        public function setId($i){
            return $this->id=$i;
        }

        public function getNom(){
            return $this->nom;
        }

        public function setNom($i){
            return $this->nom=$i;
        }

    }

?>