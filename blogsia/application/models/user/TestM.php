<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestM extends CI_Model
{
	
function update_counter($id)
    {
   
         //return current article views
        $this->db->where('id', urldecode($id));
        $this->db->select('visit'); $count = $this->db->get('users')->row();
        // then increase by one
        /*if (empty($count)) {
           redirect();
        }*/
        $this->db->where('id', urldecode($id));
        $this->db->set('visit', ($count->visit + 1));
        $this->db->update('users');   
          
       
        
    }
}
?>