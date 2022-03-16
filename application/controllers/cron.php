<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Cron extends MY_Controller {



    function Cron()

    {

        parent::__construct();

        $this->load->model('teamlist_mod');

        $this->load->model('today_mod');

        $this->load->model('user_mod');

        $this->load->model('ende_mod');

        $this->clear_cache();

    }

    function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    } 

    function cron_ip()
    {
        // setting('punch_in');
        $ip = $this->input->ip_address(); 
        $data=array(
        'value'     => $ip
            );
            
        $array = array('key' => 'punch_ip');

        $this->db->where($array);
        $this->db->update('ds_settings', $data);
    }

}