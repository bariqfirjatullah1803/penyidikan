<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        $password = password_hash('admin',PASSWORD_DEFAULT);
        echo $password;
    }

}

/* End of file Auth.php */
