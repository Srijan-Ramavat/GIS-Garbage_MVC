<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Auth_model Extends CI_Model{
    function __construct(){

    }
    public function insertIntoUser($d){
        $u = $d['username'];
		$p = $d['password'];
		$p2 = $d['password2'];
		$n = $d['number'];
        $address = $d['address'];
        $cat = $d['category'];
        $success = $this->db->query("INSERT into user(username,password,number,address,category) values('$u','$p','$n','$address','$cat')");
        if($success)
        {
            return 1;
        }
        else{
            return 0;
        }
    }
    public function checkLogin($d){
        $u = $d['username'];
        $p = $d['password'];
        $rows = $this->db->query('SELECT username,password,category from user UNION select username,password,category from admin UNION select username,password,category from staff')->result_array();
        foreach($rows as $val){
            $udb = $val['username'];
            $pdb = $val['password'];
            $cdb=$val['category'];
            //echo $udb."<br>".$pdb;
            if($udb == $u && $pdb == $p){
                $data['username']=$udb;
                $data['password']=$pdb;
                $data['category']= $cdb;
                return $data;
            }
        }
        return 0;
    }
    public function insertIntoContact($d){
        $n = $d['name'];
        $e = $d['email'];
        $m = $d['message'];

        $success = $this->db->query("INSERT into contdetail(name,email) values('$n','$e')");
        if($success){
            $success = $this->db->query("INSERT into contmessage(message) values('$m')");
            if($success){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }
        else{
            return FALSE;
        }
    }
}