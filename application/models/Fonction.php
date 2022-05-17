
<?php 

if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Fonction extends CI_Model{

    public function getListRechauffement(){
        $req = "select detail.titre,detail.resume,detail.photo,detail.URL,rechauffement.id,lieu,nom,rechauffement.date from rechauffement 
        LEFT JOIN detail on detail.idrechauffement=rechauffement.id
        join typeRechauffement on rechauffement.idType=typeRechauffement.id " ;
        $query=$this->db->query($req);
        $list = array();
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        return $list;
    }

    public function getDetail($id){
        $req = " select * from detail where idrechauffement=".$id ;
        $query=$this->db->query($req);
        $list = array();
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        return $list;
    }

    public function getUrl($id){
        $req = "select URL from detail where idrechauffement=".$id ;
        $query=$this->db->query($req);
        $list = array();
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        return $list;
    }
}    
?>