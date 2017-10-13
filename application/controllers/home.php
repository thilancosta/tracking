<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {


    public function index()
    {
        $this->load->view('home');
    }

    public function loadAddPerson()
    {
        $this->load->view('addPerson');
    }
}
