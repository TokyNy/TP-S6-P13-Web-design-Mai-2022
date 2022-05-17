<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

    class Admin extends CI_Model{
        private $id;
        private $nom;
        private $mdp;

        public function checkLogin($n,$m){
            $ret = false;
            $this->setNom($n);
            $this->setMdp($m);
            $lg=''.$this->getNom().'';
            $ll=$this->getMdp();
            $query= $this->db->query("SELECT * FROM admin WHERE nom='".$n."' AND mdp= '".$m."'");
    
            if($query->result_array() != null)
            {
                $ret = true;
            }
            return $ret;
        }

        public function insertAdmin($data){
            $this->db->insert('Admin',$data);
            return true;
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

        public function getMdp(){
            return $this->mdp;
        }

        public function setMdp($i){
            return $this->mdp=$i;
        }

    }

?>