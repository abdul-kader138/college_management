<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/* * *****************Welcome.php**********************************
 * @product name    : School Management System Express
 * @type            : Class
 * @class name      : Welcome
 * @description     : This is default class of the application.  
 * @author          : OneClick Solution BD
 * @url             : http://www.oneclicksolutionbd.com
 * @support         : codelover138@gmail.com
 * @copyright       : OneClick Solution BD
 * ********************************************************** */

class Welcome extends CI_Controller {
    /*     * **************Function index**********************************
     * @type            : Function
     * @function name   : index
     * @description     : this function load login view page            
     * @param           : null; 
     * @return          : null 
     * ********************************************************** */
    public $global_setting = array();
    public function index() {
       
        if (logged_in_user_id()) {
            redirect('dashboard');
        }
                
        $this->global_setting = $this->db->get_where('global_setting', array('status'=>1))->row();
        $this->load->view('login');
    }

}
