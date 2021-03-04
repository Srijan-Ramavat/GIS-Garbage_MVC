<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
    public function index(){
        $this->load->model('Staff_model');
        $data['staff'] = $this->Staff_model->fetchcomplaint();
        $this->load->view('SPanel/Index',$data);
    }
    public function uploadStaffFile(){
        if(isset($_FILES["image"]["name"])){
            $data['id'] = $_POST['id'];
            $data['image'] = $_FILES["image"]["name"];

            echo $data['image'];
            $this->load->model('Staff_model');
            $success = $this->Staff_model->uploadSolve($data);
            if($success == 1){
                    move_uploaded_file($_FILES["image"]["tmp_name"],"./assets/images/uploads/".$_FILES["image"]["name"]);
                    $suc = $this->Staff_model->updateStaff();
                    if($suc == 1){
                        echo '<script>alert("File Uploaded! Successful");'
                                . 'window.location.href="'.base_url().'Staff"</script>';
                    }
                    else{
                        echo '<script>alert("File Not Uploaded! Error Encountered");'
                                . 'window.location.href="'.base_url().'Staff"</script>';
                    }
            }
            else{
                    echo '<script>alert("File Not Uploaded! Error Encountered");'
                                . 'window.location.href="'.base_url().'Staff"</script>';
            }
        }else{
            echo 'no file uploaded';
        }
    }
}