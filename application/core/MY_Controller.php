<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  MY_Controller  extends  CI_Controller {

    var $_is_mobile;

    function __construct()
    {
        parent::__construct();
        $this->load->library('user_agent');

        $this->_is_mobile = $this->agent->is_mobile();
    }
    
    function is_logged_in()
    {
        if(!is_membership())
        {
            $url = 'login?url='.uri_string();
            $url .= (!empty($_SERVER['QUERY_STRING'])) ? '?'.$_SERVER['QUERY_STRING'] : '';
            
            redirect($url);
            die();
        }
    }
    
    function is_login()
    {
        if(is_membership())
        {
            $this->_redirect_member();
        }
    }
    
    function _redirect_myproject()
    {
        redirect('project/my');
    }
    
    function _redirect_member()
    {
        redirect('member');
    }
    
   function _set_token($user_id,$code)
    {
        return md5($user_id ."#". $code ."#". _xml('generate_token_key'));
    }

    function  _set_code($length)
    {
        $characters = "asdfghjklpoiuytrewqzxcvbnmasdfghjklqwertyuiopzxcvbnm";
        $string ='';
        for ($p = 0; $p < $length; $p++) {
                $string .= $characters[mt_rand(0, strlen($characters))];
        }

        return $string;
    }

    function _encode_password($string)
    {
        $string .= _xml('encryption_key');
	// Return the SHA-1 encryption
        return sha1($string);
    }
    
    function set_session($data)
    {
        $this->session->set_userdata($data);
    }
    
    function unset_session($data)
    {
        $this->session->unset_userdata($data);
    }
    
    function is_filter_rule($administrator=false)
    {
        #Administrator dan Manajemen tidak perlu di filter
        if($administrator){
            $out = (rule() == get_rule('rule_administrator')) ? FALSE : TRUE;
        }else{
            $out = (rule() == get_rule('rule_administrator') or rule() == get_rule('rule_hrd')) ? FALSE : TRUE;
        }
        return $out;
    }
    
    function is_allow_ip()
    {
        $ip = $this->input->ip_address();
        $ip_office = '111.94.57';//IP untuk First Media (Kantor DS)
        //$ip_office = '139.193.81';
        $data_ip = setting('punch_ip');
        $is_allow = TRUE;
        
        if(!empty($data_ip))
        {
            $is_allow = FALSE;
            $ips = explode(",", $data_ip);
            if(count($ips)){
                if(in_array($ip, $ips)){
                    $is_allow = TRUE;
                }
				if (strpos($data_ip,$ip_office) !== false){
					$is_allow = TRUE;
				}
            }
        }
        
        return $is_allow;
    }


}