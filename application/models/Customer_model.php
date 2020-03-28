<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model Extends CI_Model{
    function __construct(){

    }
    public function fetchUserComplaints(){
        $user = $_SESSION['username'];
        $sql = $this->db->query("SELECT * from complaint where user = '$user'");
        if($sql->num_rows()){
            return $sql->result_array();
        }
    }
    public function doUpload($d){
        $user = $d['user'];
        $image = $d['image'];
        $status = $d['status'];
        $address = $d['address'];

        $sql = $this->db->query("INSERT into complaint(user,image,solve,status,address) values('$user','$image','$image','$status','$address')");
        if($sql == TRUE){
            return 1;
        }else{
            return 0;
        }
    }
}