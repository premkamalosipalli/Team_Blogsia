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

		
	function send_email($Email,$offername)
	{
		initEmail();
		$instance = get_instance();
		//Email content
		


		$htmlContent = '<h1>Blogsia Support</h1>';
		$htmlContent.="<h3>Your response for the offer :-".$offername."  is:- accepted by company</h3>";
		
		$instance->email->to($Email);
		$instance->email->from('blogsiaonweb@gmail.com','support@blogsia');
		$instance->email->subject('Blogsia Offer Response');
		$instance->email->message($htmlContent);

		if ($instance->email->send()) {
			return 1;
		}
		else
		{
			return 0;
		}

	}

?>
