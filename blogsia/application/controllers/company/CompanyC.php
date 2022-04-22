<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyC extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if(isset($this->session->companyid))
		{
			redirect("company/OfferC");
		}
		$this->load->model("company/CompanyM","cm");
	}
	public function index()
	{
		$this->load->view("company/companylogin.php");
	}
	
	public function addCompany()
	{
		
		$data=array(
			"username"=>$this->input->post("txtcname"),
			"password"=>$this->input->post("txtpass"),
			"companytitle"=>$this->input->post("txttitle"),
			"website"=>$this->input->post("txtweb"),
			"logo"=>"",
			"email"=>$this->input->post("txtemail"),
			"Description"=>$this->input->post("txtdesp")
		);
		$img=$this->input->post('img');
		$image_array_1=explode(";",$img);
		$image_array_2=explode(",",$image_array_1[1]);
		$img1=base64_decode($image_array_2[1]);
		$imagename=$this->input->post('txtcname').".jpg";
		file_put_contents("upload/company/".$imagename,$img1);
		$data['logo']=$imagename;
		
		$this->cm->insertData($data);
		redirect("company/CompanyC");
	} 


	public function checkLogin()
	{
		$data=array(
			"username"=>$this->input->post("txtcname"),
			"password"=>$this->input->post("txtPass")
		);
		$temp=$this->cm->selectData($data);
		if(count($temp)>0)
		 {
		 	$_SESSION['companyid']=$temp[0]->companyid;
		 	$_SESSION['companyname']=$temp[0]->username;
		 	$_SESSION['companytitle']=$temp[0]->companytitle;
		 	$_SESSION['companylogo']=$temp[0]->logo;
		 	$_SESSION['companyemail']=$temp[0]->website;
		 	$_SESSION['companydesp']=$temp[0]->Description;
		 	 redirect("company/OfferC");
		 }else{
		 	$loginerror=array(
		 		"LoginErrMsg"=>"Invalid credentials"
		 	);
		 	//echo $_SESSION['compid']=$temp[0]->companyid;
		 	$this->load->view("company/companylogin",$loginerror);

		 }
	}
	public function process_data()
	{
		if(isset($_POST["txtUname"]))
		{
			 $uname = '';
			 $contact = '';
			 $email = '';
			 $password = '';
			 $bio = '';
			 $city = '';
			 $state = '';

			 $uname_error = '';
			 $contact_error = '';
			 $email_error = '';
			 $password_error = '';
			 $bio_error = '';
			 $city_error = '';
			 $state_error = '';
			 $captcha_error = '';

			//Username
		 	if(empty($_POST["txtUname"]))
		 	{
		  		$uname_error = 'Username is required';
			}
			else
			{
			  	$uname = $_POST["txtUname"];
			}

			//Password
			if(empty($_POST["txtPass"]))
			{
			  	$password_error = 'Password is required';
			}
			else
			{
			  	$password = $_POST["txtPass"];
			}

			//Email
			if(empty($_POST["txtEmail"]))
			{
			  	$email_error = 'Email is required';
			}
			else
			{
			  	if(!filter_var($_POST["txtEmail"], FILTER_VALIDATE_EMAIL))
			  	{
			   		$email_error = 'Invalid Email';
			  	}
			  	else
			  	{
			   		$email = $_POST["txtEmail"];
			  	}
			}

			//Contact
			if(empty($_POST["txtContact"]))
			{
			  	$contact_error = 'Contact is required';
			}
			else
			{
			  	$contact = $_POST["txtContact"];
			}

			//Bio
			if(empty($_POST["txtBio"]))
			{
			  	$bio_error = 'Bio is required';
			}
			else
			{
			  	$bio = $_POST["txtBio"];
			}

			//City
			if(empty($_POST["txtCity"]))
			{
			  	$city_error = 'City is required';
			}
			else
			{
			  	$city = $_POST["txtCity"];
			}

			//State
			if(empty($_POST["txtState"]))
			{
			  	$city_error = 'State is required';
			}
			else
			{
			  	$city = $_POST["txtState"];
			}

			//Re-captcha
			if(empty($_POST['g-recaptcha-response']))
			{
			  	$captcha_error = 'Captcha is required';
			}
			else
			{
			  	$secret_key = '6LdEHrsZAAAAAChKy3GGnAg_xEZQJUSNfYxu1eSS';

			  	$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);

			  	$response_data = json_decode($response);

				if(!$response_data->success)
				{
				   	$captcha_error = 'Captcha verification failed';
				}
			}

			if($uname_error == '' && $password_error == '' && $email_error == '' && $contact_error == '' && $bio_error == ''&& $city_error == '' && $state_error == '' && $captcha_error == '')
			{
			  	$data = array(
			   		'success'  => true
			  	);
			}
			else
			{
				//redirect('user/RegC/addUser');
				  $data = array(
				   'uname_error' => $uname_error,
				   'password_error' => $password_error,
				   'email_error'  => $email_error,
				   'contact_error' => $contact_error,
				   'bio_error' => $bio_error,	
				   'city_error' => $city_error,
				   'state_error' => $state_error,
				   'captcha_error'  => $captcha_error
				  );

				  echo json_encode($data);
		}	}

}
}
?>