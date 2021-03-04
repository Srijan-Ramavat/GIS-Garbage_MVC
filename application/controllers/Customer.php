<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
    public function index(){
        $this->load->view('CPanel/CPIndex');
    }
    public function upload(){
        $this->load->model('Customer_model');
        if($_FILES["image"]["name"]){
            $data['user'] = $_SESSION['username'];
            $data['address'] = $_POST['address'];
            $data['status'] = 0;
            //image
            $data['image'] = $_FILES["image"]["name"];
            $success = $this->Customer_model->doUpload($data);
            if($success == 1){
                move_uploaded_file($_FILES["image"]["tmp_name"],"./assets/images/uploads/".$_FILES["image"]["name"]);
                echo '<script>alert("File Uploaded! Successful");'
							. 'window.location.href="'.base_url().'Customer/status"</script>';
            }
            else{
                echo '<script>alert("File Not Uploaded! Error Encountered");'
							. 'window.location.href="'.base_url().'Customer/uploadPage"</script>';
            }
        }
        else{
            echo 'no file uploaded';
        }
    }
    public function uploadPage(){
        $this->load->view('CPanel/CPupload');    
    }
    public function status(){
        $this->load->model('Customer_model');
        $data['complaint'] = $this->Customer_model->fetchUserComplaints();
        $this->load->view('CPanel/CPstatus',$data);    
    }
}