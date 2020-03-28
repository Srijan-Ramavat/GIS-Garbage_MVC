<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_model Extends CI_Model{
    function __construct(){

    }
    public function fetchcomplaint(){
        $user = $_SESSION['username'];

        $sql = $this->db->query("SELECT * from staff where username = '$user'")->result_array();
        foreach($sql as $val){
            $complaint_id = $val['cpnt_asgn'];
        }
        $mysql = $this->db->query("SELECT * from complaint where id = '$complaint_id'")->result_array();
        return $mysql;
    }
    public function uploadSolve($d){
        $id = $d['id'];
        $image = $d['image'];
        $user = $_SESSION['username'];
        $sql1 = $this->db->query("SELECT * from staff where username = '$user'")->result_array();
        foreach($sql1 as $val){
            $staff_id = $val['id'];
        }
        $sql = $this->db->query("UPDATE complaint set solve = '$image',staff_assigned = '$staff_id' where id = '$id' ");
        if($sql){
            return 1;
        }else{
            return 0;
        }
    }
    public function updateStaff(){
        $user = $_SESSION['username'];
        $sql = $this->db->query("UPDATE staff set cpnt_asgn = NULL where username = '$user'");
        if($sql){
            return 1;
        }else{
            return 0;
        }
    }
}