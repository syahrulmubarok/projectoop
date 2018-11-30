<?php

	function IsAdmin(){

	    $ci =& get_instance();

	    if($ci->session->userdata('IsAdmin')<>1){

       		//$ci->session->set_flashdata($ci->config->item('flash_name'), $ci->config->item('flash_login'));

			redirect('auth','refresh');

	    }

	}
?>