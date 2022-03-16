<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

    function Home()
    {
        parent::__construct();
        
    }

    function index()
    {
    	$this->load->view('home');
    }
}