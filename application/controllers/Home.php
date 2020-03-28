<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('Home');
	}
	public function services()
	{
		$this->load->view('services');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function getRegister(){
		$data['username'] = $_POST['username'];
		$data['password'] = $_POST['password'];
		$data['password2'] = $_POST['password2'];
		$data['number'] = $_POST['number'];
		$data['address'] = $_POST['address'];
		$data['category'] = 'user';
		
		$this->load->model("User_Auth_model");
		$success = $this->User_Auth_model->insertIntoUser($data);

		if($success == 1){
			echo '<script>alert("User Registered!");'
                            . 'window.location.href="'.  base_url().'Home/login"</script>';
		}
	}
	public function viewLogin(){
		$data['username'] = $_POST['username'];
		$data['password'] = $_POST['password'];
		//echo $username;
		$this->load->model('User_Auth_model');
		$data = $this->User_Auth_model->checkLogin($data);
		if($data['category'] == 'user'){
			$_SESSION['username'] = $data['username'];
			echo '<script>alert("login Successful!");'.'window.location.href="'.base_url().'Customer"</script>';
		}
		elseif($data['category'] == 'admin'){
			$_SESSION['username'] = $data['username'];
			echo '<script>alert("login Successful!");'.'window.location.href="'.base_url().'Admin"</script>';
		}
		elseif($data['category'] == 'staff'){
			$_SESSION['username'] = $data['username'];
			echo '<script>alert("login Successful!");'.'window.location.href="'.base_url().'Staff"</script>';
		}
		else{
			echo '<script>alert("login unsuccessful!");'.'window.location.href="'.base_url().'Home/login"</script>';
		}
	}
	public function logout(){
		unset($_SESSION['username']);
		echo '<script>alert("logout Successful!");'.'window.location.href="'.base_url().'Home"</script>';
	}
	public function putContact(){
		$data['name'] = $_POST['name'];
		$data['email'] = $_POST['email'];
		$data['message'] = $_POST['message'];
		$this->load->model('User_Auth_model');
		$success = $this->User_Auth_model->insertIntoContact($data);

		if($success){
			echo '<script>alert("Form Submitted!");'.'window.location.href="'.base_url().'Home"</script>';	
		}

	}
}
