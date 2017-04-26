<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Falleaf_test_otp extends User_Controller {
   var $log_path = 'API/APP_API', $log_name;
    public function __construct() {
        parent::__construct();
    }

    public function index() {
      echo "ok \n";      
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
