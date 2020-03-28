<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index(){
        $this->load->view('APanel/Index');
    }
    public function status(){
        $this->load->model('Admin_model');
        $data['complaint'] = $this->Admin_model->fetchUserComplaints();
        $this->load->view('APanel/status',$data);
    }
    public function schedule(){
        $this->load->model('Admin_model');
        $data['complaint'] = $this->Admin_model->scheduleComplaints();
        $this->load->view('APanel/schedule',$data);
    }
    public function staff(){
        $this->load->model('Admin_model');
        $data['staff'] = $this->Admin_model->fetchStaff();
        $this->load->view('APanel/staff',$data);
    }
    public function addStaff(){
        $this->load->model('Admin_model');
        $data['complaint'] = $this->Admin_model->scheduleComplaints();
        $this->load->view('APanel/addStaff',$data);
    }
    public function UpdateStaff(){
        $id = $_GET['id'];
        $this->load->model('Admin_model');
        $data['member'] = $this->Admin_model->getStaff($id);
        $data['complaint'] = $this->Admin_model->scheduleComplaints();
        $this->load->view('APanel/updateStaff',$data);
    }
    public function stfupdate(){
        $data['id']=$_POST['id'];
        $data['username']=$_POST['username'];
        $data['email']=$_POST['email'];
        $data['password']=$_POST['password'];
        $data['address']=$_POST['address'];
        $data['cpnt_asgn']=$_POST['cpnt_asgn'];
        $this->load->model('Admin_model');
        $success = $this->Admin_model->updateStaff($data);
        if($success == 1){
            echo '<script>alert("Staff UPDATED! Successful");'
							. 'window.location.href="'.base_url().'Admin/staff"</script>';
        }else{
            echo "error";
        }
    }
    public function RemoveStaff(){
        $data['id'] = $_GET['id'];
        $this->load->model('Admin_model');
        $success = $this->Admin_model->deleteStaffFromDB($data);
        if($success == 1){
            echo '<script>alert("Staff Removed! Successful");'
							. 'window.location.href="'.base_url().'Admin/staff"</script>';
        }else{
            echo "error";
        }
    }
    public function stfadd(){
        $data['username'] = $_POST['username'];
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
        $data['address'] = $_POST['address'];
        $data['cpnt_asgn'] = $_POST['cpnt_asgn'];
        $this->load->model('Admin_model');
        $success = $this->Admin_model->addStaffIntoDB($data);
        if($success == 1){
            echo '<script>alert("Staff added! Successful");'
							. 'window.location.href="'.base_url().'Admin/staff"</script>';
        }else{
            echo "error";
        }
    }
    public function updateStatus(){
        $data['id'] = $_GET['id'];
        $this->load->model('Admin_model');
        $success = $this->Admin_model->StatusUpdate($data);
        if($success == 1){
            echo '<script>alert("Status Updated! Successful");'
							. 'window.location.href="'.base_url().'Admin/status"</script>';
        }else{
            echo '<script>alert("Status Not Updated! Unsuccessful");'
							. 'window.location.href="'.base_url().'Admin/status"</script>';
        }
    }
    public function revertStatus(){
        $data['id'] = $_GET['id'];
        $this->load->model('Admin_model');
        $success = $this->Admin_model->StatusRevert($data);
        if($success == 1){
            echo '<script>alert("Status Updated! Successful");'
							. 'window.location.href="'.base_url().'Admin/status"</script>';
        }else{
            echo '<script>alert("Status Not Updated! Unsuccessful");'
							. 'window.location.href="'.base_url().'Admin/status"</script>';
        }
    }
}