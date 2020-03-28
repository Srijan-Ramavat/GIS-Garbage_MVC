<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model Extends CI_Model{
    function __construct(){

    }
    public function fetchUserComplaints(){
        $sql = $this->db->query("SELECT * from complaint");
        if($sql->num_rows()){
            return $sql->result_array();
        }
    }
    public function fetchStaff(){
        $sql = $this->db->query("SELECT * from staff");
        if($sql->num_rows()){
            return $sql->result_array();
        }
    }
    public function getStaff($id){
        $sql = $this->db->query("SELECT * from staff where id = '$id'");
        if($sql->num_rows() > 0){
            return $sql->result_array();
        }
    }
    public function updateStaff($data){
        $id = $data['id'];
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];
        $address = $data['address'];
        $cpnt_asgn = $data['cpnt_asgn'];
        $suc = $this->db->query("UPDATE staff set cpnt_asgn = '$cpnt_asgn' , username = '$username' , email = '$email' , password = '$password' , address = '$address' where id = '$id'");
        if($suc){
            return 1;
        }
        else{
            return 0;
        }
    }
    public function scheduleComplaints(){
        $sql = $this->db->query("SELECT * from complaint ORDER BY timestamp asc");
        if($sql->num_rows()){
            return $sql->result_array();
        }
    }
    public function addStaffIntoDB($d){
        $username = $d['username'];
        $email = $d['email'];
        $password = $d['password'];
        $address = $d['address'];
        $cpnt_asgn = $d['cpnt_asgn'];
        $suc = $this->db->query("INSERT into staff(username,email,password,address,cpnt_asgn) values('$username','$email','$password','$address','$cpnt_asgn')");
        if($suc){
            return 1;
        }
        else{
            return 0;
        }
    }
    public function deleteStaffFromDB($d){
        $id = $d['id'];
        $suc = $this->db->query("DELETE from staff where id = '$id'");
        if($suc){
            return 1;
        }
        else{
            return 0;
        }
    }
    public function StatusUpdate($d){
        $id = $d['id'];
        $sts = 0;
        $sql = $this->db->query("SELECT status from complaint where id = '$id'");
        if($sql->num_rows() > 0){
            $rows = $sql->result_array();
            foreach($rows as $val){
                $sts = $val['status'];
            }
        }
        $sts = $sts+1;
        $suc = $this->db->query("UPDATE complaint set status = '$sts' where id = '$id'");
        if($suc){
            return 1;
        }
        else{
            return 0;
        }
    }
    public function StatusRevert($d){
        $id = $d['id'];
        $sts = 0;
        $sql = $this->db->query("SELECT status from complaint where id = '$id'");
        if($sql->num_rows() > 0){
            $rows = $sql->result_array();
            foreach($rows as $val){
                $sts = $val['status'];
            }
        }
        $sts = $sts-1;
        $suc = $this->db->query("UPDATE complaint set status = '$sts' where id = '$id'");
        if($suc){
            return 1;
        }
        else{
            return 0;
        }
    }
}