<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class OfferC extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		 if(!isset($this->session->userid))
	    {
	    	redirect("user/LoginC");
	    }
		$this->load->model("user/OfferM","om");
		$this->load->model("user/FeedM","fm");
	}
	public function index()
	{
		$temp1=array("f.userid"=>$this->session->userid);
		$data=array("offers"=>$this->om->getoffers(),
			"followers"=>$this->fm->followers($temp1) 
		);
		$this->load->view("user/offerview",$data);
	}
	
	public function loadDataById($id)
	{
		$adata=array("o.offerid"=>$id);
		$data=$this->om->selectofferDetails($adata);
		?>
		<div class="table-responseive">
			
		<?php
		foreach ($data as $o)
		 {
		?>
       <table style="color: black;font-size: 20px">
        <tr> 
        <td> Offer Title </td>
        <td style="padding-left:100px"> <?php echo $o->title?></td>	
        </tr>
        <tr> 
        <tr> 
        <td> Company Name </td>
        <td style="padding-left:100px"> <?php echo $o->companytitle?></td>	
        </tr>
        <tr> 
        <td> Offer Description </td>
        <td style="padding-left:100px"> <?php echo $o->description?></td>	
        </tr>
        <tr> 
        <td> Minimun Followers </td>
        <td style="padding-left:100px"> <?php echo $o->minfollowers?></td>	
        </tr>
        <tr> 
        <td> Maximum Followers </td>
        <td style="padding-left:100px"> <?php echo $o->maxfollowers?></td>	
        </tr>
        <tr> 
        <td> Minimun Price </td>
        <td style="padding-left:100px"> <?php echo $o->minprice?></td>	
        </tr>
         <tr> 
        <td> Maximum Price </td>
        <td style="padding-left:100px"> <?php echo $o->maxprice?></td>	
        </tr>
       </table>
					
		<?php
		}

	}

	public function response($oid)
	{
		$data=array("offerprice"=>$this->input->post('txtPrice'),
			"totalfollowers"=>$this->input->post('txtfollowers'),
			"message"=>$this->input->post('txtmsg'),
			"offerid"=>$oid,
			"userid"=>$this->session->userid
	);
		$this->om->addresponse($data);
	     redirect("user/OfferC");
	}
}

?>