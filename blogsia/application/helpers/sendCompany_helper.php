<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	 function initEmail()
	{
		$instance = get_instance();
		$instance->load->library('email');
		$config=array(
			'protocol'=>'smtp',
			'smtp_host' =>'ssl://smtp.gmail.com',
			'smtp_port'=>465,
			'smtp_user'=>'teamblogsia@gmail.com',
			'smtp_pass'=>'@Teamblogsia2022',
			'mailtype'=>'html',
			'charset'=>'utf-8'
		);
		$instance->email->initialize($config); 
		$instance->email->set_mailtype("html");
		$instance->email->set_newline("\r\n");
	}

	 function random_pass($length)
	{
		$char='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVQXYZ';

		return substr(str_shuffle($char),0,$length);
	}
	
	function send_email($cid,$Email)
	{
		initEmail();
		$instance = get_instance();
		//Email content
		$pass=random_pass(10);


		$htmlContent = '<h1>Blogsia Support</h1>';
		$htmlContent.="<h3>Your new password  is:- ".$pass."</h3>";
		$htmlContent.="<p>Please change the temporary password after first login</p>";
		$instance->email->to($Email);
		$instance->email->from('blogsiaonweb@gmail.com','support@blogsia');
		$instance->email->subject('Blogsia Login Password');
		$instance->email->message($htmlContent);

		//Send email
		if ($instance->email->send()) {
			$instance->load->model("company/CompanyM","cm");
            $instance->cm->chngpass($cid,$pass);
			return 1;
		}
		else
		{
			return 0;
		}
	}

?>
