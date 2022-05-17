<?php 

if(!defined('BASEPATH')) exit('No direct script acces allowed');


class Login_model extends CI_Model{

    public function login($nom,$mdp){
        $req = " select * from admin where nom='".$nom."' and mdp=sha1('".$mdp."')" ;
        $query=$this->db->query($req);
        $list = array();
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        if(count($list) >= 1){
            return 1;
        }
        return 0;
    }   
}  
