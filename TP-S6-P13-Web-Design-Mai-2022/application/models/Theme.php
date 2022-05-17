<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

    class Theme extends CI_Model{
        private $id;
        private $nom;
       
        public function insertAdmin($data){
            $this->db->insert('Admin',$data);
            return true;
        }
        public function getAllTheme(){      
            $requete='select * from theme';
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